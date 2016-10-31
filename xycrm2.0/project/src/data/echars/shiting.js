var option = {

  tooltip: {
    trigger: 'item',
    formatter: "{a} <br/>{b} : {c} ({d}%)"
  },
  legend: {
    orient: 'vertical',
    left: 'left',
    data: ['试听后成交', '试听后未成交']
  },
  series: [{
    name: '试听转化率',
    type: 'pie',
    radius: '55%',
    center: ['50%', '60%'],
    data: [{
      value: 321,
      name: '试听后未成交'
    }, {
      value: 98,
      name: '试听后成交'
    }],
    itemStyle: {
      emphasis: {
        shadowBlur: 10,
        shadowOffsetX: 0,
        shadowColor: 'rgba(0, 0, 0, 0.5)'
      }
    }
  }],
  wcjdata: [33, 55, 66, 77, 88, 44, 12, 34, 55, 67, 31, 18],
  cjdata: [133, 515, 616, 177, 188, 414, 112, 314, 155, 167, 311, 118]
};
export default option
