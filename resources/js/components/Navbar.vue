<template>
    <div>
        <div class="fixed z-30 w-full">
            <div class="bg-gray-800 lg:bg-transparent flex flex-row justify-between lg:justify-center items-center px-3 h-16 md:h-20 transform transition-all duration-300 ease-linear"
                 :class="slide ? '-translate-y-full' : 'translate-y-0'"
            >
                <a class="cursor-pointer" href="/"><img src="/img/logo.png" alt="logo" class="h-9"></a>
                <div class="lg:hidden" @click="openCloseMobileMenu">
                    <img :src="!expandMobileMenu ? '/img/menu.svg' : '/img/close.svg'" width="30" class="cursor-pointer">
                </div>
            </div>
            <div
                class="px-3 transform transition-all duration-700 overflow-y-hidden lg:overflow-y-visible"
                :class="classObject"
            >
                <div class="max-w-5xl relative mx-auto flex flex-col lg:flex-row gap-4 lg:gap-14 lg:justify-center lg:items-center lg:h-20 uppercase">
                    <div class="cursor-pointer hover:scale-110 transform" @click="searchModal=true">
                        <img src="/img/search.svg" width="28">
                    </div>
                    <a
                        v-for="link in links"
                        :key="link.id"
                        :href="link.href"
                        @click="openCloseSubLink(link)"
                        @mouseover="expandSubLink(link)"
                        @mouseleave="collapseSubLink(link)"
                        class="cursor-pointer relative py-2 link"
                    >
                        <div class="flex items-center gap-x-2">
                            {{link.title}}
                            <div v-if="link.sub_links" class="lg:hidden">
                                <img :src="link.is_visible ? '/img/up_white.svg' : '/img/down_white.svg'" width="18">
                            </div>
                        </div>
                        <div class="lg:absolute mt-2 max-h-0 overflow-y-hidden transition-all duration-300 ease-in"
                             :class="link.is_visible ? 'max-h-screen lg:py-6' : 'max-h-0'">
                            <div class="flex flex-col gap-2 w-72 bg-gray-800 bg-opacity-90 p-3">
                                <a
                                    v-for="sub in link.sub_links"
                                    :key="sub.id"
                                    :href="sub.href"
                                    class="cursor-pointer px-3 relative inline-block py-2 hover:bg-gray-900"
                                >
                                    {{sub.name}}
                                </a>
                            </div>
                        </div>
                    </a>
                    <div
                        class="uppercase cursor-pointer py-2 relative inline-block link"
                        @click="expandLanguages =! expandLanguages"
                        @mouseover="expandLocale"
                        @mouseleave="collapseLocale"
                    >
                        <div class="flex items-center gap-x-2">
                            <div class="flex items-center gap-2">
                                <img :src="locale.flag" class="w-5 h-5">{{locale.name}}
                            </div>
                            <img :src="expandLanguages ? '/img/up_white.svg' : '/img/down_white.svg'" width="18" class="lg:hidden">
                        </div>
                        <div
                            class="lg:absolute -left-5 mt-2 transition-all duration-300 ease-in w-24"
                            :class="slideMenu"
                        >
                            <div class="flex flex-col gap-2 bg-gray-800 bg-opacity-90 py-3 px-3">
                                <a
                                    v-for="flag in flags"
                                    :key="flag.id"
                                    class="cursor-pointer relative py-2 px-2 hover:bg-gray-900"
                                    @click="setLocale(flag)"
                                >
                                    <div class="flex items-center gap-2">
                                        <img :src="flag.flag" class="w-5 h-5">{{flag.name}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <SearchModal :is-visible="searchModal" @close="searchModal = false"/>
    </div>
</template>

<script>
import SearchModal from "./SearchModal";
export default {
    name: "Navbar",
    components: {SearchModal},
    data: function() {
        return {
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
            links: [
                {
                    id: 0,
                    title: this.$i18n.t('message.main'),
                    href: '/',
                    is_visible: false
                },
                {
                    id: 1,
                    title: this.$i18n.t('message.company'),
                    href: '#',
                    is_visible: false,
                    sub_links: [
                        {
                            id: 0,
                            name: this.$i18n.t('message.about'),
                            href: '/about'
                        },
                        {
                            id: 1,
                            name: this.$i18n.t('message.history'),
                            href: '/history'
                        },
                        {
                            id: 2,
                            name: this.$i18n.t('message.management'),
                            href: '/management'
                        },
                        {
                            id: 3,
                            name: this.$i18n.t('message.certificates'),
                            href: '/certificates'
                        }
                    ]
                },
                {
                    id: 2,
                    title: this.$i18n.t('message.news'),
                    href: '/news',
                    is_visible: false
                },
                {
                    id: 3,
                    title: this.$i18n.t('message.products'),
                    href: '/products',
                    is_visible: false
                },
                {
                    id: 4,
                    title: this.$i18n.t('message.gallery'),
                    href: '/gallery',
                    is_visible: false
                }
            ],
            expandMobileMenu: false,
            slide: false,
            expandLanguages: false,
            expandSubLinks: false,
            searchModal: true
        }
    },
    computed: {
        classObject: function (){
            return {
                'max-h-screen ease-in-out bg-gray-800 py-8': this.expandMobileMenu,
                'max-h-0 lg:max-h-screen': !this.expandMobileMenu,
                '-translate-y-full bg-gray-800' : this.slide,
                'translate-y-0 bg-transparent': !this.slide
            }
        },
        slideMenu: function (){
            return {
                'overflow-y-hidden max-h-0': !this.expandLanguages,
                'max-h-screen lg:py-6': this.expandLanguages
            }
        }
    },
    mounted() {
        window.addEventListener('scroll', this.onScroll)
        this.getLocale()
    },
    beforeDestroy() {
        window.removeEventListener('scroll', this.onScroll)
    },
    methods: {
        onScroll(){
            if (window.innerWidth < 1024) return
            this.slide = window.scrollY > 64;
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
            axios
                .get('/locale/'+ this.locale.name)
                .then(() => {
                    this.$store.dispatch('setLocale', flag.name)
                    location.reload()
                })
                .catch(error => {
                    console.log(error)
                })
        },
        expandLocale(){
            if (window.innerWidth < 1024) return
            this.expandLanguages = true
        },
        collapseLocale(){
            if (window.innerWidth < 1024) return
            this.expandLanguages = false
        },
        expandSubLink(link){
            if (window.innerWidth < 1024) return
            if (link.sub_links && link.sub_links.length > 0){
                link.is_visible = true
            }
        },
        collapseSubLink(link){
            if (window.innerWidth < 1024) return
            link.is_visible = false
        },
        openCloseSubLink(link){
            if (link.sub_links && link.sub_links.length > 0){
                link.is_visible =! link.is_visible
            }
        },
        openCloseMobileMenu(){
            this.expandLanguages = false
            this.links.map(x => x.is_visible = false)
            this.expandMobileMenu =! this.expandMobileMenu
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
