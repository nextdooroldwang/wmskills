var nav = [{
  submenuIndex: '1',
  submenuIcon: 'el-icon-share',
  submenuTitle: '组织',
  menugroup: [{
    groupTitle: '员工组织',
    menuItem: [{
      itemIndex: '1-1',
      itemType: '社区店管理',
      itemPath: '/zuzhiShequdian'
    }, {
      itemIndex: '1-2',
      itemType: '部门管理',
      itemPath: '/bumen'
    }, {
      itemIndex: '1-3',
      itemType: '员工管理',
      itemPath: '/yuangong'
    }]
  }]
}, {
  submenuIndex: '2',
  submenuIcon: 'el-icon-menu',
  submenuTitle: 'CRM',
  menugroup: [{
    groupTitle: '意向客户',
    menuItem: [{
      itemIndex: '2-1',
      itemType: '新客户录入',
      itemPath: '/kehuadd'
    }, {
      itemIndex: '2-2',
      itemType: '客户管理',
      itemPath: '/kehu'
    }, {
      itemIndex: '2-3',
      itemType: '试听管理',
      itemPath: '/shitingguanli'
    }]
  }, {
    groupTitle: '合同管理',
    menuItem: [{
      itemIndex: '2-4',
      itemType: '合同列表',
      itemPath: '/hetong'
    }, {
      itemIndex: '2-5',
      itemType: '产品列表',
      itemPath: '/chanpin'
    }, {
      itemIndex: '2-6',
      itemType: '合同审核',
      itemPath: '/hetongshenhe'
    }]
  }]
}, {
  submenuIndex: '3',
  submenuIcon: 'el-icon-edit',
  submenuTitle: '教务',
  menugroup: [{
    groupTitle: '教务管理',
    menuItem: [{
      itemIndex: '3-1',
      itemType: '课程表',
      itemPath: '/kechengbiao'
    }, {
      itemIndex: '3-2',
      itemType: '课程管理',
      itemPath: '/kecheng'
    }, {
      itemIndex: '3-3',
      itemType: '教室管理',
      itemPath: '/jiaoshi'
    }]
  }]
}, {
  submenuIndex: '4',
  submenuIcon: 'el-icon-message',
  submenuTitle: '营销',
  menugroup: [{
    groupTitle: '活动中心',
    menuItem: [{
      itemIndex: '4-1',
      itemType: '活动管理',
      itemPath: '/huodong'
    }]
  }]
}, {
  submenuIndex: '5',
  submenuIcon: 'el-icon-star-on',
  submenuTitle: '运营',
  menugroup: [{
    groupTitle: '统计信息',
    menuItem: [{
      itemIndex: '5-1',
      itemType: '新增订单统计',
      itemPath: '/dingdanadd'
    }, {
      itemIndex: '5-2',
      itemType: '新增学员统计',
      itemPath: '/xueyuanadd'
    }, {
      itemIndex: '5-3',
      itemType: '客户状态统计',
      itemPath: '/kehuzhuangtai'
    }, {
      itemIndex: '5-4',
      itemType: '试听转化率统计',
      itemPath: '/shiting'
    }, {
      itemIndex: '5-5',
      itemType: '成单率统计',
      itemPath: '/chengdan'
    }]
  }]
}, {
  submenuIndex: '6',
  submenuIcon: 'el-icon-setting',
  submenuTitle: '系统',
  menugroup: [{
    groupTitle: '数据中心',
    menuItem: [{
      itemIndex: '6-1',
      itemType: '推送记录',
      itemPath: '/tuisongjilu'
    }, {
      itemIndex: '6-2',
      itemType: '管理通知',
      itemPath: '/guanlitongzhi'
    }]
  }]
}];
export default nav
