<style lang="css" scoped>

.nav {
    padding: 5px 0;
    background:  rgb(240, 240, 240);
}
.mu-card-header {
  padding: 8px 16px;
}
.mu-tab-link {
  color:#000;
}
.mu-tab-active {
  color:#f5a819;
}
.tabsContainer {
  padding: 0px 20%;

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
.selectContainer {
  display: flex;
}
.selectClass {
  flex: 1;
  position: relative;
}
</style>

<template lang="html">

<div id="container">
  <div class="selectContainer">

    <div class="selectClass">
      <mu-raised-button icon="expand_more" style="color:#fff;width:100%;height:100%;margin-left:0;background:#23a197" @click="openBottomSheet" labelPosition="before" :label="'鲨鱼公园(' + banji +')'" />
      <mu-bottom-sheet :open="bottomSheet" @close="closeBottomSheet" v-if="bottomSheet">
        <mu-menu>
          <mu-sub-header>
            请选择一个
          </mu-sub-header>
          <mu-menu-item title="鲨鱼一班" @click="sheet('鲨鱼一班')"/>
          <mu-menu-item title="鲨鱼二班" @click="sheet('鲨鱼二班')"/>
          <mu-menu-item title="鲨鱼三班" @click="sheet('鲨鱼三班')"/>
          <mu-menu-item title="鲨鱼四班" @click="sheet('鲨鱼四班')"/>
        </mu-menu>
      </mu-bottom-sheet>

    </div>
  </div>
  <div class="nav">

  </div>


    <div class="tabsContainer">
      <mu-tabs :value="activeTab" @change="handleTabChange" style="background:#fff;">
          <mu-tab value="tab1" title="学生列表"/>
          <mu-tab value="tab2" title="排课信息"/>
        </mu-tabs>

    </div>
    <mu-divider />
      <div v-if="activeTab === 'tab1'">
        <div class="meItem">
          <div class="meIcon">
            <div class="photo">

            </div>
          </div>
          <div class="meText">
            小明
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerClassStudent"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">
            <div class="photo">

            </div>
          </div>
          <div class="meText">
            小明
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerClassStudent"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">
            <div class="photo">

            </div>
          </div>
          <div class="meText">
            小明
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerClassStudent"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">
            <div class="photo">

            </div>
          </div>
          <div class="meText">
            小明
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerClassStudent"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
      </div>
      <div v-if="activeTab === 'tab2'">
        <div class="meItem">
          <div class="meIcon">
            <div class="photoClass" style="background:#23a197">
              1
            </div>
          </div>
          <div class="meText">
            骨骼分析
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerPaike"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">
            <div class="photoClass" style="background:#23a197">
              2
            </div>
          </div>
          <div class="meText">
            树叶的秘密
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerPaike"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">
            <div class="photoClass">
              3
            </div>
          </div>
          <div class="meText">
            神奇的静电
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerPaike"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
        <div class="meItem">
          <div class="meIcon">
            <div class="photoClass">
              4
            </div>
          </div>
          <div class="meText">
            灯泡发光啦
          </div>
          <div style="display:flex;align-items:center">

          </div>
          <div class="">
            <mu-icon-button icon="chevron_right" @click="routerPaike"/>
          </div>
          </mu-list-item>
        </div>
        <mu-divider/>
      </div>

</div>

</template>

<script>

import iconshayu from '../assets/iconshayu.png'
import iconxiaoxiang from '../assets/iconxiaoxiang.jpg'
export default {
    data() {
        return {
            banji: '鲨鱼一班',
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
        this.$router.push('/paikeXuesheng')
      },
      routerPaike() {
        this.$router.push('/paike')
      },
      sheet (val) {
        this.banji = val
        this.bottomSheet = false
      }
    },
}

</script>
