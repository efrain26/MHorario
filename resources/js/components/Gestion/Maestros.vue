<template>
    <div>
        <div class="container">
            <table class="listmaestr table table-hover">
                <thead>
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">2018M19R</th>
                    <td>Manuel</td>
                    <td>Rodriguez</td>
                    <td>Guillen</td>
                    <td>
                        <button style="width:35px;  background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;" type="button" class="fa fa-edit"></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: right">

            <button @click="openModal" type="button" class="btn btn-primary" style="font-size: 18px"><i
                    class="fa fa-clock-o"></i> Agregar Maestros
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