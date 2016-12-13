<style lang="css" scoped>
.nav {
    padding: 5px 0;
    background:  rgb(240, 240, 240);
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
.file-button{
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  opacity: 0;
}


.mu-raised-button {
  min-width: 34px;
  width: 66px;
  height: 66px;
  width: calc((100vw - 72px - 56px - 14px) / 4);
  height: calc((100vw - 72px - 56px - 14px) / 4);
  margin:0 8px;
  /*border-radius: 50%;*/
}
.mu-card-text {
  padding-bottom: 0px;
  padding-top: 0px;
}
.mu-card-header {
  padding-bottom: 0px;
}
.imgContaner {
    width: 100%;
    box-sizing: border-box;
    padding: 0px 0px 16px 16px;
    display: flex;
    align-items: center;

    overflow-x: auto;
    overflow-y: hidden;
}

.imgSmall {
    flex-shrink: 0;
    display: inline-block;
    box-sizing: border-box;
    width: calc((100vw - 72px - 56px - 14px) / 4);
    height: calc((100vw - 72px - 56px - 14px) / 4);
    padding: 2px 2px;
}

.imgSmall img {
    width: 100%;
    height: 100%;
}
.mu-sub-header {
  padding: 16px;
  display: flex;
  justify-content:space-between;
  align-items: center;
}
.listBtn {
  display: flex;
  align-items: center;
}
.mu-text-field {
  margin-bottom: 0px;
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
    padding: 0px 16px 8px 16px;
}

.info {
    flex: 1;
    align-items: center;
}
.infoBtn {
  width: 100%;
  display: flex;
  justify-content: center;
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

.iconQiandao {
  background: #bbb;
  color: #fff;
  border-radius: 4px;
  padding: 3px 5px;
  font-size: 12px;
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

.iconmenu {
  position: absolute;
  right: 16px;
  top:16px;
  z-index: 999;
}
.pushBtn {
  padding: 16px 0;
}
.qiandaojilu {
  padding: 16px;
  font-size: 12px;
  color: #000;
  font-weight: 700;

}
</style>

<template lang="html">

  <div id="container">
    <div class="defaultClass">
    <div class="classInfo" v-if="classClock === true">
        <div class="infoHead">
            <span>
          签到课程
        </span>
            <span>
          {{ infoTime }}
         </span>
        </div>
        <div class="infoBody">
            <div class="className">
                <div class="classImg">

                </div>
                <span>{{ classInfo.infoName }}</span>
            </div>
        </div>
        <div class="infoBody2">
          <div class="info">
              <div class="title">
                  班级
              </div>
              <div class="text">
                  {{ classInfo.infoClass }}
              </div>
          </div>

            <div class="info">
                <div class="title">
                    教室
                </div>
                <div class="text">
                    {{ classInfo.infoClassroom }}
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
                  {{ classInfo.infoNum }}
              </div>
          </div>

            <div class="info">
                <div class="title">
                    请假人数
                </div>
                <div class="text" style="color:#f5a819">
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
    <div class="" style="text-align:center;padding:30% 0;" v-if="classClock === false">
<i class="material-icons" style="font-size:88px;color:#f5a819">block</i>
<div class="">
  暂无需签到的课程
</div>
    </div>
    <div class="nav">

    </div>
    <div v-if="classClock === false" class="qiandaojilu">
      距离您下一堂课的上课时间还有 <span style="color:#f5a819;font-size:16px;font-weight:700">2小时</span> ，您可以在上课时间1小时区间内使用签到功能。
      <router-link to="/qiandaojilu" style="font-size:16px;font-weight:700;text-decoration: underline;">查看签到记录</router-link>
    </div>
    <div class="nav"  v-if="classClock === false">

    </div>
    <div class="childList" v-if="classClock === true">
      <mu-sub-header>
        <div class="">
          学员列表
        </div>
        <div class="listBtn">
        {{ touchText }} <mu-switch v-model="touch">
      </div>
    </mu-sub-header>

    <mu-list-item title="果果" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider inset/>
    <mu-list-item title="果果" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider inset/>
    <mu-list-item title="果果" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider inset/>

    </div>
    <div class="pushBtn" v-if="classClock === true">
      <div class="infoBody2">
          <div class="infoBtn">
            <mu-raised-button label="确认签到" class="demo-raised-button" icon="edit" style="color:#fff;width:100%;height:34px;background:#f5a819;" @click="open"/>
            <mu-dialog v-if="dialog" title="签到学员" @close="close" scrollable>
              <mu-menu>
                 <mu-menu-item :title="menu" v-for="menu in menus"/>
               </mu-menu>
                <mu-flat-button slot="actions" @click="close" primary label="取消"/>
                <mu-flat-button slot="actions" keyboardFocused primary @click="ok" label="确定"/>
              </mu-dialog>
              <mu-popup position="top" :overlay="false"  class="demo-popup-top" v-if="topPopup">
                  签到信息已发送
              </mu-popup>
          </div>
      </div>

    </div>
  </div>

</template>

<script>

import shayu from '../assets/iconshayu.png'
import xuesheng from '../assets/xuesheng.jpg'
export default {
    data() {
      return {
        shayu,
        xuesheng,
        dialog: false,
        topPopup: false,
        touch: false,
        menus: ['圆圆','小红','小明','豆豆','小童','强强','倩倩','强强','倩倩'],
        value: '骨骼分析课程是为了了解骨骼的构造，和坚硬程度。',
        classInfo: {
            infoId: 1,
            infoName: '骨骼分解',
            infoClass: '鲨鱼班',
            infoClassroom: '201',
            infoNum: 7,
        },
        classClock:false,
      }
        },
        methods: {
          selectChild() {
            this.$router.push('/cardChild')
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
          open1 () {
            this.dialog1 = true
          },
          close1 () {
            this.dialog1 = false
          },
          ok1 () {
            this.dialog1 = false
            this.topPopup1 = true
          }

        },
        watch: {
          topPopup (val) {
            if (val) {
              setTimeout(() => {
                this.topPopup = false
              }, 2000)
            }
          },
          topPopup1 (val) {
            if (val) {
              setTimeout(() => {
                this.topPopup1 = false
              }, 2000)
            }
          }
        },
        computed: {
          touchText () {
            return this.touch === false ? '反选' : '全选'
          },
          infoTime() {
                  return '2016.11.22 | 08:00'
              },
        },
}

</script>
