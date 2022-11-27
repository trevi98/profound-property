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
        token:'',
        project:{
            title : null,
            price : null,
            description : null,
            cover : null,
            left : null,
            right : null,
            front : null,
            back : null,
            dld : null,
            video : null,
            completion_date : null,
            starting_date : null,
            area : null,
            featured : null,
            location_link : null,
            stores : null,
            appartments_in_store : null,
            number_of_unites_available : null,
            user_id : null,
            developer_id : null,
            project_status_id : null,
            location_id : null,
            type_id : null,
        }
    },
    mutations:{
        setToken(state,payload){
            state.token = payload;
        },
        setStep1(state,payload){
            state.title = payload.title;
            state.price = payload.price;
            state.description = payload.description;
            state.dld = payload.dld;
            state.completion_date = payload.completion_date;
            state.starting_date = payload.starting_date;
            state.area = payload.area;
            state.featured = payload.featured;
            state.stores = payload.stores;
            state.appartments_in_store = payload.appartments_in_store;
            state.number_of_unites_available = payload.number_of_unites_available;
            state.user_id = payload.user_id;
        }
    }
})


createApp(App).use(VueCookies).use(store).use(router).mount('#app')

