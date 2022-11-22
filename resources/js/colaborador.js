import { appendOptions } from './utils';
import { toggleLoader } from './utils';
import { showToast } from './utils';

import { server } from './config';

init_colaborador(server);


function init_colaborador(server) {

    const form = document.querySelector('#f_colaborador');

    appendOptions(form.projeto, 'projeto', server);
    appendOptions(form.area_interesse, 'areaAP', server);

    form.addEventListener('submit', e => {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid');
        toggleLoader();

        let data = {
            "nome_completo": form.nome_completo.value,
            "email": form.email.value,
            "endereco": form.endereco.value,
            "telefone": form.telefone.value,
            "email_profissional": form.email_profissional.value,
            "site": form.site.value,
            "instagram": form.instagram.value,
            "facebook": form.facebook.value,
            "linkedin": form.linkedin.value,
            "responsavel": form.responsavel.value,
            "forma_integracao": form.forma_integracao.value,
            "area_interesse": form.area_interesse.value,
            "projeto": form.projeto.value
        }

        $.ajax({
            url: `http://${server}/api/colaborador`,
            method: "post",
            data: data,
            dataType: "json"
        }).then(data => {
            toggleLoader();
            $('#f_colaborador')[0].reset();

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
                showToast('Algo de errado não está certo', 'danger');
            }
        });
    });
}
