var dashboard = Vue.extend({
    template: '#dashboard',
    text : 'Dashboard'
});
var newticket = Vue.extend({
    template: '#newticket',
    text : 'New Ticket'
});

// Create the router
var router = new VueRouter({
    mode: 'hash',
    linkActiveClass : 'active',
    base: window.location.href,
    routes: [
        {path: '/', component: dashboard},
        {path: '/newticket', component: newticket}
    ]
});

var app = new Vue({
    el : '#app',
    router
});