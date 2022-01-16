<template>
   <div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
           <div
               v-for="n in news"
               class="font-light md:h-72 relative bg-cover"
               :style="{
                        backgroundImage: 'url(storage/'+n.image+')',
                        backgroundPosition: 'center',
                        backgroundSize: 'cover'
                    }"
           >
               <div class="flex flex-col p-8 justify-between md:absolute w-full h-full z-20 border bg-news hover:bg-black hover:bg-opacity-70 hover:border-opacity-0">
                   <div>
                       <p class="text-sm mb-3">{{n.created_at}}</p>
                       <p class="font-semibold uppercase text-lg mb-6 md:mb-2 md:line-clamp-2">{{n.title}}</p>
                       <p class="hidden md:block md:line-clamp-3 max-h-20" v-html="n.description"></p>
                   </div>

                   <a class="flex items-center cursor-pointer" :href="'/news/'+n.id">
                       Читать далее <img src="/img/right.svg" class="w-5 h-4 ml-1"></a>
               </div>
           </div>
       </div>
        <loader v-if="loading"></loader>
       <button v-if="showBtn" @click="loadMore" class="bg-white hover:bg-gray-100 font-semibold text-black w-full py-3 md:w-64 block mx-auto">Показать больше</button>
    </div>
</template>

<script>
import Loader from "./Loader";
export default {
    name: "News",
    components: {Loader},
    data: () => ({
        news: [],
        id: 0,
        showBtn: true,
        loading: true
    }),
    created() {
        this.fetchNews()
    },
    methods: {
        fetchNews(){
            axios
            .get('/news-all')
            .then(response => {
                this.news = response.data
                this.loading = false
            })
            .catch(error => {
                console.log(error)
            })
        },
        loadMore(){
            this.loading = true
            let id = this.news[this.news.length - 1].id
            axios
                .get('/news-load/'+ id)
                .then(response => {
                    let more = response.data
                    this.news.push(...more)
                    if (more.length === 0) this.showBtn = false
                    this.loading = false
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>
