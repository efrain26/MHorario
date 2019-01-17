<template>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miercoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{params.HorarioFinal.clave}}</th>
                    <td>{{params.HorarioFinal.nombre}}</td>
                    <td>{{params.HorarioFinal.semestre}}</td>
                    <td>{{params.HorarioFinal.hora_inicio + ' - ' + params.HorarioFinal.hora_final}}</td>
                    <td>{{params.HorarioFinal.hora_inicio + ' - ' + params.HorarioFinal.hora_final}}</td>
                    <td>{{params.HorarioFinal.hora_inicio + ' - ' + params.HorarioFinal.hora_final}}</td>
                    <td>{{params.HorarioFinal.hora_inicio + ' - ' + params.HorarioFinal.hora_final}}</td>
                    <td>{{params.HorarioFinal.hora_inicio + ' - ' + params.HorarioFinal.hora_final}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HorarioFinal",

        data() {
            return {
                params: {
                    HorarioFinal:
                        {
                            especialidad: {}
                        }
                },
                id: 1
            }
        },
        mounted() {
            this.chargeMateria();
        },
        methods: {
            openModal() {
                this.$refs.modal.open();
            },
            chargeMateria() {
                this.$axios.get('api/materia/' + this.id).then(response => {
                    this.params.HorarioFinal = response.data.data;
                });
            }
        }
    }
</script>

<style scoped>
    h1 {
        color: blue;
        text-align: center;
        font-size: 25px;
    }

    img {
        width: 75px;
        height: 100px;
    }

    table {
        font-size: 15px;
    }

    h2 {
        font-size: 25px;
        text-align: center;
        margin-block-start: -2rem
    }
</style>