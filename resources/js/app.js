import Vue from 'vue'

/**
 * Master App
 */
import App from './components/App';
/**
 * Router
 */
import router from './router/routes';
/**
 * Bootstrap 4
 */
import 'bootstrap/dist/css/bootstrap.css'
/**
 * Tabs
 */
import Tabs from 'vue-tabs-component';

Vue.use(Tabs);

/**
 * Vee validate
 */
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
