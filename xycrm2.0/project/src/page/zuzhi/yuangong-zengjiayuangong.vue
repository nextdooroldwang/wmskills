<style lang="css" scoped>

</style>

<template lang="html">

<div id="container">
    <panel>
        <span slot="head">增加员工</span>
        <div slot="body">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                <el-row :gutter="20">
                    <el-col :span="10" :offset="7">
                        <el-form-item label="员工姓名" prop="name">
                            <el-input v-model="ruleForm.name"></el-input>
                        </el-form-item>
                        <el-form-item label="性别" prop="sex">
                            <el-radio-group v-model="ruleForm.sex">
                                <el-radio label="男"></el-radio>
                                <el-radio label="女"></el-radio>
                            </el-radio-group>
                        </el-form-item>
                        <el-form-item label="联系电话" prop="phone">
                            <el-input v-model="ruleForm.phone"></el-input>
                        </el-form-item>
                        <el-form-item label="所属部门" prop="dept">
                            <el-select v-model="ruleForm.dept" placeholder="请选择部门">
                                <el-option label="财务部" value="caiwu"></el-option>
                                <el-option label="研发部" value="yanfa"></el-option>
                                <el-option label="线下部" value="xianxia"></el-option>
                            </el-select>
                        </el-form-item>
                        <el-form-item label="职位" prop="pos">
                            <el-checkbox-group v-model="ruleForm.pos">
                                <el-checkbox label="管理员" name="type"></el-checkbox>
                                <el-checkbox label="教师" name="type"></el-checkbox>
                                <el-checkbox label="销售顾问" name="type"></el-checkbox>
                            </el-checkbox-group>
                        </el-form-item>
                        <el-form-item label="教龄" prop="years">
                            <el-input v-model="ruleForm.years"></el-input>
                        </el-form-item>
                        <el-form-item label="个人简介" prop="note">
                            <el-input type="textarea" v-model="ruleForm.note"></el-input>
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
    components: {
        Panel
    },
    data() {
        return {
            ruleForm: {
                name: '',
                sex: '',
                phone: '',
                dept: '',
                pos: [],
                years: '',
                note: ''
            },
            rules: {
                name: [{
                    required: true,
                    message: '请输入员工姓名',
                    trigger: 'blur'
                }],
                sex: [{
                    required: true,
                    message: '请选择员工性别',
                    trigger: 'change'
                }],
                phone: [{
                    type: 'string',
                    required: true,
                    message: '请输入联系方式',
                    trigger: 'blur'
                }],
                dept: [{
                    message: '请选择员工部门',
                    trigger: 'change'
                }],
                pos: [{ type: 'array', required: true, message: '请至少选择一个职位', trigger: 'change' }],
                years: [{
                    required: true,
                    message: '请填写教龄',
                    trigger: 'blur'
                }],
                note: [{
                    message: '请填写个人简介',
                    trigger: 'blur'
                }]
            }
        };
    },
    methods: {
        handleReset() {
          this.$refs.ruleForm.resetFields();
        },
        handleSubmit(ev) {
          this.$refs.ruleForm.validate((valid) => {
              if (valid) {
                  console.log(this.ruleForm.sex);
              } else {
                  console.log('error submit!!');
                  return false;
              }
          });
        }
    }
}

</script>
