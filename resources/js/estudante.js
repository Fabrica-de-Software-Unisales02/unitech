import { appendOptions } from './utils';
import { toggleLoader } from './utils';
import { showToast } from './utils';


init_estudante();

function init_estudante() {

    const form = document.querySelector('#f_estudante');

    appendOptions(form.curso, 'cursos');
    appendOptions(form.projeto, 'projeto');
    appendOptions(form.area_interesse, 'areaAP');

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
            url: `/api/estudante`,
            method: "post",
            data: data,
            dataType: "json"
        }).then(data => {
            toggleLoader();
            $('#f_estudante')[0].reset();

            showToast('Cadastro Concluído com sucesso', 'success');
        }).catch(data => {
            toggleLoader();
            data = data.responseJSON.errors;
            if (Object.keys(data).length) {
                Object.entries(data).forEach(error => {
                    console.log(error)
                    showToast(error[1], 'danger')
                    $(`[name="${error[0]}"`).addClass('is-invalid');
                });
            } else {
                showToast('Cadastro Concluído com sucesso', 'success');
            }
        });
    });

    form.curso.addEventListener('change', e => {
        let periodos = form.curso.options[form.curso.selectedIndex].getAttribute('periodos');
        form.periodo.setAttribute('max', periodos);
        if(form.periodo.value > periodos) form.periodo.value = periodos;
    });
}
