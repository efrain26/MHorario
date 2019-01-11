<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="escu"> <img src="/img/logo.png" class="img-rounded"/><b>INSTITUTO DE DIFUCION TECNICA No.1</b></h1>
            </div>
        </div>
        <h2 class="font-weight-bold">Detalles Maestro</h2>
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row" style="width: 20%">Nombre Maestro</th>
                        <td>Felix Diáz Villanueva</td>
                    </tr>
                    <tr>
                        <th scope="row">Clave</th>
                        <td>DIVF870425</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-4" id="btn">
                <button type="button" class="btn btn-primary btn-lg">Generar Horario</button>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
</template>


<script>
    import HorarioFinal from "./HorarioFinal";
    import Materias from "./Materias";

    export default {
        name: "Principal",
        components: {HorarioFinal, Materias},
    }
</script>

<style scoped>
    .btn {
        margin-left: 141px;
        font-size: 15px;
    }

    img-thumbnail {
        text-align: center;
    }

    h1 {
        text-align: center;
        margin-top: 15px;
    }
    body{
        text-size: 15px;
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
    h2{
        text-align: center;
        margin-top: -3rem;
    }
    table{
        font-size: 15px;
    }
</style>