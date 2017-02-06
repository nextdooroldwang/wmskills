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
    margin-left: 8px;
    list-style: none;
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
        <mu-card-media :subTitle="huodong.huodongTime">
            <img :src="huodong.bgImg" />
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
                <span class="dialogTitle">活动时间: </span><span>{{ huodong.huodongTime }}</span>
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

</div>

</template>

<script>

import Axios from 'axios'
export default {
    data() {
            return {
                baoming: '报名参与',
                baomingBg: {
                  background: '#23a197'
                },
                dialog: false,
                dis: false,
                topPopup: false,
                huodong: {
                  huodongTime:'',
                  title: '',
                  money: '',
                  address: '',
                  call: '',
                  bgImg:'',
                  text: [],

                },
                listener:'',
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
            let _this = this
            let huodongId = this.$route.query.id
            let qs = require('qs');
            Axios.post(_this.xyIp+'/api/home_page/enroll_activity', qs.stringify({
              activity_id:huodongId
            }))
            .then(function (response) {
              let data = response.data
              if(data.errno === 0) {
                _this.listener = 1

              }else {
                console.log(data.errmsg);
              }

            })
            .catch(function (error) {
              console.log(error);
            });

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
          listener () {
            this.dialog = false
            this.baoming = '已报名'
            this.baomingBg.background = '#f5a819'
            this.dis = true
            this.topPopup = true
          }

        },
        mounted() {
          let _this = this
          let huodongId = this.$route.query.id
          let qs = require('qs');
          Axios.post(_this.xyIp+'/api/home_page/get_activity', qs.stringify({
            id:huodongId
          }))
          .then(function (response) {
            let data = response.data
            if(data.errno === 0) {
              let huodongT = data.data.date.substring(0,16) + ' 至 ' + data.data.date.substring(20,36)
              _this.huodong.title = data.data.title
              _this.huodong.address = data.data.address
              _this.huodong.call = data.data.phone
              _this.huodong.money = data.data.expense
              _this.huodong.bgImg = require('assets/' + data.data.logo)
              _this.huodong.huodongTime = huodongT
              let detail = data.data.detail
              detail = detail.split('\r\n')
              _this.huodong.text = detail
            }else {
              console.log(data.errmsg);
            }

          })
          .catch(function (error) {
            console.log(error);
          });
        }
      }
</script>
