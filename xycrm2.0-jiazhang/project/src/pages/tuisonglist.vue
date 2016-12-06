<style lang="css" scoped>

.imgContaner {
    width: 100%;
    box-sizing: border-box;
}

.imgSmall {
    display: inline-block;
    box-sizing: border-box;
    width: calc((100vw - 72px - 56px - 14px) / 4);
    height: calc((100vw - 72px - 56px - 14px) / 4);
    padding: 2px 2px;
}

.imgSmall img {
    width: 100%;
    height: 100%;
}

.mu-raised-button {
  width: 100%
}
.selectContainer {
  display: flex;
}
.selectTime,.selectClass {
  flex: 1;
  position: relative;
}
.mu-date-picker {
  width: 100%;
}
.timeBtn {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: -1;
}
</style>

<template lang="html">

<div class="">
  <div class="selectContainer">
    <div class="selectTime">
      <mu-date-picker/>
      <div class="timeBtn">
        <mu-raised-button style="color:#23a197" icon="query_builder" @click="openBottomSheet" label="选择时间" />
      </div>
    </div>
    <div class="selectClass">
      <mu-raised-button icon="toc" style="color:#23a197" @click="openBottomSheet" label="选择类型" />
      <mu-bottom-sheet v-if="bottomSheet" @close="closeBottomSheet">
          <mu-menu @itemClick="closeBottomSheet">
              <mu-sub-header>
                  请选择一个
              </mu-sub-header>
              <mu-menu-item title="全部类型" />
              <mu-menu-item title="通知" />
              <mu-menu-item title="课程信息" />
              <mu-menu-item title="课堂表现" />
          </mu-menu>
      </mu-bottom-sheet>
    </div>
  </div>

    <mu-list>
        <mu-sub-header inset>
        </mu-sub-header>
        <mu-list-item title="课堂点评" describeText="Jan 20, 2014" @click="routerTuisong">
            <mu-avatar :src="laoshi" slot="leftAvatar" />
            <mu-icon value="more_vert" slot="right" />
            <div class="imgContaner">
                <div class="imgSmall">
                    <img src="../assets/xiaohai8.jpg" alt="" />
                </div>
                <div class="imgSmall">
                    <img src="../assets/xiaohai9.jpg" alt="" />
                </div>
                <div class="imgSmall">
                    <img src="../assets/xiaohai1.jpg" alt="" />
                </div>
                <div class="imgSmall">
                    <img src="../assets/xiaohai3.jpg" alt="" />
                </div>
            </div>
        </mu-list-item>
        <mu-divider inset/>
        <mu-list-item title="家庭作业" describeText="Jan 10, 2014" @click="routerTuisong">
            <mu-avatar :src="laoshi" slot="leftAvatar" />
            <mu-icon value="more_vert" slot="right" />
            <div class="imgContaner">
                <div class="imgSmall">
                    <img src="../assets/xiaohai4.jpg" alt="" />
                </div>
                <div class="imgSmall">
                    <img src="../assets/xiaohai5.jpg" alt="" />
                </div>
                <div class="imgSmall">
                    <img src="../assets/xiaohai6.jpg" alt="" />
                </div>
                <div class="imgSmall">
                    <img src="../assets/xiaohai7.jpg" alt="" />
                </div>
            </div>
        </mu-list-item>
    </mu-list>
</div>

</template>

<script>

import shayu from '../assets/iconshayu.png'
import laoshi from '../assets/laoshi.jpg'
import xiaoxiang from '../assets/iconxiaoxiang.jpg'
export default {
    data() {
            return {
                shayu,
                xiaoxiang,
                laoshi,
                bottomSheet: false
            }
        },
        methods: {
            closeBottomSheet() {
                    this.bottomSheet = false
                },
                openBottomSheet() {
                    this.bottomSheet = true
                },
                routerTuisong() {
                  this.$router.push('/tuisong')
                }
        }
}

</script>
