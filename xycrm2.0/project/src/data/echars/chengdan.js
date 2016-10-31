var option = {

  tooltip: {
    trigger: 'item',
    formatter: "{a} <br/>{b} : {c} ({d}%)"
  },
  legend: {
    orient: 'vertical',
    left: 'left',
    data: ['已签单', '未签单']
  },
  series: [{
    name: '成单率',
    type: 'pie',
    radius: '55%',
    center: ['50%', '60%'],
    data: [{
      value: 321,
      name: '已签单'
    }, {
      value: 112,
      name: '未签单'
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
