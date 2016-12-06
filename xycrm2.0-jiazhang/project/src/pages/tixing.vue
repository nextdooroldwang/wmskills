<style lang="css" scoped>
#container {
  min-height: calc(100vh - 56px);
}
.nav {
    padding: 5px 0;
    background: #eee;
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
    padding: 15px 0;
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

</style>

<template lang="html">

<div id="container">
  <div class="classInfo">
      <div class="infoHead">
        <span class="iconQiandao">
          {{ iconQiandao }}
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
                  老师
              </div>
              <div class="text">
                  {{ classInfo.infoTeather }}
              </div>
          </div>
          <div class="info">
              <div class="title">
                  教室
              </div>
              <div class="text">
                  {{ classInfo.infoClass }}
              </div>
          </div>
          <div class="info">
              <div class="title">
                  阶段
              </div>
              <div class="text">
                  {{ classInfo.infoJieduan }}
              </div>
          </div>
      </div>
      <mu-divider/>
      <div class="infoBody2">
          <div class="infoBtn">
            <mu-raised-button :label="baoming" class="demo-raised-button" icon="edit" style="color:#fff;width:100%" :style="baomingBg" @click="open" :disabled="dis"/>
            <mu-dialog v-if="dialog" title="签到提示" @close="close">
              <div class="dialogText">
                <span class="dialogTitle">确认签到: </span><span>{{ classInfo.infoName }}？</span>
              </div>
              <div class="dialogText">
                <span class="dialogTitle">上课时间: </span><span>{{ infoTime }}</span>
              </div>
              <div class="dialogText">
                <span class="dialogTitle">上课教室: </span><span>{{ classInfo.infoClass }}</span>
              </div>
              <div class="dialogText">
                <span class="dialogTitle">上课老师: </span><span>{{ classInfo.infoTeather }}</span>
              </div>
                <mu-flat-button slot="actions" @click="close" primary label="取消"/>
                <mu-flat-button slot="actions" keyboardFocused primary @click="ok" label="确定"/>
              </mu-dialog>
              <mu-popup position="top" :overlay="false" class="demo-popup-top" v-if="topPopup">
                  签到成功
              </mu-popup>
          </div>
      </div>
  </div>
</div>

</template>

<script>
import myron from '../assets/iconshayu.png'
export default {
  data () {
    return {
      myron,
      classInfo: {
          infoId: 1,
          infoName: '骨骼分解',
          infoTeather: '思思',
          infoJieduan: '初级',
          infoClass: '201',
      },
      iconQiandao: '待签到',
      baoming: '点击签到',
      baomingBg: {
        background: '#f5a819'
      },
      dialog: false,
      dis: false,
      topPopup: false,
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
      this.baoming = '已签到'
      this.baomingBg.background = '#23a197'
      this.dis = true
      this.topPopup = true
      this.iconQiandao = '已签到'
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
      infoTime() {
              return '2016.11.22 | 08:00'
          },

  },
}

</script>
