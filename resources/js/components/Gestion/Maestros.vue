<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" >
                    <h1 class="tiesp">Gestión de Maestros</h1>

                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button type="button" class="btn" style="font-size: 18px"><i class="fa fa-pencil"></i>
                                </i></button>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Maestros"
    }
</script>

<style scoped>
    table th {
        text-align: center;
    }
    .table
    {
        margin: auto;
        width: 50% !important;
    }
    table tr
    {
        text-align: center;
    }
    h1
    {
        text-align: center;
    }
    .tiesp
    {
        margin-bottom: 35px;
    }
</style>