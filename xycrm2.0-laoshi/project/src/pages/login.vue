<template lang="html">
  <div id="container">
    <div class="photo">

    </div>
    <div class="loginInput">
      <mu-text-field label="账号" hintText="请输入手机号码" labelFloat style="width:100%"/><br/>
      <mu-text-field label="密码" hintText="请输入密码" type="password" labelFloat/>
    </div>
    <div class="loginBtn">
      <mu-raised-button label="登陆" class="demo-raised-button" primary />
    </div>
    <!-- <div class="more">
      更多
    </div> -->
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css" scoped>
#container {
  display: flex;
  height: 100vh;
  width: 100vw;
  box-sizing: border-box;
  padding: 16px;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.more {
  position: fixed;
  bottom: 66px;
}
.loginInput {
  width: 80%;
}
.loginBtn {
  width: 80%;
}
.demo-raised-button {
  width: 100%;
  margin-top: 32px;
}
.mu-text-field {
  width: 100%;
}
.photo {
  width: 68px;
  height: 68px;
  border-radius: 50%;
  background-image: url('../assets/img1.png');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
