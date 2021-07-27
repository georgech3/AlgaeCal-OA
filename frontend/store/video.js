export const state = () => ({
    'videoData': {}
})

export const mutations = {
    setData(state, videoData) {
        state.videoData = videoData
    },
    claerData(state) {
        state.videoData = {}
    }
}