<style lang="css" scoped>

.nav {
    padding: 2px 0;
    background: rgb(240, 240, 240);
}


.mu-divider {
    margin-left: 16px;
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
    justify-content: space-between;
    align-items: center;
}

.listBtn {
    display: flex;
    align-items: center;
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

.dialogTitle {}

.dialogTitle+span {
    flex: 1;
    color: #000;
    font-weight: 700;
}

.iconmenu {
    position: absolute;
    right: 8px;
    top: 8px;
    z-index: 999;
}

.pushBtn {
    padding: 16px 0;
}

.mu-raised-button {
    width: 100%
}

.selectContainer {
    display: flex;
}

.selectTime,
.selectClass {
    flex: 1;
    position: relative;
    height: 35px;
}

.mu-date-picker {
    width: 100%;
}

.timeBtn {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: -2000;
}

.mu-text-field {}

.tuisongContainer {
    padding: 16px;
}

.tuisongHeader {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.tuisongLeixing {
    padding: 2px 5px;
    color: #fff;
    font-size: 14px;
    background: #f5a819;
    border-radius: 4px;
}

.tuisongTime {
    font-size: 14px;
    color: #888;
}

.tuisongBody {
    font-size: 14px;
    color: #000;
    padding-top: 16px;
}

.green {
    color: #23a197;
}

.red {
    color: red;
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
.qiandaoTime {
  padding-right: 16px;
}
</style>

<template lang="html">

<div id="container">
    <!-- <div class="selectContainer">

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
      <div class="selectClas">
        <mu-date-picker/>
        <div class="timeBtn">
          <mu-raised-button style="color:#fff;width:100%;height:100%;margin-left:0;background:#23a197" icon="expand_more" label="选择时间" />
        </div>
      </div>
    </div> -->
    <div class="selectContainer">
        <div class="selectTime">
            <mu-date-picker/>
            <div class="timeBtn">
                <mu-raised-button style="color:#fff;width:100%;height:100%;margin-left:0;background:#23a197" icon="query_builder" @click="openBottomSheet" label="选择时间" labelPosition="before" />
            </div>
        </div>
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
    </div>
    <div class="nav">

    </div>
    <div class="nav">

    </div>

    <div>
      <div class="meItem" @click="qiandao1 = !qiandao1">
        <div class="meIcon">
          <div class="photoClass" style="background:#23a197">
            1
          </div>
        </div>
        <div class="meText">
          骨骼分析
        </div>
        <div style="display:flex;align-items:center">

        </div>
        <div class="qiandaoTime">
          2016-12-09
        </div>
        </mu-list-item>
      </div>
      <mu-divider/>
      <div class="childList" v-show="qiandao1">
          <mu-sub-header>
              <div class="">
                  学员签到记录
              </div>

          </mu-sub-header>

          <mu-list-item title="果果" >
              <mu-avatar :src="xuesheng" slot="leftAvatar" />
              <i class="material-icons green" slot="right">done</i>
          </mu-list-item>

          <mu-divider/>
          <mu-list-item title="丽丽">
              <mu-avatar :src="xuesheng" slot="leftAvatar" />
              <i class="material-icons green" slot="right">done</i>
          </mu-list-item>

          <mu-divider/>
          <mu-list-item title="明明" >
              <mu-avatar :src="xuesheng" slot="leftAvatar" />
              <i class="material-icons red" slot="right">clear</i>
          </mu-list-item>
          <div class="imgContaner">

          </div>
          <mu-divider/>

      </div>
      <div class="meItem"  @click="qiandao2 = !qiandao2">
        <div class="meIcon">
          <div class="photoClass" style="background:#23a197">
            2
          </div>
        </div>
        <div class="meText">
          树叶的秘密
        </div>
        <div style="display:flex;align-items:center">

        </div>
        <div class="qiandaoTime">
          2016-12-11
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

          <mu-list-item title="果果" >
              <mu-avatar :src="xuesheng" slot="leftAvatar" />
              <i class="material-icons green" slot="right">done</i>
          </mu-list-item>

          <mu-divider/>
          <mu-list-item title="丽丽">
              <mu-avatar :src="xuesheng" slot="leftAvatar" />
              <i class="material-icons green" slot="right">done</i>
          </mu-list-item>

          <mu-divider/>
          <mu-list-item title="明明" >
              <mu-avatar :src="xuesheng" slot="leftAvatar" />
              <i class="material-icons red" slot="right">clear</i>
          </mu-list-item>
          <div class="imgContaner">

          </div>
          <mu-divider/>

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
                qiandao1:false,
                qiandao2:false,
                tongzhi1: false,
                    tongzhi2: false,
                    kecheng1: false,
                    ketang1: false,
                    leixing: '全部',
                    banji: '鲨鱼一班',
                    dialog: false,
                    dialog1: false,
                    topPopup: false,
                    topPopup1: false,
                    touch: false,
                    bottomSheet: false,
                    bottomSheet2: false,
                    menus: ['圆圆', '小红', '小明', '豆豆', '小童', '强强', '倩倩', '强强', '倩倩'],
                    menus1: ['骨骼分析', '树叶的世界', '神奇的静电', '灯泡发光啦', ],
                    value: '骨骼分析课程是为了了解骨骼的构造，和坚硬程度。'
            }
        },
        methods: {
            selectChild() {

                },
                open() {
                    this.dialog = true
                },
                close() {
                    this.dialog = false
                },
                ok() {
                    this.dialog = false
                    this.topPopup = true
                },
                open1() {
                    this.dialog1 = true
                },
                close1() {
                    this.dialog1 = false
                },
                ok1() {
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
                sheet(val) {
                    this.leixing = val
                    this.bottomSheet = false
                },
                sheet2(val) {
                    this.banji = val
                    this.bottomSheet2 = false
                },

        },
        watch: {
            topPopup(val) {
                    if (val) {
                        setTimeout(() => {
                            this.topPopup = false
                        }, 2000)
                    }
                },
                topPopup1(val) {
                    if (val) {
                        setTimeout(() => {
                            this.topPopup1 = false
                        }, 2000)
                    }
                }
        },
        computed: {
            touchText() {
                return this.touch === false ? '反选' : '全选'
            }
        }
}

</script>
