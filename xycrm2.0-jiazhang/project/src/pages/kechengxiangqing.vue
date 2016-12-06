<style lang="css" scoped>

.title {
  padding: 16px;
  background: #f5a819;
  color: #fff;
  font-size: 20px;
  font-weight: 600;

}
.mu-card-text {
  padding-top: 6px;
  padding-bottom: 6px;
}
</style>

<template lang="html">

<div id="container">
  <mu-card>
    <div class="title">
      鲨鱼公园
    </div>
    <mu-card-text>
      日期：2016-11-20
    </mu-card-text>
    <mu-card-text>
      时间：10:00 ～ 12:00
    </mu-card-text>
    <mu-card-text>
      教室：101
    </mu-card-text>
    <mu-card-text>
      教师：思思
    </mu-card-text>
    <mu-card-text>
      阶段：3 - 6岁
    </mu-card-text>
    <mu-card-text>
      课节：1
    </mu-card-text>

    <mu-card-actions>
      <mu-flat-button color="#F5A819" rippleColor="#F5A819" icon="alarm_add" label="添加提醒"/>
    </mu-card-actions>
  </mu-card>

</div>

</template>

<script>
import myron from '../assets/iconshayu.png'
import img from '../assets/img1.png'
export default {
  data () {
    return {
      img,
      myron
    }
  },
  methods: {
    handleChange () {

    }
  }
}

</script>
