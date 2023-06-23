import './bootstrap';
import { createApp } from 'vue'

import App from './components/Index.vue'
import router from "./router.js";
createApp(App)
    .use(router)
    .mount('#app')
// const router = createRouter({
//     history: createWebHistory(),
//     routes
// })
//
// createApp(Index)
//     .use(router)
//     .mount('#app')
// import './bootstrap'
// import {createApp} from "vue"
// import Index from './components/Index.vue'
//
// import {createRouter, createWebHistory} from "vue-router";
// import routes from "./router";
//
// const router = createRouter({
//     history: createWebHistory(),
//     routes
// })
// const app = new Vue({
//     el: '#app',
//
//     components: {
//         Index
//     },
//     router
// })
//
// createApp(Index)
// .use(router)
// .mount('#app')
