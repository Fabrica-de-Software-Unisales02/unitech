<script>
import Cookie from "js-cookie";
import AppendToast from "./appendToast.vue";
import axios from 'axios';

export default {
    data() {
        return{
            access_token: "",
        }
    },

    created() {
        this.access_token = Cookie.get("access_token");
        this.language = Cookie.get("language") ?? navigator.language;

        axios.defaults.baseURL = `/api/`;
        axios.defaults.headers = {
            "Authorization" : "Bearer " + this.access_token,
            "Accept" : "application/json",
            "Accept-Language" : this.language
        };
    },

    methods: {

        del(url, callback, errorHandler, hideSuccessMessage) {
            axios.delete(url)
            .then(data => {
                if(!hideSuccessMessage) this.showToast(data.data.message, "success");
                callback(data.data);
            })
            .catch(error => {
                console.log(error);
                if(!hideSuccessMessage) this.showErrors(error.response.data)
                if(errorHandler) errorHandler(error.response.data)
            })
        },

        post(url,payload, callback, errorHandler, hideSuccessMessage, hideErrorMessage) {
            axios.post(url, payload)
                .then(data => {
                    if(!hideSuccessMessage) this.showToast(data.data.message, "success");
                    callback(data.data)
                })
                .catch(error => {
                    console.log(error);
                    if(!hideErrorMessage) this.showErrors(error.response.data)
                    if(errorHandler) errorHandler(error.response.data)
                })
        },

        patch(url,payload, callback, errorHandler, hideSuccessMessage) {
            axios.patch(url, payload)
                .then(data => {
                    if(!hideSuccessMessage) this.showToast(data.data.message, "success");
                    callback(data.data)
                })
                .catch(error => {
                    console.log(error);
                    errorHandler ? errorHandler(error.response.data) : this.showErrors(error.response.data);
                })
        },

        put(url,payload, callback, errorHandler, hideSuccessMessage, hideErrorMessage) {
            axios.put(url, payload)
                .then(data => {
                    this.showToast(data.data.message, "success");
                    callback(data.data)
                })
                .catch(error => {
                    console.log(error);
                    if(!hideErrorMessage) this.showErrors(error.response.data)
                    if(errorHandler) errorHandler(error.response.data)
                })
        },

        get(url, callback, errorHandler, hideSuccessMessage, hideErrorMessage) {
            axios.get(url)
                .then(data => {
                    callback(data.data);
                    if(!hideSuccessMessage) this.showToast(data.data.message, "success");
                })
                .catch(error => {
                    console.log(error);
                    if(!hideErrorMessage) this.showErrors(error.response.data)
                    if(errorHandler) errorHandler(error.response.data)
                })
        },


        showErrors(data) {
            if(data.message) {
                this.showToast(data.message, "danger", 'exclamation-triangle-fill');
            }
            if(data.errors) {
                this.displayErrors(data.errors);
            }
        },

        reloadHeaders() {
            axios.defaults.headers = {
                "Authorization" : "Bearer " + this.token,
                "Accept" : "application/json",
                "Accept-Language" : this.$i18n.locale
            };
        }
    },

    mixins: [AppendToast]
}
</script>
