<template>
    <div>
        <div v-if="popUp" :data-aos="popUp ? 'fade-in' : 'fade-out'" class="h-screen w-full fixed bg-black bg-opacity-60 top-0 left-0 z-30 flex items-center justify-center px-3 py-2 text-white">
            <div :data-aos="popUp ? 'zoom-in' : 'zoom-out'" class="w-full max-w-md bg-black bg-opacity-70 rounded-xl shadow-xl relative">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-5">
                        <p v-if="!success" class="uppercase font-semibold text-lg">{{$t('message.contact_us')}}</p>
                        <p></p>
                        <div class="flex justify-center items-center w-10 h-10 bg-white rounded-full cursor-pointer" @click="close">
                            <img src="/img/close_black.svg" class="w-5">
                        </div>
                    </div>

                    <div v-if="!success">
                        <input
                            v-model="name"
                            type="text"
                            class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                            :placeholder="$t('message.name')"
                            :class="{'border-red-500': errors.name}"
                        >
                        <input
                            v-model="email"
                            type="email"
                            class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                            :placeholder="$t('message.mail')"
                            :class="{'border-red-500': errors.email}"
                        >
                        <input
                            v-model="phone"
                            type="text"
                            class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                            :placeholder="$t('message.phone')"
                            v-maska="'+7 (###) ###-##-##'"
                            :class="{'border-red-500': errors.phone}"
                        >
                        <input
                            v-model="subject"
                            type="text"
                            class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                            :placeholder="$t('message.subject')"
                            :class="{'border-red-500': errors.subject}"
                        >
                        <textarea
                            v-model="message"
                            rows="5"
                            class="bg-transparent w-full border-b mb-6 py-3 px-4 focus:outline-none focus:border-blue-500 focus:ring-blue-500"
                            :placeholder="$t('message.question')"
                            :class="{'border-red-500': errors.message}"
                        >
                            </textarea>
                        <button type="submit" class="py-2.5 bg-submit w-full" @click="send">
                            {{$t('message.send')}}
                        </button>
                    </div>
                    <div v-else class="text-center p-10">
                        Ваше сообщение отправлено!
                    </div>
                </div>
            </div>
        </div>
        <div v-if="loading" class="h-screen w-full bg-black bg-opacity-60 fixed top-0 left-0 z-30 flex items-center justify-center px-3 py-2 text-white">
            <loader/>
        </div>
    </div>
</template>

<script>
import { maska } from 'maska'
import Loader from "./Loader";
export default {
    name: "PopUpForm",
    components: {Loader},
    props: {
        popUp: Boolean
    },
    directives: {maska},
    data: () =>({
        name: '',
        email: '',
        phone: '',
        subject: '',
        message: '',
        errors: {},
        loading: false,
        success: false
    }),
    methods: {
        close() {
            this.success = false
            this.$emit('close')
        },
        send() {
            if (!this.isValid()) return
            this.loading = true
            axios
                .post('/messages', {
                    name: this.name,
                    email: this.email,
                    phone: this.phone,
                    subject: this.subject,
                    message: this.message
                })
                .then(response => {
                    this.loading = false
                    this.success = true
                    this.clear()
                }).catch(error => {
                    console.log(error)
                })
        },
        isValid() {
            this.errors = []

            if (this.name === '') {
                this.errors.name = 'Укажите имя'
            }

            if (this.email === '' || !this.validateEmail(this.email)) {
                this.errors.email = 'Укажите почту'
            }

            if (this.phone.length < 18) {
                this.errors.phone = 'Заполните телефон'
            }

            if (this.subject === '') {
                this.errors.subject = 'Укажите тему'
            }

            if (this.message === '') {
                this.errors.message = 'Введите вопрос'
            }

            return Object.keys(this.errors).length === 0
        },
        validateEmail(email)
        {
            let re = /\S+@\S+\.\S+/;
            return re.test(email);
        },
        clear() {
            this.name = ''
            this.email = ''
            this.phone = ''
            this.subject = ''
            this.message = ''
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
