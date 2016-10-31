<style lang="css" scoped>

#serch i {
    transition: transform 0.2s;
}

#serch:hover i {
    transform: rotate(180deg)
}

</style>

<template lang="html">

<div id="container">
    <el-row>
        <el-col :span="24">
            <el-button type="success">批量导入</el-button>
            <el-button type="primary" @click.native="dialogFormVisible = true">批量分配顾问</el-button>
            <el-dialog title="批量分配顾问" v-model="dialogFormVisible">

                <el-form :model="ruleForm" :rules="rules" ref="ruleForm">
                    <el-form-item label="销售顾问：" :label-width="formLabelWidth" prop="name">
                        <el-select v-model="ruleForm.name" placeholder="请选择销售顾问">
                            <el-option label="老李" value="shanghai"></el-option>
                            <el-option label="老张" value="beijing"></el-option>
                        </el-select>
                    </el-form-item>
                    <el-form-item label="分配数量：" :label-width="formLabelWidth" prop="num">
                        <el-input v-model="ruleForm.num" placeholder="请填写分配的客户数"></el-input>
                    </el-form-item>
                </el-form>
                <span slot="footer" class="dialog-footer">
                  <el-button @click.native="dialogFormVisible = false">取 消</el-button>
                  <el-button type="primary" @click.native="dialogFormVisible = false">确 定</el-button>
                </span>
            </el-dialog>

            <el-button :plain="true" type="info" id="serch">高级搜索<i class="el-icon-arrow-down el-icon-right"></i></el-button>
            <el-button :plain="true" type="success">全部</el-button>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24">
            <el-table :data="tableData" border style="width: 100%">
                <el-table-column property="name" label="学员姓名" sortable>
                </el-table-column>
                <el-table-column property="pname" label="家长姓名">
                </el-table-column>
                <el-table-column property="phone" label="家长电话">
                </el-table-column>
                <el-table-column property="laiyuan" label="客户来源">
                </el-table-column>
                <el-table-column property="zhuangtai" label="客户状态">
                </el-table-column>
                <el-table-column property="guwen" label="跟进顾问">
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
                kehushu: 667,
                tableData: [{
                    name: '小明',
                    pname: '大明',
                    phone: '13344556677',
                    laiyuan: '英语课',
                    zhuangtai: '英语课',
                    guwen: '英语课',
                    date: '2016-05-02',
                    edit: '删除'

                }, {
                    name: '小明',
                    pname: '大明',
                    phone: '13344556677',
                    laiyuan: '英语课',
                    zhuangtai: '英语课',
                    guwen: '英语课',
                    date: '2016-05-02',
                    edit: '删除'

                },{
                    name: '小明',
                    pname: '大明',
                    phone: '13344556677',
                    laiyuan: '英语课',
                    zhuangtai: '英语课',
                    guwen: '英语课',
                    date: '2016-05-02',
                    edit: '删除'

                },],
                ruleForm: {
                    name: '',
                    num: ''
                },
                rules: {
                  name: [{
                      required: true,
                      message: '请选择销售顾问',
                      trigger: 'blur'
                  }],
                  num: [{
                      required: true,
                      message: '请输入所分配的客户数量',
                      trigger: 'change'
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
