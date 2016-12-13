<style lang="css" scoped>

#container {
    background: #eee;
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
    margin-top: 8px;
    background: #fff;
    line-height: 36px;
}

.mu-card-actions {
    text-align: center;
    margin-top: 16px;
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
.dialogTitle {

}
.dialogTitle+span {
  flex: 1;
  color: #000;
  font-weight: 700;
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
  background: #23a197;
  opacity: .5;
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
        <mu-card-actions>
            <mu-raised-button :label="baoming" class="demo-raised-button" icon="perm_phone_msg" style="color:#fff;" :style="baomingBg" @click="open" :disabled="dis"/>
            <mu-dialog v-if="dialog" title="报名提示" @close="close">
              <div class="dialogText">
                <span class="dialogTitle">确认报名: </span><span>{{ huodong.title }}？</span>
              </div>
              <div class="dialogText">
                <span class="dialogTitle">活动时间: </span><span>{{ huodongTime }}</span>
              </div>
              <div class="dialogText">
                <span class="dialogTitle">活动地点: </span><span>{{ huodong.address }}</span>
              </div>
              <div class="dialogText">
                <span class="dialogTitle">活动费用: </span><span>{{ huodong.money }}元（参与活动时支付)</span>
              </div>
                <mu-flat-button slot="actions" @click="close" primary label="取消"/>
                <mu-flat-button slot="actions" keyboardFocused primary @click="ok" label="确定"/>
              </mu-dialog>
              <mu-popup position="top" :overlay="false" class="demo-popup-top" v-if="topPopup">
                  报名成功
              </mu-popup>
        </mu-card-actions>
    </mu-card>
    <mu-sub-header><span class="flexCenter">精彩瞬间</span></mu-sub-header>
    <div class="gridlist-demo-container">
        <mu-grid-list class="gridlist-inline-demo">
            <mu-grid-tile v-for="tile in huodong.list">
                <img :src="tile.image" />
                <span slot="title">{{tile.title}}</span>
                <span slot="subTitle">by <b>{{tile.author}}</b></span>
                <mu-icon-button icon="star_border" slot="action" />
            </mu-grid-tile>
        </mu-grid-list>
    </div>
</div>

</template>

<script>

import iconshayu from '../assets/xiaohai5.jpg'
import huodong1 from '../assets/xiaohai1.jpg'
import huodong2 from '../assets/xiaohai2.jpg'
import huodong3 from '../assets/xiaohai3.jpg'
import huodong4 from '../assets/xiaohai4.jpg'
import huodong5 from '../assets/xiaohai5.jpg'
import huodong6 from '../assets/xiaohai6.jpg'
import huodong7 from '../assets/xiaohai7.jpg'
import huodong8 from '../assets/xiaohai8.jpg'
import Axios from 'axios'
export default {
    data() {
            return {
                iconshayu,
                baoming: '报名参与',
                baomingBg: {
                  background: '#23a197'
                },
                dialog: false,
                dis: false,
                topPopup: false,
                huodong: {
                  title: '星云家门口元旦PARTY',
                  money: '99',
                  address: '浑南新区万科鹿特丹星云家门口',
                  call: '024-22938833',
                  text: ['这里人很多','这里朋友很多','这里好玩的很多','这里能学的很多',],
                  list: [{
                      image: huodong1,
                      title: 'Breakfast',
                      author: 'Myron'
                  }, {
                      image: huodong3,
                      title: 'Burger',
                      author: 'Linyu'
                  }, {
                      image: huodong3,
                      title: 'Camera',
                      author: 'ruolin'
                  },{
                      image: huodong1,
                      title: 'Breakfast',
                      author: 'Myron'
                  }, {
                      image: huodong2,
                      title: 'Burger',
                      author: 'Linyu'
                  }, {
                      image: huodong3,
                      title: 'Camera',
                      author: 'ruolin'
                  }, ],
                }
            }
        },
        methods: {
          open () {
            this.dialog = true
          },
          close () {
            this.dialog = false
          },
          ok () {
            this.dialog = false
            this.baoming = '已报名'
            this.baomingBg.background = '#f5a819'
            this.dis = true
            this.topPopup = true
          }
        },
        watch: {
          topPopup (val) {
            if (val) {
              setTimeout(() => {
                this.topPopup = false
              }, 2000)
            }
          }
        },
        computed: {
          huodongTime () {
            return '2016-11-30 至 2016-12-01'
          }
        },
        mounted() {
          let _this = this
          // Axios.get('http://192.168.1.110:8360/admin/index/login')
          //   .then(function (response) {
          //     let data = response
          //     console.log(data.data);
          //     _this.huodong = data.data
          //   })
          //   .catch(function (error) {
          //     console.log(error);
          //   });

        }
}

</script>
