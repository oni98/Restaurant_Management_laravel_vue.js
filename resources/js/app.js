require('./bootstrap');

window.Vue = require('vue').default;
import swal from 'sweetalert';
import { Datetime } from 'vue-datetime';
import 'vue-datetime/dist/vue-datetime.css';

Vue.component('datetime-component', Datetime);

// const app = new Vue({
//     el: '#app',
// });