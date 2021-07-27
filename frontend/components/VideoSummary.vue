<template>
  <div>
    <b-row>
      <!-- Select Option -->
      <b-col cols="12" md="4" sm="6">
        <b-form-select v-model="selected" :options="options"></b-form-select>
      </b-col>
    </b-row>
    <b-row>
      <!-- Video Items-->
      <!-- first three parameter set responsive-->
      <!-- v-for loop for iterating rendering items-->
      <!-- v-show for filtering-->
      <b-col
        cols="12"
        md="4"
        sm="6"
        v-for="(item, index) in videoList"
        :key="index"
        v-show="selected == item.category || selected == 'all'"
      >
        <!-- TODO: Ask the account and pwd of wistia API -->
        <div class="thumbnail_wrapper">
          <b-img
            src="~/assets/img/thumbnail.png"
            @load="setOverlayHeight"
            alt="image thumbnail"
          />
          <!-- setting hover effect -->
          <div class="overlay" :style="{ height: overlayHeight + 'px' }">
            <NuxtLink :to="`/videos/${item.id}`">
              <b-button variant="rounded-pill" class="hover_text"
                >Watch Now</b-button
              >
            </NuxtLink>
          </div>
        </div>
        <h3 style="card-title">{{ item.title }}</h3>
        <p>{{ item.description }}</p>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  name: "VideoSummary",
  data() {
    return {
      videoList: [],
      options: [{ value: "all", text: "Show All Items" }],
      selected: "all",
      overlayHeight: 0,
    };
  },
  created: function () {
    this.$axios({
      method: "get",
      withCredentials: false,
      crossDomain: true,
      url: "/videos",
      headers: { "Content-Type": "application/json" },
    }).then((res) => {
      this.videoList = res.data.data;

      // add select options
      this.videoList.forEach((element) => {
        let curr_category = element.category;
        let curr_category_option = {
          value: curr_category,
          text: curr_category,
        };
        if (curr_category != " ") {
          if (
            this.options.find((option) => option.value == curr_category) ==
            undefined
          ) {
            this.options.push(curr_category_option);
          }
        }

        // save to store
        this.$store.commit("video/setData", res.data.data);
      });
    });
  },
  methods: {
    setOverlayHeight: function (event) {
      let image = event.target;
      this.overlayHeight = image.height;
    },
  },
};
</script>

<style scoped>
.thumbnail_wrapper > img {
  position: relative;
  width: 100%;
  border: solid 15px #013b30;
  outline: #013b30;
}

.thumbnail_wrapper:hover {
  background-color: #013b30;
}

.thumbnail_wrapper:hover > img {
  border: solid 15px rgba(12, 113, 87);
}

.overlay {
  box-sizing: border-box;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  opacity: 0;
  transition: 0.4s ease;
}

.thumbnail_wrapper:hover .overlay {
  opacity: 1;
  content: #35495e;
}

.hover_text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 60%;
  left: 50%;
  background: rgba(12, 113, 87);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.row {
  margin: 40px 0;
}
</style>

