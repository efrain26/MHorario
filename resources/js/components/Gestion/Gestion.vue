<template>
    <div>
        <div class="row">
            <div class="col-md-12" style="text-align: right; padding:30px">
                <button type="button" class="btn btn-primary" style="font-size: 18px"> <i class="fa fa-users"></i> Maestros </button>
                <button type="button" class="btn btn-primary" style="font-size: 18px"> <i class="fa fa-clock-o"></i> Horarios</button>
            </div>
        </div>
            <div class="container">
                <Maestros></Maestros>

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
</style>