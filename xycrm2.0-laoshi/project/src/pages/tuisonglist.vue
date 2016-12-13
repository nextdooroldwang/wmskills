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
  background: #23a197;
  opacity: .5;
}
.file-button{
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  opacity: 0;
}

.mu-divider {
  margin-left: 16px;
}
.mu-raised-button {
  min-width: 34px;
  /*width: 66px;
  height: 66px;*/
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
    font-weight: 700;
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
  right: 8px;
  top:8px;
  z-index: 999;
}
.pushBtn {
  padding: 16px 0;
}

.selectContainer {
  display: flex;
}
.selectClass {
  flex: 1;
  position: relative;
}
</style>

<template lang="html">

  <div id="container">
    <div class="selectContainer">

      <div class="selectClass">
        <mu-raised-button icon="expand_more" style="color:#fff;width:100%;height:100%;margin-left:0;background:#23a197" @click="openBottomSheet2" labelPosition="before" :label="banji" />
        <mu-bottom-sheet v-if="bottomSheet2" @close="closeBottomSheet2">
            <mu-menu @itemClick="closeBottomSheet2">
                <mu-sub-header>
                    请选择一个
                </mu-sub-header>
                <mu-menu-item title="鲨鱼一班"  @click="sheet2('鲨鱼一班')"/>
                <mu-menu-item title="鲨鱼二班"  @click="sheet2('鲨鱼二班')"/>
                <mu-menu-item title="鲨鱼三班"  @click="sheet2('鲨鱼三班')"/>
            </mu-menu>
        </mu-bottom-sheet>
      </div>

            <div class="selectClass">
              <mu-raised-button icon="expand_more" style="color:#fff;width:100%;height:100%;margin-left:0;background:#23a197" @click="openBottomSheet" labelPosition="before" :label="leixing" />
              <mu-bottom-sheet v-if="bottomSheet" @close="closeBottomSheet">
                  <mu-menu @itemClick="closeBottomSheet">
                      <mu-sub-header>
                          请选择一个
                      </mu-sub-header>
                      <mu-menu-item title="通知"  @click="sheet('通知')"/>
                      <mu-menu-item title="课程消息"  @click="sheet('课程消息')"/>
                      <mu-menu-item title="课堂表现"  @click="sheet('课堂表现')"/>
                  </mu-menu>
              </mu-bottom-sheet>
            </div>
    </div>
    <div class="nav">

    </div>
    <div v-if="leixing ==='课堂表现'">


    <div class="defaultClass">
      <mu-card>
        <div class="iconmenu">
            <mu-icon-button icon="expand_more" @click="open1"/>
        </div>

        <mu-dialog v-if="dialog1" title="选择课程" @close="close1" scrollable>
          <mu-menu>
            <mu-menu-item :title="menu1" v-for="menu1 in menus1"/>
          </mu-menu>
          <mu-flat-button slot="actions" @click="close1" primary label="取消"/>
          <mu-flat-button slot="actions" keyboardFocused primary @click="ok1" label="确定"/>
        </mu-dialog>

        <mu-card-header title="骨骼分析" subTitle="2016-12-20">
          <mu-avatar :src="shayu" slot="avatar"/>
        </mu-card-header>
        <mu-card-text>
          <mu-text-field  multiLine fullWidth v-model="value" :rows="3"/>
        </mu-card-text>
      </mu-card>
    </div>
    <div class="nav">

    </div>
    <div class="childList">
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
    <div class="imgContaner">
      <div class="imgSmall">
          <img src="../assets/xiaohai8.jpg" alt="" />
      </div>
      <div class="imgSmall">
          <img src="../assets/xiaohai9.jpg" alt="" />
      </div>
      <div class="imgSmall">
          <img src="../assets/xiaohai1.jpg" alt="" />
      </div>
      <div class="imgSmall">
          <img src="../assets/xiaohai8.jpg" alt="" />
      </div>


        <mu-raised-button class="demo-raised-button" icon="add">
           <input type="file" class="file-button">
         </mu-raised-button>
    </div>
    <mu-divider/>
    <mu-list-item title="丽丽" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>
    <div class="imgContaner">
      <div class="imgSmall">
          <img src="../assets/xiaohai8.jpg" alt="" />
      </div>
      <div class="imgSmall">
          <img src="../assets/xiaohai9.jpg" alt="" />
      </div>

      <div class="imgSmall">
          <img src="../assets/xiaohai8.jpg" alt="" />
      </div>


        <mu-raised-button class="demo-raised-button" icon="add">
           <input type="file" class="file-button">
         </mu-raised-button>
    </div>
    <mu-divider/>
    <mu-list-item title="明明" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>
    <div class="imgContaner">
      <div class="imgSmall">
          <img src="../assets/xiaohai8.jpg" alt="" />
      </div>


        <mu-raised-button class="demo-raised-button" icon="add">
           <input type="file" class="file-button">
         </mu-raised-button>
    </div>
    <mu-divider/>

    </div>
    </div>


    <div v-if="leixing ==='通知'">


    <div class="defaultClass">
      <mu-card>

        <mu-card-text>
          <mu-text-field hintText="请输入通知内容" multiLine fullWidth :rows="3"/>
        </mu-card-text>
      </mu-card>
    </div>
    <div class="nav">

    </div>
    <div class="childList">
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

    <mu-divider/>
    <mu-list-item title="丽丽" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider/>
    <mu-list-item title="明明" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider/>

    </div>
    </div>




    <div v-if="leixing ==='课程消息'">


    <div class="defaultClass">
      <mu-card>

        <mu-card-text>
          <mu-text-field style="opacity: 1" hintText="请输入课程消息，如：作业，预习内容，复习内容等。" v-model="text" multiLine fullWidth :rows="3"/>
        </mu-card-text>
      </mu-card>
    </div>
    <div class="nav">

    </div>
    <div class="childList">
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

    <mu-divider/>
    <mu-list-item title="丽丽" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider/>
    <mu-list-item title="明明" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
        <mu-checkbox class="demo-checkbox" slot="right"/>
    </mu-list-item>

    <mu-divider/>

    </div>
    </div>






    <div class="pushBtn">
      <div class="infoBody2">
          <div class="infoBtn">
            <mu-raised-button label="一键推送" class="demo-raised-button" icon="redo" style="color:#fff;width:100%;height:34px;background:#f5a819;" @click="open"/>
            <mu-dialog v-if="dialog" title="推送学员" @close="close" scrollable>
              <mu-menu>
                 <mu-menu-item :title="menu" v-for="menu in menus"/>
               </mu-menu>
                <mu-flat-button slot="actions" @click="close" primary label="取消"/>
                <mu-flat-button slot="actions" keyboardFocused primary @click="ok" label="确定"/>
              </mu-dialog>
              <mu-popup position="top" :overlay="false"  class="demo-popup-top" v-if="topPopup">
                  推送成功
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
        leixing: '通知',
        banji:'鲨鱼一班',
        text:'本期课程复习内容：骨骼分析，骨骼的成分',
        dialog: false,
        dialog1: false,
        topPopup: false,
        topPopup1: false,
        touch: false,
        bottomSheet: false,
        bottomSheet2: false,
        menus: ['圆圆','小红','小明','豆豆','小童','强强','倩倩','强强','倩倩'],
        menus1: ['骨骼分析','树叶的世界','神奇的静电','灯泡发光啦',],
        value: '骨骼分析课程是为了了解骨骼的构造，和坚硬程度。'
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
          open1 () {
            this.dialog1 = true
          },
          close1 () {
            this.dialog1 = false
          },
          ok1 () {
            this.dialog1 = false
          },
          closeBottomSheet() {
              this.bottomSheet = false
          },
          closeBottomSheet2() {
              this.bottomSheet2 = false
          },
          openBottomSheet() {
              this.bottomSheet = true
          },
          openBottomSheet2() {
              this.bottomSheet2 = true
          },
          routerTuisong() {
            this.$router.push('/tuisong')
          },
          sheet (val) {
            this.leixing = val
            this.bottomSheet = false
          },
          sheet2 (val) {
            this.banji = val
            this.bottomSheet2 = false
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
          }
        }
}

</script>
