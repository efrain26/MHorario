<template>
    <div class="container">
        <div class="text">
            <h2>Materias seleccionadas</h2>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover table-bordered">
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
                        <tr v-for="PreviewMateria in params.PreviewMaterias">
                            <th scope="row">{{PreviewMateria.clave}}</th>
                            <td>{{PreviewMateria.nombre}}</td>
                            <td>{{PreviewMateria.semestre}}</td>
                            <td>{{PreviewMateria.hora}}</td>
                            <td>{{PreviewMateria.hora}}</td>
                            <td>{{PreviewMateria.hora}}</td>
                            <td>{{PreviewMateria.hora}}</td>
                            <td>{{PreviewMateria.hora}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="float-right" id="botones">
                        <span class="p-1"><button type="button" class="btn btn-secondary">Regresar</button></span>
                        <span class="p-1"><button type="button" class="btn btn-danger">Cancelar</button></span>
                        <span class="p-1"><button type="button" class="btn btn-success">Guardar</button></span>
                    </div>
                </div>
                </div>
    </div>
</template>

<script>
    export default {
        name: "PreviewMaterias",

        data(){
            return{
                params:{
                    PreviewMaterias:[
                        {
                            nombre:'Calculo',
                            clave:'123',
                            hora:'07:50-08:50',
                            semestre:'5'
                        }
                    ]
                }
            }
        }
    }
</script>

<style scoped>
    .text
    {
        margin-bottom: 15px;
        font-size: 15px;
    }
    .btn{
        font-size: 15px;

    }
    table tr{
        text-align: center;
        font-size: 15px;
    }
    h2{
        font-size: 2.3rem;
        margin-top: 1rem;
        text-align: center;
        margin-block-start: -2rem
    }
    img
    {
        width: 75px;
        height: 100px;
    }
    h1{
        color: blue;
        text-align: center;
        font-size: 25px;
    }
    table table {
        text-align: center;
    }
    botones{
        max-width: 7.5%;
    }

</style>