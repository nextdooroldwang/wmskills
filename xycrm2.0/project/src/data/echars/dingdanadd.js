var option = {
  tooltip: {
    trigger: 'axis'
  },
  toolbox: {
    feature: {
      dataView: {
        show: true,
        readOnly: false
      },
      magicType: {
        show: true,
        type: ['line', 'bar']
      },
      restore: {
        show: true
      },
      saveAsImage: {
        show: true
      }
    }
  },
  legend: {
    data: ['订单数', '拼单数', '订单金额']
  },
  xAxis: [{
    type: 'category',
    data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
  }],
  yAxis: [{
    type: 'value',
    name: '数量',
    min: 0,
    max: 800,
    interval: 100,
    axisLabel: {
      formatter: '{value} 个'
    }
  }, {
    type: 'value',
    name: '金额',
    min: 0,
    max: 80000,
    interval: 10000,
    axisLabel: {
      formatter: '{value} 元'
    }
  }],
  series: [{
    name: '订单数',
    type: 'bar',
    data: [20, 49, 70, 232, 256, 767, 790, 162, 326, 200, 64, 33]
  }, {
    name: '拼单数',
    type: 'bar',
    data: [6, 9, 9, 26, 28, 70, 175, 182, 48, 18, 6, 3]
  }, {
    name: '订单金额',
    type: 'line',
    yAxisIndex: 1,
    data: [4000, 7200, 33300, 45000, 63000, 78200, 77300, 79400, 53000, 66500, 72000, 56200]
  }]
};
export default option
