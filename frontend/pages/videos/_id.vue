// video_id.vue
// TODO: change the id from api to video_id

<template>
  <b-container>
    <b-row>
      <b-col><NuxtLink to="/videos">Back</NuxtLink></b-col>
    </b-row>
    <b-row align-h="center">
      <b-col cols="8"><h2>Video Player</h2></b-col>
      <b-col cols="8"
        ><b-img
          src="~/assets/img/thumbnail.png"
          @load="setOverlayHeight"
          alt="image thumbnail"
        />
      </b-col>
      <b-col cols="8"
        ><h2>{{ video_title }}</h2></b-col
      >
      <b-col cols="8"
        ><p>{{ video_description }}</p></b-col
      >
    </b-row>
  </b-container>
</template>

<script>
export default {
  data() {
    return {
      id: 0,
      video_title: "",
      video_description: "",
    };
  },
  // middleware: ["checkUserLogin"],
  async asyncData({ params }) {
    const id = params.id;
    return { id: id };
  },
  created: function () {
    console.log(this.$store.state.video.videoData);
    let curr_video = this.$store.state.video.videoData.filter(
      (video) => video.id == this.id
    );
    // return an array of single object of video information
    this.video_title = curr_video[0].title;
    this.video_description = curr_video[0].description;
  },
};
</script>

<style scoped>
img {
  position: relative;
  width: 100%;
}

h2 {
  margin: 20px 0;
}
</style>