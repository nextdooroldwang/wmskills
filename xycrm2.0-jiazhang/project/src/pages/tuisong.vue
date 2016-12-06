<style lang="css" scoped>

.filterTime,
.filterKind {
    float: left;
    width: 50vw;
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

</style>

<template lang="html">

<div id="container">
    <mu-card>
        <mu-card-header title="鲨鱼公园" subTitle="李 老师">
            <mu-avatar :src="myron" slot="avatar" />
        </mu-card-header>
        <div class="gridlist-demo-container">
            <mu-grid-list class="gridlist-inline-demo">
                <mu-grid-tile v-for="tile in list">
                    <img :src="tile.image" />
                    <span slot="title">{{tile.title}}</span>
                    <span slot="subTitle">by <b>{{tile.author}}</b></span>
                    <mu-icon-button icon="star_border" slot="action" />
                </mu-grid-tile>
            </mu-grid-list>
        </div>
        <mu-card-title title="课堂表现" subTitle="2016-11-29" />
        <mu-card-text>
            散落在指尖的阳光，我试着轻轻抓住光影的踪迹，它却在眉宇间投下一片淡淡的阴影。
        </mu-card-text>
        <mu-card-actions>
            <mu-flat-button label="一键分享" class="demo-flat-button" icon="share" primary/>
        </mu-card-actions>
    </mu-card>
</div>

</template>

<script>

import myron from '../assets/laoshi.jpg'
import breakfast from '../assets/xiaohai1.jpg'
import burger from '../assets/xiaohai5.jpg'
import camera from '../assets/xiaohai3.jpg'
import img from '../assets/xiaohai4.jpg'
export default {
    data() {
            return {
                img,
                myron,
                list: [{
                    image: breakfast,
                    title: 'Breakfast',
                    author: 'Myron'
                }, {
                    image: burger,
                    title: 'Burger',
                    author: 'Linyu'
                }, {
                    image: camera,
                    title: 'Camera',
                    author: 'ruolin'
                },{
                    image: breakfast,
                    title: 'Breakfast',
                    author: 'Myron'
                }, {
                    image: burger,
                    title: 'Burger',
                    author: 'Linyu'
                }, {
                    image: camera,
                    title: 'Camera',
                    author: 'ruolin'
                }, ]
            }
        },

        methods: {

        }
}

</script>
