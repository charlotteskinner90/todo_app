// Load dependencies
import axios from 'axios';

window.axios = axios;
window.Vue = require('vue');

// Load components
Vue.component('task-list', require('./components/Task-list.vue'));

// Define new Vue instance
const app = new Vue({
    el: '#app'
});