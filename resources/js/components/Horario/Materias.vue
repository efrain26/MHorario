<template>

    <div class="container">
        <div>
            <div class="row">
                <div class="col-md-12">
                        <h1 id="escu"> <img src="/img/logo.png" class="img-rounded"/><b>INSTITUTO DE DIFUCION TECNICA No.1</b></h1>
                </div>
            </div>
        </div>
        <div class="text">
            <h2>Seleccionar materia</h2>
        </div>
        <div class="row">
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
    .text
    {
        margin-bottom: 15px;
        font-size: 15px;
    }
    .btn{
        margin-left: 5rem;
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
</style>