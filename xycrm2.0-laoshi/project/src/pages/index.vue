<style lang="css" scoped>

.nav {
    padding: 5px 0;
    background: rgb(240, 240, 240);
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
    background-image: url("../assets/haibao.png");
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

</style>

<template lang="html">

<div id="container">

    <swiper :options="swiperOption">
        <swiper-slide>
            <div class="swiper" @click="huodong">

            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="swiper" @click="huodong">

            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="swiper" @click="huodong">

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
                推送
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
            <mu-icon-button style="color:#ff80ab;width:auto;height:auto" touch @click="routerXuesheng">
                <i class="material-icons" style="font-size:34px;width:34px;height:34px;position:relative">face
                  <div class="bage" v-if="bage.bage3">
                    {{ bage.bage3 }}
                  </div>
                </i>
            </mu-icon-button>
            <div class="menuTitle">
                学生
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
                <div class="classImg">

                </div>
                <span>{{ classInfo.infoName }}</span>
            </div>
        </div>
        <div class="infoBody2">
            <div class="info">
                <div class="title">
                    班级
                </div>
                <div class="text">
                    {{ classInfo.infoClass }}
                </div>
            </div>

            <div class="info">
                <div class="title">
                    教室
                </div>
                <div class="text">
                    {{ classInfo.infoClassroom }}
                </div>
            </div>
            <div class="info">
                <div class="title">
                    阶段
                </div>
                <div class="text">
                    科学初级
                </div>
            </div>
        </div>
        <mu-divider/>
        <div class="infoBody2">

            <div class="info">
                <div class="title">
                    班级人数
                </div>
                <div class="text">
                    {{ classInfo.infoNum }}
                </div>
            </div>

            <div class="info">
                <div class="title">
                    请假人数
                </div>
                <div class="text" style="color:#f5a819">
                    2
                </div>
            </div>
            <div class="info">
                <div class="title">
                    应到人数
                </div>
                <div class="text">
                    10
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
        <mu-list v-for="news in newsToday" >
            <mu-list-item :title="news.title" @click="routerTui">
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
                classInfo: {
                    infoId: 1,
                    infoName: '骨骼分解',
                    infoClass: '鲨鱼一班',
                    infoClassroom: '201',
                    infoNum: 12,
                },
                newsToday: [{
                    title: '鲨鱼公园家庭作业（系统推送）',
                    icon: iconlaoshi,
                    teacher: '思思老师',
                    text: '请宝宝给妈妈讲解骨骼的成分是什么。',
                    time: '2016-12-11  09:34',
                    newClass: '课程消息',
                }, {
                    title: '骨骼分析课堂表现',
                    icon: iconlaoshi,
                    teacher: '图图老师',
                    text: '今天宝宝在课上的讲解非常棒，老师给你点个赞。',
                    time: '2016-12-13  09:54',
                    newClass: '课堂表现',
                }, {
                    title: '放假通知',
                    icon: iconlaoshi,
                    teacher: '乐乐老师',
                    text: '因下大学，明天的骨骼分析课放假。',
                    time: '2016-12-14  10:34',
                    newClass: '通知消息',
                }, {
                    title: '签到提醒消息',
                    icon: iconxingyun,
                    teacher: '星云家门口',
                    text: '您今天上的小象口才课程已成功签到！',
                    time: '2016-12-15  09:34',
                    newClass: '签到提醒',
                }, ]

        }
    },

    methods: {
        huodong() {
                this.$router.push('/huodong')
            },
            routerTuisong() {
                this.$router.push('/tuisongliebiao')
            },
            routerTixing() {
                this.$router.push('/tixing')
            },
            routerXuesheng() {
                this.$router.push('/student')
            },
            routerNews() {
                this.$router.push('/news')
            },
            routerTui() {
                this.$router.push('/tuisong')
            },
            infoColor(newClass) {
                let classColor = ''
                switch (newClass) {
                    case '通知消息':
                        classColor = '#f5a819'
                        break;
                    case '课堂表现':
                        classColor = '#23a197'
                        break;
                    case '课程消息':
                        classColor = 'red'
                        break;
                    case '签到提醒':
                        classColor = 'blue'
                        break;
                    default:
                        classColor = '#666'
                }
                return classColor
            },
            clickClass() {
                this.$router.push({
                    path: '/paike',
                    query: {
                        id: this.classInfo.infoId
                    }
                })
            },
    },
    computed: {
        infoTime() {
                return '2016.11.22 | 08:00'
            },

    }

}

</script>
