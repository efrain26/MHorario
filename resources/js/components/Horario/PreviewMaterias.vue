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
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="botones">
            <div class="col-sm-9 col-md-9 col-lg-9"></div>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <button type="button" class="btn btn-secondary">Regresar</button>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1">
                <button type="button" class="btn btn-success">Guardar</button>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PreviewMaterias"
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
    botenes{
        max-width: 7.5%;
    }

</style>