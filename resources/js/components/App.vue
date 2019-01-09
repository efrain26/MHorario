<template>
<div>
    <GestionMaestros></GestionMaestros>
</div>
</template>

<script>
    import Login from "./Auth/Login";
    import GestionMaestros from "./MaestrosLista/GestionMaestros";
    import Materias from "./Horario/materias";
    export default {
        name: "App",
        components: {Materias, GestionMaestros, Login},
    }
</script>

<style scoped>

</style>