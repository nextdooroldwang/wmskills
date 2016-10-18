<template lang="html">
  <div class="container" @click="router">
    我是footer组件
  </div>
</template>

<script>
export default {
  data () {
    return {
    }
  },
  computed: {},
  ready () {},
  attached () {},
  methods: {
    router: function () {
      // this.$router.router.go({ path: '/level' })
    }
  },
  components: {}
}
</script>

<style scoped>
  .container {
    align-items: center;
    justify-content: center;
  }
</style>
