var option = {

  tooltip: {
    trigger: 'axis'
  },
  legend: {
    data: ['学员总数', '新增学员']
  },
  toolbox: {
    show: true,
    feature: {
      dataZoom: {
        yAxisIndex: 'none'
      },
      dataView: {
        readOnly: false
      },
      magicType: {
        type: ['line', 'bar']
      },
      restore: {},
      saveAsImage: {}
    }
  },
  xAxis: {
    type: 'category',
    boundaryGap: false,
    data: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月', ]
  },
  yAxis: {
    type: 'value',
    axisLabel: {
      formatter: '{value} 个'
    }
  },
  series: [{
    name: '学员总数',
    type: 'line',
    data: [110, 191, 150, 134, 212, 313, 310, 411, 441, 415, 373, 412],
    markPoint: {
      data: [{
        type: 'max',
        name: '最大值'
      }, {
        type: 'min',
        name: '最小值'
      }]
    }
  }, {
    name: '新增学员',
    type: 'line',
    data: [100, 9, 15, 13, 12, 13, 210, 11, 11, 145, 13, 10],
    markPoint: {
      data: [{
        name: '最低值',
        type: 'min',
        xAxis: 1,
        yAxis: 'min'
      }]
    },
    markLine: {
      data: [{
          type: 'average',
          name: '平均值'
        },
        [{
          symbol: 'none',
          x: '90%',
          yAxis: 'max'
        }, {
          symbol: 'circle',
          label: {
            normal: {
              position: 'start',
              formatter: '最大值'
            }
          },
          type: 'max',
          name: '最高点'
        }]
      ]
    }
  }]
};
export default option
