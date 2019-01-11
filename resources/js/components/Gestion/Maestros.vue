<template>
    <div>
        <div class="container">
            <table class="listmaestr table table-hover">
                <thead>
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Manuel</td>
                    <td>Rodriguez</td>
                    <td>Guillen</td>
                    <td><button style="width:35px" type="button" class="fa fa-edit"></button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: right">

            <button type="button" class="btn btn-primary" style="font-size: 18px" > <i class="fa fa-clock-o"></i> Agregar Maestros</button>
            <NewTeacher></NewTeacher>
        </div>
    </div>
</template>

<script>
    import NewTeacher from "../utilities/NewTeacher";
    export default {
        name: "Maestros",
        components: {NewTeacher}
    }
</script>

<style scoped>
    .listmaestr {
        font-size: 16px;
    }
    td{text-align: center;}
    th
    {
        text-align: center;
    }
</style>