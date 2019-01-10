import Vue from 'vue'
import VueRouter from 'vue-router';

import Login from "../components/Auth/Login";
import Gestion from "../components/Gestion/Gestion";
import Maestros from "../components/Gestion/Maestros";
import Principal from "../components/Horario/Principal";
import HorarioFinal from "../components/Horario/HorarioFinal";
import Materias from "../components/Horario/Materias";
import Verificar from "../components/Horario/Verificar";



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
                }
            ]
        },
        {
            path:'/horario',
            component: Principal,
            childre:[
                {
                    path:'/',
                    component: HorarioFinal
                },
                {
                    path:'/elegir',
                    name:'horario.elegir', //qué diferencia hay??
                    component: Materias
                },
                {
                    path:'/verificar',
                    name:'horario.verificar',
                    component: Verificar
                }

            ]
        }
    ]
});

router.beforeEach((to, from, next) => {
    next();
});

export default router;