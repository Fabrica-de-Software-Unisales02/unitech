
require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import App from './components/App';

import Cookie from 'js-cookie';
import axios from 'axios';

import routes from './router/routes';

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    components: {App},
    router: new VueRouter(routes)
});

const loginForm = document.querySelector('#loginForm');

if(loginForm) loginForm.addEventListener('submit', e => {
    e.preventDefault();

    let payload = {
        email: document.querySelector('#email').value,
        password: document.querySelector('#password').value
    }

    axios.post('/api/login', payload)
        .then(data => {
            console.log(data);
            Cookie.set("access_token", data.data.token);
            window.location.href = '/admin/home';
            // if(!hideSuccessMessage) this.showToast(data.data.message, "success");
            // callback(data.data)
        })
        .catch(error => {
            console.log(error);
            alert("Não conseguimos autenticar seus dados alguma coisa ta errada eu acho");
            // if(!hideErrorMessage) this.showErrors(error.response.data)
            // if(errorHandler) errorHandler(error.response.data)
        })
})
