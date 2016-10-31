<style lang="css">
.mypanel {
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 4px;
}
.mypanelhead {
  border-bottom: 1px solid #ddd;
  background: #eff2f7;
  height: 40px;
  color: #333;
  line-height: 40px;
  text-align: center;
}
.mypanelbody {
  padding: 20px;
}
</style>

<template lang="html">
  <div class="mypanel">
    <div class="mypanelhead">
      <slot name="head"></slot>
    </div>
    <div class="mypanelbody">
      <slot name="body"></slot>
    </div>
  </div>
</template>

<script>

export default {
    data() {
            return {}
        },
        computed: {},
        mounted() {},
        methods: {},
        components: {}
}

</script>
