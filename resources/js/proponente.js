import { appendOptions } from './utils';
import { toggleLoader } from './utils';
import { showToast } from './utils';

import { server } from './config';

init_colaborador(server);


function init_colaborador(server) {

    const form = document.querySelector('#f_proponente');

    appendOptions(form.area, 'areaAtuacao', server);

    form.addEventListener('submit', e => {
        e.preventDefault();
        $('.is-invalid').removeClass('is-invalid');
        toggleLoader();

        let type = $('[name="form-type"]').val();
        let campos = $('#f_proponente').serializeArray();
        let data = {};
        $.map(campos, function(n, i){
            if(n['name'] !== 'form-type'){
                data[n['name']] = n['value'];
            } else {
                type = n['value'];
                console.log(n['value']);
            }
        });

        console.log(type);

        $.ajax({
            url: `http://${server}/api/${type}`,
            method: "post",
            data: data,
            dataType: "json"
        }).then(data => {
            $('#f_proponente')[0].reset();
            toggleLoader();

            showToast('Cadastro Concluído com sucesso', 'success');
            // appendToast('Cadastro Concluído com sucesso', 'success').then(element => {
            //     const toast = new bootstrap.Toast(element);
            //     toast.show();
            // });
        }).catch(data => {
            toggleLoader();

            data = data.responseJSON.errors;

            if (Object.keys(data).length) {
                Object.entries(data).forEach(error => {
                    console.log(error)
                    showToast(error[1], 'danger')
                    $(`[name="${error[0]}"`).addClass('is-invalid');
                });
                // for (let erro in data) {
                //     showToast(erro, 'danger')
                //     $(`[name="${erro}"`).addClass('is-invalid');
                // }
            } else {
                showToast('Algo de errado não está certo', 'danger');
                // appendToast('Algo de errado não está certo', 'danger').then(element => {
                //     const toast = new bootstrap.Toast(element);
                //     toast.show();
                // });
            }
        });
    });

}

$('[name="form-type"]').change(function(e) {
    let hiddenables = $('[hiddenable]');
    hiddenables.prop( "disabled", true );
    hiddenables.addClass( "hidden");

    $(`[${e.target.value}]`).prop( "disabled", false );
    $(`[${e.target.value}]`).removeClass( "hidden");
});
