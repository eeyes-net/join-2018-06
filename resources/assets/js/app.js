
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import bootstrap from './bootstrap'
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueTouch from 'vue-touch'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import exampleComponent from './components/ExampleComponent'
import home from './views/Home'
import tempHome from './views/TempHome'
import market from './views/department/Market'
import publicrelation from './views/department/PublicRelation'

Vue.use(VueRouter)

const router = new VueRouter({
    routes:[
        {
            path: '/',
            component: home,
            name: 'home'
        },
        {
            path: '/market',
            component: market,
            name: 'market'
        },
        {
            path: '/publicrelation',
            component: publicrelation,
            name: 'publicrelation'
        },
    ]
})

new Vue({
    router
}).$mount('#app');
