<template>
    <div class="max-w-6xl mx-auto px-4 py-3 text-white border-b bg-gray-700 lg:bg-transparent fixed z-30 lg:absolute inset-x-0">
        <div class="flex flex-row lg:flex-col items-center justify-between">
            <div>
                <a class="cursor-pointer" href="/"><img src="/img/logo.png" alt="logo"></a>
            </div>
            <div class="lg:w-full lg:mt-5">
                <div
                    class="lg:hidden flex items-center"
                    @click="expandMenu =! expandMenu"
                >
                    <p class="uppercase font-light text-sm mr-1">Меню</p>
                    <img :src="!expandMenu ? '/img/menu.svg' : '/img/close.svg'" width="30" class="cursor-pointer">
                </div>
                <div class="hidden lg:flex md:justify-between md:items-center">
                    <div class="border w-16 h-10 rounded flex items-center justify-center">
                        <img src="/img/search.svg" width="24">
                    </div>
                    <div class="font-bold relative flex">
                        <a class="pr-5 border-r cursor-pointer" href="/">Главная</a>
                        <div
                            class="px-5 border-r flex"
                            @mouseover="isExpanded = true"
                            @mouseleave="isExpanded = false"
                        >
                            <p class="cursor-pointer">Компания</p>
                            <img src="/img/down_white.svg" width="18" class="ml-1 cursor-pointer">
                            <div v-if="isExpanded" @mouseover="isExpanded = true"
                                 @mouseleave="isExpanded = false" class="border px-3 py-4 absolute flex flex-col gap-3 mt-6">
                                <a
                                    v-for="s in sub"
                                    :href="s.href"
                                    class="cursor-pointer text-sm"
                                >{{s.name}}</a>
                            </div>
                        </div>
                        <a class="px-5 border-r cursor-pointer" href="/news">Новости</a>
                        <a class="px-5 border-r cursor-pointer" href="/products">Наша продукция</a>
                        <a class="pl-5 cursor-pointer" href="/gallery">Галерея</a>
                    </div>
                    <div class="relative">
                        <div
                            @click="showLang =! showLang"
                            class="border w-16 h-10 rounded flex items-center justify-around px-2 cursor-pointer"
                            :class="showLang ? 'border-b-0 rounded-b-none' : ''"
                        >
                            <img :src="lang.flag" class="w-5 h-5">
                            <img src="/img/down_white.svg" width="20">
                        </div>
                        <div v-if="showLang" class="flex flex-col gap-1.5 p-1 border border-t-0 pt-4 absolute w-full">
                            <div
                                v-for="flag in flags"
                                class="flex items-center justify-around cursor-pointer rounded hover:bg-footer-label"
                                @click="setLocale   (flag)"
                            >
                                <img :src="flag.flag" class="w-4 h-4"/>
                                <p>{{flag.name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <transition>
            <div
                v-if="expandMenu"
                class="py-4"
            >
                <div class="flex flex-col gap-4">
                    <a class="py-1 block" href="/">Главная</a>
                    <div @click="isExpanded =!isExpanded">
                        <div class="flex">
                            <p class="cursor-pointer">Компания</p>
                            <img src="/img/down_white.svg" width="18" class="ml-1 cursor-pointer">
                        </div>
                        <div v-if="isExpanded"
                             class="px-3 py-4 flex flex-col gap-4"
                        >
                            <a
                                v-for="s in sub"
                                :href="s.href"
                                class="cursor-pointer"
                            >{{s.name}}</a>
                        </div>
                    </div>
                    <a class="py-1" href="/news">Новости</a>
                    <a class="py-1" href="/products">Наша продукция</a>
                    <a class="py-1" href="/gallery">Галерея</a>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "Navbar",
    data:() => ({
        sub: [
            {
                id: 0,
                name: 'О компании',
                href: '/about'
            },
            {
                id: 1,
                name: 'История компании',
                href: '/history'
            },
            {
                id: 2,
                name: 'Наши сертификаты',
                href: '/certificates'
            },
            {
                id: 3,
                name: 'Руководство',
                href: '/management'
            }
        ],
        flags: [
            {
                id: 0,
                name: 'ru',
                flag: '/img/ru.png'
            },
            {
                id: 1,
                name: 'kz',
                flag: '/img/kz.png'
            },
            {
                id: 2,
                name: 'en',
                flag: '/img/en.png'
            }
        ],
        lang: {
            name: 'ru',
            flag: '/img/ru.png'
        },
        showLang: false,
        isExpanded: false,
        expandMenu: false
    }),
    created() {
        window.addEventListener('click', this.closeLang)
        this.getLocale()
    },
    methods: {
        setLocale(flag){
            this.lang = flag
            this.showLang = false
            axios
                .get('/locale/'+ this.lang.name)
                .then(response => {
                    location.reload()
                })
                .catch(error => {
                    console.log(error)
                })
        },
        getLocale(){
            axios
                .get('/locale')
                .then(response => {
                    this.lang = response.data.locale
                })
                .catch(error => {
                    console.log(error)
                })
        },
        closeLang(e){
            if (!this.$el.contains(e.target)) {
                this.showLang = false
                this.isExpanded = false
                this.expandMenu = false
            }
        },
        expand(link){
            if (link.sub){
                this.isExpanded = true
            }
        },
        collapse(link){
            if (link.sub){
                this.isExpanded = false
            }
        }
    }
}
</script>
