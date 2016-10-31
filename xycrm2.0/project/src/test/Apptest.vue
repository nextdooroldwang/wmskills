<style>

*,
*:before,
*:after {
    box-sizing: border-box;
}

* {
    margin: 0;
    padding: 0;
    list-style: none;
}

html {
    width: 100%;
    height: 100%;
}

body {
    display: flex;
    /*align-items: center;*/
    /*justify-content: center;*/
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    line-height: 34px;
}

#app {
    width: 100%;
    min-height: calc(100%-50px);
}

.app-main {
    padding-top: 50px;
    margin-left: 180px;
    transform: translate3d(0, 0, 0);
    background: #F5F7FA;
    width: calc(100%-150px);
    height: 100%;
}

.app-container {
    width: 100%;
    height: 100%;
    padding: 20px;
}

</style>

<template>

<div id="app">
    <headnav></headnav>
    <slidernav :selectmenu="levelSelect" :mythis="_this"></slidernav>
    <section class="app-main">
        <div class="app-container">
            <levelbar :msg="levelNow" :levelitems="levelItems" :mythis="_this"></levelbar>
            <router-link to="/foot">路由跳转到footer组件</router-link>
            <div class="" @click="tiaozhuan">
                -----路转-----
            </div>
            <el-button type="primary" @click.native="say('hi')">首页</el-button>

            <router-view transition="fade" transition-mode="out-in" keep-alive>
            </router-view>
            <footbar></footbar>
        </div>
    </section>
</div>

</template>

<script>

import Hello from './components/Hello'
import Headnav from './components/navbar/headbar'
import Slidernav from './components/navbar/slidernav'
import Levelbar from './components/navbar/levelbar'
import Footbar from './components/navbar/footbar'

export default {
    components: {
        Headnav,
        Slidernav,
        Levelbar,
        Footbar,
    },
    data() {
        return {
            levelSelect: '首页',
            itemslevel: ['首页']
        }
    },
    methods: {
        tiaozhuan: function() {
          this.$router.push({ path: '/' })
          console.log(1)
        },
        say: function (message) {
          console.log(123)
        }
    },
    mounted() {

    },
    computed: {
        levelNow: function () {
          this.$on('increment',function (id) {
            this.levelSelect = id
          })
          return this.levelSelect
        },
        levelItems: function () {
          this.$on('itemslevel',function (id) {
            this.itemslevel = id
          })
          return this.itemslevel
        },
        _this: function () {
          return this
        }
    }
}

</script>
