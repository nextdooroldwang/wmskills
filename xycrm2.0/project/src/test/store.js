import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    count: 1000
  },
  getters: {
    comput: state => state.count + 345
  },
  mutations: {
    increment: (state, payload) => state.count += payload.aaa,
    decrement: state => state.count--
  }
})

export default store
