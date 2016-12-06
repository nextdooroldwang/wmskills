<style lang="css" scoped>
#container {
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgb(240, 240, 240);
  min-height: calc(100vh - 56px);
  box-sizing: border-box;
  flex-direction: column;
}
.classInfo {
    background: #fff;
    width: 90%;
    border-radius: 8px;
    border: 1px solid #eee;

}

.infoHead {
    background: #23a197;
    opacity: 0.8;
    min-height: 24px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    color: #fff;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 3px 16px;
}

.infoHead span {
    display: flex;
    align-items: center;
    font-size: 12px;
    font-weight: 700;
    padding-left: 8px;
}

.infoBody {
    display: flex;
    justify-content: center;
    align-items: center;
flex-direction: column;
    padding: 28px 0 0 0;

}

.className {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.className span {
    font-size: 20px;
    color: #23a197;
    opacity: .9;
    padding: 8px;
}

.classImg {
    background-image: url('../assets/xue.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    /*border: 3px solid rgba(12, 145, 222, 0.5);;*/
}

.infoBody2 {
    display: flex;
    padding: 16px 16px;
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
    font-size: 14px;
    color: #000;
    font-weight: 600;
}
.mu-divider {
  width: 90%;
  margin: 0 16px;;
}
.more {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 48px;
}
</style>

<template lang="html">

<div id="container">
    <div class="classInfo">
        <div class="infoHead">
            <mu-icon value="credit_card"/>
            <span>
              星云宝宝名片
            </span>
        </div>
        <div class="infoBody">
            <div class="className">
                <div class="classImg">

                </div>
                <span>小红</span>
            </div>
        </div>
        <div class="infoBody2">
            <div class="info">
                <div class="title">
                    姓名
                </div>
                <div class="text">
                    李思思
                </div>
            </div>
            <div class="info">
                <div class="title">
                    电话
                </div>
                <div class="text">
                    <a href="tel:13344556666">13344556666</a>
                </div>
            </div>
            <div class="info">
                <div class="title">
                    家长
                </div>
                <div class="text">
                    妈妈刘娜
                </div>
            </div>
        </div>
        <mu-divider/>
        <div class="infoBody2">
            <div class="info">
                <div class="title">
                    剩余课时
                </div>
                <div class="text">
                    11
                </div>
            </div>
            <div class="info">
                <div class="title">
                    累计签到
                </div>
                <div class="text">
                    11
                </div>
            </div>
            <div class="info">
                <div class="title">
                    请假次数
                </div>
                <div class="text">
                    11
                </div>
            </div>
        </div>
    </div>
    <div class="more">
      <a href="http://192.168.1.107/xiangce/pages/medias/image-gallery.html">学员相册</a>
    </div>
</div>

</template>

<script>
import iconlaoshi from '../assets/laoshi.jpg'
export default {
  data() {
      return {
          iconlaoshi,

      }
  },

  methods: {

  },
  computed: {
      infoTime() {
              return '2016.11.22 | 08:00'
          },

  }
}

</script>
