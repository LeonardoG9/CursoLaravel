/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

import Vue from 'vue';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import router from './assets/router'

Vue.component('post-modal',require('./components/PostModal.vue').default)
Vue.component('post-default',require('./components/PostDefault.vue').default)
// Vue.component('list-posts',require('./components/PostList.vue').default)
const app = new Vue({
    el: "#app",
    data: {
        message: "Hola perros",
       
    },
    router
   
    
});
