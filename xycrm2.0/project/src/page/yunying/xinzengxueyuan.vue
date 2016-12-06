<style lang="css" scopd>
#chars {
  width: 100%;
  height: 100%;
}


</style>

<template lang="html">

<div ref="chartDingdan" id="chars">

</div>

</template>

<script>

import opt from '../../data/echars/xueyuanadd'
export default {
    data() {
            return {}
        },
        computed: {},
        mounted() {
            let myChart = e.init(this.$refs.chartDingdan)
            var option = opt
            myChart.setOption(option)
        },
        methods: {},
        components: {}
}

</script>
