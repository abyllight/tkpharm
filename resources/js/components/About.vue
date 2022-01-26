<template>
    <div class="py-24">
        <VueSlickCarousel id="slider" v-if="items.length > 0" v-bind="settings">
            <div
                class="slide"
                v-for="item in items"
                :key="item.id"
            >
                <h1 class="font-bold text-2xl mx-auto md:w-3/4 md:text-4xl uppercase tracking-wider xl:leading-tight mb-5">
                    {{item.title}}
                </h1>
                <p class="text-sm md:text-base mx-auto md:w-3/4">
                    {{item.sub}}
                </p>
            </div>
        </VueSlickCarousel>
    </div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
export default {
    name: "About",
    components: {VueSlickCarousel},
    data: () => ({
        items: [],
        settings: {
            dots: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            touchMove: true,
            autoplay: true
        }
    }),
    created() {
        this.getAbout()
    },
    methods: {
        getAbout(){
            axios.get('/about-data')
                .then(response => {
                    this.items = response.data.data
                })
        }
    }
}
</script>
<style>
.slick-dots li button:before {
    font-family: 'slick';
    font-size: 16px;
    line-height: 20px;
    position: absolute;
    top: 40px;
    left: 0;
    width: 20px;
    height: 20px;
    content: '•'; /* <-- Вот этот символ */
    text-align: center;
    opacity: .75;
    color: white;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
