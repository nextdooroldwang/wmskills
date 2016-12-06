<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <div class="block">
        <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange" layout="total, sizes, prev, pager, next, jumper" :total="dataNum" :current-page="1">
        </el-pagination>
    </div>
</div>

</template>

<script>

export default {
    data() {
            return {
                tableData: '',
                pageNum: 10,
                pageData: '',
            }
        },
        computed: {
            dataNum() {
                return this.tableData.length
            }
        },
        mounted() {
            this.tableData = this.propthis.tableData
            this.pageData = this.tableData
            this.propthis.tableData = this.pageData.slice(0, 10)
        },
        methods: {
            handleSizeChange(val) {
                    this.pageNum = val
                    this.propthis.tableData = this.pageData.slice(0, this.pageNum)
                },
                handleCurrentChange(val) {
                    let star = (val - 1) * this.pageNum
                    let end = val * this.pageNum
                    this.propthis.tableData = this.pageData.slice(star, end)
                },
        },
        components: {},
        props: ['propthis']
}

</script>
