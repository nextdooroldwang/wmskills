<template lang="html">
  <div class="container">
    <div class="level-left">
      <h3><strong>{{ msg }}</strong></h3>
    </div>
    <div class="level-right">
      <ul>
        <li v-for="item in levelitems" class="level">
          {{ item }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {

    }
  },
  computed: {
    
  },
  mounted () {

  },
  methods: {},
  components: {},
  props: ['msg', 'levelitems','mythis']
}
</script>

<style scoped>
.container {
  width: 100%;
  height: 20px;
  margin-bottom: 20px;
}
.level-left {
  float: left;
}
.level-right {
  float: right;
}
.level {
  float: left;
}
.level:first-child {
  color: #23a197;
  cursor: pointer;
}
.level:first-child:hover {
  color: #aaa;
}
.level+.level:before {
    padding: 0 5px;
    color: #ccc;
    content: var(--separator, "\2044");
}
</style>
