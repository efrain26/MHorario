import Vue from 'vue'
import VueRouter from 'vue-router';

import Login from "../components/Auth/Login";
import Gestion from "../components/Gestion/Gestion";
import Principal from "../components/Horario/Principal";
import Materias from "../components/Horario/Materias";
import Maestros from "../components/Gestion/Maestros";
import PreviewMaterias from "../components/Horario/PreviewMaterias";
import HorarioFinal from "../components/Horario/HorarioFinal";


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
        },
        {
            path:'/home/crear/previewmaterias',
            name:'home.crear.previewmaterias',
            component: PreviewMaterias
        }
        ,
        {
            path:'/home/crear/previewmaterias/horariofinal',
            name:'home.crear.previewmaterias.horariofinal',
            component: HorarioFinal
        }

    ]
});

router.beforeEach((to, from, next) => {
    next();
});

export default router;