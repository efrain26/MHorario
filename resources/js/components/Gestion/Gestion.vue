<template>
    <div>
        <router-link :to="{ name: 'gestion.maestros'}">Maestros</router-link>
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