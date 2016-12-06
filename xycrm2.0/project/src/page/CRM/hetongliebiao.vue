<style lang="css" scoped>

.el-button {
  outline-color:invert;
}

</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="primary">添加合同</el-button>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="num" label="合同编号" sortable>
                </el-table-column>
                <el-table-column property="name" label="学员姓名">
                </el-table-column>
                <el-table-column property="chanpin" label="购买产品">
                </el-table-column>
                <el-table-column property="jiage" label="合同价格">
                </el-table-column>
                <el-table-column property="date" label="签订日期">
                </el-table-column>
                <el-table-column property="keshi" label="剩余课时">
                </el-table-column>
                <el-table-column property="zhuangtai" label="合同状态">
                </el-table-column>
                <el-table-column inline-template label="操作">
                  <!-- <el-button type="text" size="small">hh</el-button> -->
                  <router-link to="/">Go to Foo</router-link>
                </el-table-column>
            </el-table>
        </el-col>
    </el-row>
</div>

</template>

<script>

export default {
    data() {
            return {
                tableData: [{
                    num: '201543747',
                    name: '小明',
                    chanpin: '英语课',
                    jiage: '3300',
                    date: '2016-05-02',
                    keshi: '42',
                    zhuangtai: '进行中'
                },{
                    num: '201543747',
                    name: '小明',
                    chanpin: '英语课',
                    jiage: '3300',
                    date: '2016-05-02',
                    keshi: '42',
                    zhuangtai: '进行中'
                } ]
            }
        },
        computed: {},
        mounted() {},
        methods: {
            formatter(row, column) {
                    return row.address;
                },
                routerTo() {
                    this.$router.push('/tianjiafendian')
                }
        },
        components: {}
}

</script>
