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

</style>

<template lang="html">

<div id="container">
    <div v-for="courseA in courseAll">
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
                <div class="stepper" :style="stepW">
                    <mu-stepper :activeStep="activeStep" :linear="false">
                        <mu-step v-for="stepNum in courseNum" :completed="false">
                            <mu-step-button  @click="clickStep(stepNum)">
                              <mu-icon  slot="icon" :value="iconValue(stepNum.stepSure)" :color="iconColor(stepNum.stepSure)" />
                                {{ stepNum.text }}
                                <br> {{ stepNum.time }}
                            </mu-step-button>

                        </mu-step>

                    </mu-stepper>
                </div>
            </div>

            <!-- <div class="stepperContainer">
          <div class="stepper" :style="stepW">
            <mu-stepper :activeStep="activeStep" :linear="false">
                  <mu-step v-for="stepNum in courseNum">
                    <mu-step-label @click="clickStep(stepNum)">
                      <mu-icon v-if="stepNum.stepSure === '旷课'" slot="icon" value="cancel" color="red"/>
                      <mu-icon v-if="stepNum.stepSure === '请假'" slot="icon" value="warning" color="#f5a819"/>
                      <mu-icon v-if="stepNum.stepSure === '已签到'" slot="icon" value="check" color="#23a197"/>
                      {{ stepNum.text }}<br>
                      {{ stepNum.time }}
                    </mu-step-label>

                  </mu-step>

            </mu-stepper>
          </div>
        </div> -->
            <!-- <div class="tips">
                <mu-icon slot="icon" value="check" :size="14" color="#23a197" />:已签到
                <mu-icon slot="icon" value="warning" :size="14" color="#f5a819" />:请假
                <mu-icon slot="icon" value="clear" :size="14" color="red" />:旷课
            </div> -->
            <mu-raised-button icon="expand_more" class="demo-raised-butto" @click="clickClassShow(courseA.num)" />
        </mu-card>

        <div class="classAll" v-if="clickCourse.courseShow">
            <div class="nav">
                {{ clickCourse.stage }}
            </div>
            <div class="classInfo">
                <div class="classTitle">
                    <div class="className">
                        {{ clickCourse.name }}
                    </div>
                    <div class="classTime">
                        {{ clickCourse.time }}
                    </div>
                </div>
                <div class="classBody">
                    <div class="classMain">
                        {{ clickCourse.main }}
                    </div>
                    <div class="classSure">
                        <mu-badge :content="clickCourse.sure" :color="sureColor(clickCourse.sure)" />
                    </div>
                </div>
                <mu-divider/>
            </div>
        </div>

        <div class="classAll" v-show="courseA.show">
            <div v-for="courseAA in courseA.course">
                <div class="nav">
                    {{ courseAA.stage }}
                </div>
                <div class="classInfo" v-for="courseAAA in courseAA.stageCourse">
                    <div class="classTitle">
                        <div class="className">
                            {{ courseAAA.name }}
                        </div>
                        <div class="classTime">
                            {{ courseAAA.time }}
                        </div>
                    </div>
                    <div class="classBody">
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
import iconshayu from '../assets/iconshayu.png'
import iconxiaoxiang from '../assets/iconxiaoxiang.jpg'
export default {
    data() {
            return {
                courseAll: [{
                    title: '鲨鱼公园',
                    subTitle: 'Sharkpark',
                    icon: 'http://192.168.1.112:8360/static/img/course/1.png',
                    text: '鲨鱼公园是中国青少年科技教育品牌机构，是为校内,外及家庭3-12岁的儿童提供动手科学产品及 趣味性的学科线下校区和网络情景学习。设立的教育与开发研究中心长期参与国家科学课标教参编写，业务覆盖物理化学，生物，地理，天 文，技术，工程，数学，社会实践等教学领域。',
                    over: '13',
                    sure: '22',
                    leave: '1',
                    show: false,
                    num: 1,
                    course: [{
                        stage: '阶段一',
                        stageCourse: [{
                            id: 1,
                            name: '骨头分析',
                            time: '2016.11.22 08:00',
                            main: '分析骨头的成分和构造，了解骨骼的坚韧和硬度',
                            sure: '已签到',
                            num: '1',
                            parent: '阶段一',
                        }, {
                            id: 2,
                            name: '树叶的世界',
                            time: '2016.11.23 08:00',
                            main: '分析树叶的成分和构造，了解树叶的形状和特性',
                            sure: '已签到',
                            num: '2',
                            parent: '阶段一',
                        }, ]
                    },{
                        stage: '阶段二',
                        stageCourse: [{
                            id: 5,
                            name: '骨头分析',
                            time: '2016.11.22 08:00',
                            main: '分析骨头的成分和构造，了解骨骼的坚韧和硬度',
                            sure: '已签到',
                            num: '1',
                            parent: '阶段二',
                        }, {
                            id: 6,
                            name: '树叶的世界',
                            time: '2016.11.23 08:00',
                            main: '分析树叶的成分和构造，了解树叶的形状和特性',
                            sure: '已签到',
                            num: '2',
                            parent: '阶段二',
                        },]
                    }]
                }, ],
                activeStep: -1,
                courseNum: [{
                    id: 1,
                    stepSure: '已签到',
                    text: '骨骼分析',
                    time: '2016.12.22'
                }, {
                    id: 2,
                    stepSure: '已签到',
                    text: "树叶的秘密",
                    time: '2016.12.23'
                }, {
                    id: 3,
                    stepSure: '请假',
                    text: "神奇的静电",
                    time: '2016.12.24'
                }, {
                    id: 4,
                    stepSure: '旷课',
                    text: "电灯泡发光啦",
                    time: '2016.12.25'
                }, {
                    id: '',
                    stepSure: '',
                    text: '',
                    time: ''
                }, {
                    id: '',
                    stepSure: '',
                    text: '',
                    time: ''
                }, {
                    id: '',
                    stepSure: '',
                    text: '',
                    time: ''
                }, ],
                clickCourse: {
                    courseShow: false,
                    stage: '',
                    name: '',
                    time: '',
                    main: '',
                    sure: '',
                }
            }
        },
        methods: {
            clickClassShow(num) {
                    this.courseAll[num - 1].show = !this.courseAll[num - 1].show
                    this.clickCourse.courseShow = false
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
                clickStep(step) {
                    for (let i = 0; i < this.courseAll.length; i++) {
                        this.courseAll[i].show = false
                    }

                    let {
                        id, stepSure, text, time
                    } = step
                    for (let arr of this.courseAll) {
                      for(let arrr of arr.course) {
                        for(let arrrr of arrr.stageCourse) {
                          if(id === arrrr.id) {
                            this.clickCourse.courseShow = true
                            this.clickCourse.stage = arrrr.parent + '（当前选择的课程）'
                            this.clickCourse.name = arrrr.name
                            this.clickCourse.time = arrrr.time
                            this.clickCourse.main = arrrr.main
                            this.clickCourse.sure = arrrr.sure
                            return false
                          }
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
                stepW() {
                    let num = this.courseNum.length
                    num = num % 4 > 0 ? (num + 1) / 4 * 100 : num / 4 * 100
                    num = num + 'vw'
                    let stepWidth = {}
                    stepWidth = {
                        width: num
                    }
                    return stepWidth
                }
        },
        mounted () {
          let _this = this

          Axios.get('http://192.168.1.112:8360/api/customer/get_course_index')
            .then(function (response) {
              let data = response

            })
            .catch(function (error) {
              console.log(error);
            });



          for (let arr of this.courseAll) {
            for(let arrr of arr.course) {
              for(let arrrr of arrr.stageCourse) {
                if(this.$route.query.id === arrrr.id) {
                  this.clickCourse.courseShow = true
                  this.clickCourse.stage = arrrr.parent + '（当前选择的课程）'
                  this.clickCourse.name = arrrr.name
                  this.clickCourse.time = arrrr.time
                  this.clickCourse.main = arrrr.main
                  this.clickCourse.sure = arrrr.sure
                  return false
                }
              }
            }
          }
        },
}

</script>
