<template>
    <div>
        <div style="padding-top:50px" class="container">
            <h1 class="text-center"><b>INSTITUTO DE DIFUCION TECNICA No.1</b></h1>
            <br>
            <b-table striped :fields="fields" :items="items">
                <!-- A virtual column -->
                <template slot="index" slot-scope="data">
                    <span class="text-muted text-capitalize"><h5>{{data.index + 1}}</h5></span>
                </template>
                <!-- A custom formatted column -->
                <template slot="name" slot-scope="data">
                    <span class="text-muted text-capitalize"><h5>{{data.value.first}} {{data.value.last}}</h5></span>
                </template>
                <!-- A virtual composite column -->
                <template slot="nameage" slot-scope="data">
                    <span class="text-muted text-capitalize"><h5>{{data.item.name.first}} is {{data.item.age}} years old</h5></span>
                </template>
            </b-table>
        </div>
        <div>
            <router-link :to="{ name: 'gestion'}">Gestion</router-link>
        </div>
    </div>
</template>

<script>
    import NewTeacher from "../utilities/NewTeacher";

    export default {
        name: "Maestros",
        components: {NewTeacher},
        data () {
            return {

                fields: [
                    // A virtual column that doesn't exist in items
                    'index',
                    // A column that needs custom formatting
                    { key: 'name', label: 'Full Name' },
                    // A regular column
                    'age',
                    // A regular column
                    'sex',
                    // A virtual column made up from two fields
                    { key: 'nameage', label: 'First name and age' }
                ],
                items: [
                    { name: { first: 'John', last: 'Doe' }, sex: 'Male', age: 42 },
                    { name: { first: 'Jane', last: 'Doe' }, sex: 'Female', age: 36 },
                    { name: { first: 'Rubin', last: 'Kincade' }, sex: 'Male', age: 73 },
                    { name: { first: 'Shirley', last: 'Partridge' }, sex: 'Female', age: 62 }
                ]
            }
        }
    }
</script>

<style scoped>

    th {
        text-align: inherit;
        font-size: 20px;
    }

</style>