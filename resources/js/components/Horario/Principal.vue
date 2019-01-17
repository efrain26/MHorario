<template>
    <div class="container">
        <BannerIdiftec></BannerIdiftec>
        <h2 class="font-weight-bold">Detalles Maestro</h2>
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">Clave</th>
                        <td>{{params.maestro.clave}}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 20%">Nombre Maestro</th>
                        <td>{{params.maestro.persona.nombre +' '+ params.maestro.persona.ap_paterno + ' ' +
                            params.maestro.persona.ap_materno}}
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Especialidad</th>
                        <td>{{params.maestro.especialidad.especialidad }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <HorarioFinal></HorarioFinal>
        <div class="row float-right">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary btn-lg">Generar Horario</button>
            </div>
        </div>

    </div>
</template>


<script>
    import HorarioFinal from "./HorarioFinal";
    import Materias from "./Materias";
    import BannerIdiftec from "../utilities/BannerIdiftec";

    export default {
        name: "Principal",
        components: {BannerIdiftec, HorarioFinal, Materias},
        data() {
            return {
                params: {
                    maestro: {
                        persona: {},
                        especialidad:{}
                    },
                },
                id: 1
            }
        },
        mounted() {
            this.chargeMaestros();
        },
        methods: {
            openModal() {
                this.$refs.modal.open();
            },
            chargeMaestros() {
                this.$axios.get('api/maestro/' + this.id).then(response => {
                    this.params.maestro = response.data.data;
                });
            }
        }

    }
</script>

<style scoped>


    img-thumbnail {
        text-align: center;
    }

    h1 {
        text-align: center;
        margin-top: 15px;
    }

    body {
        text-size: 15px;
    }

    img {
        width: 75px;
        height: 100px;
    }

    h1 {
        color: blue;
        text-align: center;
        font-size: 25px;
    }

    h2 {
        text-align: center;
        margin-top: -3rem;
    }

    table {
        font-size: 15px;
    }
</style>