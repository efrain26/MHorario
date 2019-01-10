import Vue from 'vue'
import VueRouter from 'vue-router';

import Login from "../components/Auth/Login";
import Gestion from "../components/Gestion/Gestion";
import Principal from "../components/Horario/Principal";
import Materias from "../components/Horario/Materias";
import Maestros from "../components/Gestion/Maestros";


Vue.use(VueRouter);


const router = new VueRouter({
    mode:'history',
    routes: [
        {
            path:'/',
            component: Login
        },
        {
            path:'/gestion/',
            name:'gestion',
            component: Gestion
        },
        {
            path:'/gestion/maestros',
            name:'gestion.maestros',
            component: Maestros
        },
        {
            path:'/home/',
            component: Principal
        },
        {
            path:'/home/crear/',
            name:'home.crear',
            component: Materias
        }
    ]
});

router.beforeEach((to, from, next) => {
    next();
});

export default router;