import { appendOptions } from './utils';
import { toggleLoader } from './utils';
import { showToast } from './utils';

import { server } from './config';

init_estudante(server);

function init_estudante(server) {

    const form = document.querySelector('#f_estudante');

    appendOptions(form.curso, 'cursos', server);
    appendOptions(form.projeto, 'projeto', server);
    appendOptions(form.area_interesse, 'areaAP', server);

    form.addEventListener('submit', e => {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid');
        toggleLoader();

        let data = {
            "curso": form.curso.value,
            "nome_completo": form.nome_completo.value,
            "email": form.email.value,
            "endereco": form.endereco.value,
            "registro_academico": form.registro_academico.value,
            "periodo": form.periodo.value,
            "forma_integracao": form.forma_integracao.value,
            "area_interesse": form.area_interesse.value,
            "projeto": form.projeto.value
        }

        $.ajax({
            url: `http://${server}/api/estudante`,
            method: "post",
            data: data,
            dataType: "json"
        }).then(data => {
            toggleLoader();
            $('#f_estudante')[0].reset();

            showToast('Cadastro Concluído com sucesso', 'success');
            // appendToast('Cadastro Concluído com sucesso', 'success').then(element => {
            //     const toast = new bootstrap.Toast(element);
            //     toast.show();
            // });
        }).catch(data => {
            toggleLoader();
            data = data.responseJSON.errors;
            if (Object.keys(data).length) {
                for(let erro in data) {
                    document.querySelector(`#${erro}`).classList.add('is-invalid');
                }
            } else {
                showToast('Cadastro Concluído com sucesso', 'success');
                // appendToast('Algo de errado não está certo', 'danger').then(element => {
                //     const toast = new bootstrap.Toast(element);
                //     toast.show();
                // });
            }
        });
    });

    form.curso.addEventListener('change', e => {
        let periodos = form.curso.options[form.curso.selectedIndex].getAttribute('periodos');
        form.periodo.setAttribute('max', periodos);
        if(form.periodo.value > periodos) form.periodo.value = periodos;
    });
}
