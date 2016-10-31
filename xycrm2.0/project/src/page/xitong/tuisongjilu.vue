<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="note" label="课堂记录" sortable >
                </el-table-column>
                <el-table-column property="name" label="课程名称">
                </el-table-column>
                <el-table-column property="teacher" label="教师">
                </el-table-column>
                <el-table-column property="date" label="推送时间">
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
                    note: '课堂记录123',
                    name: '小象口才',
                    teacher: '思思',
                    date: '2016-05-04',
                    edit: '删除'
                },{
                    note: '课堂记录123',
                    name: '鲨鱼公园',
                    teacher: '王老师',
                    date: '2016-05-04',
                    edit: '删除'
                },{
                    note: '课堂记录123',
                    name: '小象口才',
                    teacher: '思思',
                    date: '2016-05-04',
                    edit: '删除'
                },{
                    note: '课堂记录123',
                    name: '鲨鱼公园',
                    teacher: '王老师',
                    date: '2016-05-04',
                    edit: '删除'
                },{
                    note: '课堂记录123',
                    name: '小象口才',
                    teacher: '思思',
                    date: '2016-05-04',
                    edit: '删除'
                },{
                    note: '课堂记录123',
                    name: '鲨鱼公园',
                    teacher: '王老师',
                    date: '2016-05-04',
                    edit: '删除'
                }]
            }
        },
        computed: {},
        mounted() {},
        methods: {
          formatter(row, column) {
              return row.address;
          }
        },
        components: {}
}

</script>
