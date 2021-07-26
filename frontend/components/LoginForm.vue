<template>
  <b-form @submit="onSubmitWithCheck">
    <!-- TODO: -->
    <b-form-group id="input-group-1" label="Full Name:" label-for="input-1">
      <b-form-input
        id="input-1"
        v-model="form.fullname"
        type="text"
        required
        placeholder="Enter Your Fullname Please"
      ></b-form-input>

      <b-alert variant="danger" :show="form.errorMessages != ''">
        {{ form.errorMessages }}
      </b-alert>
    </b-form-group>
    <b-button type="submit" variant="algae-color rounded-pill">Login</b-button>
  </b-form>
</template>


<script>
export default {
  name: "field",
  data() {
    return {
      form: {
        fullname: "",
        errorMessages: "",
      },
    };
  },
  methods: {
    async onSubmitWithCheck(e) {
      e.preventDefault();
      e.stopPropagation();
      let fullname = this.form.fullname;
      this.$axios({
        method: "get",
        withCredentials: false,
        crossDomain: true,
        url: "http://localhost:8080/users/" + fullname,
        headers: {
          "Content-Type": "application/json",
        },
      })
        .then((res) => {
          console.log(res);
          this.form.errorMessages = "";
        })
        .catch((err) => {
          if (err.response.statusText == "Not Found") {
            console.log("not found");
            this.form.errorMessages = "Sorry, that username is not found";
          }
        });
    },
  },
};
</script>

<style scoped>
form {
  font-family: "roboto", Arial, Helvetica, sans-serif;
}
.btn-algae-color {
  width: 100px;
  background-color: #35495e;
  color: white;
}
.alert-danger {
  margin: 20px 0;
}
</style>
