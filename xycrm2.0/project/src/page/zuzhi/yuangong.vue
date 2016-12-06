<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="primary" icon="plus" @click.native="routerTo">增加员工</el-button>
            <el-input placeholder="请输入内容" style="width: 300px;float:right;">
                <el-button slot="append" icon="search"></el-button>
            </el-input>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="name" label="员工姓名" sortable>
                </el-table-column>
                <el-table-column property="phone" label="手机号码">
                </el-table-column>
                <el-table-column property="sex" label="性别">
                </el-table-column>
                <el-table-column property="dept" label="所属部门">
                </el-table-column>
                <el-table-column property="edit" label="操作">
                </el-table-column>
            </el-table>
        </el-col>
    </el-row>
</div>

</template>

<script>
import data from '../../data/zuzhi/yuangong'
export default {
    data() {
            return {
                tableData: data
            }
        },
        computed: {},
        mounted() {},
        methods: {
            routerTo() {
                this.$router.push('/yuangongadd')
            }
        },
        components: {}
}

</script>
