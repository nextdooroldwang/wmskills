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
    padding-top: 60px;
    margin-left: 220px;
    transform: translate3d(0, 0, 0);
    width: calc(100%-150px);
    height: 100%;
    overflow: auto;
}

.app-container {
    width: 100%;
    height: 100%;
    padding: 0px 20px 20px 20px;
}

.el-row {
    margin-bottom: 20px;
}

.el-button {
    outline-color: invert;
}

</style>

<template>

<div id="app">
    <headnav></headnav>
    <sliderbar></sliderbar>
    <section class="app-main">
        <div class="app-container">
            <Levelbar></Levelbar>
            <router-view transition="fade" transition-mode="out-in" keep-alive>
            </router-view>
            <!-- <footbar></footbar> -->
        </div>
    </section>
</div>

</template>

<script>

import Headnav from './components/navbar/headbar'
import Levelbar from './components/navbar/levelbar'
import Footbar from './components/navbar/footbar'
import Sliderbar from './components/navbar/sliderbar'
    // require("../node_modules/bootstrap/dist/css/bootstrap.min.css")

import store from './test/store.js'

export default {
    components: {
        Headnav,
        Sliderbar,
        Levelbar,
        Footbar,
        icon,
    },
    store,
    data() {
        return {

        }
    },
    methods: {

    },
    created() {
        window.addEventListener('hashchange', () => {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    },
    mounted() {
      // console.log(this.count);
    },
    computed: {
        count() {
            return store.state.count
        }
    }
}

</script>
