<template>
    <div>
        <div class="text">
            <h1>Seleccionar materia</h1>
        </div>
        <div class="">
            <div class="">
                <div class="col-md-10">
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
                        <tr>
                            <th scope="row">5FP1</th>
                            <td>Calculo Integral</td>
                            <td>5</td>
                            <td>07:50-08:50</td>
                            <td>07:50-08:50</td>
                            <td>07:50-08:50</td>
                            <td>07:50-08:50</td>
                            <td>07:50-08:50</td>
                            <td>  <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10"></div>
                    <div class="col-md-1 col-lg-1"></div>
                    <div class="col-md-1 col-lg-1">
                        <button type="button" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        name: "Materias"
    }
</script>

<style scoped>
    table tr{
        text-align: center;
    }
    h1{
        font-size: 2.3rem;
        margin-top: 1rem;
        text-align: center;
    }
    .text
    {
        margin-bottom: 15px;
    }
    .btn{
        margin-left: 1.8rem;
    }
</style>