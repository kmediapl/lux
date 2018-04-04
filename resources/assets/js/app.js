
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 import Vue from 'vue'
 import VueRouter from 'vue-router'
 import Vuetify from 'vuetify'
 

 Vue.use(Vuetify)
 Vue.use(VueRouter)




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('szablon', require('./components/Szablon.vue'));
Vue.component('zlecenia', require('./components/zlecenia.vue'));
Vue.component('login', require('./components/login.vue'));
Vue.component('materialy', require('./components/materialy.vue'));

const app = new Vue({
    el: '#app'
});
