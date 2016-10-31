<style scoped>

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

.container {
    font-size: 14px;
    font-family: '微软雅黑';
    color: #666;
    min-width: 45px;
    width: 180px;
    height: calc(100vh - 50px);
    padding: 20px 0px;
    position: absolute;
    top: 50px;
    left: 0;
    display: flex;
    overflow-x: hidden;
    overflow-y: auto;
    border-right: 1px solid #ddd;
}

.menu {
    width: 100%;
}

.menuLi {
    padding: 10px 10px;
    line-height: 10px;
    cursor: pointer;
    border-radius: 2px;
}

.menuLi:not(.clicktoggle):hover {
    background: #eee;
    color: #23a197;
}

.clicktoggle {
    background: #23a197;
    color: #fff;
}

.childMenu {
    margin-left: 15px;
    padding-left: 10px;
    padding-right: 10px;
    border-left: 1px solid #ddd;
    font-size: 12px;
}

.bounce-enter-active,
.bounce-leave-active {
    transition: all .9s ease;
    overflow: hidden;
    max-height: 200px;
}

.bounce-enter,
.bounce-leave-active {
    max-height: 0;
}

</style>

<template>

<div class="container" onselectstart="return false">
    <ul class="menu">
        <li v-for="item in items1">
            <div class="menuLi" @click="clickCss(item)" :class="{'clicktoggle':isClickToggle(item)}">
                <span class="icon"><i class="fa fa-blind" aria-hidden="true"></i></span><span>{{ item.type }}</span>
            </div>
            <transition name="bounce">
                <div v-show="item.children && item.deploy">
                    <ul class="childMenu">
                        <li v-for="child in item.children" class="menuLi" @click="clickCss(child)" :class="{'clicktoggle':isClickToggle(child)}">
                            <span>{{ child.type }}</span>
                        </li>
                    </ul>
                </div>
            </transition>
        </li>
    </ul>
</div>

</template>

<script>

import Data from '../../data/nav/slidernav-data'
export default {
    data() {
            return {
                items1: Data,
                itemslevel: ['']
            }
        },
        props: ['selectmenu','mythis'],
        created () {},
        methods: {
            // 控制菜单点击后的效果
            clickCss: function(c) {
                if (c.children) {
                    var childClick = 0
                    for (var i = 0; i < this.items1.length; i++) {
                        if (this.items1[i].children) {
                            for (var j = 0; j < this.items1[i].children.length; j++) {
                                if (this.items1[i].children[j].clicktoggle) {
                                    childClick = 1
                                }
                            }
                        }
                    }
                    if (childClick === 0) {
                        initialize(this.items1)
                        c.deploy = !c.deploy
                        c.clicktoggle = true
                        // this.selectmenu = c.type
                        // console.log(this.selectmenu)
                        this.mythis.$emit('increment',c.type)

                    } else {
                        c.deploy = !c.deploy
                    }
                } else {
                    initialize(this.items1)
                    c.clicktoggle = true
                    // console.log(this.selectmenu)
                    this.mythis.$emit('increment',c.type)
                }

                function initialize(e) {
                    for (var i = 0; i < e.length; i++) {
                        e[i].clicktoggle = false
                        if (e[i].children) {
                            for (var j = 0; j < e[i].children.length; j++) {
                                e[i].children[j].clicktoggle = false
                            }
                        }
                    }
                }
                if (c.dady === '#') {
                    this.itemslevel = ['首页']
                } else {
                    this.itemslevel = [c.dady, c.type]
                }
                // this.$dispatch('items-level', this.itemslevel)
                this.mythis.$emit('itemslevel', this.itemslevel)
            },
            isClickToggle: function(c) {
                return c.clicktoggle
            }
        }
}

</script>
