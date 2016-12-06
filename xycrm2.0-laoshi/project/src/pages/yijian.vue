<template lang="html">
  <div class="">
    <p>
      请输入您宝贵的意见，我们会及时改进。
    </p>
    <mu-text-field hintText="多行文本输入，默认 3行，最大6行" multiLine :rows="3" :rowsMax="6"/>
  </div>
</template>

<script>
export default {
  data () {
    return {
      value: '默认文字'
    }
  }
}
</script>

<style lang="css" scoped>
* {
  width: 100%;
}

.mu-text-field {
  width: 100%;
}
</style>
