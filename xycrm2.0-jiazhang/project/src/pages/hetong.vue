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
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="clickS0">

            </div>
            <mu-card-title title="社区店名称：鹿特丹店" subTitle="2016-11-29" />

            <mu-card-text>
                合同编号：897572222
            </mu-card-text>
            <mu-card-text>
                产品名称：鲨鱼公园科学课
            </mu-card-text>
            <div v-show="clickShow0">


                <mu-card-text>
                    产品价格：4000 ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：3
                        </div>
                        <div class="keshi">
                            赠送课时：5
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：48
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：95%
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：3800 ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：进行中
                </mu-card-text>
                <mu-card-text>
                    备注：新店开业活动折扣9.5折
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：张三
                </mu-card-text>
                <mu-card-text>
                    联系电话：18877654445
                </mu-card-text>
            </div>
        </mu-card>
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="clickS1">

            </div>
            <mu-card-title title="社区店名称：鹿特丹店" subTitle="2016-11-29" />

            <mu-card-text>
                合同编号：897572222
            </mu-card-text>
            <mu-card-text>
                产品名称：鲨鱼公园科学课
            </mu-card-text>
            <div v-show="clickShow1">


                <mu-card-text>
                    产品价格：4000 ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：3
                        </div>
                        <div class="keshi">
                            赠送课时：5
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：48
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：95%
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：3800 ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：进行中
                </mu-card-text>
                <mu-card-text>
                    备注：新店开业活动折扣9.5折
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：张三
                </mu-card-text>
                <mu-card-text>
                    联系电话：18877654445
                </mu-card-text>
            </div>
        </mu-card>
    </div>
    <div v-if="activeTab === 'tab1'">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="clickS2">

            </div>
            <mu-card-title title="社区店名称：鹿特丹店" subTitle="2016-11-29" />

            <mu-card-text>
                合同编号：897572222
            </mu-card-text>
            <mu-card-text>
                产品名称：鲨鱼公园科学课
            </mu-card-text>
            <div v-show="clickShow2">


                <mu-card-text>
                    产品价格：4000 ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：3
                        </div>
                        <div class="keshi">
                            赠送课时：5
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：48
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：95%
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：3800 ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：进行中
                </mu-card-text>
                <mu-card-text>
                    备注：新店开业活动折扣9.5折
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：张三
                </mu-card-text>
                <mu-card-text>
                    联系电话：18877654445
                </mu-card-text>
            </div>
        </mu-card>
    </div>
    <div v-if="activeTab === 'tab2'">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="clickS3">

            </div>
            <mu-card-title title="社区店名称：鹿特丹店" subTitle="2016-11-29" />

            <mu-card-text>
                合同编号：897572222
            </mu-card-text>
            <mu-card-text>
                产品名称：鲨鱼公园科学课
            </mu-card-text>
            <div v-show="clickShow3">


                <mu-card-text>
                    产品价格：4000 ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：3
                        </div>
                        <div class="keshi">
                            赠送课时：5
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：48
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：95%
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：3800 ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：进行中
                </mu-card-text>
                <mu-card-text>
                    备注：新店开业活动折扣9.5折
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：张三
                </mu-card-text>
                <mu-card-text>
                    联系电话：18877654445
                </mu-card-text>
            </div>
        </mu-card>
    </div>
    <div v-if="activeTab === 'tab3'">
        <mu-card>
            <div class="iconmenu">
                <mu-icon-button icon="more_vert" @click="clickS4">

            </div>
            <mu-card-title title="社区店名称：鹿特丹店" subTitle="2016-11-29" />

            <mu-card-text>
                合同编号：897572222
            </mu-card-text>
            <mu-card-text>
                产品名称：鲨鱼公园科学课
            </mu-card-text>
            <div v-show="clickShow4">


                <mu-card-text>
                    产品价格：4000 ￥
                </mu-card-text>
                <mu-card-text>
                    <div class="keshiContainer">
                        <div class="keshi">
                            完成课时：3
                        </div>
                        <div class="keshi">
                            赠送课时：5
                        </div>
                        <div class="keshi" style="color:#23a197">
                            剩余课时：48
                        </div>
                    </div>

                </mu-card-text>
                <mu-card-text>
                    折扣：95%
                </mu-card-text>
                <mu-card-text style="color:red">
                    合同价格：3800 ￥
                </mu-card-text>
                <mu-card-text style="color:#f5a819">
                    合同状态：进行中
                </mu-card-text>
                <mu-card-text>
                    备注：新店开业活动折扣9.5折
                </mu-card-text>
                <mu-card-text>
                    跟进咨询师：张三
                </mu-card-text>
                <mu-card-text>
                    联系电话：18877654445
                </mu-card-text>
            </div>
        </mu-card>
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
                clickShow0: false,
                clickShow1: false,
                clickShow2: false,
                clickShow3: false,
                clickShow4: false,
            }
        },
        methods: {
            handleTabChange(val) {
                    this.activeTab = val
                },
                clickS0() {
                    this.clickShow0 = !this.clickShow0
                },
                clickS1() {
                    this.clickShow1 = !this.clickShow1
                },
                clickS2() {
                    this.clickShow2 = !this.clickShow2
                },
                clickS3() {
                    this.clickShow3 = !this.clickShow3
                },
                clickS4() {
                    this.clickShow4 = !this.clickShow4
                },

        },

}

</script>
