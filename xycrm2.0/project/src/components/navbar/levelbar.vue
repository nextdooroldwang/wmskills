<style scoped>

#container {
    width: 100%;

}

.el-breadcrumb {
    font-size: 14px;
    margin: 2vh 0vh;
    border-radius: 4px;
    padding-left: 10px;
    border-bottom: 1px solid #eff2f7;
}
.el-row {
  margin-bottom: 0px;
}
</style>

<template lang="html">

<div id="container">
  <el-row>
    <el-col :span="24">
      <el-breadcrumb separator="/">
          <el-breadcrumb-item :to="{ path:'/foot'}">首页</el-breadcrumb-item>
          <el-breadcrumb-item :to="{ path: '/' }">活动管理</el-breadcrumb-item>
          <el-breadcrumb-item>活动列表</el-breadcrumb-item>
          <el-breadcrumb-item>活动详情</el-breadcrumb-item>
      </el-breadcrumb>
    </el-col>
  </el-row>

</div>

</template>

<script>

export default {
    data() {
            return {

            }
        },
        computed: {

        },
        methods: {},
        components: {}
}

</script>
