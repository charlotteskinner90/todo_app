// Load dependencies
import axios from 'axios';
import Datepicker from 'vuejs-datepicker';

window.axios = axios;
window.Vue = require('vue');

// Load components
Vue.component('task-list', require('./components/Task-list.vue'));

// Define new Vue instance
const app = new Vue({
    el: '#app'
});

const date_picker = new Vue({
    el: '#date_picker',
    components: {
        Datepicker
    },
    data: {
        date: new Date()
    }
});