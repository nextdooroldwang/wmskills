<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="primary" @click.native="routerTo">添加分店</el-button>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="date" label="社区店名称" sortable >
                </el-table-column>
                <el-table-column property="name" label="城市">
                </el-table-column>
                <el-table-column property="address" label="地址">
                </el-table-column>
                <el-table-column property="phone" label="电话">
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
                    date: '2016-05-02',
                    name: '王小虎',
                    address: '上海市普陀区金沙江路',
                    phone: '133 4456 1518',
                    edit: '删除'

                }, {
                    date: '2016-05-04',
                    name: '王小虎',
                    address: '上海市普陀区金沙江路'
                }, {
                    date: '2016-05-01',
                    name: '王小虎',
                    address: '上海市普陀区金沙江路'
                }, {
                    date: '2016-05-03',
                    name: '王小虎',
                    address: '上海市普陀区金沙江路'
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
