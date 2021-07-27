<template>
  <div class="container-fluid">
    <b-row>
      <b-col cols="12" md="4" sm="6">
        <b-form-select v-model="selected" :options="options"></b-form-select
      ></b-col>
    </b-row>
    <b-row>
      <b-col cols="12" md="4" sm="6">1 of 3</b-col>
      <b-col cols="12" md="4" sm="6">2 of 3</b-col>
      <b-col cols="12" md="4" sm="6">3 of 3</b-col>
    </b-row>
  </div>
</template>

<script>
import VideoSummary from "~/components/VideoSummary.vue";

export default {
  components: {
    VideoSummary,
  },
  data() {
    return {};
  },
  methods: {},
};
</script>

<style>
.container-fluid {
  width: 80%;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.container {
  margin: 0 auto;
  min-height: 90vh;
  width: 80%;
  display: flex;
}
.row {
  margin: 40px 0;
}
</style>
