<style lang="css" scoped>

.nav {
    padding: 5px 0;
    background:  rgb(240, 240, 240);
}
.mu-card-header {
  padding: 8px 16px;
}

.meItem {
  background: #fff;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.meText {
  flex:1;
  overflow-x: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  padding: 8px 16px 8px 0px;
  font-size: 16px;
}
.iconBorder {
  padding: 2px 5px;
  border: 1px solid #23a197;
  border-radius: 8px;
  color: #23a197;
  font-size: 12px;
  font-weight: 600;
  margin: 5px 0px;
}
.meIcon {
  padding: 8px 16px;
}
.photo {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: #666;
  background-image: url('../assets/xue.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.photoClass {
  width: 34px;
  height: 34px;
  color:#FFF;
  border-radius: 50%;
  background: #666;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.classInfo {
    padding: 16px;
}

.infoHead {
    display: flex;
    justify-content: space-between;
    color: #666;
    font-weight: 700;
}

.infoHead span {
    display: flex;
    align-items: center;
}

.infoBody {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 28px 0;
}

.className {
    display: flex;
    align-items: center;
}

.className span {
    font-size: 20px;
    color: #222;
}

.classImg {
    background-image: url('../assets/xue.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    /*border: 3px solid rgba(12, 145, 222, 0.5);;*/
}

.infoBody2 {
    display: flex;
    padding: 5px 0;
}

.info {
    flex: 1;
    align-items: center;
}

.title,
.text {
    text-align: center;
}

.title {
    font-size: 12px;
    color: #bbb;
}

.text {
    font-size: 16px;
    color: #000;
    font-weight: 700;
}
.qiandao {
  padding-right: 16px;
}
.qiandao span {
  padding: 3px 5px;
  color: #fff;
}
.stage {
    background: #f5a819;
    color: #fff;
    padding: 5px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 700;
}
.mu-card:not(:first-child) {
    margin-top: 16px;
}

.classInfo {
    padding: 16px;
}

.classTitle,
.classBody {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
}

.classTitle {}

.className {
    font-size: 18px;
    font-weight: 700;
    padding-left: 5px;
    border-left: 5px solid #23a197;
}

.classTime {
    font-size: 12px;
    font-weight: 500;
    color: #777;
}

.classMain {
    font-size: 14px;
    font-weight: 500;
    color: #333;
    max-width: 50vw;
}
.childName {
  font-size: 18px;
  font-weight: 600;
  text-align: center;
}
.pushBtn {
  padding: 16px 0;
}
.infoBtn {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
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

</style>

<template lang="html">

<div id="container">

  <div class="classInfo">
      <div class="infoHead">


      </div>
      <div class="infoBody">
          <div>
              <div class="classImg">

              </div>
              <div class="childName">
                  李思思
              </div>

          </div>
      </div>
      <div class="infoBody2">
          <div class="info">
              <div class="title">
                  班级
              </div>
              <div class="text">
                  鲨鱼一班
              </div>
          </div>
          <div class="info">
              <div class="title">
                  课节
              </div>
              <div class="text">
                  骨骼分析
              </div>
          </div>
          <div class="info">
              <div class="title">
                  上课时间
              </div>
              <div class="text">
                  2016-12-12
              </div>
          </div>
      </div>
      <div class="pushBtn">
        <div class="infoBody2">
            <div class="infoBtn">
              <mu-raised-button :label="qingjiaBtn" class="demo-raised-button" icon="edit" style="color:#fff;width:100%;height:34px;" @click="open" :disabled="dis" :style="qiandaoCss"/>
              <mu-dialog v-if="dialog" title="提示" @close="close" scrollable>
                是否同意请假？
                  <mu-flat-button slot="actions" @click="close" primary label="取消"/>
                  <mu-flat-button slot="actions" keyboardFocused primary @click="ok" label="同意"/>
                </mu-dialog>
                <mu-popup position="top" :overlay="false"  class="demo-popup-top" v-if="topPopup">
                    请假已处理
                </mu-popup>
            </div>
        </div>

      </div>
  </div>


</div>

</template>

<script>

import iconshayu from '../assets/iconshayu.png'
import iconxiaoxiang from '../assets/iconxiaoxiang.jpg'
export default {
    data() {
        return {
          qingjiaBtn: '请假处理',
            bottomSheet: false,
            dis:false,
            qiandaoCss:{
              background:"#f5a819"
            },
            activeTab: 'tab1',
            courseAll: [{
                title: '鲨鱼公园',
                subTitle: 'Sharkpark',
                icon: iconshayu,
            }, ],
            dialog: false,
            topPopup: false,
        }
    },
    methods: {
      closeBottomSheet () {
        this.bottomSheet = false
      },
      openBottomSheet () {
        this.bottomSheet = true
      },
      handleTabChange (val) {
      this.activeTab = val
      },
      routerClassStudent() {

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
        this.qingjiaBtn = '已处理'
        this.dis = true
        this.qiandaoCss.background = "#bbb"
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
}

</script>
