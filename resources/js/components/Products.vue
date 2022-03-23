<template>
    <div>
        <div class="flex flex-col gap-3">
            <div
                v-for="type in product_types"
                class="border w-full p-5"
            >
                <div class="flex justify-between items-center cursor-pointer" @click="expand(type)">
                    <p class="uppercase font-semibold">{{type.title}}</p>
                    <img src="/img/down_white.svg" class="w-6">
                </div>
                <div
                    class="flex flex-col gap-10 transform transition-all duration-300 ease-out"
                    :class="type.expand ? 'pt-8 pb-3' : 'max-h-0'"
                >
                    <div
                        v-for="product in type.products"
                        :key="product.id"
                        v-if="product.is_active"
                        class="flex flex-col md:flex-row gap-5 md:gap-10 transform transition-all duration-700 ease-in overflow-y-hidden"
                        :class="type.expand ? 'max-h-screen' : 'max-h-0'"
                    >
                        <div class="w-full md:w-72 md:h-72 flex-shrink-0">
                            <img :src="/storage/+product.image" class="bg-cover">
                        </div>
                        <div>
                            <div>
                                <p class="font-light mb-1.5 line-clamp-1">{{product.measurement}}</p>
                                <p class="font-semibold text-xl uppercase mb-1">{{product.title}}</p>
                                <p class="text-sm mb-2">{{product.subtitle}}</p>
                            </div>
                            <div class="border-t mb-4 w-1/2"></div>
                            <p class="text-sm mb-3 line-clamp-4">{{product.description}}</p>
                            <a class="flex items-center cursor-pointer font-semibold text-sm mb-6" :href="'/products/'+product.id">
                                Подробнее <img src="/img/arrow.svg" class="w-6 ml-2">
                            </a>
                            <a class="bg-gray-100 hover:bg-gray-50 text-gray-900 px-5 py-2.5 cursor-pointer rounded-md font-medium text-sm" :href="product.link" target="_blank">Приобрести товар</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <loader v-if="loading"></loader>
    </div>
</template>

<script>
import Loader from "./Loader";
export default {
    name: "Products",
    components: {Loader},
    data: () => ({
        product_types: [],
        loading: true
    }),
    mounted() {
        this.fetchProducts()
    },
    methods: {
        fetchProducts(){
            axios
                .get('products-all')
                .then(response => {
                    this.product_types = response.data
                    this.loading = false
                })
                .catch(error => {
                    console.log(error)
                })
        },
        expand(product){
            product.expand =! product.expand
        }
    }
}
</script>
