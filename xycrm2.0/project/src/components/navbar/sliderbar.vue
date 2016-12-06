<style  scoped>
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

#container {
    font-size: 14px;
    font-family: '微软雅黑';
    color: #666;
    min-width: 45px;
    width: 220px;
    height: calc(100vh - 50px);
    padding: 20px 0px;
    position: absolute;
    top: 50px;
    left: 0;
    overflow-x: hidden;
    overflow-y: auto;
    border-right: 1px solid #ddd;
    background: #eff2f7;
}

.fa-icon {
  margin-right: 10px;
}

</style>

<template lang="html">

<div id="container">
  <!-- <button type="button" @click="myclick">+4444</button>
  <p>
    {{ count }}
  </p>
  <p>
    {{ ccc }}
  </p>
  <p>
    {{ comput }}
  </p> -->
    <el-menu default-active="0" class="el-menu-vertical-demo">
        <el-menu-item index="0" @click.native="goHome"><icon name="home" spin></icon>首页</el-menu-item>
        <el-submenu v-for="item in items" :index="item.submenuIndex">
            <template slot="title"><i :class="item.submenuIcon"></i>{{ item.submenuTitle }}</template>
            <el-menu-item-group v-for="group in item.menugroup" :title="group.groupTitle">
                <el-menu-item v-for="menuitems in group.menuItem" :index="menuitems.itemIndex" @click.native="routerTo(menuitems)">
                    {{ menuitems.itemType }}
                </el-menu-item>
            </el-menu-item-group>
        </el-submenu>
    </el-menu>
</div>

</template>

<script>
import Nav from '../../data/nav/nav.js'
import { mapState, mapGetters } from 'vuex'
export default {
    data() {
            return {
                items: Nav
            };
        },
        computed: {
          ccc() {
            return 1123445
          },
          ...mapGetters({
            comput: 'comput'
          }),
          ...mapState({
            count: 'count'
          })
        },
        methods: {
            routerTo: function(item) {
                this.$router.push(item.itemPath)
            },
            goHome: function() {
                this.$router.push('/')
            },
            myclick() {
              this.$store.commit('increment', {
                aaa: 444
              },{silent: true})
            }
        },
        mounted() {
          // let _this = this
          // axios.get('http://192.168.1.128:8360/home/index/get_menu')
          //     .then(function(response) {
          //       _this.items = response.data
          //     })
          //     .catch(function(error) {
          //         console.log(error);
          //     });

        },
        components: {
          icon
        }
};

</script>
