<template>
    <div>
        <div class="row">
            <div class="col-md-12" style="text-align: right; padding:30px">
                <button @click="showMaestros" type="button" class="btn btn-primary" style="font-size: 18px"><i
                        class="fa fa-users"></i>Maestros
                </button>
                <button @click="showHorarios" type="button" class="btn btn-primary" style="font-size: 18px"><i
                        class="fa fa-clock-o"></i>
                    Horarios
                </button>
            </div>
        </div>
        <div class="container" v-if="open_maestros">
            <Maestros></Maestros>
        </div>
        <div class="container" v-if="open_horarios">
            <h3>Cuando se haga lo de horarios, aquí irá..</h3>
        </div>
    </div>
</template>

<script>
    import Maestros from "./Maestros";

    export default {
        name: "Gestion",
        components: {Maestros},
        data() {
            return {
                open_maestros: false,
                open_horarios: false,
            }
        },
        methods: {
            showMaestros() {
                this.open_maestros = true;
                this.open_horarios = false;
            },
            showHorarios() {
                this.open_maestros = false;
                this.open_horarios = true;
            }
        }
    }
</script>

<style scoped>
</style>