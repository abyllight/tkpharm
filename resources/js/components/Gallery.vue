<template>
    <div class="bg-gallery py-32 lg:py-48">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center mb-8 lg:mb-12">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    Галерея
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div>
                <stack :column-min-width="320" :gutter-width="16" :gutter-height="16" monitor-images-loaded>
                    <stack-item v-for="(item, i) in gallery" :key="i" style="transition: transform 300ms">
                        <img :src="item.img">
                    </stack-item>
                </stack>
            </div>
        </div>
    </div>
</template>

<script>
import { Stack, StackItem } from "vue-stack-grid";
export default {
    name: "Gallery",
    components: { Stack, StackItem },
    data: () => ({
        gallery: [
            {
                id: 0,
                img: '/img/gallery/g1.png'
            },
            {
                id: 1,
                img: '/img/gallery/g2.png'
            },
            {
                id: 2,
                img: '/img/gallery/g3.png'
            },
            {
                id: 3,
                img: '/img/gallery/g4.png'
            },
            {
                id: 4,
                img: '/img/gallery/g5.png'
            },
            {
                id: 5,
                img: '/img/gallery/g6.png'
            },
            {
                id: 6,
                img: '/img/gallery/g7.png'
            },
            {
                id: 7,
                img: '/img/gallery/g8.png'
            },
            {
                id: 8,
                img: '/img/gallery/g9.png'
            },
            {
                id: 9,
                img: '/img/gallery/g10.png'
            },
            {
                id: 10,
                img: '/img/gallery/g11.png'
            },
            {
                id: 11,
                img: '/img/gallery/g12.png'
            },
            {
                id: 12,
                img: '/img/gallery/g13.png'
            },
            {
                id: 13,
                img: '/img/gallery/g14.png'
            },
            {
                id: 14,
                img: '/img/gallery/g15.png'
            },
        ]
    })
}
</script>
