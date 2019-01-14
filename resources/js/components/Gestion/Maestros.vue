<template>
    <div>
        <div class="row float-right mb-4">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Activos</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Inactivos</label>
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
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="maestro in params.maestros">
                    <th scope="row">{{maestro.matricula}}</th>
                    <input v-show="false" v-model="maestro.matricula" class="form-control validate" :readonly="true">
                    <td>{{maestro.nombre}}</td>
                    <td>{{maestro.apellido_paterno}}</td>
                    <td>{{maestro.apellido_materno}}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-arrow-down"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="float-right">
            <button @click="openModal" type="button" class="btn btn-lg btn-primary"><i
                    class="fa fa-clock-o"></i> Nuevo Maestro
            </button>
            <sweet-modal ref="modal" title="Registro de Maestros" >
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
        data(){
          return{
              params:{
                  maestros:[
                      {
                          matricula:'2018M19R',
                          nombre:'Manuel',
                          apellido_paterno:'Rodriguez',
                          apellido_materno:'Guillen'
                      }
                  ]
              }
          }
        },
        methods: {
            openModal() {
                this.$refs.modal.open();
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
    title
    {
        text-align: center;
    }
</style>