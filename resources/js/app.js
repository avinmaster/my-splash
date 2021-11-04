import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'
import axios from 'axios'
axios.defaults.baseURL = '/api/'
import api from './api'

import '~/plugins'
import '~/components'

Vue.config.productionTip = false
Vue.prototype.$api = api

/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})

