import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        locale: 'ru'
    },
    mutations: {
        SET_LOCALE(state, locale) {
            state.locale = locale
        }
    },
    actions: {
        setLocale({ commit }, locale) {
            commit('SET_LOCALE', locale)
            localStorage.setItem('locale', locale)
        }
    },
    getters: {
        locale: state => state.locale
    }
})
