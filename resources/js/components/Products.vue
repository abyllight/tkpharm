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
                    v-for="product in products"
                    class="border w-full p-4"
                    @click="expand(product)"
                >
                    <div class="flex justify-between items-center cursor-pointer">
                        <p class="uppercase font-semibold">{{product.group_name}}</p>
                        <img src="/img/down_white.svg" class="w-6">
                    </div>
                    <div
                        v-if="product.expand"
                        class="flex flex-col gap-6 pt-8 pb-3">
                        <div
                            v-for="item in product.items"
                            class="flex gap-10"
                        >
                            <img src="/img/product.png">
                            <div>
                                {{item.name}}
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
        products: [
            {
                id: 0,
                group_name: 'Obezbol',
                expand: false,
                items: [
                    {
                        id: 0,
                        name: 'item1'
                    },
                    {
                        id: 1,
                        name: 'item2'
                    }
                ],
            },
            {
                id: 1,
                group_name: 'Syrop',
                expand: false,
                items: [
                    {
                        id: 0,
                        name: 'item1 syrop'
                    },
                    {
                        id: 1,
                        name: 'item2 syrop'
                    },
                    {
                        id: 2,
                        name: 'item3 syrop'
                    }
                ]
            },
            {
                id: 2,
                group_name: 'Tablets',
                expand: false,
                items: [
                    {
                        id: 0,
                        name: 'item1 tablet'
                    },
                    {
                        id: 1,
                        name: 'item2 tablet'
                    },
                    {
                        id: 2,
                        name: 'item3 tablet'
                    }
                ]
            },
            {
                id: 1,
                group_name: 'Ampula',
                expand: false,
                items: [
                    {
                        id: 0,
                        name: 'item1 ampula'
                    },
                    {
                        id: 1,
                        name: 'item2 amp'
                    },
                    {
                        id: 2,
                        name: 'item3 amp'
                    },
                    {
                        id: 3,
                        name: 'item4 amp'
                    }
                ]
            }
        ]
    }),
    methods: {
        expand(product){
            product.expand =! product.expand
        }
    }
}
</script>
