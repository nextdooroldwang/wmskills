<style>

* {
    margin: 0;
    padding: 0;
    -webkit-overflow-scrolling : touch;
}

html {
    width: 100%;
    height: 100%;
}

body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;

}

#app {
    width: 100%;
    height: 100%;

}

section {
  width: 100%;
  min-height: calc(100% - 56px);

}
.bottomNull {
  width: 100%;
  height: 56px;
  position: relative;
}
.bottom {
  position: fixed;
  width: 100%;
  bottom: 0;
  z-index: 999;
}

</style>

<template>

<div id="app">
  <section>
    <router-view transition="fade" transition-mode="out-in" keep-alive>
    </router-view>
  </section>
  <div class="bottomNull">

  </div>
  <div class="bottom">
    <mu-paper>
      <mu-bottom-nav :value="bottomNav"  @change="handleChange">
        <mu-bottom-nav-item value="index" title="主页" icon="account_balance"/>
        <mu-bottom-nav-item value="kebiao" title="课程" icon="event"/>
        <mu-bottom-nav-item value="me" title="我的" icon="face"/>
      </mu-bottom-nav>
    </mu-paper>
  </div>
</div>

</template>

<script>

export default {
  data () {
    return {
      bottomNav: 'index',
      bottomNavColor: 'index'
    }
  },
  methods: {
    handleChange (val) {
      this.bottomNav = val
      if(val === 'index') {
        this.$router.push('/')
      }
      if(val === 'kebiao') {
        this.$router.push('/kebiao')
      }
      if(val === 'me') {
        this.$router.push('/me')
      }

    }
  },
  components: {

  }
}

</script>
