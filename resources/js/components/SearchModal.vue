<template>
    <div v-if="isVisible" class="w-full h-screen bg-gray-900 bg-opacity-90 fixed z-30 flex items-center justify-center px-4">
        <div class="relative max-w-2xl w-full">
            <div class="absolute top-4 left-3">
                <img src="/img/search_black.svg" width="24">
            </div>
            <input type="text" v-model="query" autofocus class="rounded-lg z-0 h-14 w-full pl-10 text-black focus:shadow focus:outline-none" placeholder="Введите поисковой запрос">
            <div class="absolute top-2 right-2">
                <button class="h-10 w-20 text-white rounded-lg text-sm bg-red-500 hover:bg-red-600" @click="search">Искать</button>
            </div>
            <img src="/img/close.svg" width="36" class="absolute right-0 -top-14 cursor-pointer hover:scale-110 transform" @click="close"/>
        </div>
    </div>
</template>

<script>
export default {
    name: "SearchModal",
    props: {
        isVisible: Boolean
    },
    data:() => ({
        query : null
    }),
    methods: {
        close(){
            this.$emit('close')
        },
        search(){
            axios.get('/search/',{
                params: {
                    search: this.query
                }
            })
                .then(response => {
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>
