import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import 'materialize-css/dist/js/materialize.min'
import axios from "axios";

Vue.config.productionTip = false

Vue.prototype.$http = axios.create({
    baseURL: 'http://localhost/api'
});

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')

