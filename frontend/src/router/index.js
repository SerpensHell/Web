import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import ProductPage from "../views/ProductPage";
import Login from  "../views/Login"

Vue.component('App-login', Login)
Vue.component('App-Products-Page', ProductPage)
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/ProductPage',
    name: 'ProductPage',
    component: ProductPage
  },
    {
        path: '/Login',
        name: 'Login',
        component: Login
    }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
