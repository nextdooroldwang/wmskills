<style lang="css" scoped>

.newTitle {
    display: flex;
    justify-content: space-between;
    padding: 10px 16px;
    background: #23a197;
    color: #fff;
}

.title,
.time {
    display: flex;
    align-items: center;
}

.title {
    font-size: 18px;
    font-weight: 700;
}

.time {
    font-size: 16px;
    font-weight: 600;
}

.callBack {
    position: fixed;
    bottom: 56px;
    margin: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 0 16px;
}

.newsTime {
    color: rgb(218, 218, 218);
}

.mu-item-text {
    overflow: visible;
}

</style>

<template lang="html">

<div id="container">
    <div class="newTitle">
        <div class="title">
            舞蹈课堂表现
        </div>
        <div class="time">
            2016-12-1 | 14:23
        </div>
    </div>

    <mu-list>
        <mu-sub-header>留言</mu-sub-header>
        <mu-list-item>
            <mu-avatar :src="iconlaoshi" slot="leftAvatar" />
            <span slot="describe">
        <span style="color: rgba(0, 0, 0, .87)">李老师 -</span> 今天舞蹈基础课上表现非常棒！点赞
            </span>
            <div class="newsTime">
                2016-12-15 11:34
            </div>
        </mu-list-item>
        <mu-divider inset/>
        <mu-list-item>
            <mu-avatar :src="iconxuesheng" slot="leftAvatar" />
            <span slot="describe">
        <span style="color: rgba(0, 0, 0, .87)">小红 -</span> 谢谢老师夸奖，我会继续努力的。
            </span>
            <div class="newsTime">
                2016-12-15 12:22
            </div>
        </mu-list-item>
        <mu-divider inset/>
    </mu-list>
    <div class="callBack">
        <mu-text-field hintText="请输入您回复的内容" multiLine :rows="2" :rowsMax="4" />
        <mu-flat-button label="回复" class="demo-flat-button" backgroundColor="#23a197" color="#FFF" />
    </div>

</div>

</template>

<script>

import iconlaoshi from '../assets/laoshi.jpg'
import iconxuesheng from '../assets/xuesheng.jpg'
export default {
    data() {
        return {

            iconlaoshi,
            iconxuesheng,
        }
    }
}

</script>
