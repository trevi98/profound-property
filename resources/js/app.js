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
        user:{
            token:'',
            id:null,
            role:null
        },
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
            bathrooms : null,
            bedrooms:{},
            completion_date : null,
            starting_date : null,
            area : null,
            stores : null,
            appartments_in_store : null,
            number_of_unites_available : null,
            user_id : null,
            developer_id : null,
            location_id : null,
            type_id : null,
            locationLink:null,
            availableUnites:[],
            floorPlans:{},
            floor3ds:{},
            images:[],
            paymenPlans:[],
            featured:false,
            status_id: null,
            plansArray:[], //to ensure that files in step3 can retain the state
            plans3dArray:[], //to ensure that files in step3 can retain the state
            installments:null // number for paymen fields
        },
        Nav:{
            title:'',
            current:'',
            prev:null,
            next:''
        }
    },
    mutations:{
        setUser(state,payload){
            state.user.token = payload.token;
            state.user.id = payload.id;
            state.user.role = payload.role;
        },
        setTypes(state,payload){
            state.types = payload.types;

        },
        setStep1(state,payload){
            // console.log(payload)
            state.project.title = payload.title;
            state.project.locationLink = payload.locationLink;
            state.project.price = payload.price;
            state.project.bathrooms = payload.bathrooms;
            state.project.description = payload.description;
            state.project.dld = payload.dld;
            state.project.completion_date = payload.completion_date;
            state.project.starting_date = payload.starting_date;
            state.project.area = payload.area;
            state.project.featured = payload.featured;
            state.project.stores = payload.stores;
            state.project.appartments_in_store = payload.appartments_in_store;
            state.project.number_of_unites_available = payload.number_of_unites_available;
            state.project.user_id = payload.user_id;
            state.project.developer_id = payload.developer_id;
            state.project.type_id = payload.type_id;
            state.project.status_id = payload.status_id;
            state.project.availableUnites = payload.availableUnites;
            state.project.installments = payload.installments;
        },
        setStep2(state,payload){
            //  .log(payload)
            state.project.location_id = payload.location_id;
        },
        setStep3(state,payload){
            //  .log(payload)
            state.project.floorPlans = payload.plans;
            state.project.floor3ds = payload.plans3d;
            state.project.bedrooms = payload.bedrooms;
            state.project.plansArray = payload.plansArray;
            state.project.plans3dArray = payload.plans3dArray;
        },
        setStep4(state,payload){
            //  .log(payload)
            state.project.cover = payload.cover;
            state.project.front = payload.front;
            state.project.back = payload.back;
            state.project.left = payload.left;
            state.project.right = payload.right;
            state.project.images = payload.images;
            state.project.video = payload.video;

        },
        setStep5(state,payload){
            //  .log(payload)
            state.project.paymenPlans = payload.paymenPlans;

        },
        setNav(state,payload){
            state.Nav.title = payload.title;
            state.Nav.current = payload.current;
            state.Nav.prev = payload.prev;
            state.Nav.next = payload.next;
        }
    }
})


createApp(App).use(VueCookies).use(store).use(router).mount('#app')

