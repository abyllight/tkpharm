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
                        <img :src="/storage/+item.image">
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
        gallery: []
    }),
    async mounted() {
        await axios
            .get('gallery-all')
            .then(response => {
                this.gallery = response.data
            })
            .catch(error => {
                console.log(error)
            })
    }
}
</script>
