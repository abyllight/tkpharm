<template>
    <div class="relative flex items-center">
        <div class="w-full overflow-hidden relative h-72 flex items-center">
            <div
                v-for="(slide, index) in arr"
                class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 items-center absolute inset-x-0 transform slide transition-all ease-in-out duration-1000"
                :class="index === 0 ? 'translate-x-0' : 'translate-x-full'"
            >
                <div v-for="item in slide">
                    <img :src="item.img" class="mx-auto" :class="item.l ? 'w-56' : 'w-48'">
                </div>
            </div>
        </div>
        <div
            v-if="idx > 0"
            class="absolute -left-5 lg:-left-8 z-20 cursor-pointer"
            @click="prev"
        >
            <img src="/img/leftb.svg" class="w-10"/>
        </div>
        <div
            v-if="idx < arr.length - 1"
            class="absolute -right-5 lg:-right-8 z-20 cursor-pointer"
            @click="next"
        >
            <img src="/img/rightb.svg" class="w-10"/>
        </div>
    </div>
</template>

<script>
export default {
    name: "Achievements",
    data: () => ({
        certs: [
            {
                img: '/img/cert/1.jpg'
            },
            {
                img: '/img/cert/2.jpg'
            },
            {
                img: '/img/cert/5.jpg',
                l: true
            },
            {
                img: '/img/cert/6.jpg',
                l: true
            },
            {
                img: '/img/cert/3.jpg'
            },
            {
                img: '/img/cert/4.jpg'
            }
        ],
        arr: [],
        idx: 0
    }),
    mounted() {
        let width = window.innerWidth
        let n = 1;

        if (width >= 768 && width < 1024) {
            n = 3
        }else if (width >= 1024) {
            n = 4
        }

        for (let i = 0; i < this.certs.length / n; i++) {
            let a = this.certs.slice(i * n, (i+1) * n)
            this.arr.push(a)
        }
    },
    methods: {
        prev(){
            let active = document.querySelector('.slide.translate-x-0')
            let prev = active.previousElementSibling;

            if (prev){
                this.idx--
                let active = document.querySelector('.slide.translate-x-0')
                active.classList.remove('translate-x-0')
                active.classList.add('translate-x-full')

                prev.classList.remove('-translate-x-full')
                prev.classList.add('translate-x-0')
            }
        },
        next(){
            let active = document.querySelector('.slide.translate-x-0')
            let next = active.nextElementSibling;

            if (next){
                this.idx++
                let active = document.querySelector('.slide.translate-x-0')

                active.classList.remove('translate-x-0')
                active.classList.add('-translate-x-full')

                next.classList.remove('translate-x-full')
                next.classList.add('translate-x-0')
            }
        }
    }
}
</script>
