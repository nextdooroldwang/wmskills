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
    max-width: calc((100vw - 32px) / 3);
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
    overflow: hidden;
    text-overflow: ellipsis;
    white-space:nowrap;
    display: block;
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
.textContainet {
  max-height:120px;
  overflow: auto;
}
</style>

<template lang="html">

<div id="container">

  <div class="classInfo">
      <div class="infoHead">
          <span style="color:#fff;padding:2px 5px;" :style="{backgroundColor:classInfo.bg}">
        {{ classInfo.sure }}
      </span>
          <span>
        {{ classInfo.time }}
       </span>
      </div>
      <div class="infoBody">
          <div class="className">
              <div class="classImg"  :style="{backgroundImage:'url('+classInfo.bgImg+')'}">

              </div>
              <span>{{ classInfo.name }}</span>
          </div>
      </div>
      <mu-card-text>
        <div class="textContainet">
          <p v-for="textItem in classInfo.text">{{ textItem }}</p>
        </div>
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
                {{ classInfo.classes }}
            </div>
        </div>

          <div class="info">
              <div class="title">
                  教室
              </div>
              <div class="text">
                  {{ classInfo.classroom }}
              </div>
          </div>
          <div class="info">
              <div class="title">
                  阶段
              </div>
              <div class="text">
                  {{ classInfo.stage }}
              </div>
          </div>
      </div>

  </div>



</div>

</template>

<script>

import icon from '../assets/iconshayu.png'
import iconxiaoxiang from '../assets/iconxiaoxiang.jpg'
export default {
    data() {
        return {
          classInfo: {
            sure: '',
            bg: '#23a197',
            time: '',
            bgImg:'',
            name: '',
            text: '',
            classes: '',
            classroom: '',
            stage: '',
          }
        }
    },
    methods: {

    },
    mounted() {
      let _this = this
      let schedule_id = this.$route.query.id
      let qs = require('qs');
      Axios.post(_this.xyIp+'/api/home_page/course_detail', qs.stringify({
        schedule_id:schedule_id
      }))
      .then(function (response) {
        let data = response.data
        if(data.errno === 0) {
          let logoName = data.data.logo
          let shangkeTime = data.data.date.substring(0,18)
          _this.classInfo.sure = data.data.status
          _this.classInfo.name = data.data.lesson_name
          _this.classInfo.text = data.data.lesson_content
          let tempText = _this.classInfo.text.split("&#10;")

          _this.classInfo.text = tempText
          _this.classInfo.classes = data.data.class
          _this.classInfo.time = shangkeTime
          _this.classInfo.classroom = data.data.classroom
          _this.classInfo.stage = data.data.stage
          _this.classInfo.bgImg = require('assets/' + logoName)
        }else {
          console.log(data.errmsg);
        }

      })
      .catch(function (error) {
        console.log(error);
      });
    }
}

</script>
