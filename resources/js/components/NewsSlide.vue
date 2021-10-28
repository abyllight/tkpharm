<template>
    <div class="bg-slide py-32">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between mb-5">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    Новости
                </div>
                <div class="border border-top w-full"></div>
                <div class="ml-4 flex items-center gap-3 flex-shrink-0">
                    <div class="flex justify-center items-center cursor-pointer border rounded-full w-12 h-12">
                        <img src="/img/left.svg" class="w-6"/>
                    </div>
                    <div class="flex justify-center items-center cursor-pointer border rounded-full w-12 h-12">
                        <img src="/img/right.svg" class="w-6"/>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div
                        v-for="news in news"
                        class="font-light md:h-80 relative"
                    >
                        <div class="flex flex-col p-8 justify-between md:absolute border w-full h-full z-20">
                            <div>
                                <p class="text-sm mb-3">{{news.created_at}}</p>
                                <p class="font-semibold uppercase text-lg mb-6 md:mb-0 md:line-clamp-2">{{news.title}}</p>
                            </div>

                            <p class="hidden md:block md:line-clamp-3">{{news.description}}</p>
                            <a class="flex items-center cursor-pointer" :href="'/news/'+news.id">Читать далее <img src="/img/right.svg" class="w-5 h-4 ml-1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NewsContent",
    data: () => ({
        news: [],
        slide: []
    }),
    created() {
        this.getNews()
    },
    methods: {
        getNews(){
            axios
                .get('/news-all')
                .then(response => {
                    this.news = response.data.data.slice(0,2)
                })
                .catch(error => {
                    console.log(error)
                })
        },
        prev(){

        },
        next(){

        }
    }
}
</script>
