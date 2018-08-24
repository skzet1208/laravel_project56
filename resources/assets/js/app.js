import Vue from 'vue'
import router from './router'
import VueRouter from 'vue-router'
import { sync } from 'vuex-router-sync'
import store from './store'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css';
require('./bootstrap')

Vue.use(ElementUI)
Vue.component('navbar', require('./components/Layouts/Navbar.vue'))

sync(store, router)

const app = new Vue({
  router,
  el: '#app'
})
