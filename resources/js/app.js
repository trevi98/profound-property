require('./bootstrap');
require('../sass/app.scss')


import { createApp } from 'vue'
import App from './app.vue'
import router from './routes/home'
import '../css/app.css'

createApp(App).use(router).mount('#app')

