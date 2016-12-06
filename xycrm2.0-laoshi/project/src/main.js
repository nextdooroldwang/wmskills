import Vue from 'vue'
import entry from './App'
import VueRouter from 'vue-router'
import MuseUI from 'muse-ui'
import 'muse-ui/dist/muse-ui.css'
import AwesomeSwiper from 'vue-awesome-swiper'

Vue.use(MuseUI)
Vue.use(VueRouter)
Vue.use(AwesomeSwiper)

const routes = [{
  path: '/',
  name: '首页',
  component: require('./pages/index.vue')
}, {
  path: '/timetables',
  name: '课程表',
  component: require('./pages/timetables.vue')
}, {
  path: '/me',
  name: '我的',
  component: require('./pages/me.vue')
}, {
  path: '/huodong',
  name: '活动',
  component: require('./pages/huodong.vue')
}, {
  path: '/tuisong',
  name: '老师推送',
  component: require('./pages/tuisong.vue')
}, {
  path: '/tixing',
  name: '提醒',
  component: require('./pages/tixing.vue')
}, {
  path: '/hetong',
  name: '合同',
  component: require('./pages/hetong.vue')
}, {
  path: '/tuisongliebiao',
  name: '推送列表',
  component: require('./pages/tuisonglist.vue')
}, {
  path: '/kcxq',
  name: '课程详情',
  component: require('./pages/kechengxiangqing.vue')
}, {
  path: '/yijian',
  name: '意见反馈',
  component: require('./pages/yijian.vue')
}, {
  path: '/kebiao',
  name: '家长课表',
  component: require('./pages/classlist.vue')
}, {
  path: '/news',
  name: '消息列表',
  component: require('./pages/news.vue')
}, {
  path: '/new',
  name: '消息详情',
  component: require('./pages/new.vue')
}, {
  path: '/card',
  name: '名片',
  component: require('./pages/card.vue')
}, {
  path: '/student',
  name: '学生',
  component: require('./pages/student.vue')
}, {
  path: '/cardChild',
  name: '学生名片',
  component: require('./pages/cardChild.vue')
}, {
  path: '/login',
  name: '登陆',
  component: require('./pages/login.vue')
}, {
  path: '/paike',
  name: '排课',
  component: require('./pages/paike.vue')
}, {
  path: '/paikeXuesheng',
  name: '排课学员',
  component: require('./pages/paikeXuesheng.vue')
}, ]

const router = new VueRouter({
  mode: 'hash',
  base: __dirname,
  routes
})

new Vue({ // eslint-disable-line
  render: h => h(entry),
  router
}).$mount('#app')
