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
    background-image: url('../assets/iconshayu.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 40px;
    height: 40px;
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
    font-weight: 400;
}
.qiandao {
  padding-right: 16px;
}
.qiandao span {
  padding: 3px 5px;
  color: #fff;
}

.mu-card-text {
  padding: 0;
  padding-bottom: 16px;
}
video {
  margin-bottom: 16px;
}
</style>

<template lang="html">

<div id="container">

  <div class="classInfo">
      <div class="infoHead">
          <span>
        排课信息
      </span>
          <span>
        2016-12-12 | 08:00
       </span>
      </div>
      <div class="infoBody">
          <div class="className">
              <div class="classImg">

              </div>
              <span>骨骼分析</span>
          </div>
      </div>
      <mu-card-text>
          <p >骨骼分析课程主要内容是对小朋友讲解骨骼的构造以及骨骼对身体的重要性。</p>
      </mu-card-text>
      <video src="http://www.youku.com" controls="controls" width="100%">
      您的浏览器不支持 video 标签。
      </video>
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
                  教室
              </div>
              <div class="text">
                  201
              </div>
          </div>
          <div class="info">
              <div class="title">
                  阶段
              </div>
              <div class="text">
                  科学初级
              </div>
          </div>
      </div>
      <mu-divider/>
      <div class="infoBody2">

        <div class="info">
            <div class="title">
                班级人数
            </div>
            <div class="text">
                12
            </div>
        </div>

          <div class="info">
              <div class="title">
                  请假人数
              </div>
              <div class="text">
                  2
              </div>
          </div>
          <div class="info">
              <div class="title">
                  应到人数
              </div>
              <div class="text">
                  10
              </div>
          </div>
      </div>

  </div>

    <div class="nav">

    </div>
    <mu-sub-header>学员列表</mu-sub-header>
      <div >
        <div class="meItem">
          <div class="meIcon">

          </div>
          <div class="meText">
            小亮
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="qiandao">
            <span  style="background:#bbb">待签到</span>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">

          </div>
          <div class="meText">
            小强
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="qiandao">
            <span style="background:#bbb">待签到</span>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">

          </div>
          <div class="meText">
            小李
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="qiandao">
            <span style="background:#f5a819">请假</span>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">

          </div>
          <div class="meText">
            小红
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="qiandao">
            <span style="background:#bbb">待签到</span>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
      </div>



</div>

</template>

<script>

import iconshayu from '../assets/iconshayu.png'
import iconxiaoxiang from '../assets/iconxiaoxiang.jpg'
export default {
    data() {
        return {
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
