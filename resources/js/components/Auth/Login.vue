<template>
    <div>
        <div class="container" style="margin-top:40px">
            <div class="row">
                <div class="">
                    <div class="panel panel-default login">
                        <div class="panel-heading text-center bg-idiftec-2">
                            <h2 class="text-white"><strong> Inicia Sesión</strong></h2>
                        </div>
                        <div class="panel-body bg-idiftec">
                            <form>
                                <div class="">
                                    <div class="center-block">
                                        <img class="profile-img"
                                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                             alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="glyphicon glyphicon-user"></i></span>
                                            </div>
                                            <input v-model="params.user" class="form-control" placeholder="Usuario">
                                        </div>
                                    </div>

                                    <div>
                                        <div>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2"><i
                                                            class="glyphicon glyphicon-lock"></i></span>
                                                </div>
                                                <input v-model="params.psswrd" class="form-control"
                                                       placeholder="Contraseña">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-group">
                                            <button @click="validateLogin" type="button"
                                                    class="btn btn-lg btn-primary btn-block"
                                                    value="Iniciar Sesión"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                params: {
                    user: '',
                    psswrd: ''
                }
            }
        },
        methods: {
            validateLogin() {

            },
            login() {

            }
        }
    }
</script>

<style scoped>

    .login {
        border: 1px solid #e1e1e1;
        border-radius: 5px;
        min-width: 28%;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .panel-heading {
        padding: 5px 15px;
    }

    .panel-footer {
        padding: 1px 15px;
        color: #A0A0A0;
    }

    .profile-img {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }

    .bg-idiftec {
        background-color: #eff4ee;
    }

    .bg-idiftec-2 {
        background-color: #000063;
    }
</style>