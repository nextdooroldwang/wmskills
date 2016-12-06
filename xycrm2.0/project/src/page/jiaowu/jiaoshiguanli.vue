<style lang="css" scoped>



</style>

<template lang="html">

<div id="container">
    <el-row>
      <el-col :span="24">
          <el-button type="primary" @click.native="dialogFormVisible = true">添加教室</el-button>
          <el-dialog title="添加教室" v-model="dialogFormVisible">
              <el-form :model="ruleForm" :rules="rules" ref="ruleForm">
                  <el-form-item label="课程名称：" :label-width="formLabelWidth" prop="name">
                      <el-input v-model="ruleForm.name" placeholder="请填写课程名称"></el-input>
                  </el-form-item>
                  <el-form-item label="容纳人数：" :label-width="formLabelWidth" prop="num">
                      <el-input v-model="ruleForm.num" placeholder="请填写教室可容纳人数"></el-input>
                  </el-form-item>
              </el-form>
              <span slot="footer" class="dialog-footer">
                <el-button @click.native.prevent="handleReset">取 消</el-button>
                <el-button type="primary" @click.native="dialogFormVisible = false">确 定</el-button>
              </span>
          </el-dialog>
      </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="name" label="教室名称" sortable >
                </el-table-column>
                <el-table-column property="num" label="容纳人数">
                </el-table-column>
                <el-table-column property="date" label="创建时间">
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
                  date: '2016-05-02',
                  name: '301',
                  num: '30',
                  edit: '删除'

              }, {
                  date: '2016-05-02',
                  name: '301',
                  num: '30',
                  edit: '删除'

              },{
                  date: '2016-05-02',
                  name: '301',
                  num: '30',
                  edit: '删除'

              }],
              ruleForm: {
                  name: '',
                  num: ''
              },
              rules: {
                name: [{
                    required: true,
                    message: '请输入课程名称',
                    trigger: 'blur'
                }],
                num: [{
                    required: true,
                    message: '请输入教室可容纳人数',
                    trigger: 'blur'
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
              return row.address
          },
          routerTo() {
              this.$router.push('/tianjiafendian')
          },
          handleReset() {
             this.$refs.ruleForm.resetFields()
             this.dialogFormVisible = false
          }
        },
        components: {}
}

</script>
