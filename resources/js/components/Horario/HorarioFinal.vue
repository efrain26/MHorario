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
</template>

<script>
    export default {
        name: "HorarioFinal"
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