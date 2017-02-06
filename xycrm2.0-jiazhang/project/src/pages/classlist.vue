<style lang="css" scoped>

#container {
    background: #eee;
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

.nav {
    padding: 5px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 700;
}

.nav {
    background: #f5a819;
    color: #fff;
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
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.mu-raised-button {
    width: 100%
}

.stepperContainer {
    width: 100%;
    overflow: auto;
}

.tips {
    padding: 3px 16px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    color: #ccc;
}
.qingjiaBtn {
  color:#f5a819;
  text-align:center;
  padding:5px 0;
}
.cardContainer {
  margin-bottom: 16px;
}
p {
  max-height: 120px;
  overflow: auto;
}
</style>

<template lang="html">

<div id="container">
    <div v-for="courseA in courseAll" class="cardContainer">
        <mu-card>
            <mu-card-header :title="courseA.title" :subTitle="courseA.subTitle">
                <mu-avatar :src="courseA.icon" slot="avatar" />
            </mu-card-header>
            <mu-card-text>
                <p >{{ courseA.text }}</p>
            </mu-card-text>
            <div class="">
                <div class="infoBody2">
                    <div class="info">
                        <div class="title">
                            剩余课时
                        </div>
                        <div class="text">
                            {{ courseA.over }}
                        </div>
                    </div>
                    <div class="info">
                        <div class="title">
                            累计签到
                        </div>
                        <div class="text">
                            {{ courseA.sure }}
                        </div>
                    </div>
                    <div class="info">
                        <div class="title">
                            请假次数
                        </div>
                        <div class="text">
                            {{ courseA.leave }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="stepperContainer">
                <div class="stepper" :style="stepW(courseA.courseNum)">
                    <mu-stepper :activeStep="activeStep" :linear="false">
                        <mu-step v-for="stepNum in courseA.courseNum" :completed="false">
                            <mu-step-button  @click="clickStep(courseA,stepNum)">
                              <mu-icon  slot="icon" :value="iconValue(stepNum.stepSure)" :color="iconColor(stepNum.stepSure)" />
                                {{ stepNum.text }}
                                <br> {{ stepNum.time }}
                            </mu-step-button>

                        </mu-step>

                    </mu-stepper>
                </div>
            </div>
            <mu-raised-button icon="expand_more" class="demo-raised-butto" @click="clickClassShow(courseA.num,courseA)" />
        </mu-card>

        <div class="classAll" v-if="courseA.clickCourse.courseShow" >
            <div class="nav">
                {{ courseA.clickCourse.stage }}
            </div>
            <div class="classInfo" style="padding-bottom:0;">
                <div class="classTitle" @click="routerPaike(courseA.clickCourse.id)">
                    <div class="className">
                        {{ courseA.clickCourse.name }}
                    </div>
                    <div class="classTime">
                        {{ courseA.clickCourse.time }}
                    </div>
                </div>
                <div class="classBody" @click="routerPaike(courseA.clickCourse.id)">
                    <div class="classMain">
                        {{ courseA.clickCourse.main }}
                    </div>
                    <div class="classSure">
                        <mu-badge :content="courseA.clickCourse.sure" :color="sureColor(courseA.clickCourse.sure)" />
                    </div>
                </div>
                <mu-divider/>
                <mu-flat-button :label="courseA.clickCourse.qingjia" class="demo-flat-button" style="width:100%"  @click="open(courseA.clickCourse)" :disabled="courseA.clickCourse.dis"  :style="courseA.clickCourse.qingjiaCss" v-if="courseA.clickCourse.sure === '未开课'"/>
                <!-- <div class="qingjiaBtn" @click="open" v-if="courseA.clickCourse.sure === '待签到'" :style="qingjiaCss">
                {{ qingjia }}
                </div> -->
                <mu-dialog :open="dialog" v-if="dialog" title="提醒" @close="close">
                   是否确认请假？
                   <mu-flat-button slot="actions" @click="close" primary label="取消"/>
                   <mu-flat-button slot="actions" primary  @click="clickQingjia(courseA.clickCourse)" label="确定"/>
                 </mu-dialog>
            </div>
        </div>

        <div class="classAll" v-show="courseA.show">
            <div v-for="courseAA in courseA.course">
                <div class="nav">
                    {{ courseAA.stage }}
                </div>
                <div class="classInfo" v-for="courseAAA in courseAA.stageCourse">
                    <div class="classTitle" @click="routerPaike(courseAAA.id)">
                        <div class="className">
                            {{ courseAAA.name }}
                        </div>
                        <div class="classTime">
                            {{ courseAAA.time }}
                        </div>
                    </div>
                    <div class="classBody" @click="routerPaike(courseAAA.id)">
                        <div class="classMain">
                            {{ courseAAA.main }}
                        </div>
                        <div class="classSure">
                            <mu-badge :content="courseAAA.sure" :color="sureColor(courseAAA.sure)" />
                        </div>

                    </div>

                    <mu-divider/>

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
                courseAll: [],
                activeStep: -1,
                pri:true,
                dialog: false,

            }
        },
        methods: {
            clickClassShow(num,course) {
                    this.courseAll[num].show = !this.courseAll[num].show
                    course.clickCourse.courseShow = false
                },
                stepW(courseNum) {
                    let num = courseNum.length
                    num = num % 4 > 0 ? (num + 1) / 4 * 100 : num / 4 * 100
                    num = num + 'vw'
                    let stepWidth = {}
                    stepWidth = {
                        width: num
                    }
                    return stepWidth
                },
                sureColor(sure) {
                    let sureColor = ''
                    switch (sure) {
                        case '请假':
                            sureColor = '#f5a819'
                            break;
                        case '已签到':
                            sureColor = '#23a197'
                            break;
                        case '旷课':
                            sureColor = 'red'
                            break;
                        default:
                            sureColor = '#666'
                    }
                    return sureColor
                },
                clickStep(courseA,courseArr) {
                    courseA.show = false
                      for(let arrr of courseA.course) {
                        for(let arrrr of arrr.stageCourse) {
                          if(courseArr.id === arrrr.id) {
                            courseA.clickCourse.id = arrrr.id
                            courseA.clickCourse.courseShow = true
                            courseA.clickCourse.stage = arrrr.parent + '（当前选择的课程）'
                            courseA.clickCourse.name = arrrr.name
                            courseA.clickCourse.time = arrrr.time
                            courseA.clickCourse.main = arrrr.main
                            courseA.clickCourse.sure = arrrr.sure
                            courseA.clickCourse.qiandao = arrrr.qiandao
                            return false
                          }
                        }
                      }

                },
                iconValue(step) {
                  let stepValue = ''
                  switch (step) {
                      case '请假':
                          stepValue = 'warning'
                          break;
                      case '已签到':
                          stepValue = 'check'
                          break;
                      case '旷课':
                          stepValue = 'clear'
                          break;
                      default:
                          stepValue = ''
                  }
                  return stepValue
                },
                iconColor(step) {
                  let sureColor = ''
                  switch (step) {
                      case '请假':
                          sureColor = '#f5a819'
                          break;
                      case '已签到':
                          sureColor = '#23a197'
                          break;
                      case '旷课':
                          sureColor = 'red'
                          break;
                      default:
                          sureColor = '#666'
                  }
                  return sureColor
                },
                clickQingjia (val) {

                  this.dialog = false
                  let _this = this
                  let qs = require('qs');
                  Axios.post(_this.xyIp+'/api/home_page/leave', qs.stringify({
                    schedule_id:val.id
                  }))
                  .then(function (response) {
                    let data = response.data
                    if(data.errno === 0) {
                      val.qingjia = '已申请请假'
                      val.qingjiaCss.color = '#666'
                      val.dis = true
                      val.sure = data.data

                    }else {
                      console.log(data.errmsg);
                    }

                  })
                  .catch(function (error) {
                    console.log(error);
                  });
                },
                open (val) {
                  this.dialog = true

                },
                close () {
                   this.dialog = false
                 },
                 routerPaike(schedule_id) {
                   this.$router.push({path:'/paike',query:{id:schedule_id}})
                 }
        },
        computed: {
            content() {
                    let message = ''
                    switch (this.activeStep) {
                        case 0:
                            message = '选择一个活动的地点'
                            break
                        case 1:
                            message = '创建群组，50人左右'
                            break
                        case 2:
                            message = '多在群里发消息宣传宣传'
                            break
                        default:
                            message = '点击课程节点查看课程'
                            break
                    }
                    return message
                },
        },
        mounted () {
          let _this = this
          Axios.post(_this.xyIp+'/api/home_page/schedule')
          .then(function (response) {
            let data = response.data
            if(data.errno === 0) {

              for(let i =0;i < data.data.length;i++) {
                _this.courseAll.push({
                  title: '',
                  subTitle: '',
                  icon: '',
                  text: '',
                  over: '',
                  sure: '',
                  leave: '',
                  show: false,
                  num: i,
                  course:[],
                  courseNum: [],
                  clickCourse: {
                      courseShow: false,
                      id:'',
                      stage: '',
                      name: '',
                      time: '',
                      qingjia: '申请请假',
                      qingjiaCss: {
                        color: '#f5a819'
                      },
                      dis:false,
                      main: '',
                      sure: '',
                  },
                },)
                for(let ii = 0;ii < data.data[i].lesson_array.length;ii++) {
                  _this.courseAll[i].courseNum.push({
                    id: '',
                    stepSure: '',
                    text: '',
                    time: ''
                  },)
                  _this.courseAll[i].courseNum[ii].id = data.data[i].lesson_array[ii].schedule_id
                  _this.courseAll[i].courseNum[ii].stepSure = data.data[i].lesson_array[ii].status
                  _this.courseAll[i].courseNum[ii].text = data.data[i].lesson_array[ii].lesson_name
                  _this.courseAll[i].courseNum[ii].time = data.data[i].lesson_array[ii].start_date
                }
                _this.courseAll[i].title = data.data[i].course_name
                _this.courseAll[i].subTitle = data.data[i].sub
                _this.courseAll[i].icon = require('assets/' + data.data[i].logo)
                _this.courseAll[i].text = data.data[i].info
                _this.courseAll[i].over = data.data[i].rest_hour
                _this.courseAll[i].sure = data.data[i].sign
                _this.courseAll[i].leave = data.data[i].leave
                for(let ii = 0;ii < data.data[i].course_content.length;ii++) {
                  _this.courseAll[i].course.push({
                    stage: '',
                    stageCourse: [],
                  },)
                  _this.courseAll[i].course[ii].stage = data.data[i].course_content[ii].stage_name
                  for(let iii = 0;iii < data.data[i].course_content[ii].lesson.length;iii++) {
                    _this.courseAll[i].course[ii].stageCourse.push({
                      id: '',
                      name: '',
                      time: '',
                      main: '',
                      sure: '',
                      num: '',
                      parent: '',
                    },)
                    _this.courseAll[i].course[ii].stageCourse[iii].id = data.data[i].course_content[ii].lesson[iii].schedule_id
                    _this.courseAll[i].course[ii].stageCourse[iii].name = data.data[i].course_content[ii].lesson[iii].lesson_name
                    _this.courseAll[i].course[ii].stageCourse[iii].time = data.data[i].course_content[ii].lesson[iii].start_date
                    _this.courseAll[i].course[ii].stageCourse[iii].main = data.data[i].course_content[ii].lesson[iii].lesson_content
                    _this.courseAll[i].course[ii].stageCourse[iii].sure = data.data[i].course_content[ii].lesson[iii].status
                    _this.courseAll[i].course[ii].stageCourse[iii].parent = data.data[i].course_content[ii].lesson[iii].stage_name
                    _this.courseAll[i].course[ii].stageCourse[iii].num = iii
                  }
                }
              }
              for(let arr = 0;arr < _this.courseAll.length;arr++) {

                for(let arrr of _this.courseAll[arr].course) {

                  for(let arrrr of arrr.stageCourse) {

                    if(_this.$route.query.id === arrrr.id) {
                      _this.courseAll[arr].clickCourse.courseShow = true
                      _this.courseAll[arr].clickCourse.id = arrrr.id
                      _this.courseAll[arr].clickCourse.stage = arrrr.parent + '（当前选择的课程）'
                      _this.courseAll[arr].clickCourse.name = arrrr.name
                      _this.courseAll[arr].clickCourse.time = arrrr.time
                      _this.courseAll[arr].clickCourse.main = arrrr.main
                      _this.courseAll[arr].clickCourse.sure = arrrr.sure
                      return false
                    }
                  }
                }
              }
            }else {
              console.log(data.errmsg);
            }

          })
          .catch(function (error) {
            console.log(error);
          });
        },
}

</script>
