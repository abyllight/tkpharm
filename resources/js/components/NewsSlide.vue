<template>
    <div class="bg-slide py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center mm justify-between mb-10">
                <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                    {{news_title}}
                </div>
                <div class="border border-top w-full"></div>
                <div class="ml-4 flex items-center gap-3 flex-shrink-0">
                    <div
                        class="flex justify-center items-center cursor-pointer border rounded-full w-12 h-12"
                        @click="prev"
                    >
                        <img src="/img/left.svg" class="w-6"/>
                    </div>
                    <div
                        class="flex justify-center items-center cursor-pointer border rounded-full w-12 h-12"
                        @click="next"
                    >
                        <img src="/img/right.svg" class="w-6"/>
                    </div>
                </div>
            </div>
            <loader v-if="loading"></loader>
            <div class="relative w-full overflow-hidden h-96 md:h-64">
                <div
                    v-for="(slide,index) in news"
                    :key="slide.id"
                    class="grid grid-cols-1 md:grid-cols-2 md:gap-8 px-4 absolute inset-0 slide transition-all ease-in-out duration-1000 transform"
                    :class="index === 0 ? 'translate-x-0' : 'translate-x-full'"
                >
                    <div
                        v-for="item in slide"
                        class="font-light relative"
                    >
                        <div class="flex flex-col p-5 md:p-8 justify-between border w-full h-40 md:h-56">
                            <div>
                                <p class="text-sm mb-2">{{item.created_at}}</p>
                                <p class="font-semibold uppercase text-sm md:text-base lg:text-lg line-clamp-2 md:line-clamp-3">{{item.title}}</p>
                            </div>

                            <a class="flex items-center cursor-pointer" :href="'/news/'+item.id">{{read}} <img src="/img/right.svg" class="w-5 h-4 ml-1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Loader from "./Loader";
export default {
    name: "NewsSlide",
    components: {Loader},
    data: () => ({
        news: [],
        loading: true,
        news_title: '',
        read: ''
    }),
    beforeMount() {
        this.getNews()
        this.getAbout()
    },
    methods: {
        getNews(){
            axios
                .get('/news-slide')
                .then(response => {
                    this.news = response.data
                    this.loading = false
                })
                .catch(error => {
                    console.log(error)
                })
        },
        getAbout(){
            axios.get('/about-data')
                .then(response => {
                    this.news_title = response.data.news
                    this.read = response.data.read
                })
        },
        prev(){
            let active = document.querySelector('.slide.translate-x-0')
            let prev = active.previousElementSibling;

            if (prev){
                active.classList.remove('translate-x-0')
                active.classList.add('translate-x-full')

                prev.classList.remove('-translate-x-full')
                prev.classList.add('translate-x-0')
            }
        },
        next(){
            let active = document.querySelector('.slide.translate-x-0')
            let next = active.nextElementSibling;

            if (next){
                active.classList.remove('translate-x-0')
                active.classList.add('-translate-x-full')

                next.classList.remove('translate-x-full')
                next.classList.add('translate-x-0')
            }
        }
    }
}
</script>
