require('./bootstrap');

window.Vue = require('vue').default;

import { Datetime } from 'vue-datetime'
import 'vue-datetime/dist/vue-datetime.css'
import swal from 'sweetalert';
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

Vue.component('datetime-component', Datetime);
Vue.component('vue-dropzone', vue2Dropzone);