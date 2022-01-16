<template>
    <div class="relative">
        <div
            v-for="(item, key) in items"
            class="flex justify-between"
        >
            <div
                class="max-w-md xl:max-w-lg w-full lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3"
                :class="(key+1)%2 === 0 ? 'lg:order-last' : ''"
            >
                <p class="text-4xl font-semibold mb-4">{{item.year}}</p>
                <h3 class="font-bold uppercase text-lg md:text-xl mb-3">{{ item.title }}</h3>
                <p class="text-sm md:text-base">
                    {{ item.description }}
                </p>
            </div>
            <div
                class="hidden lg:flex flex-col items-center"
                :class="(key+1)%2 === 0 ? 'lg:order-2' : ''"
            >
                <div class="border-l h-4/5"></div>
                <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                    <h1 class="mx-auto text-3xl font-light">{{key+1}}</h1>
                </div>
                <div class="border-l h-1/3"></div>
            </div>
            <div
                class="max-w-md xl:max-w-lg hidden lg:block w-full lg:flex-shrink-0"
                :class="(key+1)%2 === 0 ? 'lg:order-1' : ''"
            ></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Histories",
    data: () => ({
        items: []
    }),
    created() {
        this.fetchHistories()
    },
    methods: {
        fetchHistories(){
            axios
                .get('/histories')
                .then(response => {
                    this.items = response.data
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>
