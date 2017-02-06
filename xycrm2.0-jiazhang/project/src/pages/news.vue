<style lang="css" scoped>

.newsTime {
    color: rgb(218, 218, 218);
}
.mu-tabs {
  background-color: #23a197;
}

.imgContaner {
    width: 100%;
    box-sizing: border-box;
    padding: 0px 0px 16px 70px;
    display: flex;
    align-items: center;
    overflow-x: auto;
    overflow-y: hidden;
}

.imgSmall {
    flex-shrink: 0;
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
</style>

<template lang="html">

<div id="container">
    <mu-tabs :value="activeTab" @change="handleTabChange">
        <mu-tab value="tab1" title="课程消息" />
        <mu-tab value="tab2" title="签到提醒" />
        <mu-tab value="tab3" title="课堂表现" />
        <mu-tab value="tab4" title="通知消息" />
    </mu-tabs>
    <div v-if="activeTab === 'tab1'">
        <mu-list @itemClick="routerNew(newItem)" v-for="newItem in news" v-if="newItem.badge === '课程消息'">
            <mu-list-item>
                <mu-avatar :src="newItem.icon" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">{{ newItem.teacher }}老师 -</span> {{ newItem.text }}
                </span>
                <div class="newsTime">
                    {{ newItem.time }}
                </div>
                <mu-badge :content="newItem.badge" :color="cssColor(newItem.badge)" slot="right" />
            </mu-list-item>

            <mu-divider inset/>
        </mu-list>
    </div>
    <div v-if="activeTab === 'tab2'">
        <mu-list  v-for="newItem in news" v-if="newItem.badge === '签到提醒'">
            <mu-list-item>
                <mu-avatar :src="newItem.icon" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">{{ newItem.teacher }}老师 -</span> {{ newItem.text }}
                </span>
                <div class="newsTime">
                    {{ newItem.time }}
                </div>
                <mu-badge :content="newItem.badge" :color="cssColor(newItem.badge)" slot="right" />
            </mu-list-item>

            <mu-divider inset/>
        </mu-list>
    </div>
    <div v-if="activeTab === 'tab3'">
        <mu-list @itemClick="routerNew(newItem)" v-for="newItem in news" v-if="newItem.badge === '课堂表现'">
            <mu-list-item>
                <mu-avatar :src="newItem.icon" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">{{ newItem.teacher }}老师 -</span> {{ newItem.text }}
                </span>
                <div class="newsTime">
                    {{ newItem.time }}
                </div>
                <mu-badge :content="newItem.badge" :color="cssColor(newItem.badge)" slot="right" />
            </mu-list-item>
            <div class="imgContaner" v-if="newItem.badge === '课堂表现'">
                <div class="imgSmall" v-for="newItemImg in newItem.isKetangbiaoxian" v-if="newItemImg">
                    <img :src="newItemImg" alt="" />
                </div>
            </div>
            <mu-divider inset/>
        </mu-list>
    </div>
    <div v-if="activeTab === 'tab4'">
        <mu-list @itemClick="routerNew(newItem)" v-for="newItem in news" v-if="newItem.badge === '通知消息'">
            <mu-list-item>
                <mu-avatar :src="newItem.icon" slot="leftAvatar" />
                <span slot="describe">
          <span style="color: rgba(0, 0, 0, .87)">{{ newItem.teacher }}老师 -</span> {{ newItem.text }}
                </span>
                <div class="newsTime">
                    {{ newItem.time }}
                </div>
                <mu-badge :content="newItem.badge" :color="cssColor(newItem.badge)" slot="right" />
            </mu-list-item>

            <mu-divider inset/>
        </mu-list>
    </div>
</div>

</template>

<script>

export default {
    data() {
            return {
                activeTab: 'tab1',
                news:[]
            }
        },
        methods: {
            handleTabChange(val) {
                    this.activeTab = val
                },
                routerNew(val) {
                    this.$router.push({path:'/new',query:{id:val.id}})
                },
                cssColor(badge) {
                  switch (badge) {
                    case '课程消息':
                      return "#23a197";
                      break;
                    case '课堂表现':
                      return "#f5a819";
                      break;
                    case '通知消息':
                      return "red";
                      break;
                    case '签到消息':
                      return "#aaa";
                      break;
                    default: return "blue";
                  }
                }
        },
        mounted() {
          let _this = this
          Axios.post(_this.xyIp+'/api/home_page/message')
          .then(function (response) {
            let data = response.data
            if(data.errno === 0) {
              for(let i =0;i < data.data.length;i++) {
                _this.news.push({
                    id:'',
                    icon: '',
                    teacher: '',
                    text: '',
                    time: '',
                    badge: '',
                    isKetangbiaoxian:[]
                },)
                _this.news[i].icon = typeof(data.data[i].staff_logo) === 'undefined' ? require('assets/img1.png') : require('assets/' + data.data[i].staff_logo)
                _this.news[i].teacher = data.data[i].staff_name || '星云家门口'
                _this.news[i].text = data.data[i].content
                _this.news[i].id = data.data[i].id
                _this.news[i].time = data.data[i].create_date
                _this.news[i].badge = data.data[i].type
                // _this.news[i].isKetangbiaoxian = data.data[i].imgArray
                if(data.data[i].imgArray) {
                  _this.news[i].isKetangbiaoxian = data.data[i].imgArray.map(function(img) {
                    if(img) {
                      return require('assets/' + img)
                    }
                  })
                }
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
