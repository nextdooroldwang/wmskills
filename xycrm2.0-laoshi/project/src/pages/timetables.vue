<style lang="css" scoped>

.weekToday {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.demo-flat-button {
    width: 100%;
}

.weekAll {
  width: 100%;
  overflow: auto;
  -webkit-overflow-scrolling : touch;
  background: rgb(243, 243, 243);
  overflow: auto;
}
.weekContaner {
  width: calc(53 * (100vw / 3));
}
.weekLi {
  float: left;
  padding: 10px 10px 5px 10px;
  width: calc(100vw / 3)
}
.weekDiv {
  background: rgb(168, 169, 173);
  border-radius: 5px;
  padding: 0px 3px;
  color: #fff;
  text-align: center;
}
.yearDiv {
  text-align: center;
  padding-top: 5px;
  color: rgb(168,169,173);
}

/*.fade-enter-active, .fade-leave-active {
  transition: opacity 1.5s

}
.fade-enter, .fade-leave-active {
  opacity: 0;
  height: 0px;
}*/
.timetables {
  width: 100%;
  height: calc(100vh - 36px - 56px);
}
.time {
  width: 20%;
  height: 100%;
  float: left;
  color: rgb(107, 113, 127);
}
.timeHead {
  width: 100%; height: 30px; background: rgb(107, 113, 127);
}
.timeBody {
  width: 100%;
  height: calc(100% - 30px);
}
.timeBodyOne {
  box-sizing: border-box;
  width: 100%;
  height: calc(100% / 7);
  border-bottom: 1px solid rgb(107, 113, 127);
  background: rgb(59, 63, 75);
  color: rgb(107, 113, 127);
  display: flex;
  flex-flow: column;
  align-items: center;
  justify-content: center;
  font-size: .6em;
}

.tables {
  width: 80%;
  float: left;
  overflow: auto;
  overflow-y:hidden;
  -webkit-overflow-scrolling : touch;
}
.classTable {
  height: 100%;
}
.classTable th{
  height: 30px;
  background: rgb(168, 169, 173);
  border: none;
  box-sizing: border-box;
  border-right: 1px solid #fff;
}
.classTable td{
  box-sizing: border-box;
  background: rgb(243, 243, 243);
  font-size: 12px;
  height:calc((100vh - 66px - 56px) / 7);
  min-width: calc((100vh - 66px - 56px) / 7);
  /*display: flex;
  align-items: center;
  justify-content: center;*/
  text-align: center;
  padding: 0 10px;
  border-right: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.classTable table {
  border-collapse:collapse;
box-sizing: border-box;
height: 100%;
}
.classTable p{
  border-top: 1px solid #999;
}
</style>

<template lang="html">

<div id="container">
    <div class="weekToday" @click="weekTodayClick">
        <mu-flat-button :label="localweek" class="demo-flat-button" labelPosition="before" icon="expand_less" />
    </div>
    <!-- <transition name="fade"> -->
      <div class="weekAll" ref="weekAll" v-show="weekAllShow">
          <div class="weekContaner">
              <div class="weekLi" v-for="item in weekall" @click="weekallClick(item, weekall)">
                  <div class='weekDiv' :style="item.weekDivCss">{{ item.monday }}-{{ item.sunday }}</div>
                  <div class='yearDiv' :style="item.yearCss">{{ item.year }}</div>
              </div>
              <div style="clear:both"></div>
          </div>
      </div>
    <!-- </transition> -->
    <div class="timetables">
      <div class="time">
        <div class="timeHead">

        </div>
        <div class="timeBody">
          <div v-for="oneday in weekday" :style="oneday.css" class="timeBodyOne">
            <div>
              {{ oneday.day }}
            </div>
            <div>
              {{ oneday.week }}
            </div>
          </div>
            <div style="clear:both"></div>
        </div>
      </div>
      <div class="tables">
        <div class="classTable">
          <table>
            <tr>
              <th>01</th>
							<th>02</th>
							<th>03</th>
							<th>04</th>
							<th>05</th>
							<th>06</th>
							<th>07</th>
							<th>08</th>
            </tr>
            <tr v-for="tables in tabless">
              <td v-for="table in tables" @click="routerXiangqing">
								<div>鲨鱼公园</div>
								<p>11:00~12:00</p>
							</td>
            </tr>
          </table>
        </div>
      </div>
      <div style="clear:both">

      </div>
    </div>
</div>

</template>

<script>

export default {
    components: {},
    data() {
        return {
          localweek: '',
          weekall: [],
          weekAllShow: false,
          weekday: [{
            day: '',
            week: '星期一',
            css: {color:''}
          },{
            day: '',
            week: '星期二',
            css: {color:''}
          },{
            day: '',
            week: '星期三',
            css: {color:''}
          },{
            day: '',
            week: '星期四',
            css: {color:''}
          },{
            day: '',
            week: '星期五',
            css: {color:''}
          },{
            day: '',
            week: '星期六',
            css: {color:''}
          },{
            day: '',
            week: '星期日',
            css: {color:'',borderBottom:'none'}
          },],
          tabless:[
            [{
              class: '小象口才',
              time: '8:00~10:00',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '鲨鱼公园',
              time: '10:00~12:00',
              past: true,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },],[{
              class: '小象口才',
              time: '8:00~10:00',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '鲨鱼公园',
              time: '10:00~12:00',
              past: true,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },],[{
              class: '小象口才',
              time: '8:00~10:00',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '鲨鱼公园',
              time: '10:00~12:00',
              past: true,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },],[{
              class: '小象口才',
              time: '8:00~10:00',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '鲨鱼公园',
              time: '10:00~12:00',
              past: true,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },],[{
              class: '小象口才',
              time: '8:00~10:00',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '鲨鱼公园',
              time: '10:00~12:00',
              past: true,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },],[{
              class: '小象口才',
              time: '8:00~10:00',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '鲨鱼公园',
              time: '10:00~12:00',
              past: true,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },],[{
              class: '小象口才',
              time: '8:00~10:00',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '鲨鱼公园',
              time: '10:00~12:00',
              past: true,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },{
              class: '',
              time: '',
              past: false,
              css: {
                background: '',
                color: '',
              },
            },]
          ]

        }
    },
    methods: {
      weekTodayClick () {

        this.weekAllShow = !this.weekAllShow
      },
      weekallClick (item, weekall) {
        week.weekDivCss.background = i === 0 ? '#f5a819' : ''
        week.yearCss.color = i === 0 ? '#f5a819' : ''
      },
      routerXiangqing () {
        this.$router.push('/kcxq')
      },
    },
    created() {
        window.addEventListener('hashchange', () => {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });

    },
    updated() {
      this.$refs.weekAll.scrollLeft = window.screen.width / 3 * 50 / 2
    },
    mounted() {
        let date = new Date()
        let [year,month,day,week,times] = [date.getFullYear(), date.getMonth() + 1, date.getDate(), date.getDay(), date.getTime()]
        this.localweek = "当前周：" + monToSun(times, week, this)
        weekAllMonToSun (times, week, this)

        function monToSun (times, week, _this) {
          let localMon = times - (week - 1) * 24 * 60 * 60 * 1000;
          let localSun = localMon + 6 * 24 * 60 * 60 * 1000;
          localMon = new Date(localMon);
          localSun = new Date(localSun);
          for (let i = 0; i < 7; i++) {
              _this.weekday[i].day = localMon.getDate() + i
              _this.weekday[i].css.color = i + 1 === week ? '#f5a819' : ''
          }
          localMon = addZero (localMon)
          localSun = addZero (localSun)
          let localWeek = localMon + ' - ' +localSun
          return localWeek
        }

        function weekAllMonToSun (times, week, _this) {
          let Mon = times - (week - 1)* 24 * 60 * 60 * 1000;
          for (let i = 26; i > -27; i--) {
              let localMon = Mon - i *7* 24 * 60 * 60 * 1000;
              let localSun = localMon + 6 * 24 * 60 * 60 * 1000;
              localMon = new Date(localMon);
              localSun = new Date(localSun);
              let monYear = localMon.getFullYear()
              let sunYear = localSun.getFullYear()
              monYear = monYear != sunYear ? '跨年' : monYear + '年'
              localMon = addZero (localMon)
              localSun = addZero (localSun)
              let week = {}
              week = {
                monday:localMon,
                sunday:localSun,
                year:monYear,
                weekDivCss: {
                background: '',
              },
              yearCss: {
                color: ''
              }
              }
              week.weekDivCss.background = i === 0 ? '#f5a819' : ''
              week.yearCss.color = i === 0 ? '#f5a819' : ''
              week.year = i === 0 && monYear != '跨年' ? '当前周' : monYear
              _this.weekall.push(week)
          }

        }

        function addZero (monSun) {
          let month = monSun.getMonth() + 1
          let day = monSun.getDate()
          if (month < 10) {
            month = "0" + month;
          }
          if (day < 10) {
            day = "0" + day;
          }
          return month + '.' + day
        }
    },
    computed: {

    }
}

</script>
