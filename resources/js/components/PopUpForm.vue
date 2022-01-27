<template>
    <div>
        <transition name="bounce">
            <div v-if="popUp" class="h-screen w-full fixed top-0 left-0 z-30 flex items-center justify-center px-3 py-2 text-white">
                <div class="w-full max-w-md bg-black bg-opacity-70 rounded-xl shadow-xl relative">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-5">
                            <p class="uppercase font-semibold text-lg">{{$t('message.contact_us')}}</p>
                            <div class="flex justify-center items-center w-10 h-10 bg-white rounded-full cursor-pointer" @click="close">
                                <img src="/img/close_black.svg" class="w-5">
                            </div>
                        </div>

                        <div>
                            <input
                                v-model="name"
                                type="text"
                                class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                                :placeholder="$t('message.name')"
                            >
                            <input
                                v-model="mail"
                                type="text"
                                class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                                :placeholder="$t('message.mail')">
                            <input
                                v-model="phone"
                                type="text"
                                class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                                :placeholder="$t('message.phone')">
                            <input
                                v-model="subject"
                                type="text"
                                class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                                :placeholder="$t('message.subject')">
                            <textarea
                                v-model="question"
                                rows="5"
                                class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                                :placeholder="$t('message.question')">
                            </textarea>
                            <button type="submit" class="py-2.5 bg-submit w-full" @click="send">
                                {{$t('message.send')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    name: "PopUpForm",
    props: {
        popUp: Boolean
    },
    data: () =>({
        name: '',
        mail: '',
        phone: '',
        subject: '',
        question: ''
    }),
    methods: {
        close(){
            this.$emit('close')
        },
        send(){

        }
    }
}
</script>

<style scoped>
.bounce-enter-active {
    animation: bounce-in 1.3s;
}
.bounce-leave-active {
    animation: bounce-in 1s reverse;
}
@keyframes bounce-in {
    0% {
        transform: scale(0);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}
</style>
