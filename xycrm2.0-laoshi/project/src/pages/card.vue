<style lang="css" scoped>
#container {
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgb(240, 240, 240);
  min-height: calc(100vh - 56px);
  box-sizing: border-box;
}
.classInfo {
    background: #fff;
    width: 90%;
    border-radius: 8px;
    border: 1px solid #eee;
}

.infoHead {
    background: #f5a819;
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
    color: #f5a819;
    opacity: .9;
    padding: 8px;
}

.classImg {
    background-image: url('../assets/laoshi.jpg');
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
    padding: 28px 0;
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

.erweima {
  display: flex;
  justify-content: center;
  align-items: center;
}
.tips {
  color: #666;
  font-size: 12px;
}
</style>

<template lang="html">

<div id="container">
    <div class="classInfo">
        <div class="infoHead">
            <mu-icon value="credit_card"/>
            <span>
              星云二维码名片
            </span>

        </div>
        <div class="infoBody">
            <div class="className">
                <div class="classImg">

                </div>
                <span>思思</span>
            </div>
        </div>
        <div class="infoBody">
            <div class="erweima">
              <img src="../assets/2weima.jpg" alt="" width="200px" height="200px"/>
            </div>
            <div class="tips">
              扫一扫加微信
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
                    13344556666
                </div>
            </div>
            <div class="info">
                <div class="title">
                    职务
                </div>
                <div class="text">
                    老师
                </div>
            </div>

        </div>

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
