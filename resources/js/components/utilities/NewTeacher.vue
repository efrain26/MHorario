<template>
    <div>
        <div class="mx-3">
            <div class="md-form mb-3">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="form34" class="form-control validate" placeholder="Nombre">

            </div>

            <div class="md-form mb-3">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="email" id="form29" class="form-control validate" placeholder="Apellido Paterno">

            </div>

            <div class="md-form mb-3">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="form32" class="form-control validate" placeholder="Apellido Materno">

            </div>

            <div class="md-form mb-3">
                <i class="fa fa-job prefix grey-text"></i>
                <!--
                <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ESPECIALIDAD
                </button>
                -->
                <button  class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ESPECIALIDAD
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">INFORMATICA</a>
                    <a class="dropdown-item" href="#">TRABAJO SOCIAL</a>
                    <a class="dropdown-item" href="#">NUTRICION</a>
                    <a class="dropdown-menu" href="#" >SECRETARIADO</a>
                </div>
            </div>


                <button id="btnguardar" type="button" class="btn btn-primary btn-lg"> <i class="fa fa-save"></i> Guardar</button>
                <button id="btncancelar" type="button" class="btn btn-primary btn-lg"> <i class="fa fa-close"></i> Cancelar</button>



        </div>
    </div>
</template>

<script>


    export default {
        name: "NewTeacher",
        methods: {}
    }
</script>

<style scoped>

</style>