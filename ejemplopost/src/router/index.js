import Vue from 'vue'
import VueRouter from 'vue-router'

import HomeView from '../views/HomeView.vue'
import Dashboard from '../views/Admin/Dashboard.vue'
import login from '../views/Auth/login.vue'
import registrarse from '../views/Auth/registrarse.vue'
import Recuperarpassword from '../views/Auth/Recuperarpassword.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/Dashboard',
    name: 'Dashboard',
    component: Dashboard
  },
  
  {
    path: '/login',
    name: 'login',
    component: login
  },
  {
    path: '/registrarse',
    name: 'registrarse',
    component: registrarse
  },
  {
    path: '/Recuperarpassword',
    name: 'Recuperarpassword',
    component: Recuperarpassword
  },
  
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
