<template>
    <nav
        :class="[
            'sidebar bg-primary m-2 rounded-2 p-2',
            {'active': active}
        ]"
    >
        <i @click="toggle"
            :class="[
                'toggle-sidebar bi pointer fs-1 px-2 text-dark position-absolute top-0 start-100 d-none bg-light rounded-5',
                active ? 'bi-x' : 'bi-list'
            ]"
        ></i>
        <ul class="nav flex-column">
            <li>
                <router-link
                    :to="{ name: 'home' }"
                    class="nav-link text-dark d-flex align-items-center"
                >
                    <i
                        class="bi bi-house me-2"
                        style="font-size: 1.5rem"
                    ></i>
                    Início
                </router-link>
            </li>
            <li>
                <router-link
                    :to="{ name: 'projetos' }"
                    class="nav-link text-dark d-flex align-items-center"
                >
                    <i
                        class="bi-plus-circle me-2"
                        style="font-size: 1.5rem"
                    ></i>
                    Projetos
                </router-link>
            </li>
            <li>
                <router-link
                    :to="{ name: 'estudantes' }"
                    class="nav-link text-dark d-flex align-items-center"
                >
                    <i
                        class="bi-book-half me-2"
                        style="font-size: 1.5rem"
                    ></i>
                    Estudantes
                </router-link>
            </li>
            <li>
                <router-link
                    :to="{ name: 'empresas' }"
                    class="nav-link text-dark d-flex align-items-center"
                >
                    <i
                        class="bi-building me-2"
                        style="font-size: 1.5rem"
                    ></i>
                    Estudantes
                </router-link>
            </li>
            <li v-if="token">
                <a @click="logout" class="nav-link text-dark d-flex align-items-center pointer">
                    <i
                        class="bi bi-box-arrow-left me-2"
                        style="font-size: 1.5rem"
                    ></i>
                    Logout
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
import Cookie from "js-cookie";

export default {
    data() {
        return {
            token: Cookie.get("token"),
            active: false,
        }
    },

    methods: {

        logout() {
            Cookie.remove('access_token');
            window.location.assign('/login');
        },


        toggle() {
            this.active = !this.active;
        }
    },
};
</script>
