<template lang="html">
<div id="container">
  <h1>我是首页组件</h1>
  <page :propthis="propThis"></page>
  <el-row>
      <el-col :span="24">
          <el-button type="primary" @click.native="dialogFormVisible2 = true">添加部门</el-button>
      </el-col>
  </el-row>
  <el-row>
      <el-col :span="24">
          <el-table :data="tableData" border stripe style="width: 100%">
              <el-table-column inline-template label="部门编号">
                  <div class="">
                      <el-button type="text" size="small" @click.native="dialog(row)">{{ row.dept_id }}</el-button>
                  </div>
              </el-table-column>
              <el-table-column property="dept_name" label="部门名称" sortable>
              </el-table-column>
              <el-table-column inline-template label="操作">
                  <div class="">
                      <el-button type="text" size="small" @click.native="dialogFormVisible = true" icon="edit">编辑</el-button>
                      <el-button type="text" size="small" @click.native="dialogVisible = true" icon="delete">删除</el-button>
                  </div>
              </el-table-column>
          </el-table>
      </el-col>
  </el-row>

  <el-dialog title="提示" v-model="dialogVisible" size="tiny">
      <span>是否删除：</span><span>{{ delId }}</span><span>{{ delName }}</span>
      <span slot="footer" class="dialog-footer">
      <el-button @click.native="dialogVisible = false">取 消</el-button>
      <el-button type="danger" @click.native="dialogVisible = false">删 除</el-button>
    </span>
  </el-dialog>

  <el-dialog title="添加部门" v-model="dialogFormVisible2">
      <el-form :model="ruleForm2" :rules="rules" ref="ruleForm2">
          <el-form-item label="部门编号：" :label-width="formLabelWidth" prop="dept_id">
              <el-input v-model="ruleForm2.dept_id" disabled></el-input>
          </el-form-item>
          <el-form-item label="部门名称：" :label-width="formLabelWidth" prop="dept_name">
              <el-input v-model="ruleForm2.dept_name" placeholder="请填写部门名称"></el-input>
          </el-form-item>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click.native.prevent="handleReset2">取 消</el-button>
        <el-button type="primary" @click.native="dialogFormVisible2 = false">确 定</el-button>
      </span>
  </el-dialog>

  <el-dialog title="编辑部门" v-model="dialogFormVisible">
      <el-form :model="ruleForm" :rules="rules" ref="ruleForm">
          <el-form-item label="部门编号：" :label-width="formLabelWidth" prop="dept_id">
              <el-input v-model="ruleForm.dept_id" disabled></el-input>
          </el-form-item>
          <el-form-item label="部门名称：" :label-width="formLabelWidth" prop="dept_name">
              <el-input v-model="ruleForm.dept_name" placeholder="请填写部门名称"></el-input>
          </el-form-item>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click.native.prevent="handleReset">取 消</el-button>
        <el-button type="primary" @click.native="dialogFormVisible = false">确 定</el-button>
      </span>
  </el-dialog>

  <el-dialog :title="dialogTitle" v-model="dialogTableVisible">
      <el-table :data="tableData2">
          <el-table-column property="dept_id" label="员工编号"></el-table-column>
          <el-table-column property="dept_name" label="员工姓名"></el-table-column>
          <el-table-column property="phone" label="联系方式"></el-table-column>
      </el-table>
  </el-dialog>

</div>
</template>

<script>
import Page from '../components/tablepage/page'
import tableData from '../data/zuzhi/bumen'
export default {
    data() {
            return {
                tableData: tableData,
                tableData2: [{
                    dept_id: 'S01',
                    dept_name: '小明',
                    phone: '13322223444'
                }, {
                    dept_id: 'S02',
                    dept_name: '小红',
                    phone: '18833212333'
                }, ],
                ruleForm: {
                    dept_id: '',
                    dept_name: ''
                },
                ruleForm2: {
                    dept_id: '',
                    dept_name: ''
                },
                rules: {
                    dept_id: [{
                        required: false,
                        message: '',
                        trigger: 'blur'
                    }],
                    dept_name: [{
                        required: true,
                        message: '请输入部门名称',
                        trigger: 'blur'
                    }]
                },
                dialogFormVisible: false,
                dialogFormVisible2: false,
                dialogTableVisible: false,
                dialogVisible: false,
                formLabelWidth: '100px',
                delId: 'D01',
                delName: '教务部',
                dialogTitle: '',
            }
        },
        computed: {
            propThis() {
              return this
            }
        },
        mounted() {
            let _this = this
                // axios.get('http://192.168.1.128:8360/home/dept')
                //     .then(function(response) {
                //       _this.tableData = response.data
                //     })
                //     .catch(function(error) {
                //         console.log(error)
                //     });
        },
        methods: {
                handleReset() {
                    this.$refs.ruleForm.resetFields()
                    this.dialogFormVisible = false
                },
                handleReset2() {
                    this.$refs.ruleForm2.resetFields()
                    this.dialogFormVisible2 = false
                },
                dialog(row) {
                    this.dialogTableVisible = true
                    this.dialogTitle = row.dept_id + "" + row.dept_name
                }
        },
        components: {
          Page
        }
}
</script>

<style lang="css">
</style>
