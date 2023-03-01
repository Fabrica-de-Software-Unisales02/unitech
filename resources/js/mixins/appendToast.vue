<script>
export default{methods: {

    showToast(mensagem, status, icon = null) {
        this.appendToast(mensagem, status, icon).then(
            (element) => {
                const toast = new bootstrap.Toast(element);
                toast.show();
            }
        );
    },

    getEmoji(emojis) {
        let indice = Math.floor(Math.random() * emojis.length);
        return emojis[indice];
    },

    displayErrors(errors) {
        Object.entries(errors).forEach(error => {
            this.showToast(error[1], "danger", 'exclamation-triangle-fill');
        });
    },

    appendToast(mensagem, status, icon) {
        return new Promise((resolve, reject) => {
            let toast = document.createElement("div");

            toast.classList.add("toast");
            toast.id = "liveToast";
            toast.role = "alert";
            toast.setAttribute("aria-live", "assertive");
            toast.setAttribute("aria-atomic", "true");

            icon = icon ? `<i class="bi bi-${icon} text-${status}"></i>  ` : '';

            toast.innerHTML = `
            <div class="toast-header  bg-${status} text-light">
                <strong class="me-auto text-header">TargetManager</strong>
                <small>Agora</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ${icon}${mensagem}
            </div>`;

            document.querySelector(".toast-container").append(toast);

            resolve(toast);
        });
    }
}}
</script>
