var weifenpei = 200;
var option = {
  title: {
    text: '尚未分配客户：' + weifenpei,
    // subtext: '纯属虚构',
    x: 'right'
  },
  tooltip: {
    trigger: 'item',
    formatter: "{a} <br/>{b} : {c} ({d}%)"
  },
  legend: {
    orient: 'vertical',
    left: 'left',
    data: ['跟进1次', '跟进2次', '跟进3次', '跟进3次以上', '预约试听', '已试听']
  },
  series: [{
    name: '客户状态',
    type: 'pie',
    radius: '55%',
    center: ['50%', '60%'],
    data: [{
      value: 335,
      name: '跟进1次'
    }, {
      value: 310,
      name: '跟进2次'
    }, {
      value: 234,
      name: '跟进3次'
    }, {
      value: 135,
      name: '跟进3次以上'
    }, {
      value: 78,
      name: '预约试听'
    }, {
      value: 77,
      name: '已试听'
    }],
    itemStyle: {
      emphasis: {
        shadowBlur: 10,
        shadowOffsetX: 0,
        shadowColor: 'rgba(0, 0, 0, 0.5)'
      }
    }
  }]
};
export default option
