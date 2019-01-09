<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" >
                    <h1 class="tiesp">Gestión de Maestros</h1>
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
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
        name: "GestionMaestros"
    }
</script>

<style scoped>
    table th {
        text-align: center;
    }

    .table {
        margin: auto;
        width: 50% !important;
    }
    table tr{
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