import Vue from 'vue'
import VueRouter from 'vue-router';

import Login from "../components/Auth/Login";
import Gestion from "../components/Gestion/Gestion";
import Maestros from "../components/Gestion/Maestros";


Vue.use(VueRouter);


const router = new VueRouter({
    routes: [
        {
            path:'/',
            component: Login
        },
        {
            path:'/gestion',
            component: Gestion,
            children:[
                {
                    path:'/maestros',
                    component: Maestros
                },
                {
                    path:'/administradores',
                    component: Materias
                }
            ]
        }
    ]
});

router.beforeEach((to, from, next) => {
    next();
});

export default router;