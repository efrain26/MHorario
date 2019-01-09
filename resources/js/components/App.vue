<template>
<div>
    <GestionMaestros></GestionMaestros>
</div>
</template>

<script>
    import Login from "./Auth/Login";
    import GestionMaestros from "./MaestrosLista/GestionMaestros";
    export default {
        name: "App",
        components: {GestionMaestros, Login},
    }
</script>

<style scoped>

</style>