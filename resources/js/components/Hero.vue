<template>
    <div class="py-32 lg:py-60" :style="{backgroundImage: 'url(storage/'+bg+')'}">
        <div class="max-w-6xl mx-auto px-4 flex w-full items-center">
            <div class="md:w-2/3 md:border-l md:pl-4">
                <h1 class="font-black text-xl md:text-4xl uppercase md:leading-snug mb-5">
                    ОДНА ИЗ КРУПНЕЙШИХ ФАРМАЦЕВТИЧЕСКИХ КОМПАНИЙ В КАЗАХСТАНЕ
                </h1>
                <p class="text-sm md:text-base">
                    «ТК Фарм Актобе» является одной из крупнейших фармацевтических компаний не только в Актюбинской области, но и по всему Казахстану.
                    Компания производит выпуск субстанций, жидких и твердых лекарственных препаратов, а также медицинских масок
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Hero",
    data: () => ({
        bg: ''
    }),
    created() {
        this.getBg()
    },
    methods: {
        async getBg(){
            await axios.get('/api/hero')
                .then(response => {
                    this.bg = response.data.bg.image
                })
        }
    }
}
</script>
