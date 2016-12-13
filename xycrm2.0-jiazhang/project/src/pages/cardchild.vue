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
  background-image: url('../assets/xuesheng.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.photo2 {

  background-image: url('../assets/iconxiaoxiang.jpg');

}
.photo1 {

  background-image: url('../assets/iconshayu.png');

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
    background-image: url('../assets/xuesheng.jpg');
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
.qiandaoTime {
  padding-right: 16px;
}
.more {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 36px;
}
.mu-card-text {
    padding: 6px 16px;
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
                  王小明
              </div>

          </div>
      </div>
      <div class="infoBody2">
        <div class="info">
            <div class="title">
                昵称
            </div>
            <div class="text">
                明明
            </div>
        </div>
          <div class="info">
              <div class="title">
                  性别
              </div>
              <div class="text">
                  女
              </div>
          </div>

          <div class="info">
              <div class="title">
                  年龄
              </div>
              <div class="text">
                  3
              </div>
          </div>
      </div>
      <mu-divider/>
      <div class="infoBody2">

        <div class="info">
            <div class="title">
                生日
            </div>
            <div class="text">
                2013.07.07
            </div>
        </div>
          <div class="info">
              <div class="title">
                  家长
              </div>
              <div class="text">
                  妈妈 李梅
              </div>
          </div>
          <div class="info">
              <div class="title">
                  联系电话
              </div>
              <div class="text">
                  18665543322
              </div>
          </div>
      </div>
      <div class="more">
        <a href="http://192.168.1.109/xiangce/pages/medias/image-gallery.html">学员相册</a>
      </div>
  </div>

    <div class="nav">

    </div>
    <mu-sub-header>
        <div class="">
            学员所在班级
        </div>

    </mu-sub-header>
    <div>
      <div class="meItem" @click="qiandao1 = !qiandao1">
        <div class="meIcon">
            <div class="photo photo1" >

            </div>
        </div>
        <div class="meText">
          鲨鱼一班
        </div>
        <div style="display:flex;align-items:center">

        </div>
        <div class="qiandaoTime">
        <i class="material-icons">expand_more</i>
        </div>
        </mu-list-item>
      </div>
      <mu-divider/>
      <div class="childList" v-show="qiandao1">
          <mu-sub-header>
              <div class="">
                  详情
              </div>

          </mu-sub-header>
          <div style="display:flex">
            <div style="flex:1;border-right:1px solid #eee">
              <mu-card-text>
                  课程名称：鲨鱼科学
              </mu-card-text>
              <mu-card-text>
                  上课教室：101
              </mu-card-text>
              <mu-card-text>
                  剩余课时：33
              </mu-card-text>
            </div>
            <div style="flex:1">
              <mu-card-text>
                  累计签到次数：15
              </mu-card-text>
              <mu-card-text>
                  请假次数：2
              </mu-card-text>
              <mu-card-text>
                  旷课次数：1
              </mu-card-text>
            </div>
          </div>
          <div style="padding:16px">
            已完成/总课时：15/48
            <mu-linear-progress mode="determinate" :value="value"/>
          </div>

      </div>
      <div class="meItem"  @click="qiandao2 = !qiandao2">
        <div class="meIcon">
          <div class="photo photo2">

          </div>
        </div>
        <div class="meText">
          小象一班
        </div>
        <div style="display:flex;align-items:center">

        </div>
        <div class="qiandaoTime">
<i class="material-icons">expand_more</i>
        </div>
        </mu-list-item>
      </div>
      <mu-divider/>
      <div class="childList" v-show="qiandao2">
          <mu-sub-header>
              <div class="">
                  学员签到记录
              </div>

          </mu-sub-header>
          <div style="display:flex">
            <div style="flex:1;border-right:1px solid #eee">
              <mu-card-text>
                  课程名称：小象口才
              </mu-card-text>
              <mu-card-text>
                  上课教室：101
              </mu-card-text>
              <mu-card-text>
                  剩余课时：33
              </mu-card-text>
            </div>
            <div style="flex:1">
              <mu-card-text>
                  累计签到次数：15
              </mu-card-text>
              <mu-card-text>
                  请假次数：2
              </mu-card-text>
              <mu-card-text>
                  旷课次数：1
              </mu-card-text>
            </div>
          </div>
          <div style="padding:16px">
            已完成/总课时：15/48
            <mu-linear-progress mode="determinate" :value="value"/>
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
          value: 33,
          qiandao1:false,
          qiandao2:false,
            bottomSheet: false,
            activeTab: 'tab1',
            courseAll: [{
                title: '鲨鱼公园',
                subTitle: 'Sharkpark',
                icon: iconshayu,
            }, ],

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

      }
    },
}

</script>
