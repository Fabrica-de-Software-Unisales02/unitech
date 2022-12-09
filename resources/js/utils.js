
function toggleLoader() {
    console.log('loader')
    let loader = document.querySelector('.loader');

    loader.classList.toggle('d-none');

}

function appendOptions(input, route) {
    $.ajax({
        url: `/api/${route}`,
        dataType: "json"
    }).then(data => {
        let items = data.current_page ? data.data : data;

        items.forEach(item => {

            let option = document.createElement('option');

            option.value = item.id;
            option.append(item.titulo);
            if (item.periodos) option.setAttribute('periodos', item.periodos);

            input.append(option);
        });
    });

}

// Mensagens Toast (componente sublateral)


function showToast (mensagem, status) {
    appendToast(mensagem, status).then(element => {
        const toast = new bootstrap.Toast(element);
        toast.show();
    });
}


function appendToast(mensagem, status) {

    return new Promise((resolve, reject) => {
        let toast = document.createElement('div');

        toast.classList.add('toast', `bg-${status}`);
        toast.id = 'liveToast';
        toast.role = "alert";
        toast.setAttribute('aria-live', "assertive");
        toast.setAttribute('aria-atomic', "true");

        toast.innerHTML = `
                    <div class="toast-header  bg-dark">
                        <strong class="me-auto">Unitech</strong>
                        <small>Agora</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${mensagem}
                    </div>`;

        document.querySelector('.toast-container').append(toast);

        resolve(toast);
    })
}

export {toggleLoader, showToast, appendOptions};
