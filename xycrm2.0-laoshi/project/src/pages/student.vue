<style lang="css" scoped>

#container {
    background: rgb(240, 240, 240);
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
.mu-sub-header {
  background: #fff
}
</style>

<template lang="html">

<div id="container">
    <div class="searchContainer">
        <mu-appbar>
            <mu-text-field icon="search" class="appbar-search-field" slot="left" hintText="请输入搜索内容" />
            <mu-flat-button style="color:#f5a819" @click="openBottomSheet" slot="right">
                <i class="material-icons" style="font-size:30px;">view_module</i>
                </mu-raised-button>
        </mu-appbar>
        <mu-bottom-sheet v-if="bottomSheet" @close="closeBottomSheet">
            <mu-menu @itemClick="closeBottomSheet">
                <mu-sub-header>
                    班级
                </mu-sub-header>
                <mu-menu-item title="全部学员" />
                <mu-menu-item title="一班" />
                <mu-menu-item title="二班" />
                <mu-menu-item title="三班" />
            </mu-menu>
        </mu-bottom-sheet>
    </div>
    <div class="nav">

    </div>
    <mu-sub-header>学员列表</mu-sub-header>
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
            <mu-icon-button icon="chevron_right" @click="routerCard" />
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
            <mu-icon-button icon="chevron_right" @click="routerCard" />
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
            <mu-icon-button icon="chevron_right" @click="routerCard" />
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
            <mu-icon-button icon="chevron_right" @click="routerCard" />
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
                routerCard() {
                    this.$router.push('/cardChild')
                },
        }
}

</script>
