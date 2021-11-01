<template>
    <div class="max-w-6xl relative mx-auto px-4 pt-4 pb-4 bg-black bg-opacity-70 lg:bg-transparent lg:hover:bg-black lg:hover:bg-opacity-70 fixed z-30 lg:absolute inset-x-0 transition-all ease-in-out duration-300">
        <div class="lg:border-b lg:pb-3">
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
                        <div class="font-bold flex items-center divide-x">
                            <a
                                v-for="link in links"
                                :key="link.id"
                                :href="link.href"
                                class="menu-item px-6 flex items-center gap-2"
                                @mouseover="expandCompany(link)"
                                @mouseleave="collapseCompany(link)"
                            >
                                <div>
                                    <span v-for="(word,index) in createSpans(link.title)" class="menu-item-text" :style="{'--index': index}">{{word}}</span>
                                </div>
                                <div class="absolute top-0">
                                    <span v-for="(word,index) in createSpans(link.title)" class="menu-item-text" :style="{'--index': index}">{{word}}</span>
                                </div>
                                <div v-if="link.sub_links">
                                    <img :src="isExpanded ? '/img/up_white.svg' : '/img/down_white.svg'" width="18" class="cursor-pointer">
                                </div>
                            </a>
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

            <div
                class="overflow-y-hidden max-h-0 transition-all duration-700 ease-in-out"
                :class="expandMenu ? 'max-h-screen' : 'max-h-0'"
            >
                <div class="flex flex-col gap-4 py-4">
                    <a
                        v-for="link in links"
                        :key="link.id"

                        class="py-1.5 block cursor-pointer"
                        @click="expandMobile(link)"
                    >
                        <div class="flex items-center gap-2">
                            {{link.title}}
                            <div v-if="link.sub_links">
                                <img :src="isExpandedMobile ? '/img/up_white.svg' : '/img/down_white.svg'" width="18">
                            </div>
                        </div>

                        <div
                            v-if="link.sub_links && isExpandedMobile"
                            class="px-3 py-4 flex flex-col gap-4"
                        >
                            <a
                                v-for="s in sub"
                                :href="s.href"
                                class="cursor-pointer"
                            >{{s.name}}</a>
                        </div>
                    </a>
<!--                    <a class="py-1 block" href="/">Главная</a>
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
                    <a class="py-1" href="/gallery">Галерея</a>-->
                </div>
            </div>
        </div>
        <div
            @mouseover="isExpanded=true"
            @mouseleave="isExpanded=false"
            class="w-full mt-0 overflow-y-hidden max-h-0 transition-all duration-700 ease-in-out"
            :class="isExpanded ? 'max-h-screen' : 'max-h-0'"
        >
            <div class="flex flex-col items-center gap-5 py-10">
                <p class="uppercase font-bold text-2xl mb-4">Компания</p>
                <a
                    v-for="s in sub"
                    :href="s.href"
                    class="cursor-pointer"
                >{{s.name}}</a>
            </div>
        </div>
    </div>
</template>
<style scoped>
    .menu-item{
        position: relative;
        cursor: pointer;
    }

    .menu-item-text{
        position: relative;
    }

    .menu-item > div:nth-child(1) span{
        will-change: transform;
        transform-style: preserve-3d;
        transition: 0.3s;
        transition-delay: calc(0.03s * var(--index));
        transform-origin: bottom;
        display: inline-block;
    }

    .menu-item > div:nth-child(2) span{
        will-change: transform;
        transform-style: preserve-3d;
        transition: 0.3s;
        transition-delay: calc(0.03s * var(--index));
        transform-origin: top;
        display: inline-block;
        transform: translate3d(0, 100%, 0) rotateX(-90deg);
    }

    .menu-item:hover > div:nth-child(1) span{
        transform: translate3d(0, -100%, 0) rotateX(-90deg);
    }

    .menu-item:hover > div:nth-child(2) span{
        transform: translate3d(0, 0%, 0) rotateX(0deg);
    }
</style>
<script>
export default {
    name: "Navbar",
    data:() => ({
        links: [
            {
                id: 0,
                title: 'Главная',
                href: '/',
                sub_links: false
            },
            {
                id: 1,
                title: 'Компания',
                href: '',
                sub_links: [
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
                        name: 'Руководство',
                        href: '/management'
                    },
                    {
                        id: 3,
                        name: 'Наши сертификаты',
                        href: '/certificates'
                    }
                ]
            },
            {
                id: 2,
                title: 'Новости',
                href: '/news',
                sub_links: false
            },
            {
                id: 3,
                title: 'Продукция',
                href: '/products',
                sub_links: false
            },
            {
                id: 4,
                title: 'Галерея',
                href: '/gallery',
                sub_links: false
            }
        ],
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
                name: 'Руководство',
                href: '/management'
            },
            {
                id: 3,
                name: 'Наши сертификаты',
                href: '/certificates'
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
        isExpandedMobile: false,
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
            if (link.sub_links){
                this.isExpanded =! this.isExpanded
            }
        },
        expandMobile(link){
            if (link.sub_links){
                this.isExpandedMobile =! this.isExpandedMobile
            }
        },
        collapse(link){
            if (link.sub){
                this.isExpanded = false
            }
        },
        createSpans(word){
            return word.split('');
        },
        expandCompany(link){
            if (link.sub_links) this.isExpanded = true
        },
        collapseCompany(link){
            if (link.sub_links) this.isExpanded = false
        }
    }
}
</script>
