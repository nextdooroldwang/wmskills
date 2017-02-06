<style lang="css" scoped>

.nav {
    padding: 5px 0;
    background: #eee;
}

.flexCenter {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.flexCenter span {
    display: flex;
    align-items: center;
}

.mu-sub-header {
    padding: 0px 16px;
}

.swiper {
    width: 100vw;
    height: 30vw;
    max-height: 50vh;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}

.menu {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-bottom: 6px;
}

.menuButton {
    flex: 1;
    text-align: center;
    position: relative;
}

.menuTitle {
    font-size: 14px;
    color: rgb(122, 122, 122);
}

.news {
    min-height: 180px;
    max-height: 264px;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

.mu-card-text {
    padding-top: 6px;
    padding-bottom: 6px;
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

.newsTime {
    color: rgb(218, 218, 218);
}

.bage {
  background: red;
  width: 10px;
  height: 10px;
  position: absolute;
  right: 0;
  top: 0;
  border-radius: 50%;
  color: #fff;

}
.qingjia {
   display:flex;
   justify-content: center;
   padding-bottom:8px;
}
</style>

<template lang="html">

<div id="container">

    <swiper :options="swiperOption">
      <swiper-slide v-for="swiperLi in swiperImg">
        <div class="swiper" @click="routerHuodong(swiperLi)" :style="{backgroundImage:'url('+swiperLi.logo+')'}">

        </div>
      </swiper-slide>
      <div class="swiper-pagination" slot="pagination"></div>
    </swiper>
    <div class="menu">
        <div class="menuButton">
            <mu-icon-button style="color:#f5a819;width:auto;height:auto" touch @click="routerTuisong">
                <i class="material-icons" style="font-size:34px;width:34px;height:34px;position:relative">speaker_notes
                  <div class="bage" v-if="bage.bage1">
                    {{ bage.bage1 }}
                  </div>
                </i>
            </mu-icon-button>

            <div class="menuTitle">
                老师推送
            </div>
        </div>
        <div class="menuButton">
            <mu-icon-button style="color:#23a197;width:auto;height:auto" touch @click="routerTixing">
                <i class="material-icons" style="font-size:34px;width:34px;height:34px;position:relative">watch_later
                  <div class="bage" v-if="bage.bage2">
                    {{ bage.bage2 }}
                  </div>
                </i>
            </mu-icon-button>
            <div class="menuTitle">
                签到
            </div>
        </div>
        <div class="menuButton">
            <mu-icon-button style="color:#e41e1b;width:auto;height:auto" touch @click="routerXiangce">
                <i class="material-icons" style="font-size:34px;width:34px;height:34px;position:relative">book
                  <div class="bage" v-if="bage.bage3">
                    {{ bage.bage3 }}
                  </div>
                </i>
            </mu-icon-button>
            <div class="menuTitle">
                相册
            </div>
        </div>
    </div>
    <div class="nav">

    </div>
    <div class="classInfo" @click="clickClass">
        <div class="infoHead">
            <span>
          即将上课
        </span>
            <span>
          {{ infoTime }}
         </span>
        </div>
        <div class="infoBody">
            <div class="className">
                <div class="classImg" :style="{backgroundImage:'url('+bgImg+')'}">

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
                    总课时
                </div>
                <div class="text">
                    {{ classInfo.infoKeshi }}
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
                    {{ classInfo.infoOver }}
                </div>
            </div>
            <div class="info">
                <div class="title">
                    累计签到
                </div>
                <div class="text">
                    {{ classInfo.infoSure }}
                </div>
            </div>
            <div class="info">
                <div class="title">
                    请假次数
                </div>
                <div class="text">
                    {{ classInfo.infoLeave }}
                </div>
            </div>
        </div>

    </div>
    <div class="nav">

    </div>
    <div class="news">
        <mu-sub-header>
            <div class="flexCenter">
                <div class="">
                    <span class="">
                <mu-icon value="email" color="#f5a819"/>最新消息
              </span>
                </div>
                <div class="">
                    <span>
                <mu-icon-button icon="more_horiz" touch @click="routerNews"/>
              </span>
                </div>
            </div>
        </mu-sub-header>
        <mu-list v-for="news in newsToday">
            <mu-list-item @click="routerTui(news)">
                <mu-avatar :src="news.icon" slot="leftAvatar" />
                <span slot="describe">
            <span style="color: rgba(0, 0, 0, .87)">{{ news.teacher }} -</span> {{ news.text }}
                </span>
                <div class="newsTime">
                    {{ news.time }}
                </div>
                <mu-badge :content="news.newClass" :color="infoColor(news.newClass)" slot="right" />
            </mu-list-item>
            <mu-divider inset/>
        </mu-list>
    </div>
  <mu-dialog :open="dialog3" title="提示" v-if="dialog3">
  系统提示消息！
  <mu-flat-button label="确定" slot="actions" primary @click="close"/>
  </mu-dialog>
</div>

</template>

<script>

import iconshayu from '../assets/iconshayu.png'
import iconxiaoxiang from '../assets/iconxiaoxiang.jpg'
import iconlaoshi from '../assets/laoshi.jpg'
import iconxingyun from '../assets/img1.png'

export default {
    name: 'carrousel',
    data() {
        return {
          infoTime:'',
          bgImg:'',
            qingjia: '请假',
            pri:true,
            dialog: false,
            dialog3: false,
            iconshayu,
            iconxiaoxiang,
            iconlaoshi,
            iconxingyun,
            bage: {
              bage1: 0,
              bage2: 1,
              bage3: 0,
            },
            swiperOption: {
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    autoplay: 2500,
                },
                swiperImg:[],
                classInfo: {
                    infoId: 0,
                    infoName: '',
                    infoTeather: '',
                    infoKeshi: '',
                    infoOver: '',
                    infoSure: '',
                    infoClass: '',
                    infoLeave: '',

                },
                newsToday: []

        }
    },

    methods: {
        routerHuodong(swiper) {
          this.$router.push({ path: '/huodong', query: { id: swiper.id }})
        },
        routerTuisong() {
            this.$router.push('/news')
        },
        routerTixing() {
            this.$router.push('/tixing')
        },
        routerXiangce() {
            window.location.href = 'http://192.168.1.109/xiangce/pages/medias/image-gallery.html'
        },
        routerTui(val) {
          let _this = this
          if(val.newClass === '签到提醒') {
            _this.dialog3 = true
            // return false
          }else {
            this.$router.push({path:'/new',query:{id:val.id}})
          }

        },
        routerNews() {
            this.$router.push('/news')
        },
        infoColor(newClass) {
            let classColor = ''
            switch (newClass) {
                case '课程消息':
                    classColor = '#f5a819'
                    break;
                case '签到提醒':
                    classColor = '#23a197'
                    break;
                case '课堂表现':
                    classColor = 'blue'
                    break;
                case '通知消息':
                    classColor = '#e41e1b'
                    break;
                default:
                    classColor = '#666'
            }
            return classColor
        },
        clickClass () {
          this.$router.push({ path: '/kebiao', query: { id: this.classInfo.infoId }})
        },
        clickQingjia () {
          this.qingjia = '已请假'
          this.pri = false
          this.dialog = true
        },
        close () {
          this.dialog = false
           this.dialog3 = false
         }
    },
    mounted() {
      let _this = this
      Axios.post(_this.xyIp+'/api/home_page/get_home_page_lesson')
      .then(function (response) {
        let data = response.data
        if(data.errno === 0) {
          let startTime = data.data[0].start_time
          startTime = startTime.substring(0, 18)
          let logoName = data.data[0].logo
          _this.classInfo.infoId = data.data[0].schedule_id
          _this.classInfo.infoName = data.data[0].lesson_name
          _this.classInfo.infoTeather = data.data[0].teacher
          _this.classInfo.infoKeshi = data.data[0].actual_hour
          _this.classInfo.infoOver = data.data[0].rest_hour
          _this.classInfo.infoSure = data.data[0].sign
          _this.classInfo.infoClass = data.data[0].classroom
          _this.classInfo.infoLeave = data.data[0].leave
          _this.infoTime = startTime
          _this.bgImg = require('assets/' + logoName)
        }else {
          if(data.errmsg === 'empty') {
            _this.classInfo.infoName = '无课程'
            _this.bgImg = require('assets/img1.png')

          }
          console.log(data.errmsg);
        }

      })
      .catch(function (error) {
        console.log(error);
      });

      Axios.post(_this.xyIp+'/api/home_page/get_all_activity')
      .then(function (response) {
        let data = response.data
        if(data.errno === 0) {
          _this.swiperImg = data.data
          for(let i = 0;i < data.data.length;i++) {
            let logoName = data.data[i].logo
            _this.swiperImg[i].id = data.data[i].id
            _this.swiperImg[i].logo = require('assets/' + logoName)
          }
        }else {
          console.log(data.errmsg);
        }

      })
      .catch(function (error) {
        console.log(error);
      });

      Axios.post(_this.xyIp+'/api/home_page/message_alert')
      .then(function (response) {
        let data = response.data
        if(data.errno === 0) {
          for(let i =0;i < data.data.length;i++) {
            _this.newsToday.push({
                id:'',
                icon: '',
                teacher: '',
                text: '',
                time: '',
                newClass: '',
            },)
            _this.newsToday[i].icon = typeof(data.data[i].staff_logo) === 'undefined' ? require('assets/img1.png') : require('assets/' + data.data[i].staff_logo)
            _this.newsToday[i].teacher = data.data[i].staff_name || '星云家门口'
            _this.newsToday[i].text = data.data[i].content
            _this.newsToday[i].id = data.data[i].message_id
            console.log(data.data[i].id);
            _this.newsToday[i].time = data.data[i].create_date
            _this.newsToday[i].newClass = data.data[i].type
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
