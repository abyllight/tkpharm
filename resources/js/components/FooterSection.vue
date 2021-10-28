<template>
    <div class="bg-footer py-6 text-footer-color">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row md:justify-around md:items-center md:my-12">
                <div class="flex flex-col md:flex-row gap-8 md:gap-28">
                    <div>
                        <div
                            class="flex justify-between items-start cursor-pointer md:cursor-auto"
                            @click="collapseFirst"
                        >
                            <p class="font-semibold uppercase mb-4 text-lg">Навигация</p>
                            <img :src="first ? up : down" width="32" class="md:hidden">
                        </div>
                        <div
                            v-if="first"
                            class="flex flex-col font-light">
                            <a class="mb-3.5" href="/">Главная</a>
                            <a class="mb-3.5" href="/about">О компании</a>
                            <a class="mb-3.5" href="/news">Новости</a>
                            <a class="mb-3.5" href="/products">Наша продукция</a>
                            <a href="/gallery">Галерея</a>
                        </div>
                    </div>
                    <div>
                        <div
                            class="flex justify-between items-start cursor-pointer md:cursor-auto"
                            @click="collapseSecond"
                        >
                            <p class="font-semibold uppercase mb-4 text-lg">Контакты</p>
                            <img :src="second ? up : down" width="32" class="md:hidden">
                        </div>
                        <div
                            v-if="second"
                            class="flex flex-col font-light">
                            <div class="mb-2">
                                <p class="font-medium text-footer-label mb-1">Адрес</p>
                                <p>Фурманова 14А</p>
                            </div>
                            <div class="mb-2">
                                <p class="font-medium text-footer-label mb-1">E-mail</p>
                                <a href="mailto:tkfarm@gmail.com">TKFARM@gmail.com</a>
                            </div>
                            <div>
                                <p class="font-medium text-footer-label mb-1">Телефон</p>
                                <a href="tel:+77084224242">+7 (708) 422 - 42 - 42</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t border-footer-divider my-8 md:hidden"></div>
                <div class="w-full md:w-72">
                    <h3 class="font-semibold uppercase text-2xl mb-3">Свяжитесь с нами</h3>
                    <div class="w-full border uppercase bg-footer-color text-white flex justify-center py-2.5 text-sm">
                        Связаться
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm border-t border-black md:border-0 pt-2 mt-4">
                <p class="uppercase"><span class="font-light">2021 ©</span> <span class="font-semibold">ТК фарм</span></p>
                <p>Все права защищены</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FooterSection",
    data: () => ({
        first: true,
        second: true,
        up: '/img/up.svg',
        down: '/img/down.svg'
    }),
    computed:{
        isLarge() {
            return screen.width >= 760
        }
    },
    methods: {
        collapseFirst(){
            if (this.isLarge) return true
            this.first =! this.first
        },
        collapseSecond(){
            if (this.isLarge) return true
            this.second =! this.second
        }
    }
}
</script>
