import Vue from 'vue'
import entry from './App'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import Animate from 'animate.css'

import Element from 'element-ui'
import 'element-ui/lib/theme-default/index.css'

// import Font from 'font-awesome'
// import Icon from 'vue-awesome/src/components/Icon.vue'
// import 'vue-awesome/src/icons'

Vue.use(Element)
Vue.use(VueRouter)
Vue.use(Vuex)

const routes = [{
  path: '/',
  name: '首页',
  component: require('./page/shouye.vue')
}, {
  path: '/foot',
  name: '页脚',
  component: require('./components/navbar/footbar.vue')
}, {
  path: '/zuzhiShequdian',
  name: '社区店管理',
  component: require('./page/zuzhi/shequdian.vue')
}, {
  path: '/tianjiafendian',
  name: '社区店管理',
  component: require('./page/zuzhi/shequdian-tianjiafendian.vue')
}, {
  path: '/bumen',
  name: '部门管理',
  component: require('./page/zuzhi/bumen.vue')
}, {
  path: '/yuangong',
  name: '员工管理',
  component: require('./page/zuzhi/yuangong.vue')
}, {
  path: '/yuangongadd',
  name: '添加员工',
  component: require('./page/zuzhi/yuangong-zengjiayuangong.vue')
}, {
  path: '/guanlitongzhi',
  name: '通知管理',
  component: require('./page/xitong/guanlitongzhi.vue')
}, {
  path: '/tuisongjilu',
  name: '推送记录',
  component: require('./page/xitong/tuisongjilu.vue')
}, {
  path: '/tongzhiadd',
  name: '新建通知',
  component: require('./page/xitong/tongzhiadd.vue')
}, {
  path: '/huodong',
  name: '活动管理',
  component: require('./page/yingxiao/huodongguanli.vue')
}, {
  path: '/dingdanadd',
  name: '新增订单统计',
  component: require('./page/yunying/xinzengdingdan.vue')
}, {
  path: '/xueyuanadd',
  name: '新增学员统计',
  component: require('./page/yunying/xinzengxueyuan.vue')
}, {
  path: '/kehuzhuangtai',
  name: '客户状态统计',
  component: require('./page/yunying/kehuzhuangtai.vue')
}, {
  path: '/shiting',
  name: '试听转化率统计',
  component: require('./page/yunying/shiting.vue')
}, {
  path: '/chengdan',
  name: '成单转化率统计',
  component: require('./page/yunying/chengdan.vue')
}, {
  path: '/kechengbiao',
  name: '课程表',
  component: require('./page/jiaowu/kechengbiao.vue')
}, {
  path: '/kecheng',
  name: '课程管理',
  component: require('./page/jiaowu/kechengguanli.vue')
}, {
  path: '/jiaoshi',
  name: '教室管理',
  component: require('./page/jiaowu/jiaoshiguanli.vue')
}, {
  path: '/kehuadd',
  name: '新客户录入',
  component: require('./page/CRM/xinzengkehu.vue')
}, {
  path: '/kehu',
  name: '客户管理',
  component: require('./page/CRM/kehuguanli.vue')
}, {
  path: '/shitingguanli',
  name: '试听管理',
  component: require('./page/CRM/shitingguanli.vue')
}, {
  path: '/hetong',
  name: '合同列表',
  component: require('./page/CRM/hetongliebiao.vue')
}, {
  path: '/chanpin',
  name: '产品列表',
  component: require('./page/CRM/chanpinliebiao.vue')
}, {
  path: '/hetongshenhe',
  name: '合同审核',
  component: require('./page/CRM/hetongshenhe.vue')
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
