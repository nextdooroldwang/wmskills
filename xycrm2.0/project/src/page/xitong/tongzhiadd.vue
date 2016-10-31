<style lang="css" scoped>

.xyright {
    float: right;
    line-height: 34px;
}

</style>

<template lang="html">

<div id="container">
    <panel>
        <span slot="head">新建通知</span>
        <div slot="body">

            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                <el-row :gutter="20">
                    <el-col :span="10" :offset="7">
                        <el-form-item label="通知员工" prop="name">
                          <el-select v-model="ruleForm.name" placeholder="请选择员工">
                              <el-option label="小张" value="zhang"></el-option>
                              <el-option label="小李" value="li"></el-option>
                              <el-option label="小王" value="wang"></el-option>
                          </el-select>
                        </el-form-item>
                        <el-form-item label="发送内容" prop="note">
                            <el-input v-model="ruleForm.note"></el-input>
                        </el-form-item>
                        <el-form-item label="通知类型" prop="class">
                          <el-select v-model="ruleForm.class" placeholder="请选择类型">
                              <el-option label="消息" value="xiaoxi"></el-option>
                              <el-option label="任务" value="renwu"></el-option>
                              <el-option label="奖励" value="jiangli"></el-option>
                          </el-select>
                        </el-form-item>
                        <el-form-item>
                            <el-button type="primary" @click.native.prevent="handleSubmit">提交</el-button>
                            <el-button @click.native.prevent="handleReset">重置</el-button>
                        </el-form-item>
                    </el-col>
                </el-row>
            </el-form>
        </div>
    </panel>
</div>

</template>

<script>

import Panel from '../../components/panel'
export default {
    data() {
            return {
                ruleForm: {
                    name: '',
                    note: '',
                    class: ''
                },
                rules: {
                    name: [{
                        required: true,
                        message: '请输入社区店名称',
                        trigger: 'change'
                    }],
                    note: [{
                        required: true,
                        message: '请输入社区店地址',
                        trigger: 'blur'
                    }],
                    class: [{
                        required: true,
                        message: '请输入联系电话',
                        trigger: 'change'
                    }]
                }
            }
        },
        computed: {},
        mounted() {},
        methods: {
            handleReset() {
                    this.$refs.ruleForm.resetFields();
            },
            handleSubmit(ev) {
                this.$refs.ruleForm.validate((valid) => {
                    if (valid) {
                        alert('submit!');
                    } else {
                        console.log('error submit!!');
                        return false;
                    }
                });
            }
        },
        components: {
            Panel
        }

}

</script>
