import Vue from 'vue'
import entry from './App'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import Animate from 'animate.css'

// import config from './nav.config.json'

import Element from 'element-ui'
import 'element-ui/lib/theme-default/index.css'

import Shouye from './page/shouye'

Vue.use(Element)
Vue.use(VueRouter)
Vue.use(Vuex)

const routes = [{
  path: '/',
  name: '资源',
  component: require('./page/shouye.vue')
}, {
  path: '/foot',
  name: '页脚',
  component: require('./components/navbar/footbar.vue')
}]

const router = new VueRouter({
  mode: 'hash',
  base: __dirname,
  routes
})

new Vue({ // eslint-disable-line
  render: h => h(entry),
  router
}).$mount('#app')
