<template>
    <div class="bg-news py-32 lg:py-48">
        <div class="max-w-6xl mx-auto px-4">

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
