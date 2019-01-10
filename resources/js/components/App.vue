<template>
<div>
    <Maestros></Maestros>
</div>
</template>

<script>
    import Login from "./Auth/Login";
    import Maestros from "./Gestion/Maestros";
    export default {
        name: "App",
        components: {Maestros, Login},
    }
</script>

<style scoped>

</style>