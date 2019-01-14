<template>
    <div class="container">

        <div class="row">
            <div class="col-md-12" style="padding: 30px">
                <h1 id="escu" style="text-align: center"><img src="/img/logo.png" class="img-rounded"
                                                              style="height: 40px; width: 40px"/><b>INSTITUTO DE
                    DIFUSIÓN TÉCNICA No.1</b></h1>
            </div>
        </div>
        <div>
            <tabs>
                <tab name="Maestros">
                    <Maestros></Maestros>
                </tab>
                <tab name="Horarios">
                    Second tab content
                </tab>
            </tabs>
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
            },
            tabClicked(selectedTab) {
                console.log('Current tab re-clicked:' + selectedTab.tab.name);
            },
            tabChanged(selectedTab) {
                console.log('Tab changed to:' + selectedTab.tab.name);
            },
        }
    }
</script>

<style scoped>
</style>