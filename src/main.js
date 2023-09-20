import Vue from 'vue'
import App from './App.vue'
import router from './router'
import VueLoadScript from "vue-load-script-plus"; 

Vue.use(VueLoadScript)
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
