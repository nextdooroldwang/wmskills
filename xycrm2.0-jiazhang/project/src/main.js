import Vue from 'vue'
import entry from './App'
import VueRouter from 'vue-router'
import MuseUI from 'muse-ui'
import 'muse-ui/dist/muse-ui.css'
import AwesomeSwiper from 'vue-awesome-swiper'

let ip = 'http://192.168.1.105:8360'
let imgPath = 'assets/'
Vue.prototype.xyIp = ip
Vue.prototype.xyImg = imgPath
String.prototype.replaceAll = function(s1, s2) {
  return this.replace(new RegExp(s1, "gm"), s2);
}
String.prototype.Trim = function() {
  return this.replace(/(^\s*)|(\s*$)/g, "");
}
String.prototype.LTrim = function() {
  return this.replace(/(^\s*)/g, "");
}
String.prototype.RTrim = function() {
  return this.replace(/(\s*$)/g, "");
}
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
  path: '/paike',
  name: '课程',
  component: require('./pages/paike.vue')
}, {
  path: '/cunzhe',
  name: '存折',
  component: require('./pages/cunzhe.vue')
}, {
  path: '/cardchild',
  name: '我',
  component: require('./pages/cardchild.vue')
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
