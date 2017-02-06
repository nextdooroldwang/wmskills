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
.gridlist-demo-container{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.gridlist-inline-demo{
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
}
.inputHuifu {
  height:34px;
  box-shadow:none;
  border:1px solid #9e9e9e;
  border-radius:3px;
  padding-left:6px;
  flex: 1;
  margin-right: 8px;
}
.mu-list {
  margin-bottom: 36px;
}
</style>

<template lang="html">

<div id="container">
    <div class="newTitle">
        <div class="title">
            {{ news.title }}
        </div>
        <div class="time">
            {{ news.time }}
        </div>
    </div>
    <div class="gridlist-demo-container" v-if="news.title === '课堂表现'">
        <mu-grid-list class="gridlist-inline-demo">
          <mu-grid-tile v-for="tile in list">
            <img :src="tile.image"/>
            <span slot="subTitle">by-<b>{{tile.author}}</b></span>
          </mu-grid-tile>
        </mu-grid-list>
      </div>
    <mu-list>
        <mu-sub-header>留言</mu-sub-header>
        <div v-for="newItem in news.main">
          <mu-list-item>
              <mu-avatar :src="newItem.icon" slot="leftAvatar" />
              <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">{{ newItem.name }} -</span> {{ newItem.text }}
              </span>
              <div class="newsTime">
                  {{ newItem.time }}
              </div>
          </mu-list-item>
          <mu-divider inset/>
        </div>
    </mu-list>
    <div class="callBack">

          <input type="text" class="inputHuifu" name="firstname" placeholder="请输入您回复的内容..." v-model="content">
            <mu-flat-button label="回复" class="demo-flat-button" backgroundColor="#23a197" color="#FFF" @click="clickHuifu"/>
    </div>

</div>

</template>

<script>
export default {
    data() {
        return {

            news: {
              title: '',
              time: '',
              main: [],
            },
            list: [],
            content:'',
        }
    },
    methods: {
      clickHuifu() {
        let _this = this
        let newId = this.$route.query.id
        let qs = require('qs');
        Axios.post(_this.xyIp+'/api/home_page/reply', qs.stringify({
          message_id: newId,
          content: _this.content
        }))
        .then(function (response) {
          let data = response.data
          if(data.errno === 0) {
            Axios.post(_this.xyIp+'/api/home_page/leave_message', qs.stringify({
              message_id:newId
            }))
            .then(function (response) {
              let data = response.data
              if(data.errno === 0) {
                  _this.news.main.push({
                    name: '',
                    icon: '',
                    text: '',
                    time: ''
                  },)
                  let contenLength = _this.news.main.length - 1
                  _this.news.main[contenLength].icon = require('assets/' + data.data.messageArray[contenLength].logo)
                  _this.news.main[contenLength].name = data.data.messageArray[contenLength].name
                  _this.news.main[contenLength].text = data.data.messageArray[contenLength].content
                  _this.news.main[contenLength].time = data.data.messageArray[contenLength].reply_date
                  _this.content = ''

              }else {
                console.log(data.errmsg);
              }

            })
            .catch(function (error) {
              console.log(error);
            });
          }else {
            console.log(data.errmsg);
          }

        })
        .catch(function (error) {
          console.log(error);
        });
      }
    },
    mounted() {
      let _this = this
      let newId = this.$route.query.id
      let qs = require('qs');
      Axios.post(_this.xyIp+'/api/home_page/leave_message', qs.stringify({
        message_id:newId
      }))
      .then(function (response) {
        let data = response.data
        if(data.errno === 0) {
          _this.news.title = data.data.type
          _this.news.time = data.data.create_date

          if(data.data.imgArray) {
            for(let i = 0;i < data.data.imgArray.length;i++) {
              if (data.data.imgArray[i]) {
                _this.list.push({
                  image: '',
                  title: '',
                  author: '星云家门口'
                },)
                  _this.list[i].image = require('assets/' + data.data.imgArray[i])
                  console.log(i);
              }

            }

          }
          for(let i =0;i < data.data.messageArray.length;i++) {
            _this.news.main.push({
              name: '',
              icon: '',
              text: '',
              time: ''
            },)
            _this.news.main[i].icon = require('assets/' + data.data.messageArray[i].logo)
            _this.news.main[i].name = data.data.messageArray[i].name
            _this.news.main[i].text = data.data.messageArray[i].content
            _this.news.main[i].time = data.data.messageArray[i].reply_date
          }
        }else {
          console.log(data.errmsg);
        }

      })
      .catch(function (error) {
        console.log(error);
      });

    }
}

</script>
