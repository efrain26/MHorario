<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="contenedor-botones" role="gruop">
                   <h1>  <img src="img/logo.png" class="img-rounded"/><b>INSTITUTO DE DIFUCION TECNICA No.1</b></h1>
                    <br>
                    <button id="lista" type="button" class="btn btn-primary"><i class="fa fa-users"></i>  Maestros</button>
                    <button id="horario" type="button" class="btn btn-primary"><i class="fa fa-clock-o"></i>  Horario</button>
                    <Maestros></Maestros>
                </div>
            </div>
            </div>
        </div>
</template>

<script>
    import Maestros from "./Maestros";
    export default {
        name: "Gestion",
        components: {Maestros}
    }
</script>

<style scoped>
    lista
    {
        text-align: center;
    }
    button
    {
        text-align: center;

    }
    .contenedor-botones {
       text-align: right;
        padding: 40px;
    }

    h1 {
        text-align: center;
        color: blue;
        padding: 20px;
    }
    img
    {
        width: 100px;
        height: 100px;
    }
</style>