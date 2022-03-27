<template>
   <div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
           <div
               v-for="n in news"
               class="font-light md:h-56 relative bg-cover"
               :style="{
                        backgroundImage: 'url(storage/'+n.image+')',
                        backgroundPosition: 'center',
                        backgroundSize: 'cover'
                    }"
           >
               <div class="flex flex-col p-8 justify-between md:absolute w-full h-full z-20 border bg-news hover:bg-black hover:bg-opacity-70 hover:border-opacity-0">
                   <div>
                       <p class="text-sm mb-3">{{n.published_at}}</p>
                       <p class="font-semibold uppercase text-lg md:line-clamp-3">{{n.title}}</p>
                   </div>

                   <a class="flex items-center cursor-pointer" :href="'/news/'+n.id">
                       {{read}} <img src="/img/right.svg" class="w-5 h-4 ml-1"></a>
               </div>
           </div>
       </div>
        <loader v-if="loading"></loader>
       <button v-if="showBtn" @click="loadMore" class="bg-white hover:bg-gray-100 font-semibold text-black w-full py-3 md:w-64 block mx-auto">{{show}}</button>
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
        loading: true,
        show: '',
        read: ''
    }),
    created() {
        this.fetchNews()
        this.getAbout()
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
        getAbout(){
            axios.get('/about-data')
                .then(response => {
                    this.read = response.data.read
                    this.show = response.data.show
                })
        },
        loadMore(){
            this.loading = true
            let date = this.news[this.news.length - 1].published_at
            axios
                .get('/news-load/'+ date)
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
