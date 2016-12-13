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
  background-image: url('../assets/xue.jpg');
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
    background-image: url('../assets/xue.jpg');
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
</style>

<template lang="html">

<div id="container">

  <div class="classInfo">
      <div class="infoHead">


      </div>
      <div class="infoBody">
          <div>
              <div class="classImg">

              </div>
              <div class="childName">
                  小明
              </div>

          </div>
      </div>
      <div class="infoBody2">
          <div class="info">
              <div class="title">
                  班级
              </div>
              <div class="text">
                  鲨鱼一班
              </div>
          </div>
          <div class="info">
              <div class="title">
                  总课时
              </div>
              <div class="text">
                  42
              </div>
          </div>
          <div class="info">
              <div class="title">
                  完成/剩余课时
              </div>
              <div class="text">
                  33 / 9
              </div>
          </div>
      </div>
      <mu-divider/>
      <div class="infoBody2">

          <div class="info">
              <div class="title">
                  累计签到
              </div>
              <div class="text">
                  31
              </div>
          </div>
          <div class="info">
              <div class="title">
                  请假次数
              </div>
              <div class="text">
                  1
              </div>
          </div>
          <div class="info">
              <div class="title">
                  旷课次数
              </div>
              <div class="text">
                  1
              </div>
          </div>
      </div>

  </div>

    <div class="nav">

    </div>

    <div class="classAll">
        <div >
            <div class="stage">
                阶段一
            </div>
            <div class="classInfo">
                <div class="classTitle">
                    <div class="className">
                        骨骼分析
                    </div>
                    <div class="classTime">
                        2016-12-12
                    </div>
                </div>
                <div class="classBody">
                    <div class="classMain">
                        骨骼是由钙组成的，多晒太阳能补钙。
                    </div>
                    <div class="classSure">
                        <mu-badge content="已签到" color="#23a197"/>
                    </div>
                </div>
                <mu-divider/>
            </div>

            <div class="classInfo">
                <div class="classTitle">
                    <div class="className">
                        树叶的构成
                    </div>
                    <div class="classTime">
                        2016-12-12
                    </div>
                </div>
                <div class="classBody">
                    <div class="classMain">
                        骨骼是由钙组成的，多晒太阳能补钙。
                    </div>
                    <div class="classSure">
                        <mu-badge content="请假" color="#f5a819" />
                    </div>
                </div>
                <mu-divider/>
            </div>

            <div class="classInfo">
                <div class="classTitle">
                    <div class="className">
                        海洋的面积
                    </div>
                    <div class="classTime">
                        2016-12-12
                    </div>
                </div>
                <div class="classBody">
                    <div class="classMain">
                        骨骼是由钙组成的，多晒太阳能补钙。
                    </div>
                    <div class="classSure">
                        <mu-badge content="已签到"  color="#23a197"/>
                    </div>
                </div>
                <mu-divider/>
            </div>

            <div class="classInfo">
                <div class="classTitle">
                    <div class="className">
                        神奇的静电
                    </div>
                    <div class="classTime">
                        2016-12-12
                    </div>
                </div>
                <div class="classBody">
                    <div class="classMain">
                        骨骼是由钙组成的，多晒太阳能补钙。
                    </div>
                    <div class="classSure">
                        <mu-badge content="已签到"  color="#23a197"/>
                    </div>
                </div>
                <mu-divider/>
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
            bottomSheet: false,
            activeTab: 'tab1',
            courseAll: [{
                title: '鲨鱼公园',
                subTitle: 'Sharkpark',
                icon: iconshayu,
            }, ],

        }
    },
    methods: {
      closeBottomSheet () {
        this.bottomSheet = false
      },
      openBottomSheet () {
        this.bottomSheet = true
      },
      handleTabChange (val) {
      this.activeTab = val
      },
      routerClassStudent() {

      }
    },
}

</script>
