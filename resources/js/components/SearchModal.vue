<template>
    <div v-if="isVisible" class="w-full h-screen bg-gray-800 bg-opacity-90 fixed z-30 flex flex-col items-center px-4">
        <div class="relative max-w-2xl w-full mt-40">
            <div class="absolute top-4 left-3">
                <img src="/img/search_black.svg" width="24">
            </div>
            <input type="text" v-model="query" autofocus class="rounded-md z-0 h-14 w-full pl-10 pr-24 text-black focus:shadow focus:outline-none" placeholder="Введите поисковой запрос">
            <div class="absolute top-2 right-2">
                <button class="h-10 w-20 text-white rounded-lg text-sm bg-red-500 hover:bg-red-600" @click="search">Искать</button>
            </div>
            <img src="/img/close.svg" width="36" class="absolute right-0 -top-14 cursor-pointer hover:scale-110 transform" @click="close"/>
        </div>
        <div class="relative max-w-2xl w-full mt-8">
            <loader v-if="loading"/>
            <div v-if="empty">
                По Вашему запросу ничего не найдено
            </div>
            <div v-if="hasResults" class="w-full rounded-md flex flex-col gap-4 h-80 overflow-scroll">
                <h3 class="mb-1 font-medium text-white">Результаты поиска:</h3>
                <div
                    v-for="result in results"
                    :key="result.id"
                    class="bg-blue-500 text-white rounded-md p-4 cursor-pointer hover:bg-blue-400 flex items-start justify-between"
                    @click="openLink(result.id)"
                >
                    {{result.title}}
                    <img src="/img/right.svg" class="w-6"/>
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
        results: []
    }),
    computed: {
        hasResults(){
            return this.results.length > 0
        },
        empty(){
            return this.query === null
        }
    },
    methods: {
        close(){
            this.query = ''
            this.results = []
            this.$emit('close')
        },
        search(){
            this.loading = true
            axios
                .get('/search/',{
                    params: {
                        search: this.query
                    }
                })
                .then(response => {
                    this.results = response.data.data
                    if (this.results.length === 0) {
                        this.query = null
                    }
                    this.loading = false
                })
                .catch(error => {
                    console.log(error)
                })
        },
        openLink(id){
            this.close()
            window.open('/news/'+id)
        }
    }
}
</script>
