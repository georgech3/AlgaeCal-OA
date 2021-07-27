export const state = () => ({
    'videoData': {}
})

export const mutations = {
    setData(state, videoData) {
        state.videoData = videoData
    },
    clearData(state) {
        state.videoData = {}
    }
}