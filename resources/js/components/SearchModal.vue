<template>
    <div v-if="isVisible" class="w-full h-screen bg-gray-800 bg-opacity-90 fixed z-30 flex flex-col items-center px-4">
        <div class="relative max-w-2xl w-full mt-40">
            <div class="absolute top-4 left-3">
                <img src="/img/search_black.svg" width="24">
            </div>
            <input type="text" v-model="query" @input="search" autofocus class="rounded-md z-0 h-14 w-full pl-10 pr-3 text-black focus:shadow focus:outline-none" placeholder="Введите поисковой запрос">
            <img src="/img/close.svg" width="36" class="absolute right-0 -top-14 cursor-pointer hover:scale-110 transform" @click="close"/>
        </div>
        <div class="relative max-w-2xl w-full mt-8">
            <loader v-if="loading"/>
            <div v-if="empty">
                По Вашему запросу ничего не найдено
            </div>
            <div v-if="hasNews || hasProducts" class="w-full rounded-md flex flex-col h-80 space-y-10 overflow-auto">
                <div v-if="hasNews">
                    <h3 class="font-medium text-lg mb-4">Новости</h3>
                    <div class="flex flex-col space-y-4">
                        <a
                            v-for="item in news"
                            :key="item.id"
                            @click="openLink(item.link)"
                            class="bg-blue-500 text-white rounded-md p-4 cursor-pointer hover:bg-blue-400 flex items-start justify-between"
                        >
                            {{item.title}}
                            <img src="/img/right.svg" class="w-6"/>
                        </a>
                    </div>
                </div>

                <div v-if="hasProducts">
                    <h3 class="font-medium text-lg mb-4">Продукты</h3>
                    <div class="flex flex-col space-y-4">
                        <a
                            v-for="item in products"
                            :key="item.id"
                            @click="openLink(item.link)"
                            class="bg-blue-500 text-white rounded-md p-4 cursor-pointer hover:bg-blue-400 flex items-start justify-between"
                        >
                            {{item.title}}
                            <img src="/img/right.svg" class="w-6"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Loader from "./Loader";
export default {
    name: "SearchModal",
    components: {Loader},
    props: {
        isVisible: Boolean
    },
    data:() => ({
        query : '',
        loading: false,
        news: [],
        products: []
    }),
    computed: {
        hasNews(){
            return this.news.length > 0
        },
        hasProducts(){
            return this.products.length > 0
        },
        empty(){
            return this.query === null
        }
    },
    methods: {
        close(){
            this.query = ''
            this.news = []
            this.products = []
            this.$emit('close')
        },
        search() {
            if (this.query === '') {
                this.news = []
                this.products = []
                return
            }
            this.loading = true
            axios
                .get('/search',{
                    params: {
                        search: this.query
                    }
                })
                .then(response => {
                    this.news = response.data.news
                    this.products = response.data.products

                    if (this.news.length === 0 && this.products.length === 0) {
                        this.query = null
                    }

                    this.loading = false
                })
                .catch(error => {
                    console.log(error)
                })
        },
        openLink(link){
            this.close()
            window.open(link)
        }
    }
}
</script>
