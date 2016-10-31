<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="primary">添加产品</el-button>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="num" label="产品编号" sortable>
                </el-table-column>
                <el-table-column property="name" label="产品名称">
                </el-table-column>
                <el-table-column property="kecheng" label="所含课程">
                </el-table-column>
                <el-table-column property="jiaoshi" label="上课教室">
                </el-table-column>
                <el-table-column property="keshi" label="产品课时">
                </el-table-column>
                <el-table-column property="jiage" label="产品价格">
                </el-table-column>
                <el-table-column property="edit" label="操作">
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
                    kecheng: '英语课',
                    jiaoshi: '101',
                    keshi: '42',
                    jiage: '2000',
                    edit: '删除'
                },{
                    num: '201543747',
                    name: '小明',
                    kecheng: '英语课',
                    jiaoshi: '101',
                    keshi: '42',
                    jiage: '2000',
                    edit: '删除'
                }]
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
