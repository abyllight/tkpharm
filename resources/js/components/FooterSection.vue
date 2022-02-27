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
                            <a class="mb-3.5" href="/">{{$t('message.main')}}</a>
                            <a class="mb-3.5" href="/about">{{$t('message.about')}}</a>
                            <a class="mb-3.5" href="/news">{{$t('message.news')}}</a>
                            <a class="mb-3.5" href="/products">{{$t('message.products')}}</a>
                            <a href="/gallery">{{$t('message.gallery')}}</a>
                        </div>
                    </div>
                    <div>
                        <div
                            class="flex justify-between items-start cursor-pointer md:cursor-auto"
                            @click="collapseSecond"
                        >
                            <p class="font-semibold uppercase mb-4 text-lg">{{$t('message.contacts')}}</p>
                            <img :src="second ? up : down" width="32" class="md:hidden">
                        </div>
                        <div
                            v-if="second"
                            class="flex flex-col font-light">
                            <div class="mb-2 max-w-sm">
                                <p class="font-medium text-footer-label mb-1">{{$t('message.address')}}</p>
                                <p>Республика Казахстан, Актюбинская обл., г. Актобе, р-н Астана, с. Шестихатка, ж.м. Шестихатка, зд. № 467</p>
                            </div>
                            <div class="mb-2">
                                <p class="font-medium text-footer-label mb-1">E-mail</p>
                                <a href="mailto:tkfarm@gmail.com">dir-tkpharm@mail.ru</a>
                            </div>
                            <div>
                                <p class="font-medium text-footer-label mb-1">{{$t('message.phone')}}</p>
                                <a href="tel:+77132217215">8 (7132) 21 72 15</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t border-footer-divider my-8 md:hidden"></div>
                <div class="w-full md:w-72">
                    <h3 class="font-semibold uppercase text-xl text-center mb-3">{{$t('message.contact_us')}}</h3>
                    <div @click="popUp = true" class="cursor-pointer w-full border uppercase bg-footer-color text-white flex justify-center py-2.5 text-sm">
                        {{$t('message.contact')}}
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm border-t border-black md:border-0 pt-2 mt-4">
                <p class="uppercase"><span class="font-light">2021 ©</span> <span class="font-semibold">ТК фарм</span></p>
                <p>{{$t('message.rights')}}</p>
            </div>
        </div>
        <PopUpForm :pop-up="popUp" @close="popUp=false"/>
    </div>
</template>
<script>
import PopUpForm from "./PopUpForm";
export default {
    name: "FooterSection",
    components: {PopUpForm},
    data: () => ({
        first: true,
        second: true,
        up: '/img/up.svg',
        down: '/img/down.svg',
        popUp: false
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
