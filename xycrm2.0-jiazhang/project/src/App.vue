<style>
@font-face {
font-family: 'Material Icons';
font-style: normal;
font-weight: 400;
/*src: url(https://example.com/MaterialIcons-Regular.woff2); */
src: url("./assets/iconfont/MaterialIcons-Regular.eot"); /* For IE6-8 */
src: local('Material Icons'),
local('MaterialIcons-Regular'),
url("./assets/iconfont/MaterialIcons-Regular.woff2") format('woff2'),
url("./assets/iconfont/MaterialIcons-Regular.woff") format('woff'),
url("./assets/iconfont/MaterialIcons-Regular.ttf") format('truetype');
}

.material-icons {
font-family: 'Material Icons';
font-weight: normal;
font-style: normal;
font-size: 24px; /* Preferred icon size */
display: inline-block;
width: 1em;
height: 1em;
line-height: 1;
text-transform: none;

/* Support for all WebKit browsers. */
-webkit-font-smoothing: antialiased;
/* Support for Safari and Chrome. */
text-rendering: optimizeLegibility;

/* Support for Firefox. */
-moz-osx-font-smoothing: grayscale;

/* Support for IE. */
font-feature-settings: 'liga';
}
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
    <!-- <mu-paper>
      <mu-bottom-nav :value="bottomNav"  @change="handleChange">
        <mu-bottom-nav-item value="index" title="主页" icon="account_balance"/>
        <mu-bottom-nav-item value="kebiao" title="课程" icon="event"/>
        <mu-bottom-nav-item value="me" title="我的" icon="face"/>
      </mu-bottom-nav>
    </mu-paper> -->
    <xynav></xynav>
  </div>
</div>

</template>

<script>
import Xynav from './components/nav_bottom/nav_basic'
export default {
  data () {
    return {
      bottomNav: 'index',
      bottomNavColor: 'index'
    }
  },
  // methods: {
  //   handleChange (val) {
  //     this.bottomNav = val
  //     if(val === 'index') {
  //       this.$router.push('/')
  //     }
  //     if(val === 'kebiao') {
  //       this.$router.push('/kebiao')
  //     }
  //     if(val === 'me') {
  //       this.$router.push('/me')
  //     }
  //
  //   }
  // },
  components: {

      Xynav,

  }
}

</script>
