require('./bootstrap');

window.Vue = require('vue');

Vue.prototype.$http = window.axios;

// Vue.component('sample-component', require('./components/SampleComponent.vue').default);

const app = new Vue({
	el: '#app',
});
