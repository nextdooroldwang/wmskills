<style media="screen" scoped>
  .navContainer {
    height: 56px;
    width: 100vw;
    display: flex;
    border-top: 1px solid #eee;
    background: #fff;
  }
  .navTouch,.navAction {
    flex: 1;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .navIcon {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .navTouch>.navName {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.54);
  }
  .navTouch>.navIcon {
    color: rgba(0, 0, 0, 0.54);
  }
  .navAction>.navName {
    font-size: 14px;
    color: rgba(245, 168, 25, 0.86);
    transition: all .9s
  }
  .navAction>.navIcon {
    color: rgba(245, 168, 25, 0.86);
    transition: all .9s
  }
</style>
<template>
  <div id="container">
    <div class="navContainer">
      <div :class="navItem.navClass" v-for="navItem in navItems" @click="navAction(navItem)">
        <div class="navIcon" v-if="navItem.icon">
          <i class="material-icons">{{ navItem.icon }}</i>
        </div>
        <div class="navName" v-if="navItem.name">
          {{ navItem.name }}
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      navItems: [{
        name:'主页',
        icon:'account_balance',
        navClass: 'navTouch',
        path:'/',
      },{
        name:'课程',
        icon:'event',
        navClass: 'navTouch',
        path:'/kebiao',
      },{
        name:'我的',
        icon:'face',
        navClass: 'navTouch',
        path:'/me',
      }]
    }
  },
  methods: {
    navAction(nav) {
      for(let navItem of this.navItems) {
        navItem.navClass = 'navTouch'
      }
      nav.navClass = 'navAction'
      this.$router.push(nav.path)
    }
  }
}
</script>
