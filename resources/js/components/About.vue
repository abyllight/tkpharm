<template>
    <div class="py-4 md:py-10 lg:py-16">
        <div>
            <div @wheel="scrollHorizontally" ref="scrl" class="flex overflow-y-scroll hide-scroll-bar">
                <div class="flex flex-shrink-0 space-x-12 md:space-x-16 lg:space-x-32">
                    <template
                        v-for="(item, key) in items"
                    >
                        <div
                            class="w-80 md:max-w-2xl lg:max-w-3xl md:w-full"
                        >
                            <h1 class="font-bold text-xl md:text-3xl md:uppercase mb-5">
                                {{item.title}}
                            </h1>
                            <p class="text-sm md:text-base md:w-4/5">
                                {{item.sub}}
                            </p>
                        </div>
                        <div v-if="key !== items.length-1" class="border-r"></div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "About",
    data: () => ({
        items: []
    }),
    created() {
        this.getAbout()
    },
    methods: {
        getAbout(){
            axios.get('/about-data')
                .then(response => {
                    this.items = response.data.data
                })
        },
        scrollHorizontally(e) {
            if (!e.deltaY) return
            let scrollDirection = (e.deltaY > 0) ? 1 : -1;
            let el = this.$refs.scrl
            el.scrollLeft = el.scrollLeft + e.deltaY
            let scrollLeft = Math.round(el.scrollLeft)
            let maxScrollLeft = Math.round( el.scrollWidth - el.clientWidth );

            if((scrollDirection === -1  && scrollLeft > 0) || (scrollDirection === 1 && scrollLeft < maxScrollLeft )) e.preventDefault()

            return true
        }
    }
}
</script>
<style>
.hide-scroll-bar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.hide-scroll-bar::-webkit-scrollbar {
    display: none;
}
</style>
