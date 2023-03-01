import Home from '../pages/Home';
import Projetos from '../pages/Projetos';
import Estudantes from '../pages/Estudantes';
import Empresas from '../pages/Empresas';
import NotFound from '../pages/NotFound';

import Guard from '../services/middleware';

export default {
    mode: 'history',
    linkActiveClass: 'fw-bolder text-decoration-underline',

    routes: [
        {
            path: '/admin/home',
            name: 'home',
            component: Home,
            beforeEnter: Guard.auth
        },
        {
            path: '/admin/projetos',
            name: 'projetos',
            component: Projetos,
            beforeEnter: Guard.auth
        },
        {
            path: '/admin/estudantes',
            name: 'estudantes',
            component: Estudantes,
            beforeEnter: Guard.auth
        },
        {
            path: '/admin/empresas',
            name: 'empresas',
            component: Empresas,
            beforeEnter: Guard.auth
        },
        {
            path: '/admin/*',
            name: 'notfound',
            component: NotFound,
        },
    ]
}
