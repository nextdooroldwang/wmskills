<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="primary" @click.native="routerTo">新建通知</el-button>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="note" label="内容" sortable >
                </el-table-column>
                <el-table-column property="sum" label="收件人数">
                </el-table-column>
                <el-table-column property="date" label="发送日期">
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
                    note: '阿里哈哈噢爱噶空格空格有苦也挂科要顾客一个',
                    sum: '33',
                    date: '2016-05-02'
                },{
                    note: '阿里哈哈噢爱噶空格空格有苦也挂科要顾客一个',
                    sum: '33',
                    date: '2016-05-02'
                },{
                    note: '阿里哈哈噢爱噶空格空格有苦也挂科要顾客一个',
                    sum: '33',
                    date: '2016-05-02'
                },{
                    note: '阿里哈哈噢爱噶空格空格有苦也挂科要顾客一个',
                    sum: '33',
                    date: '2016-05-02'
                },]
            }
        },
        computed: {},
        mounted() {},
        methods: {
          formatter(row, column) {
              return row.address;
          },
          routerTo() {
              this.$router.push('/tongzhiadd')
          }
        },
        components: {}
}

</script>
