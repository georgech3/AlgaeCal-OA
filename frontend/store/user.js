export const state = () => ({
    'login_status': false,
    'userData': {}
})

export const mutations = {
    login(state, userData) {
        state.login_status = true
        state.userData = userData
    },
    logout(state) {
        state.login_status = false
        state.userData = {}
    }
}