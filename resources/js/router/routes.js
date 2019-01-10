import Vue from 'vue'
import VueRouter from 'vue-router';

import Login from "../components/Auth/Login";
import Gestion from "../components/Gestion/Gestion";
import Principal from "../components/Horario/Principal";


Vue.use(VueRouter);


const router = new VueRouter({
    routes: [
        {
            path:'/',
            component: Login
        },
        {
            path:'/gestion/',
            component: Gestion
        },
        {
            path:'/horario/',
            component: Principal
        }
    ]
});

router.beforeEach((to, from, next) => {
    next();
});

export default router;