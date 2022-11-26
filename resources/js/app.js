require('./bootstrap');
require('../sass/app.scss')


import { createApp } from 'vue'
import App from './app.vue'
import router from './routes/home'
import { createStore } from 'vuex';
import VueCookies from 'vue-cookies'
import '../css/app.css'

let store = createStore({
    state:{
        test:1,
        token:''
    },
    mutations:{
        setToken(state,payload){
            state.token = payload;
        }
    }
})


createApp(App).use(VueCookies).use(store).use(router).mount('#app')

