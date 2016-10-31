<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="success" icon="plus">增加</el-button>
            <el-button type="warning" icon="edit">编辑</el-button>
            <el-button type="danger" icon="delete2">删除</el-button>
            <el-input placeholder="请输入内容" style="width: 300px;float:right;">
                <el-button slot="append" icon="search"></el-button>
            </el-input>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-tree :data="data" :props="defaultProps" @node-click="handleNodeClick"></el-tree>
        </el-col>
    </el-row>
</div>

</template>

<script>

export default {
    data() {
            return {
                data: [{
                    label: '研发部',
                    children: [{
                        label: '老李'
                    }]
                }, {
                    label: '线下部',
                    children: [{
                        label: '小赵'
                    }, {
                        label: '薇薇'
                    }]
                }, {
                    label: '财务部',
                    children: [{
                        label: '思思'
                    }, {
                        label: '球球'
                    }]
                }],
                defaultProps: {
                    children: 'children',
                    label: 'label'
                }
            }
        },
        computed: {},
        mounted() {},
        methods: {
            handleNodeClick: function() {

            }
        },
        components: {}
}

</script>
