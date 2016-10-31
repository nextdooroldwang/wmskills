<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="name" label="客户姓名" sortable>
                </el-table-column>
                <el-table-column property="phone" label="手机号码">
                </el-table-column>
                <el-table-column property="chanpin" label="产品名称">
                </el-table-column>
                <el-table-column property="jiage" label="合同价格">
                </el-table-column>
                <el-table-column property="keshi" label="总课时">
                </el-table-column>
                <el-table-column property="date" label="下单时间">
                </el-table-column>
                <el-table-column property="genjin" label="跟进人">
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
                    name: '小明',
                    phone: '13322456678',
                    chanpin: '小象口才',
                    jiage: '2000',
                    keshi: '42',
                    date: '2016-11-01',
                    genjin: '老李',
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
