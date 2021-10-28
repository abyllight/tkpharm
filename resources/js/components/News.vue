<template>
    <div class="bg-news py-32 lg:py-48">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center mb-8 lg:mb-12">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    Новости
                </div>
                <div class="border border-top w-full"></div>
                <div class="flex-shrink-0 ml-4 font-light">
                    {{news.length}}
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    v-for="n in news"
                    class="font-light md:h-80 relative"
                >
                    <div
                        class="flex flex-col p-8 justify-between md:absolute border w-full h-full z-20"
                        :style="backgroundStyle"
                    >
                        <div>
                            <p class="text-sm mb-3">{{n.created_at}}</p>
                            <p class="font-semibold uppercase text-lg mb-6 md:mb-0 md:line-clamp-2">{{n.title}}</p>
                        </div>

                        <p class="hidden md:block md:line-clamp-3">{{n.description}}</p>
                        <a class="flex items-center cursor-pointer" :href="'/news/'+n.id">Читать далее <img src="/img/right.svg" class="w-5 h-4 ml-1"></a>
                    </div>
<!--                    <div
                        class="absolute w-full h-full z-10"
                        :style="backgroundStyle"
                        @mouseover="changeBg(n.image)"
                    >

                    </div>-->
                </div>
            </div>

            <button @click="showMore" class="bg-white font-semibold text-black mt-10 w-full py-3 md:w-64 block mx-auto">Показать больше</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "News",
    data: () => ({
        news: [],
        backgroundStyle: {
            backgroundImage: '',
            backgroundColor: '#0390B4',
            backgroundPosition: 'center',
            backgroundSize: 'cover'
        }
    }),
    created() {
        this.fetchNews()
    },
    methods: {
        fetchNews(){
            axios
            .get('/news-all')
            .then(response => {
                this.news = response.data.data
                console.log(response)
            })
            .catch(error => {
                console.log(error)
            })
        },
        fillBg(n){
            this.backgroundStyle.backgroundImage = 'url('+n.image+')'
        },
        nullBg(){
            this.backgroundStyle.backgroundImage = ''
        },
        showMore(){

        }
    }
}
</script>
