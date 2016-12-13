<style lang="css" scoped>
.nav {
    padding: 5px 0;
    background:  rgb(240, 240, 240);
}

.huodongTitle {
    font-size: 24px;
    color: #000;
    font-weight: 600;
    padding: 16px;
}

.address,
.money,
.text,
.call {
    padding: 0px 16px;
    font-size: 12px;
    font-weight: 700;
    color: #666;
}

.money {
    color: red
}

.address {
    display: flex;
    align-items: center;
}

.text {
    display: flex;
    justify-content: flex-start;
}

.text ul {
    margin-left: 16px;
    margin-bottom: 16px;
}

.call {
  margin-bottom: 15px;
}
.gridlist-demo-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.gridlist-inline-demo {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
}

.mu-sub-header {
    background: #fff;
    line-height: 36px;
}

.mu-card-actions {
    text-align: center;
    margin-top: 16px;
}
.infoBody2 {
    display: flex;
    padding: 0px 16px 8px 16px;
}
.infoBtn {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.pushBtn {
  padding: 16px 0;
}
.mu-dialog {
  font-size: 12px;
  text-align: left;
}
.dialogText {
  padding: 6px;
  display: flex;
  justify-content: flex-start;
}
.demo-popup-top {
  width: 100%;
  opacity: .8;
  height: 48px;
  line-height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  max-width: 375px;
  background: #f5a819;
  opacity: .5;
  color: #fff;
}
.infoHead {
    display: flex;
    justify-content: space-between;
    color: #666;
    font-weight: 700;
}
.mu-sub-header {
  padding: 16px;
  display: flex;
  justify-content:space-between;
  align-items: center;
}
</style>

<template lang="html">

<div id="container">
    <mu-card>
        <mu-card-header title="活动详情">

        </mu-card-header>
        <mu-card-media :subTitle="huodongTime">
            <img :src="iconshayu" />
        </mu-card-media>
        <div class="huodongTitle">
            {{ huodong.title }}
        </div>
        <div class="money">
            活动费用：{{ huodong.money }} 元
        </div>
        <div class="address">
            活动地址：{{ huodong.address }}
            <mu-icon-button icon="place"  style="color:red;" touch/>
        </div>
        <div class="call">
            联系电话：{{ huodong.call }}
        </div>
        <div class="text">
            <div style="min-width:60px">
                活动详情：
            </div>
            <ul>
                <li v-for="textLi in huodong.text">{{ textLi }}</li>

            </ul>
        </div>

    </mu-card>
    <div class="nav">

    </div>
    <div class="childList">
      <mu-sub-header>
        <div class="">
          报名学员列表
        </div>
        <div class="listBtn">
        {{ touchText }} <mu-switch v-model="touch">
      </div>
    </mu-sub-header>

    <mu-list-item title="果果">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider inset/>
    <mu-list-item title="果果">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider inset/>
    <mu-list-item title="果果">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider inset/>

    </div>
    <div class="pushBtn" >
      <div class="infoBody2">
          <div class="infoBtn">
            <mu-raised-button label="活动签到" class="demo-raised-button" icon="edit" style="color:#fff;width:100%;height:34px;background:#f5a819;" @click="open"/>
            <mu-dialog v-if="dialog" title="签到学员" @close="close" scrollable>
              <mu-menu>
                 <mu-menu-item :title="menu" v-for="menu in menus"/>
               </mu-menu>
                <mu-flat-button slot="actions" @click="close" primary label="取消"/>
                <mu-flat-button slot="actions" keyboardFocused primary @click="ok" label="确定"/>
              </mu-dialog>
              <mu-popup position="top" :overlay="false"  class="demo-popup-top" v-if="topPopup">
                  签到成功
              </mu-popup>
          </div>
      </div>

    </div>
</div>

</template>

<script>

import iconshayu from '../assets/xiaohai5.jpg'
import xuesheng from '../assets/xuesheng.jpg'
export default {
    data() {
            return {
              dialog: false,
              topPopup: false,
              touch: false,
                menus: ['圆圆','小红','小明','豆豆','小童','强强','倩倩','强强','倩倩'],
                iconshayu,
                xuesheng,
                huodong: {
                  title: '星云家门口元旦PARTY',
                  money: '99',
                  address: '浑南新区万科鹿特丹星云家门口',
                  call: '024-22938833',
                  text: ['这里人很多','这里朋友很多','这里好玩的很多','这里能学的很多',],

                }
            }
        },
        methods: {
          selectChild() {

          },
          open () {
            this.dialog = true
          },
          close () {
            this.dialog = false
          },
          ok () {
            this.dialog = false
            this.topPopup = true
          },
        },
        watch: {
          topPopup (val) {
            if (val) {
              setTimeout(() => {
                this.topPopup = false
              }, 2000)
            }
          },
        },
        computed: {
          huodongTime () {
            return '2016-11-30 至 2016-12-01'
          },
          touchText () {
            return this.touch === false ? '反选' : '全选'
          },
        },
        mounted() {}
}

</script>
