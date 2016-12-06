<style lang="css" scoped>
.nav {
    padding: 5px 0;
    background:  rgb(240, 240, 240);
}

.huodongTitle {
    font-size: 24px;
    color: #000;
    font-weight: 600;
    padding: 16px;
}

.address,
.money,
.text,
.call {
    padding: 0px 16px;
    font-size: 12px;
    font-weight: 700;
    color: #666;
}

.money {
    color: red
}

.address {
    display: flex;
    align-items: center;
}

.text {
    display: flex;
    justify-content: flex-start;
}

.text ul {
    margin-left: 16px;
    margin-bottom: 16px;
}

.call {
  margin-bottom: 15px;
}
.gridlist-demo-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.gridlist-inline-demo {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
}

.mu-sub-header {
    background: #fff;
    line-height: 36px;
}

.mu-card-actions {
    text-align: center;
    margin-top: 16px;
}

</style>

<template lang="html">

<div id="container">
    <mu-card>
        <mu-card-header title="活动详情">

        </mu-card-header>
        <mu-card-media :subTitle="huodongTime">
            <img :src="iconshayu" />
        </mu-card-media>
        <div class="huodongTitle">
            {{ huodong.title }}
        </div>
        <div class="money">
            活动费用：{{ huodong.money }} 元
        </div>
        <div class="address">
            活动地址：{{ huodong.address }}
            <mu-icon-button icon="place"  style="color:red;" touch/>
        </div>
        <div class="call">
            联系电话：{{ huodong.call }}
        </div>
        <div class="text">
            <div style="min-width:60px">
                活动详情：
            </div>
            <ul>
                <li v-for="textLi in huodong.text">{{ textLi }}</li>

            </ul>
        </div>

    </mu-card>
    <div class="nav">

    </div>
    <div class="childList">
      <mu-sub-header>
        <div class="">
          报名学员
        </div>
    </mu-sub-header>

    <mu-list-item title="果果" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />

    </mu-list-item>

    <mu-divider inset/>
    <mu-list-item title="果果" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
    </mu-list-item>

    <mu-divider inset/>
    <mu-list-item title="果果" @click="selectChild">
        <mu-avatar :src="xuesheng" slot="leftAvatar" />
    </mu-list-item>

    <mu-divider inset/>

    </div>
</div>

</template>

<script>

import iconshayu from '../assets/xiaohai5.jpg'
import xuesheng from '../assets/xuesheng.jpg'
export default {
    data() {
            return {
                iconshayu,
                xuesheng,
                huodong: {
                  title: '星云家门口元旦PARTY',
                  money: '99',
                  address: '浑南新区万科鹿特丹星云家门口',
                  call: '024-22938833',
                  text: ['这里人很多','这里朋友很多','这里好玩的很多','这里能学的很多',],

                }
            }
        },
        methods: {
          selectChild() {

          },
        },
        watch: {

        },
        computed: {
          huodongTime () {
            return '2016-11-30 至 2016-12-01'
          },
        },
        mounted() {}
}

</script>
