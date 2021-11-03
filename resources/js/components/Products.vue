<template>
    <div class="bg-products py-32 lg:py-48">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center mb-8 lg:mb-12">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    Наша продукция
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="flex flex-col gap-3">
                <div
                    v-for="type in product_types"
                    class="border w-full p-5"
                    @click="expand(type)"
                >
                    <div class="flex justify-between items-center cursor-pointer">
                        <p class="uppercase font-semibold">{{type.title}}</p>
                        <img src="/img/down_white.svg" class="w-6">
                    </div>
                    <div
                        v-if="type.expand"
                        class="flex flex-col gap-10 pt-8 pb-3">
                        <div
                            v-for="product in type.products"
                            :key="product.id"
                            v-if="product.is_active"
                            class="flex flex-col md:flex-row gap-5 md:gap-10"
                        >
                            <img :src="/storage/+product.image" class="md:w-64">
                            <div>
                                <div>
                                    <p class="font-light mb-1.5">{{product.amount}} {{product.measurement}}</p>
                                    <p class="font-semibold text-2xl uppercase mb-1">{{product.title}}</p>
                                    <p class="text-sm mb-2">{{product.subtitle}}</p>
                                </div>
                                <div class="border-t mb-4 w-1/2"></div>
                                <p class="text-sm mb-6 line-clamp-4">{{product.description}}</p>
                                <a class="flex items-center cursor-pointer font-semibold text-sm" href="#">Приобрести товар на сайте партнера <img src="/img/arrow.svg" class="w-6 ml-2"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Products",
    data: () => ({
        product_types: []
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
