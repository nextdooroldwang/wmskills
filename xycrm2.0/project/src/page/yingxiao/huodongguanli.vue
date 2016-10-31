<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="primary" @click.native="routerTo">添加活动</el-button>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="img" label="图片" sortable >
                </el-table-column>
                <el-table-column property="title" label="标题">
                </el-table-column>
                <el-table-column property="phone" label="联系电话">
                </el-table-column>
                <el-table-column property="date" label="时间">
                </el-table-column>
                <el-table-column property="commend" label="是否推荐">
                </el-table-column>
                <el-table-column property="state" label="状态">
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
                    img: '阿里哈哈噢爱噶空格空格有苦也挂科要顾客一个',
                    title: '33',
                    phone: '13322557759',
                    date: '2016-05-02',
                    commend: '是',
                    state: '1',
                    edit: '删除'
                },{
                    img: '阿里哈哈噢爱噶空格空格有苦也挂科要顾客一个',
                    title: '33',
                    phone: '13322557759',
                    date: '2016-05-02',
                    commend: '是',
                    state: '1',
                    edit: '删除'
                },{
                    img: '阿里哈哈噢爱噶空格空格有苦也挂科要顾客一个',
                    title: '33',
                    phone: '13322557759',
                    date: '2016-05-02',
                    commend: '是',
                    state: '1',
                    edit: '删除'
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
