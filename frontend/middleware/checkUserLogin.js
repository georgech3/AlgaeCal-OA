export default function({ store, redirect }) {
    if (store.state.user.login_status == false) {
        return redirect('/login');
    };
    //     extendRoutes(routes, resolve) {
    //         routes.push({
    //             path: '*',
    //             component: resolve(__dirname, 'pages/login.vue')
    //         })
    //     }
}