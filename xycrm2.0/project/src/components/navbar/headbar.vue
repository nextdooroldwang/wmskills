<style scoped>

#container {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    border-bottom: 1px solid #ccc;
    box-shadow: .5px .5px .5px .5px rgb(240, 240, 240);
    background: #eff2f7;
    z-index: calc(1024 - 1);
}

.left {
    float: left;
    width: 200px;
    height:60px;
    background-image: url("../../assets/logo.png");
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
}

.right {
    float: right;
    margin-right: 15vh;
}

/*.el-menu {
    background-color: #fff;
}*/

</style>

<template>

<div id="container">
    <div class="left">
    </div>
    <div class="right">
        <el-menu default-active="1" class="el-menu-demo" mode="horizontal">
            <el-menu-item index="1">处理中心</el-menu-item>
            <el-submenu index="2">
                <template slot="title">我的工作台</template>
                <el-menu-item index="2-1" @click.native="ss">选项1</el-menu-item>
                <el-menu-item index="2-2">选项2</el-menu-item>
                <el-menu-item index="2-3">选项3</el-menu-item>
            </el-submenu>
            <el-menu-item index="3">订单管理</el-menu-item>
        </el-menu>
    </div>
</div>

</template>

<script>

export default {
    components: {
    },
    methods: {
        ss: function() {
            console.log(123)
        }
    }
}

</script>
