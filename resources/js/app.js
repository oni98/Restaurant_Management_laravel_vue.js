require('./bootstrap');

require('alpinejs');

window.Vue = require('vue');
import Vue from 'vue'
import { Datetime } from 'vue-datetime'
import 'vue-datetime/dist/vue-datetime.css'
import swal from 'sweetalert';

Vue.component('datetime-component', Datetime);