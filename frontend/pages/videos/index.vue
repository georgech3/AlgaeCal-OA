<template>
  <div class="container-fluid">
    <VideoSummary />
  </div>
</template>

<script>
import VideoSummary from "@/components/VideoSummary.vue";

export default {
  components: {
    VideoSummary,
  },
  middleware: ["checkUserLogin"],
  data() {
    return {};
  },
};
</script>

<style scoped>
.container-fluid {
  width: 80%;
  justify-content: center;
  align-items: center;
  text-align: left;
}
.container {
  margin: 0 auto;
  min-height: 90vh;
  width: 80%;
  display: flex;
}
</style>