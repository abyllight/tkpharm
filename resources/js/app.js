window.Vue   = require('vue').default;
window.axios = require('axios');

import Navbar from './components/Navbar'
import FooterSection from "./components/FooterSection";

Vue.component('partners', require('./components/Partners.vue').default);
Vue.component('news', require('./components/News.vue').default);
Vue.component('news-slide', require('./components/NewsSlide.vue').default);
Vue.component('products', require('./components/Products.vue').default);
Vue.component('gallery', require('./components/Gallery.vue').default);
Vue.component('search-results', require('./components/SearchResults.vue').default);

new Vue({
    render: h => h(Navbar)
}).$mount('#navbar')

new Vue({
    render: h => h(FooterSection)
}).$mount('#footer')
