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
              <div class="classImg" :style="{backgroundImage:'url('+myInfo.bgImg+')'}">

              </div>

          </div>
      </div>
      <div class="infoBody2">
        <div class="info">
            <div class="title">
                名字
            </div>
            <div class="text">
                {{ myInfo.name }}
            </div>
        </div>
          <div class="info">
              <div class="title">
                  性别
              </div>
              <div class="text">
                  {{ myInfo.sex }}
              </div>
          </div>

          <div class="info">
              <div class="title">
                  年龄
              </div>
              <div class="text">
                  {{ myInfo.age }}
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
                {{ myInfo.birthday }}
            </div>
        </div>
          <div class="info">
              <div class="title">
                  家长
              </div>
              <div class="text">
                  {{ myInfo.parent }}
              </div>
          </div>
          <div class="info">
              <div class="title">
                  联系电话
              </div>
              <div class="text">
                  {{ myInfo.phone }}
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
      <div v-for="classItem in myInfo.classInfo">
        <div class="meItem" @click="classItem.clickShow = !classItem.clickShow">
          <div class="meIcon">
              <div class="photo" :style="{backgroundImage:'url('+classItem.icon+')'}">

              </div>
          </div>
          <div class="meText">
            {{ classItem.classes }}
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="qiandaoTime">
          <i class="material-icons">expand_more</i>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="childList" v-show="classItem.clickShow">
            <mu-sub-header>
                <div class="">
                    详情
                </div>

            </mu-sub-header>
            <div style="display:flex">
              <div style="flex:1;border-right:1px solid #eee">
                <mu-card-text>
                    课程名称：{{ classItem.crouse }}
                </mu-card-text>
                <mu-card-text>
                    上课教室：{{ classItem.classroom }}
                </mu-card-text>
                <mu-card-text>
                    剩余课时：{{ classItem.over }}
                </mu-card-text>
              </div>
              <div style="flex:1">
                <mu-card-text>
                    累计签到次数：{{ classItem.sure }}
                </mu-card-text>
                <mu-card-text>
                    请假次数：{{ classItem.leave }}
                </mu-card-text>
                <mu-card-text>
                    旷课次数：{{ classItem.clear }}
                </mu-card-text>
              </div>
            </div>
            <div style="padding:16px">
              已完成/总课时：{{ classItem.done }}/{{ classItem.classTimes }}
              <mu-linear-progress mode="determinate" :value="classItem.done"/>
            </div>

        </div>
      </div>
    </div>
</div>

</template>

<script>

export default {
    data() {
        return {
          myInfo: {
            name: '',
            sex: '',
            age: '',
            birthday: '',
            parent: '',
            phone: '',
            bgImg:'',
            classInfo:[]
          }

        }
    },
    mounted() {
      let _this = this
      Axios.post(_this.xyIp+'/api/home_page/my')
      .then(function (response) {
        let data = response.data
        if(data.errno === 0) {
          _this.myInfo.name = data.data.child_name
          _this.myInfo.sex = data.data.child_sex
          _this.myInfo.age = data.data.age
          _this.myInfo.birthday = data.data.child_birth
          _this.myInfo.parent = data.data.name
          _this.myInfo.phone = data.data.phone
          _this.myInfo.bgImg = require('assets/' + data.data.child_photo)
          for(let i =0;i < data.data.class_info.length;i++) {
            _this.myInfo.classInfo.push({
              clickShow: false,
              classes: '',
              icon: '',
              crouse: '',
              classroom: '',
              over: 0,
              sure: 0,
              leave: 0,
              clear: 0,
              done: 0,
              classTimes: 0
            })
            _this.myInfo.classInfo[i].classes = data.data.class_info[i].class_name
            _this.myInfo.classInfo[i].icon = require('assets/' + data.data.class_info[i].logo)
            _this.myInfo.classInfo[i].crouse = data.data.class_info[i].course_name
            _this.myInfo.classInfo[i].classroom = data.data.class_info[i].classroom
            _this.myInfo.classInfo[i].over = data.data.class_info[i].rest_hour
            _this.myInfo.classInfo[i].sure = data.data.class_info[i].sign
            _this.myInfo.classInfo[i].leave = data.data.class_info[i].leave
            _this.myInfo.classInfo[i].clear = data.data.class_info[i].cut
            _this.myInfo.classInfo[i].done = data.data.class_info[i].finish
            _this.myInfo.classInfo[i].classTimes = data.data.class_info[i].actual_hour
          }
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
