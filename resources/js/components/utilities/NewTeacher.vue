<template>
    <div>
        <div class="mx-3">
            <div class="md-form mb-3">
                <i class="fa fa-user prefix grey-text"></i>
                <input v-model="params.nombre" class="form-control validate" placeholder="Nombre">
            </div>
            <div class="md-form mb-3">
                <i class="fa fa-user prefix grey-text"></i>
                <input v-model="params.apellido_paterno" class="form-control validate"
                       placeholder="Apellido Paterno">
            </div>
            <div class="md-form mb-3">
                <i class="fa fa-user prefix grey-text"></i>
                <input v-model="params.apellido_materno" class="form-control validate"
                       placeholder="Apellido Materno">
            </div>
            <div class="md-form mb-3">
                <i class="fa fa-user prefix grey-text"></i>
                <select v-model="params.especialidad" class="form-control">
                        <option v-for="item in especialidades">{{item.label}}</option>
                </select>
            </div>
            <button @click="guardar" id="btnguardar" type="button" class="btn btn-primary btn-lg"><i
                    class="fa fa-save"></i> Guardar
            </button>
            <button @click="closeModal" id="btncancelar" type="button" class="btn btn-primary btn-lg"><i
                    class="fa fa-close"></i> Cancelar
            </button>
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

</style>