export default function({ store, redirect }) {
    if (store.state.user.login_status == true) {
        return redirect('/videos');
    };
    //     extendRoutes(routes, resolve) {
    //         routes.push({
    //             path: '*',
    //             component: resolve(__dirname, 'pages/login.vue')
    //         })
    //     }
}