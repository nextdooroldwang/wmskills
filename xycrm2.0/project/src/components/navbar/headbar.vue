<template>
  <div class="container">
    <div class="left">

    </div>
    <div class="center">
      <logo></logo>
    </div>
    <div class="right">

    </div>
  </div>
</template>

<script>
import Logo from '../../components/logo/logo'

export default {
  components: {
    Logo
  }
}
</script>

<style scoped>
  .container {
    width: 100%;
    height: 50px;
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    border-bottom: 1px solid #ccc;
    box-shadow: .5px .5px .5px .5px rgb(240,240,240);
    background: #fff;
    z-index: calc(1024 - 1);
  }
  .left {
    flex: 3;
    height: 100%;
  }
  .center {
    flex: 1;
    height: 100%;

  }
  .right {
    flex: 3;
    height: 100%;
  }
</style>
