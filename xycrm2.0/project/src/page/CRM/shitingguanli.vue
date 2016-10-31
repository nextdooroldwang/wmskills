<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="primary" @click.native="dialogFormVisible = true">新增试听</el-button>
            <el-dialog title="添加试听" v-model="dialogFormVisible">
                <el-form :model="ruleForm" :rules="rules" ref="ruleForm">
                    <el-form-item label="学员名称：" :label-width="formLabelWidth" prop="name">
                        <el-input v-model="ruleForm.name" placeholder="请填写课程名称"></el-input>
                    </el-form-item>
                    <el-form-item label="试听时间：" :label-width="formLabelWidth" prop="date">
                        <el-date-picker type="date" placeholder="选择日期" v-model="ruleForm.date" style="width: 100%;"></el-date-picker>
                    </el-form-item>
                    <el-form-item label="试听课程：" :label-width="formLabelWidth" prop="kecheng">
                        <el-select v-model="ruleForm.kecheng" placeholder="请选择试听课程">
                            <el-option label="口才" value="shanghai"></el-option>
                            <el-option label="英语" value="beijing"></el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item label="试听教室：" :label-width="formLabelWidth" prop="jiaoshi">
                        <el-select v-model="ruleForm.jiaoshi" placeholder="请选择试听教室">
                            <el-option label="101室" value="301"></el-option>
                            <el-option label="102室" value="302"></el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item label="试听老师：" :label-width="formLabelWidth" prop="laoshi">
                        <el-select v-model="ruleForm.laoshi" placeholder="请选择试听课老师">
                            <el-option label="思思老师" value="sisi"></el-option>
                            <el-option label="吴老师" value="wu"></el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item label="跟进顾问：" :label-width="formLabelWidth" prop="guwen">
                        <el-select v-model="ruleForm.guwen" placeholder="请选择跟进顾问">
                            <el-option label="老李" value="li"></el-option>
                            <el-option label="小李" value="lii"></el-option>
                        </el-select>
                    </el-form-item>
                </el-form>
                <span slot="footer" class="dialog-footer">
                  <el-button @click.native="dialogFormVisible = false">取 消</el-button>
                  <el-button type="primary" @click.native="dialogFormVisible = false">确 定</el-button>
                </span>
            </el-dialog>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="name" label="学员名称" sortable>
                </el-table-column>
                <el-table-column property="date" label="试听时间">
                </el-table-column>
                <el-table-column property="kecheng" label="试听课程">
                </el-table-column>
                <el-table-column property="jiaoshi" label="试听教室">
                </el-table-column>
                <el-table-column property="laoshi" label="试听老师">
                </el-table-column>
                <el-table-column property="guwen" label="跟进顾问">
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
                    name: '小红',
                    date: '2016-05-02',
                    kecheng: '小象口才',
                    jiaoshi: '101',
                    laoshi: '思思',
                    guwen: '圆圆',
                    edit: '删除'
                }, {
                    name: '小红',
                    date: '2016-05-02',
                    kecheng: '小象口才',
                    jiaoshi: '101',
                    laoshi: '思思',
                    guwen: '圆圆',
                    edit: '删除'
                }, {
                    name: '小红',
                    date: '2016-05-02',
                    kecheng: '小象口才',
                    jiaoshi: '101',
                    laoshi: '思思',
                    guwen: '圆圆',
                    edit: '删除'
                }, ],
                ruleForm: {
                    name: '',
                    date: '',
                    kecheng: '',
                    jiaoshi: '',
                    laoshi: '',
                    guwen: ''
                },
                rules: {
                    name: [{
                        required: true,
                        message: '请输入学员名称',
                        trigger: 'blur'
                    }],
                    date: [{
                        type: 'date',
                        required: true,
                        message: '请选择日期',
                        trigger: 'change'
                    }],
                    kecheng: [{
                        required: true,
                        message: '请选择试听课程',
                        trigger: 'blur,change'
                    }],
                    jiaoshi: [{
                        required: true,
                        message: '请选择试听教室',
                        trigger: 'blur,change'
                    }],
                    laoshi: [{
                        required: true,
                        message: '请选择试听课老师',
                        trigger: 'blur,change'
                    }],
                    guwen: [{
                        required: false,
                        message: '请选择跟进顾问',
                        trigger: 'blur,change'
                    }]
                },
                dialogFormVisible: false,
                formLabelWidth: '100px'
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
