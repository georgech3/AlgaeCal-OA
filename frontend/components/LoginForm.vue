<template>
  <b-form @submit="onSubmitWithCheck">
    <b-form-group id="input-group-1" label="Full Name:" label-for="input-1">
      <b-form-input
        id="input-1"
        v-model="form.fullname"
        type="text"
        required
        placeholder="Enter fullname"
      ></b-form-input>
    </b-form-group>
    <b-button type="submit" variant="algae-color rounded-pill">Login</b-button>
    <ul>
      <li v-for="(message, index) in errorMessages" :key="index">
        {{ message }}
      </li>
    </ul>
  </b-form>
</template>


<script>
export default {
  name: "field",
  data() {
    return {
      form: {
        fullname: "",
      },
    };
  },
  watch: {
    fieldValue() {
      this.inputEmit();
    },
  },
  methods: {
    onSubmitWithCheck: function (e) {
      console.log("this.email");
    },
  },
};
</script>

<style scoped>
</style>
