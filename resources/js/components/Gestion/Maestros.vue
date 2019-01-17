<template>
    <div>
        <div class="row float-right mb-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="activo" name="toggle-maestros" class="custom-control-input" checked>
                <label style="font-size: 12px" class="custom-control-label" for="activo">Activos</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="inactivo" name="toggle-maestros" class="custom-control-input">
                <label style="font-size: 12px" class="custom-control-label" for="inactivo">Inactivos</label>
            </div>
        </div>
        <div class="row table-responsive">
            <table class="table listmaestr table-hover">
                <thead>
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Especilidad</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="maestro in params.maestros">
                    <th scope="row">{{maestro.clave}}</th>
                    <input v-show="false" v-model="maestro.clave" class="form-control validate" :readonly="true">
                    <td>{{maestro.persona.nombre}}</td>
                    <td>{{maestro.persona.ap_paterno}}</td>
                    <td>{{maestro.persona.ap_materno}}</td>
                    <td>{{maestro.especialidad.especialidad}}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-arrow-down"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="float-right">
            <button @click="openModal" type="button" class="btn btn-lg btn-primary"><i
                    class="fa fa-clock-o"></i> Nuevo Maestro
            </button>
            <sweet-modal ref="modal" title="Registro de Maestros">
                <NewTeacher></NewTeacher>
            </sweet-modal>
        </div>

    </div>
</template>

<script>
    import NewTeacher from "../utilities/NewTeacher";
    import {SweetModal, SweetModalTab} from 'sweet-modal-vue'

    export default {
        name: "Maestros",
        components: {
            NewTeacher,
            SweetModal,
            SweetModalTab
        },
        data() {
            return {
                params: {
                    maestros:null,
                }
            }
        },
        mounted(){
          this.chargeMaestros();
        },
        methods: {
            openModal() {
                this.$refs.modal.open();
            },
            chargeMaestros(){
               this.$axios.get('api/maestros').then(response =>{
                   this.params.maestros = response.data.data;
               });
            }
        }
    }
</script>

<style scoped>
    .listmaestr {
        font-size: 16px;
    }

    td {
        text-align: center;
    }

    th {
        text-align: center;
    }

    title {
        text-align: center;
    }
</style>