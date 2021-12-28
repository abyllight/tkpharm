<template>
    <div>
        <stack :column-min-width="320" :gutter-width="16" :gutter-height="16" monitor-images-loaded>
            <stack-item v-for="(item, i) in gallery" :key="i" style="transition: transform 300ms">
                <img :src="/storage/+item.image">
            </stack-item>
        </stack>
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
