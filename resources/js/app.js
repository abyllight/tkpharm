window.Vue   = require('vue').default;
window.axios = require('axios');

import store from './store'
import VueI18n from "vue-i18n"

import ru from './lang/ru'
import kz from './lang/kz'
import en from  './lang/en'
import Navbar from './components/Navbar'
import FooterSection from "./components/FooterSection";

window.Vue.use(VueI18n)
let locale = localStorage.getItem('locale')

if (locale === null){
   locale = 'ru'
}
store.dispatch('setLocale',locale)

const i18n = new VueI18n({
    locale: store.state.locale,
    fallbackLocale: 'ru',
    messages: {
        'ru': ru,
        'kz': kz,
        'en': en
    }
})

Vue.component('about', require('./components/About.vue').default);
Vue.component('partners', require('./components/Partners.vue').default);
Vue.component('news', require('./components/News.vue').default);
Vue.component('news-slide', require('./components/NewsSlide.vue').default);
Vue.component('histories', require('./components/Histories').default);
Vue.component('history-sample', require('./components/HistorySample').default);
Vue.component('products', require('./components/Products.vue').default);
Vue.component('gallery', require('./components/Gallery.vue').default);

new Vue({
    i18n,
    store,
    render: h => h(Navbar)
}).$mount('#navbar')

new Vue({
    i18n,
    render: h => h(FooterSection)
}).$mount('#footer')
