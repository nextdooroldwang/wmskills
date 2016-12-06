<style lang="css" scoped>

.newsTime {
    color: rgb(218, 218, 218);
}
.mu-tabs {
  background-color: #23a197;
}
</style>

<template lang="html">

<div id="container">
    <mu-tabs :value="activeTab" @change="handleTabChange">
        <mu-tab value="tab1" title="课程消息" />
        <mu-tab value="tab2" title="签到提醒" />
        <mu-tab value="tab3" title="课堂表现" />
    </mu-tabs>
    <div class="">
        <mu-list @itemClick="routerNew">
            <mu-list-item title="小象口才家庭作业">
                <mu-avatar :src="iconxiaoxiang" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">思思老师 -</span> 请宝宝给妈妈讲解骨骼的成分是什么。
                </span>
                <div class="newsTime">
                    2016-12-11 09:34
                </div>
                <mu-badge content="作业" color="#23a197" slot="right" />
            </mu-list-item>

            <mu-divider inset/>
        </mu-list>
        <mu-list>
            <mu-list-item title="舞蹈课堂表现">
                <mu-avatar :src="iconlaoshi" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">李老师 -</span> 今天宝宝在舞蹈基本功上非常用功，老师给你点个赞。
                </span>
                <div class="newsTime">
                    2016-12-13 09:54
                </div>
                <mu-badge content="课堂表现" color="#f5a819" slot="right" />
            </mu-list-item>
            <mu-divider inset/>
        </mu-list>
        <mu-list>
            <mu-list-item title="鲨鱼公园课程预习">
                <mu-avatar :src="iconshayu" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">鲨鱼老师 -</span> 请提前预习树叶的形状，明天的树叶分析课上需要提问。
                </span>
                <div class="newsTime">
                    2016-12-14 10:34
                </div>
                <mu-badge content="预习" color="red" slot="right" />
            </mu-list-item>
            <mu-divider inset/>
        </mu-list>
        <mu-list>
            <mu-list-item title="签到提醒消息">
                <mu-avatar :src="iconxingyun" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">星云家门口 -</span> 您今天上的小象口才课程已成功签到！
                </span>
                <div class="newsTime">
                    2016-12-15 11:34
                </div>
                <mu-badge content="签到提醒" color="#aaa" slot="right" />
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
    data() {
            return {
                activeTab: 'tab1',
                iconshayu,
                iconxiaoxiang,
                iconlaoshi,
                iconxingyun,
            }
        },
        methods: {
            handleTabChange(val) {
                    this.activeTab = val
                },
                routerNew() {
                    this.$router.push('/new')
                }
        }

}

</script>
