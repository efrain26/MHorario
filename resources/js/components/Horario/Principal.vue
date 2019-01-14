<template>
    <div class="container">
        <BannerIdiftec></BannerIdiftec>
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
        <HorarioFinal></HorarioFinal>
        <div class="row">
            <div class="col-md-11">
                <button type="button" class="btn btn-primary btn-lg">Generar Horario</button>
            </div>
        </div>

    </div>
</template>


<script>
    import HorarioFinal from "./HorarioFinal";
    import Materias from "./Materias";
    import BannerIdiftec from "../utilities/BannerIdiftec";

    export default {
        name: "Principal",
        components: {BannerIdiftec, HorarioFinal, Materias},
    }
</script>

<style scoped>
    .btn {
        font-size: 15px;
        margin-left: 98rem;
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