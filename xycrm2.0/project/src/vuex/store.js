import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
  notes: [],
  activeNote: {},
  show: '',
  c: 4
}

const mutations = {
  // 初始化state
  INIT_STORE (state, data) {
    state.notes = data.notes
    state.activeNote = data.activeNote
    state.show = data.show
    state.c = data.c
  },
  MY_T (state) {
    state.c++
  },
  // 新增笔记
  NEW_NOTE (state) {
    var newNote = {
      id: +new Date(),
      title: '',
      content: '',
      favorite: false
    }
    state.notes.push(newNote)
    state.activeNote = newNote
  },
  // 修改笔记
  EDIT_NOTE (state, note) {
    state.activeNote = note

    for (var i = 0; i < state.notes.length; i++) {
      if (state.notes[i].id === note.id) {
        state.note[i] = note
        break
      }
    }
  },
  // 删除笔记
  DELETE_NOTE (state) {
    state.notes.$remove(state.activeNote)
    state.activeNote = state.notes[0] || {}
  },
  // 切换笔记的收藏与取消收藏
  TOGGLE_FAVORITE (state) {
    state.activeNote.favorite = !state.activeNote.favorite
  },
  // 切换显示数据列表类型： 全部或者收藏
  SET_SHOW_ALL (state, show) {
    state.show = show
      // 切换数据显示，同步更新activeNote
    if (show === 'favorite') {
      state.activeNote = state.notes.filter(note => note.favorite)[0] || {}
    } else {
      state.activeNote = state.notes[0] || {}
    }
  },
  // 设置当前激活的笔记
  SET_ACTIVE_NOTE (state, note) {
    state.activeNote = note
  }
}

export default new Vuex.Store({
  state,
  mutations
})
