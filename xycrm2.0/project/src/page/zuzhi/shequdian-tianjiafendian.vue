<style lang="css" scoped>

.xyright {
    float: right;
    line-height: 34px;
}

</style>

<template lang="html">

<div id="container">
    <panel>
        <span slot="head">添加分店</span>
        <div slot="body">

            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                <el-row :gutter="20">
                    <el-col :span="10" :offset="7">
                        <el-form-item label="社区店名称" prop="name">
                            <el-input v-model="ruleForm.name"></el-input>
                        </el-form-item>
                        <el-form-item label="社区店地址" prop="address">
                            <el-input v-model="ruleForm.address"></el-input>
                        </el-form-item>
                        <el-form-item label="联系电话" prop="phone">
                            <el-input v-model="ruleForm.phone"></el-input>
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
                    address: '',
                    phone: ''
                },
                rules: {
                    name: [{
                        required: true,
                        message: '请输入社区店名称',
                        trigger: 'blur'
                    }],
                    address: [{
                        required: true,
                        message: '请输入社区店地址',
                        trigger: 'blur'
                    }],
                    phone: [{
                        required: true,
                        message: '请输入联系电话',
                        trigger: 'blur'
                    }, {
                        type: 'string',
                        message: '请输入正确的联系电话',
                        trigger: 'blur,change'
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
