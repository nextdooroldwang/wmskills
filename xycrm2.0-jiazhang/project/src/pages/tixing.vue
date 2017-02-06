<style lang="css" scoped>
#container {
  min-height: calc(100vh - 56px);
  background: #eee;
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
    background: #fff;
    margin-bottom: 8px;
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
}

.infoBody2 {
    display: flex;
    padding: 15px 0;
}

.info {
    flex: 1;
    align-items: center;
    max-width: calc((100vw - 32px) / 3);

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
    overflow: hidden;
    text-overflow: ellipsis;
    white-space:nowrap;
    display: block;
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
.dialogTitle+span {
  flex: 1;
  color: #000;
  font-weight: 700;
}

</style>

<template lang="html">

<div id="container">
  <div class="" style="text-align:center;padding:50% 0;" v-if="classClock === false">
    <i class="material-icons" style="font-size:88px;color:#f5a819">block</i>
    <div class="">
    暂无需签到的课程
    </div>
  </div>

  <div class="classInfo" v-for="courseAll in course">
      <div class="infoHead">
        <span class="iconQiandao">
          {{ courseAll.status }}
        </span>
          <span>
        {{ courseAll.date }}
       </span>
      </div>
      <div class="infoBody">
          <div class="className">
              <div class="classImg" :style="{backgroundImage:'url('+courseAll.logo+')'}">

              </div>
              <span>{{ courseAll.lesson_name }}</span>
          </div>
      </div>
      <div class="infoBody2">
          <div class="info">
              <div class="title">
                  老师
              </div>
              <div class="text">
                  {{ courseAll.teacher }}
              </div>
          </div>
          <div class="info">
              <div class="title">
                  教室
              </div>
              <div class="text">
                  {{ courseAll.classroom }}
              </div>
          </div>
          <div class="info">
              <div class="title">
                  阶段
              </div>
              <div class="text">
                  {{ courseAll.stage }}
              </div>
          </div>
      </div>
      <mu-divider/>
      <div class="infoBody2">
          <div class="infoBtn">
            <mu-raised-button :label="courseAll.baoming" class="demo-raised-button" icon="edit" style="width:100%;color:#fff" :style="courseAll.baomingBg" @click="open(courseAll)" :disabled="courseAll.dis"/>
          </div>
      </div>

  </div>
  <mu-dialog v-if="dialog" title="签到提示" @close="close">
    <div class="dialogText">
      <span class="dialogTitle">确认签到: </span><span>{{ dialogText.lesson_name }}？</span>
    </div>
    <div class="dialogText">
      <span class="dialogTitle">上课时间: </span><span>{{ dialogText.date }}</span>
    </div>
    <div class="dialogText">
      <span class="dialogTitle">上课教室: </span><span>{{ dialogText.classroom }}</span>
    </div>
    <div class="dialogText">
      <span class="dialogTitle">上课老师: </span><span>{{ dialogText.teacher }}</span>
    </div>
      <mu-flat-button slot="actions" @click="close" primary label="取消"/>
      <mu-flat-button slot="actions" keyboardFocused primary @click="ok(dialogText)" label="确定"/>
  </mu-dialog>
  <mu-popup position="top" :overlay="false" class="demo-popup-top" v-if="topPopup">
      签到成功
  </mu-popup>
</div>

</template>

<script>
export default {
  data () {
    return {
      classClock:true,
      dialogText: {
        lesson_name:'',
        date:'',
        classroom:'',
        teacher:'',
        schedule_log_id:'',
      },
      course:[],
      dialog: false,
      topPopup: false,
    }
  },
  methods: {
    open (val) {
      this.dialog = true
      this.dialogText.lesson_name = val.lesson_name
      this.dialogText.date = val.date
      this.dialogText.classroom = val.classroom
      this.dialogText.teacher = val.teacher
      this.dialogText.schedule_log_id = val.schedule_log_id
    },
    close () {
      this.dialog = false
    },
    ok (val) {
      this.dialog = false
      let _this = this
      let qs = require('qs');
      Axios.post(_this.xyIp+'/api/home_page/do_sign', qs.stringify({
        schedule_id:val.schedule_log_id
      }))
      .then(function (response) {
        let data = response.data
        if(data.errno === 0) {
          _this.topPopup = true
          for (let i = 0; i < _this.course.length; i++) {
            if(val.schedule_log_id === _this.course[i].schedule_log_id) {
              _this.course[i].baoming = '已签到'
              _this.course[i].baomingBg= {
                background: '#23a197'
              }
              _this.course[i].dis = true
              _this.course[i].status = data.data
            }
          }
        }else {
          console.log(data.errmsg);
        }

      })
      .catch(function (error) {
        console.log(error);
      });

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

  mounted() {
    let _this = this
    Axios.post(_this.xyIp+'/api/home_page/sign')
    .then(function (response) {
      let data = response.data
      if(data.errno === 0) {
        _this.course = data.data
        if (data.data.length === 0) {
          _this.classClock = false
        }
        let objectQiandao = {
          baomingBg: {
            background: '#f5a819'
          },
          dis: false,
          baoming: '点击签到',
        }
        for (let i = 0; i < _this.course.length; i++) {
          _this.course[i].logo = require('assets/' + _this.course[i].logo)
          _this.course[i].date = _this.course[i].date.substring(0,18)
          Object.assign(_this.course[i],objectQiandao)
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
