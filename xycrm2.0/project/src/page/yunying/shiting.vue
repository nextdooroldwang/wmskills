<style scoped>

#container {
    width: 100%;
}
#charscontainer {
  height:calc(100vh - 200px);
}

#chars {
    width: 100%;
    height: 100%;
}

</style>

<template >

<div id="container">
    <el-row :gutter="20">
        <el-col :span="8">
                <el-select v-model="form.sale" placeholder="请选择顾问" @change="guwen">
                    <el-option label="李老师" value="li"></el-option>
                    <el-option label="王老师" value="wang"></el-option>
                </el-select>
        </el-col>
        <el-col :span="8">
              <el-select v-model="form.month" placeholder="请选择月份" @change="yuefen">
                <el-option label="1月" value="1"></el-option>
                <el-option label="2月" value="2"></el-option>
                <el-option label="3月" value="3"></el-option>
                <el-option label="4月" value="4"></el-option>
                <el-option label="5月" value="5"></el-option>
                <el-option label="6月" value="6"></el-option>
                <el-option label="7月" value="7"></el-option>
                <el-option label="8月" value="8"></el-option>
                <el-option label="9月" value="9"></el-option>
                <el-option label="10月" value="10"></el-option>
                <el-option label="11月" value="11"></el-option>
                <el-option label="12月" value="12"></el-option>
              </el-select>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="24" id="charscontainer">
            <div ref="chartDingdan" id="chars">

            </div>
        </el-col>
    </el-row>
</div>

</template>

<script>

import e from 'echarts'
import opt from '../../data/echars/shiting'
export default {
    data() {
            return {
                form: {
                    sale: '',
                    month: ''
                }
            }
        },
        computed: {},
        mounted() {
            let myChart = e.init(this.$refs.chartDingdan)
            let option = opt
            myChart.setOption(option)
        },
        methods: {
          guwen: function () {
          },
          yuefen: function () {
            let yuefen = this.form.month
            let weichengjiao = opt.wcjdata[yuefen]
            let chengjiao = opt.cjdata[yuefen]
            opt.series[0].data[0].value = weichengjiao;
            opt.series[0].data[1].value = chengjiao;
            let myChart = e.init(this.$refs.chartDingdan)
            let option = opt
            myChart.setOption(option)
          }
        },
        components: {}
}

</script>
