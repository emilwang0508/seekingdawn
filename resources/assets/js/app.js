
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueLazyload from 'vue-lazyload'
import VeeValidate from 'vee-validate';
Vue.use(VueLazyload)
Vue.use(VeeValidate)
/*Vue.use(VueLazyload, {
    preLoad: 1.3,
    error: 'dist/error.png',
    loading: 'dist/loading.gif',
    attempt: 1
})*/
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// Vue.component('loading', require('./components/Loading.vue'));//loading 组件
/*
* pages
* */
Vue.component('Index', require('./pages/Index.vue'));//Index 页面
Vue.component('m-index', require('./pages/mobile/Index.vue'));//手机Index 页面
Vue.component('Posts', require('./pages/Posts.vue'));//posts 页面
Vue.component('Show', require('./pages/Show.vue'));//posts 页面
Vue.component('navbar', require('./components/NavBar.vue'));//navbar 组件
Vue.component('banner', require('./components/Banner.vue'));//banner 组件
Vue.component('art', require('./components/Art.vue'));//Art 组件
Vue.component('press', require('./components/Press.vue'));//Art 组件
Vue.component('screenshot', require('./components/Screenshot.vue'));//screenshot 组件
Vue.component('intro', require('./components/Intro.vue'));//Intro 组件
Vue.component('devBlog', require('./components/Devblog.vue'));//devbog 组件
Vue.component('footerBar', require('./components/FooterBar.vue'));//Art 组件

const app = new Vue({
    el: '#app',
});
