<template>
    <div class="w-full bg-gray-800 lg:bg-transparent fixed z-30">
        <div>
            <div class="flex flex-row lg:flex-col justify-between items-center relative">
                <div class="p-4 transform transition-all duration-300 ease-linear"
                    :class="slide ? '-translate-y-full' : 'translate-y-0'"
                >
                    <a class="cursor-pointer" href="/"><img src="/img/logo.png" alt="logo" class="h-8"></a>
                </div>
                <div class="lg:w-full p-4 transform transition-all duration-300 ease-linear"
                    :class="slide ? 'bg-gray-800 -translate-y-full' : 'translate-y-0'"
                >
                    <div class="lg:hidden" @click="openCloseMenu">
                        <img :src="!expandMobileMenu ? '/img/menu.svg' : '/img/close.svg'" width="30" class="cursor-pointer">
                    </div>
                    <div class="hidden lg:flex gap-x-12 items-center justify-center relative">
                        <a
                            v-for="link in links"
                            :key="link.id"
                            :href="link.href"
                            @mouseover="expandCompany(link)"
                            @mouseleave="collapseCompany(link)"
                            class="uppercase text-sm cursor-pointer relative py-2 inline-block link"
                        >
                            {{link.title}}
                            <!-- Sub menu -->
                            <div
                                v-if="link.sub_links && expandLargeMenu"
                                class="absolute py-8 border left-0 w-screen max-w-2xl mx-auto overflow-x-hidden max-h-0 transition-all duration-700 ease-in-out"
                                :class="expandLargeMenu ? 'max-h-screen' : 'max-h-0'"
                            >
                                <div class="absolute bg-gray-800 bg-opacity-70 p-6">
                                    asf
                                </div>
                            </div>
                        </a>
                        <div
                            class="uppercase text-sm cursor-pointer relative py-2 inline-block"
                            @mouseover="expandLanguages=true"
                            @mouseleave="expandLanguages=false"
                        >
                            {{locale.name}}
                            <div v-if="expandLanguages"  class="absolute -left-3 mt-2 py-2 flex flex-col gap-2 bg-gray-800 bg-opacity-90 px-3">
                                <a
                                    v-for="flag in flags"
                                    :key="flag.id"
                                    class="cursor-pointer link relative py-2 inline-block"
                                    @click="setLocale(flag)"
                                >
                                    {{flag.name}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu-->
            <div
                class="bg-gray-800 overflow-y-hidden max-h-0 transition-all duration-700 ease-in-out"
                :class="expandMobileMenu ? 'max-h-screen' : 'max-h-0'"
            >
                <div class="flex flex-col gap-4 p-4">
                    <a
                        v-for="link in links"
                        :key="link.id"
                        class="py-2 block cursor-pointer text-sm uppercase"
                        @click="expandMobileDiv(link)"
                    >
                        <div class="flex items-center gap-x-2">
                            {{link.title}}
                            <div v-if="link.sub_links">
                                <img :src="expandMobile ? '/img/up_white.svg' : '/img/down_white.svg'" width="18">
                            </div>
                        </div>

                        <div
                            v-if="link.sub_links"
                            class="overflow-y-hidden max-h-0 transition-all duration-700 ease-in-out"
                            :class="expandMobile ? 'max-h-screen' : 'max-h-0'"
                        >
                            <div class="flex flex-col gap-6 px-4 pt-8">
                                <a
                                    v-for="sub in link.sub_links"
                                    :href="sub.href"
                                    class="cursor-pointer"
                                >
                                    {{sub.name}}
                                </a>
                            </div>
                        </div>
                    </a>
                    <a class="py-2 block cursor-pointer text-sm uppercase" @click="expandLanguages =! expandLanguages">
                        <div class="flex items-center gap-x-2">
                            {{locale.name}}
                            <img :src="expandLanguages ? '/img/up_white.svg' : '/img/down_white.svg'" width="18">
                        </div>

                        <div class="overflow-y-hidden max-h-0 transition-all duration-700 ease-in-out"
                            :class="expandLanguages ? 'max-h-screen' : 'max-h-0'"
                        >
                            <div class="flex flex-col gap-6 px-4 pt-8">
                                <a
                                    v-for="flag in flags"
                                    class="cursor-pointer"
                                    @click="setLocale(flag)"
                                >
                                    {{flag.name}}
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navbar2",
    data: () => ({
        links: [
            {
                id: 0,
                title: 'Главная',
                href: '/'
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
                href: '/news'
            },
            {
                id: 3,
                title: 'Наша продукция',
                href: '/products'
            },
            {
                id: 4,
                title: 'Галерея',
                href: '/gallery'
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
        locale: {
            name: 'ru',
            flag: '/img/ru.png'
        },
        slide: false,
        expandLanguages: false,
        expandMobileMenu: false,
        expandMobile: false,
        expandLargeMenu: false
    }),
    mounted() {
        window.addEventListener('scroll', this.onScroll)
    },
    created() {
        this.getLocale()
    },
    beforeDestroy() {
        window.removeEventListener('scroll', this.onScroll)
    },
    methods: {
        onScroll(){
            if (window.innerWidth < 1024) return
            this.slide = window.scrollY > 80;
        },
        getLocale() {
            axios
                .get('/locale')
                .then(response => {
                    this.locale = response.data.locale
                })
                .catch(error => {
                    console.log(error)
                })
        },
        setLocale(flag) {
            this.locale = flag
            this.expandLanguages = false
            axios
                .get('/locale/'+ this.locale.name)
                .then(response => {
                    location.reload()
                })
                .catch(error => {
                    console.log(error)
                })
        },
        openCloseMenu(){
            this.expandMobileMenu =! this.expandMobileMenu
            this.expandMobile = false
            this.expandLanguages = false
        },
        expandMobileDiv(link){
            if (link.sub_links){
                this.expandMobile =! this.expandMobile
            }
        },
        expandCompany(link){
            if (link.sub_links.length > 0) this.expandLargeMenu = true
        },
        collapseCompany(link){
            if (link.sub_links) this.expandLargeMenu = false
        }
    }
}
</script>

<style scoped>
    .link:hover::after {
        width: 100%;
        right: 0;
    }

    .link::after {
        background: none repeat scroll 0 0 transparent;
        bottom: 0;
        content: "";
        display: block;
        height: 4px;
        left: 0;
        position: absolute;
        background: linear-gradient(to left, #f69ec4, #f9dd94 100%);
        transition: width .5s ease 0s, right .5s ease 0s;
        width: 0;
    }
</style>
