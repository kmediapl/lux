
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 import Vue from 'vue'
 import VueRouter from 'vue-router'
 import Vuetify from 'vuetify'
 import UploadButton from 'vuetify-upload-button'
 

 Vue.use(Vuetify)
 Vue.use(VueRouter)
 Vue.use(UploadButton)




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('szablon', require('./components/Szablon.vue'));
Vue.component('zlecenia', require('./components/zlecenia.vue'));
Vue.component('mojezlecenia', require('./components/mojezlecenia.vue'));
Vue.component('danezlecenia', require('./components/danezlecenia.vue'));
Vue.component('login', require('./components/login.vue'));
Vue.component('materialy', require('./components/materialy.vue'));
Vue.component('belka', require('./components/belka.vue'));

import mojezlecenia from './components/mojezlecenia'
import danezlecenia from './components/danezlecenia'
import ExampleComponent from './components/ExampleComponent'

const router = new VueRouter({
    mode: 'history',
    routes: [
     
        {
            path: '/appmobile/mojezlecenia/',
            name: 'zlecenia',
            component: mojezlecenia
        },
        {
            path: '/appmobile/danezlecenia/:id',
            props: true,
            name: 'danezlecenia',
            component: danezlecenia
        },

    ],
});

const app = new Vue({
    el: '#app',
    router,
});
