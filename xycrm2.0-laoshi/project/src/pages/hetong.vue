<style lang="css" scoped>
#container {
  background: #eee;
}

.iconmenu {
  position: absolute;
  right: 16px;
  top:16px;
  z-index: 999;
}

.mu-card {
  margin-bottom: 8px;
}
.mu-card-text {
  padding: 6px 16px;
}
.mu-tabs {
  background-color: #23a197;
}
</style>

<template lang="html">

<div id="container">
    <mu-tabs :value="activeTab" @change="handleTabChange">
        <mu-tab value="tab0" title="全部合同" />
        <mu-tab value="tab1" title="进行中" />
        <mu-tab value="tab2" title="已完成" />
        <mu-tab value="tab3" title="已取消" />
    </mu-tabs>
    <div v-if="activeTab === 'tab0'">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-menu icon="more_vert">
                    <mu-menu-item title="编辑" />
                    <mu-menu-item title="删除" />
                </mu-icon-menu>
            </div>
            <mu-card-title title="机构名称：鹿特丹店" subTitle="2016-11-29" />

            <mu-card-text>
                合同编号：897572222
            </mu-card-text>
            <mu-card-text>
                产品名称：鲨鱼公园科学课
            </mu-card-text>
            <mu-card-text>
                课程信息：总课时 40 节 | 赠送 2 节
            </mu-card-text>
            <mu-card-text>
                课程进度： 21/42<mu-linear-progress mode="determinate" :value="value"/>
            </mu-card-text>

        </mu-card>
        <mu-card>
            <div class="iconmenu">
                <mu-icon-menu icon="more_vert">
                    <mu-menu-item title="编辑" />
                    <mu-menu-item title="删除" />
                </mu-icon-menu>
            </div>
            <mu-card-title title="机构名称：鹿特丹店" subTitle="2016-12-09" />

            <mu-card-text>
                合同编号：897572223
            </mu-card-text>
            <mu-card-text>
                产品名称：小象口才提升班
            </mu-card-text>
            <mu-card-text>
                课程信息：总课时 20 节 | 赠送 0 节
            </mu-card-text>
            <mu-card-text>
                课程进度： 20/20<mu-linear-progress mode="determinate" :value="value1"/>
            </mu-card-text>
        </mu-card>
    </div>
    <div v-if="activeTab === 'tab1'">
      <mu-card>
          <div class="iconmenu">
              <mu-icon-menu icon="more_vert">
                  <mu-menu-item title="编辑" />
                  <mu-menu-item title="删除" />
              </mu-icon-menu>
          </div>
          <mu-card-title title="机构名称：鹿特丹店" subTitle="2016-11-29" />

          <mu-card-text>
              合同编号：897572222
          </mu-card-text>
          <mu-card-text>
              产品名称：鲨鱼公园科学课
          </mu-card-text>
          <mu-card-text>
              课程信息：总课时 40 节 | 赠送 2 节
          </mu-card-text>
          <mu-card-text>
              课程进度： 21/42<mu-linear-progress mode="determinate" :value="value"/>
          </mu-card-text>

      </mu-card>
    </div>
    <div v-if="activeTab === 'tab2'">
      <mu-card>
          <div class="iconmenu">
              <mu-icon-menu icon="more_vert">
                  <mu-menu-item title="编辑" />
                  <mu-menu-item title="删除" />
              </mu-icon-menu>
          </div>
          <mu-card-title title="机构名称：鹿特丹店" subTitle="2016-12-09" />

          <mu-card-text>
              合同编号：897572223
          </mu-card-text>
          <mu-card-text>
              产品名称：小象口才提升班
          </mu-card-text>
          <mu-card-text>
              课程信息：总课时 20 节 | 赠送 0 节
          </mu-card-text>
          <mu-card-text>
              课程进度： 20/20<mu-linear-progress mode="determinate" :value="value1"/>
          </mu-card-text>
      </mu-card>
    </div>
    <div v-if="activeTab === 'tab3'">

    </div>
</div>

</template>

<script>

import myron from '../assets/iconshayu.png'
import img from '../assets/img1.png'
export default {
    data() {
            return {
                activeTab: 'tab0',
                img,
                myron,
                value: 50,
                value1: 100,
            }
        },
        methods: {
            handleTabChange(val) {
                this.activeTab = val
            },
        },

}

</script>
