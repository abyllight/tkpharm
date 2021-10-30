<template>
    <div class="bg-slide py-24">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center mm justify-between mb-5">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    Новости
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
            <div class="relative w-full overflow-hidden h-96 md:h-80">
                <div
                    v-for="(slide,index) in news"
                    :key="slide.id"
                    class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4 absolute inset-0 slide transition-all ease-in-out duration-1000 transform"
                    :class="index === 0 ? 'translate-x-0' : 'translate-x-full'"
                >
                    <div
                        v-for="item in slide"
                        class="font-light md:h-80 relative"
                    >
                        <div class="flex flex-col p-8 justify-between md:absolute border w-full h-full z-20">
                            <div>
                                <p class="text-sm mb-3">{{item.created_at}}</p>
                                <p class="font-semibold uppercase text-lg mb-6 md:mb-0 md:line-clamp-2">{{item.title}}</p>
                            </div>

                            <p class="hidden md:block md:line-clamp-3">{{item.description}}</p>
                            <a class="flex items-center cursor-pointer" :href="'/news/'+item.id">Читать далее <img src="/img/right.svg" class="w-5 h-4 ml-1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NewsSlide",
    data: () => ({
        news: [],
    }),
    beforeMount() {
        this.getNews()
    },
    methods: {
        getNews(){
            axios
                .get('/news-slide')
                .then(response => {
                    this.news = response.data
                })
                .catch(error => {
                    console.log(error)
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
