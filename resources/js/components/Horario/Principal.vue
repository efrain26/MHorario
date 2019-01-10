<template>
    <div>
        <!--<h1 class="font-weight-bold">Detalles Maestro</h1>
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row" style="width: 20%">Nombre Maestro</th>
                        <td>Felix Diáz Villanueva</td>
                    </tr>
                    <tr>
                        <th scope="row">Clave</th>
                        <td>DIVF870425</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-4" id="btn">
                <button type="button" class="btn btn-primary btn-lg">Generar Horario</button>
            </div>
            <div class="col-md-1"></div>
        </div>-->
        <b-table striped hover :items="items"></b-table>
        <b-button variant="primary"> I am a Button</b-button>
    </div>
</template>


<script>
    import HorarioFinal from "./HorarioFinal";
    import Materias from "./Materias";

    export default {
        name: "Principal",
        components: {HorarioFinal, Materias},
        data () {
            return {
                items: [
                    {
                        isActive: true,
                        age: 40,
                        first_name: 'Dickerson',
                        last_name: 'Macdonald' }
                ]
            }
        }
    }
</script>

<style scoped>
    .btn {
        margin-left: 6.4rem;
    }

    img-thumbnail {
        text-align: center;
    }

    h1 {
        text-align: center;
    }
</style>