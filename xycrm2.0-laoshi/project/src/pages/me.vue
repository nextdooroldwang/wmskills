<style lang="css" scoped>
#container {
  background: rgb(240, 240, 240);
}

.nav {
    padding: 5px 0;
    background:  rgb(240, 240, 240);
}
.mu-divider {
  margin-left: 48px
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
  padding: 16px 16px 16px 0px;
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
  padding: 16px;
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
.mu-divider.inset {
  margin-left: 0;

}
</style>

<template lang="html">

<div id="container">
  <div class="nav">

  </div>
  <div class="meItem">
    <div class="meIcon">
      <div class="photo">

      </div>
    </div>
    <div class="meText">
      小明
    </div>
    <div style="display:flex;align-items:center">
      <mu-icon value="texture" color="#f5a819"/>
    </div>
    <div class="">
      <mu-icon-button icon="chevron_right" @click="routerCard"/>
    </div>
    </mu-list-item>
  </div>
  <div class="nav">

  </div>
  <div class="meItem">
    <div class="meIcon">
      <mu-icon value="home" color="#f5a819"/>
    </div>
    <div class="meText">
      星云家门口万科鹿特丹店
    </div>
    <div class="iconBorder">
      <span>我的社区店</span>
    </div>
    <div class="">
      <mu-icon-button icon="chevron_right"/>
    </div>
    </mu-list-item>
  </div>
  <div class="nav">

  </div>
  <div class="meItem">
    <div class="meIcon">
      <mu-icon value="date_range" color="#f5a819"/>
    </div>
    <div class="meText">
      课程表
    </div>
    <div >

    </div>
    <div class="">
      <mu-icon-button icon="chevron_right" @click="routerKebiao"/>
    </div>
    </mu-list-item>
  </div>
  <mu-divider inset/>
  <div class="meItem">
    <div class="meIcon" >
      <mu-icon value="date_range" color="#f5a819"/>
    </div>
    <div class="meText">
      我的课程信息
    </div>
    <div >

    </div>
    <div class="">
      <mu-icon-button icon="chevron_right" @click="routerPaikeXuesheng"/>
    </div>
    </mu-list-item>
  </div>

  <div class="nav">

  </div>
  <div class="meItem">
    <div class="meIcon">
      <mu-icon value="settings" color="#f5a819"/>
    </div>
    <div class="meText">
      设置
    </div>
    <div >
    </div>
    <div class="">
      <mu-icon-button icon="chevron_right"/>
    </div>
    </div>
    <div class="nav">

    </div>
</div>

</template>

<script>

import xuesheng from '../assets/xue.jpg'
export default {
    data() {
            return {
                xuesheng
            }
        },
        mounted() {},
        methods: {
          routerCard() {
            this.$router.push('/card')
          },
          routerLogin() {
            this.$router.push('/login')
          },
          routerPaikeXuesheng() {
            this.$router.push('/kebiao')
          },
          routerKebiao() {
            this.$router.push('/timetables')
          }
        }
}

</script>
