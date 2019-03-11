require('./bootstrap');
window.Vue = require('vue');

Vue.component('users',require('./components/UserListComponent').default);

const user = new Vue({
    el: '#userList',
});
