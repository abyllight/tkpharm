<template>
    <div class="py-4 md:py-10 lg:py-16">
        <div>
            <div class="flex overflow-x-scroll hide-scroll-bar">
                <div class="flex flex-shrink-0 space-x-12 md:space-x-16 lg:space-x-32">
                    <template
                        v-for="(item, key) in items"
                    >
                        <div
                            class="w-80 md:max-w-2xl lg:max-w-3xl md:w-full"
                        >
                            <h1 class="font-bold text-xl md:text-4xl md:uppercase mb-5">
                                {{item.title}}
                            </h1>
                            <p class="text-sm md:text-base md:w-4/5">
                                {{item.sub}}
                            </p>
                        </div>
                        <div v-if="key !== items.length-1" class="border-r"></div>
                    </template>
                </div>
            </div>
        </div>
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
            touchMove: true,
            autoplay: true,
            centerMode: true,
            centerPadding: '10px',
            focusOnSelect: true
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
.hide-scroll-bar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.hide-scroll-bar::-webkit-scrollbar {
    display: none;
}
</style>
