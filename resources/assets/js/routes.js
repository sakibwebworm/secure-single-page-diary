import VueRouter from 'vue-router';

let routes = [
    {
        path: '/newentry',
        component: require('./view/new')
    },

    {
        path: '/',
        component: require('./view/all')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});