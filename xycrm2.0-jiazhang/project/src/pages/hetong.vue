<style lang="css" scoped>

#container {
    background: #eee;
}

.iconmenu {
    position: absolute;
    right: 16px;
    top: 16px;
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

.keshiContainer {
    display: flex;
}

.keshi {
    flex: 1;
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
      <div v-for="itemTab0 in contract">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="itemTab0.clickShow = !itemTab0.clickShow">
            </div>
            <mu-card-title :title="itemTab0.title" :subTitle="itemTab0.subTitle" />

            <mu-card-text>
                合同编号：{{ itemTab0.number }}
            </mu-card-text>
            <mu-card-text>
                产品名称：{{ itemTab0.product }}
            </mu-card-text>
            <div v-show="itemTab0.clickShow">
                <mu-card-text>
                    产品价格：{{ itemTab0.moneyP }} ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：{{ itemTab0.done }}
                        </div>
                        <div class="keshi">
                            赠送课时：{{ itemTab0.give }}
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：{{ itemTab0.over }}
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：{{ itemTab0.discount }}
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：{{ itemTab0.moneyC }} ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：{{ itemTab0.anarchy }}
                </mu-card-text>
                <mu-card-text>
                    备注：{{ itemTab0.tips }}
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：{{ itemTab0.saler }}
                </mu-card-text>
                <mu-card-text>
                    联系电话：{{ itemTab0.phoneS }}
                </mu-card-text>
            </div>
        </mu-card>
      </div>
    </div>
    <div v-if="activeTab === 'tab1'">
      <div v-for="itemTab1 in contract" v-if="itemTab1.anarchy === '进行中'">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="itemTab1.clickShow = !itemTab1.clickShow">
            </div>
            <mu-card-title :title="itemTab1.title" :subTitle="itemTab1.subTitle" />

            <mu-card-text>
                合同编号：{{ itemTab1.number }}
            </mu-card-text>
            <mu-card-text>
                产品名称：{{ itemTab1.product }}
            </mu-card-text>
            <div v-show="itemTab1.clickShow">
                <mu-card-text>
                    产品价格：{{ itemTab1.moneyP }} ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：{{ itemTab1.done }}
                        </div>
                        <div class="keshi">
                            赠送课时：{{ itemTab1.give }}
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：{{ itemTab1.over }}
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：{{ itemTab1.discount }}
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：{{ itemTab1.moneyC }} ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：{{ itemTab1.anarchy }}
                </mu-card-text>
                <mu-card-text>
                    备注：{{ itemTab1.tips }}
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：{{ itemTab1.saler }}
                </mu-card-text>
                <mu-card-text>
                    联系电话：{{ itemTab1.phoneS }}
                </mu-card-text>
            </div>
        </mu-card>
      </div>
    </div>
    <div v-if="activeTab === 'tab2'">
      <div v-for="itemTab2 in contract" v-if="itemTab2.anarchy === '已完成'">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="itemTab2.clickShow = !itemTab2.clickShow">
            </div>
            <mu-card-title :title="itemTab2.title" :subTitle="itemTab2.subTitle" />

            <mu-card-text>
                合同编号：{{ itemTab2.number }}
            </mu-card-text>
            <mu-card-text>
                产品名称：{{ itemTab2.product }}
            </mu-card-text>
            <div v-show="itemTab2.clickShow">
                <mu-card-text>
                    产品价格：{{ itemTab2.moneyP }} ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：{{ itemTab2.done }}
                        </div>
                        <div class="keshi">
                            赠送课时：{{ itemTab2.give }}
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：{{ itemTab2.over }}
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：{{ itemTab2.discount }}
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：{{ itemTab2.moneyC }} ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：{{ itemTab2.anarchy }}
                </mu-card-text>
                <mu-card-text>
                    备注：{{ itemTab2.tips }}
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：{{ itemTab2.saler }}
                </mu-card-text>
                <mu-card-text>
                    联系电话：{{ itemTab2.phoneS }}
                </mu-card-text>
            </div>
        </mu-card>
      </div>
    </div>
    <div v-if="activeTab === 'tab3'">
      <div v-for="itemTab3 in contract" v-if="itemTab3.anarchy === '已取消'">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="itemTab3.clickShow = !itemTab3.clickShow">
            </div>
            <mu-card-title :title="itemTab3.title" :subTitle="itemTab3.subTitle" />

            <mu-card-text>
                合同编号：{{ itemTab3.number }}
            </mu-card-text>
            <mu-card-text>
                产品名称：{{ itemTab3.product }}
            </mu-card-text>
            <div v-show="itemTab3.clickShow">
                <mu-card-text>
                    产品价格：{{ itemTab3.moneyP }} ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：{{ itemTab3.done }}
                        </div>
                        <div class="keshi">
                            赠送课时：{{ itemTab3.give }}
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：{{ itemTab3.over }}
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：{{ itemTab3.discount }}
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：{{ itemTab3.moneyC }} ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：{{ itemTab3.anarchy }}
                </mu-card-text>
                <mu-card-text>
                    备注：{{ itemTab3.tips }}
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：{{ itemTab3.saler }}
                </mu-card-text>
                <mu-card-text>
                    联系电话：{{ itemTab3.phoneS }}
                </mu-card-text>
            </div>
        </mu-card>
      </div>
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

                contract: [
                  
                ]
            }
        },
        methods: {
            handleTabChange(val) {
                    this.activeTab = val
                },

        },
        mounted() {
          let _this = this
          Axios.post(_this.xyIp+'/api/home_page/contract_list')
          .then(function (response) {
            let data = response.data
            if(data.errno === 0) {
              for(let i =0;i < data.data.length;i++) {
                _this.contract.push({
                  clickShow: false,
                  title: '',
                  subTitle: '',
                  number: '',
                  product: '',
                  moneyP: '',
                  done: '',
                  give: '',
                  over: '',
                  discount: '',
                  moneyC: '',
                  anarchy: '',
                  tips: '',
                  saler: '',
                  phoneS: '',
                })
                _this.contract[i].title = data.data[i].store_name
                _this.contract[i].subTitle = data.data[i].create_date
                _this.contract[i].number = data.data[i].contract_id
                _this.contract[i].product = data.data[i].class_name
                _this.contract[i].moneyP = data.data[i].product_price
                _this.contract[i].done = data.data[i].complete_hour
                _this.contract[i].give = data.data[i].free_hour
                _this.contract[i].over = data.data[i].rest_hour
                _this.contract[i].discount = data.data[i].tempDiscount
                _this.contract[i].moneyC = data.data[i].price
                _this.contract[i].anarchy = data.data[i].tempStatus
                _this.contract[i].tips = data.data[i].memo
                _this.contract[i].saler = data.data[i].staff_name
                _this.contract[i].phoneS = data.data[i].staff_phone

              }
            }else {
              console.log(data.errmsg);
            }

          })
          .catch(function (error) {
            console.log(error);
          });

        }
        // contract: [
        //   {
        //     clickShow: false,
        //     title: '鹿特丹',
        //     subTitle: '2016-12-12',
        //     number: '535322753',
        //     product: '鲨鱼新年课程套餐',
        //     moneyP: '4000',
        //     done: '5',
        //     give: '3',
        //     over: '37',
        //     discount: '95%',
        //     moneyC: '3500',
        //     anarchy: '进行中',
        //     tips: '新店开业活动95折',
        //     saler: '李晓路',
        //     phoneS: '13344336665',
        //   }
}

</script>
