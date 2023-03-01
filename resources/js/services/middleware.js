import Cookie from "js-cookie";

export default {
    auth(to, from, next) {
        const token = Cookie.get('access_token');

        if(!token) {
            next('/login')
        }

        fetch('/api/me', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + token,
            }
        })
        .then(response => response.json())
        .then (data => {
            if(!data.name) {
                next('/login')
            }
        })

        next();
    }
}
