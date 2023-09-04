import "./bootstrap";
import "../css/app.css"
import { createApp } from "vue";
import { createPinia } from "pinia";
import i18n from "@/plugins/i18n";
// import 'gitart-vue-dialog/dist/style.css'
import App from "./app.vue";
import axios from 'axios'
import VueScrollTo from 'vue-scrollto'
import VueNumber from "vue-number-animation";
// import '@/vue3-m-circle-progress-bar/style.css'

import 'animate.css';

const axiosInstance = axios.create({
    withCredentials: true,
})

import router from "./router";

const pinia = createPinia();

const app = createApp(App);
app.use(router);
app.use(pinia);
app.use(i18n);
app.use(VueScrollTo)
app.use(VueNumber)
app.config.globalProperties.$axios = { ...axiosInstance }
// document.body.dir='rtl'
app.mount("#app");
