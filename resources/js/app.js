require('./bootstrap');
require('../sass/app.scss')


import { createApp } from 'vue'
import App from './components/app.vue'
import router from './routes/home'
// import './index.css'

createApp(App).use(router).mount('#app')

