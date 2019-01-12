<template>
    <div>
        <div class="mx-3">
            <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Your name</label>
            </div>

            <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" id="form29" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form29">Your email</label>
            </div>

            <div class="md-form mb-5">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" id="form32" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form32">Subject</label>
            </div>

            <div class="md-form">
                <i class="fas fa-pencil prefix grey-text"></i>
                <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                <label data-error="wrong" data-success="right" for="form8">Your message</label>
            </div>

        </div>
    </div>
</template>

<script>


    export default {
        name: "NewTeacher",
        methods: {}
    }
</script>

<style scoped>

</style>