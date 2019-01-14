<template>
    <div>
        <div class="modal-body">
            <div class="mx-3">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                    <input type="text" v-model="params.nombre" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                    <input type="text" v-model="params.apellido_paterno" class="form-control" placeholder="Apellido paterno" aria-label="Username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                    <input type="text" v-model="params.apellido_materno" class="form-control" placeholder="Apellido materno" aria-label="Username" aria-describedby="basic-addon3">
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" v-model="params.especialidad" name="ESPECIALIDAD">

                        <option v-for="item in especialidades">{{item.label}}</option>
                    </select>
                </div>
                <div class="float-right">
                    <button @click="closeModal" id="btncancelar" type="button" class="btn btn-secondary btn-lg">Cancelar</button>
                    <button @click="guardar" id="btnguardar" type="button" class="btn btn-primary btn-lg"> Guardar</button>
                </div>
            </div>
        </div>

    </div>
</template>

<script>


    export default {
        name: "NewTeacher",
        data() {
            return {
                params: {
                    nombre: '',
                    apellido_paterno: '',
                    apellido_materno: '',
                    especialidad: ''
                },
                especialidades: [
                    {
                        value: 1,
                        label: 'Informatica'
                    },
                    {
                        value: 2,
                        label: 'Trabajo social'
                    },
                    {
                        value: 3,
                        label: 'Nutrición'
                    },
                    {
                        value: 4,
                        label: 'Secretariado'
                    }
                ]
            }
        },
        methods: {
            guardar() {
                console.log('Guardar');
            },
            closeModal() {
                this.$refs.modal.close();
            }
        }
    }
</script>

<style scoped>
.sweet-title{
    background-color: #000063;
}
    h2{
        margin-top: 22px !important;
    }
</style>