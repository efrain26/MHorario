<template>
    <div class="container">
        <BannerIdiftec></BannerIdiftec>
        <div class="text">
            <h2>Seleccionar materia</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
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
                            <th scope="col">Seleccionar</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="materia in params.materias">
                            <th scope="row">{{materia.clave}}</th>
                            <td>{{materia.nombre}}</td>
                            <td>{{materia.semestre}}</td>
                            <td>{{materia.hora}}</td>
                            <td>{{materia.hora}}</td>
                            <td>{{materia.hora}}</td>
                            <td>{{materia.hora}}</td>
                            <td>{{materia.hora}}</td>
                            <td><input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                                       value="option1" aria-label="...">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <PreviewMaterias></PreviewMaterias>
        <div class="row">
            <div class="col-md-10 col-lg-10"></div>
            <div class="col-md-2 col-lg-2">
                <button type="button" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</template>

<script>
    import BannerIdiftec from "../utilities/BannerIdiftec";
    import PreviewMaterias from "./PreviewMaterias";

    export default {
        name: "Materias",
        components: {PreviewMaterias, BannerIdiftec},

        data(){
            return{
                params:{
                    materias:[
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
    .text {
        margin-bottom: 15px;
        font-size: 15px;
    }

    .btn {
        font-size: 15px;
        margin-left: 7rem;
    }

    table tr {
        text-align: center;
        font-size: 15px;
    }

    h2 {
        font-size: 2.3rem;
        margin-top: 1rem;
        text-align: center;
        margin-block-start: -2rem
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

    table table {
        text-align: center;
    }
</style>