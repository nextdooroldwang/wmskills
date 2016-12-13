<style lang="css" scoped>

#container {

    min-height: calc(100vh - 56px);
    padding-top: 8px;
}

.mu-appbar {
    background: rgb(255, 255, 255);
    border-radius: 12px;
    height: 38px;
    margin-bottom: 8px;
}

.mu-flat-button-label {
    padding: 0;
}

.mu-text-field {
    min-width: 200px;
    width: 80%;
}

.right {
    min-width: 44px;
}

.searchContainer {
    padding: 0 8px;
}

.nav {
    padding: 5px 0;
    background: rgb(240, 240, 240);
}

.mu-divider {
    margin-left: 48px
}

.meItem {
    background: #fff;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.meText {
    flex: 1;
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
.weichuli {
    padding: 2px 5px;
    margin-right: 16px;
    color: #fff;
    font-size: 14px;
    background: #666;
    border-radius: 4px;
}
.sub {
  font-size: 12px;
  color: #bbb;
}
</style>

<template lang="html">

<div id="container">
  <mu-sub-header>请假学员列表</mu-sub-header>
    <div class="meItem" @click="routerQingjia">
        <div class="meIcon">
            <div class="photo">

            </div>
        </div>
        <div class="meText">
            <div class="">
              小明
            </div>
            <div class="sub">
              鲨鱼一班
            </div>
        </div>
        <div style="display:flex;align-items:center">

        </div>
        <div class="">
            <span class="weichuli">未处理</span>
        </div>
        </mu-list-item>
    </div>
    <mu-divider/>
    <div class="meItem" @click="routerQingjia">
        <div class="meIcon">
            <div class="photo">

            </div>
        </div>
        <div class="meText">
          <div class="">
            小明
          </div>
          <div class="sub">
            鲨鱼一班
          </div>
        </div>
        <div style="display:flex;align-items:center">

        </div>
        <div class="">
            <span class="weichuli">未处理</span>
        </div>
        </mu-list-item>
    </div>
    <mu-divider/>
    <div class="meItem" @click="routerQingjia">
        <div class="meIcon">
            <div class="photo">

            </div>
        </div>
        <div class="meText">
          <div class="">
            小明
          </div>
          <div class="sub">
            鲨鱼一班
          </div>
        </div>
        <div style="display:flex;align-items:center">

        </div>
        <div class="">
              <span class="weichuli">未处理</span>
        </div>
        </mu-list-item>
    </div>
    <mu-divider/>
</div>

</template>

<script>

export default {
    data() {
            return {
                bottomSheet: false
            }
        },
        mounted() {},
        methods: {
            closeBottomSheet() {
                    this.bottomSheet = false
                },
                openBottomSheet() {
                    this.bottomSheet = true
                },
                routerQingjia() {
                  this.$router.push('/qingjiachuli')
                }
        }
}

</script>
