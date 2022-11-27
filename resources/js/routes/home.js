import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginView from '../views/dashboard/LoginView.vue'
import MainView from '../views/dashboard/MainView.vue'
import AddProjectView from '../views/dashboard/AddProjectView.vue'
import Test from '../views/dashboard/Test.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path:'/login',
    name:'login',
    component:LoginView
  },
  {
    path:'/main',
    name:'main',
    component:MainView
  },
  {
    path:'/add-project',
    name:'addProject',
    component:AddProjectView
  },
  {
    path:'/areas',
    name:'areas',
    component:Test
  },


]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
