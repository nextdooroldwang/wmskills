<style lang="css" scoped>
* {
  outline: none;
}
.page1 {
    padding: 8px;
}
.classImg {
    background-image: url('../assets/iconshayu.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    /*border: 3px solid rgba(12, 145, 222, 0.5);;*/
}
.nav {
  display: flex;
  justify-content: center;
}
.bigNav {
  width: 85%;
  height: 10px;
  background: #007CF9;
  border-radius: 8px;

}
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.title {
  font-size: 18px;
  font-weight: 700;
  color: #007CF9;

}
.logo {
  display: flex;
  align-items: center;
  color: #007CF9;
}
.logoTitle {
  font-size: 15px;
  text-align: center;
}
.logoSub {
  font-size: 14px;
}
.shayuImg {
  display: flex;
  padding: 0px 5%;
}
.shayuimg1,.shayuimg2,.shayuimg3,.shayuimg4 {
  flex: 1;
  height: 80px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.shayuimg1 {
  background-image: url("../assets/shayu1.jpg");

}
.shayuimg2 {
  background-image: url("../assets/shayu2.jpg");

}
.shayuimg3 {
  background-image: url("../assets/shayu3.jpg");

}
.shayuimg4 {
  background-image: url("../assets/shayu4.jpg");

}
.tips {
  font-size: 12px;
  color: #000;
  opacity: 0.7;
  padding: 16px;
}
ol {
  padding-left: 8px;
}
.timetables {
}
.time {
  width: 10%;
  float: left;
  color: #000;
}
.timeHead {
  background: #007CF9;
  height: 23px;
  color:#fff;
  display: flex;
  justify-content: center;
  align-items: center;
  font-weight: bold;
}
.timeBody {
}
.timeBodyOne {
  box-sizing: border-box;
  border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
  color: #000;
  display: flex;
  flex-flow: column;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  height: 36px;
}

.tables {
  width: 90%;
  float: left;
  overflow: auto;
  overflow-y:hidden;
  -webkit-overflow-scrolling : touch;
}
.classTable {
  min-width: 340px;
}
.classTable th{
  background: #007CF9;
  color:#fff;
  border: none;
  box-sizing: border-box;
  border-right: 1px solid #fff;
  font-size: 14px;
  min-width: 85px;
  width: calc(90vw / 4);
  height: 23.4px;
  padding: 0 5px;
}
.classTable td{
  box-sizing: border-box;
  font-size: 12px;
  text-align: center;
  padding: 3px;
  border-right: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  height: 36px;
}
.classTable table {
  border-collapse:collapse;
box-sizing: border-box;
}
.classTable p{
  border-top: 1px solid #999;

}
.page2 {
  /*padding: 4px;*/
}
</style>

<template lang="html">

<div id="container">
    <div class="page1">
        <div class="header">
            <div class="title">
              鲨鱼公园儿童大学学币设置
            </div>
            <div class="logo">
              <!-- <div class="classImg">

              </div> -->
              <!-- <div >
                <div class="logoTitle">
                  鲨鱼公园
                </div>
                <div class="logoSub">
                  SHARKPARK
                </div>
              </div> -->
            </div>
        </div>
        <div class="shayuImg">
          <div class="shayuimg1">

          </div>
          <div class="shayuimg2">

          </div>
          <div class="shayuimg3">

          </div>
          <div class="shayuimg4">

          </div>
        </div>
        <div class="nav">
          <div class="bigNav">

          </div>
        </div>
        <div class="tips">
          <ol>
            鲨鱼存折说明：
            <li>适合使用学币积分的类型包括：校区课程，营队，夏，冬令营，学校课后社团，市场活动等。每节课奖励一定数量的小徽章。</li>
            <li>小徽章可在校区内积分兑换活动时使用。</li>
            <li>小徽章可在续费积分减现活动时使用。</li>
            <li>其他未尽事宜，以店内活动说明为准。</li>
          </ol>
        </div>
    </div>
    <div class="page2">
      <div class="timetables">
        <div class="time">
          <div class="timeHead">
            序号
          </div>
          <div class="timeBody">
            <div  class="timeBodyOne">
              <div>
                1
              </div>
            </div>
            <div  class="timeBodyOne">
              <div>
                2
              </div>
            </div>
            <div  class="timeBodyOne">
              <div>
                3
              </div>
            </div>
            <div  class="timeBodyOne">
              <div>
                4
              </div>
            </div>
            <div  class="timeBodyOne">
              <div>
                5
              </div>
            </div>
            <div  class="timeBodyOne">
              <div>
                6
              </div>
            </div>
            <div  class="timeBodyOne">
              <div>
                7
              </div>
            </div>
            <div  class="timeBodyOne">
              <div>
                8
              </div>
            </div>
              <div style="clear:both"></div>
          </div>
        </div>
        <div class="tables">
          <div class="classTable">
            <table>
              <tr>
                <th>课程主题</th>
  							<th>课程名称</th>
  							<th>上课时间</th>
  							<th>存入</th>
  							<!-- <th>支取</th>
  							<th>备注</th> -->
              </tr>
              <tr >
                <td style="height:36px;">
  								侦探学院
  							</td>
                <td>
  								侦探归来
  							</td>
                <td>
  								2016-8-10
  							</td>
                <td >

                  <i class="material-icons" style="color:#f5a819;">money_off</i>
  							</td>
                <!-- <td>
  								换存钱罐
  							</td>
                <td>
  								2016-12-7
  							</td> -->
              </tr>
              <tr >
                <td>

  							</td>
                <td>
  								蛛丝马迹
  							</td>
                <td>
  								2016-8-14
  							</td>
                <td >

                  <i class="material-icons" style="color:#f5a819;">money_off</i>
  							</td>
                <!-- <td>

  							</td>
                <td>

  							</td> -->
              </tr>
              <tr >
                <td>

  							</td>
                <td>
  								嫌疑人X
  							</td>
                <td>
  								2016-8-21
  							</td>
                <td >

                  <i class="material-icons" style="color:#f5a819;">money_off</i>
  							</td>
                <!-- <td>

  							</td>
                <td>

  							</td> -->
              </tr>
              <tr >
                <td>

  							</td>
                <td>
  								真相大白
  							</td>
                <td>
  								2016-8-28
  							</td>
                <td >
                  <i class="material-icons" style="color:#f5a819;">money_off</i>
  							</td>
                <!-- <td>

  							</td>
                <td>

  							</td> -->
              </tr>
              <tr >
                <td>
  								印刷工厂
  							</td>
                <td>
  								痕迹
  							</td>
                <td>
  								2016-9-7
  							</td>
                <td >

                  <i class="material-icons" style="color:#f5a819;">money_off</i>
  							</td>
                <!-- <td>

  							</td>
                <td>

  							</td> -->
              </tr>
              <tr >
                <td>

  							</td>
                <td>
  								黑与白
  							</td>
                <td>
  								2016-10-16
  							</td>
                <td >

                  <i class="material-icons" style="color:#f5a819;">money_off</i>
  							</td>
                <!-- <td>

  							</td>
                <td>

  							</td> -->
              </tr>
              <tr >
                <td>

  							</td>
                <td>

  							</td>
                <td>

  							</td>
                <td >


  							</td>
                <!-- <td>

  							</td>
                <td>

  							</td> -->
              </tr>
              <tr >
                <td>
  								蜜蜂王国
  							</td>
                <td>
  								我的蜜蜂
  							</td>
                <td>
  								2016-10-26
  							</td>
                <td >
<i class="material-icons" style="color:red;">attach_money</i>
  							</td>
                <!-- <td>

  							</td>
                <td>

  							</td> -->
              </tr>
            </table>
          </div>
        </div>
        <div style="clear:both">

        </div>
      </div>
    </div>
</div>

</template>

<script>
import shayu from "../assets/iconshayu.png"
export default {
  data () {
    return {
      shayu,
    }
  }
}

</script>
