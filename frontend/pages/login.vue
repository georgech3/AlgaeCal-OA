<template>
  <div class="container">
    <div>
      <b-card title="User Login">
        <LoginForm />
      </b-card>
    </div>
  </div>
</template>

<script>
import LoginForm from "~/components/LoginForm.vue";

export default {
  components: {
    LoginForm,
  },
};
</script>

<style>
.container {
  margin: 0 auto;
  min-height: 90vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background: rgba(22, 58, 48, 1);
}

.card-title {
  font-family: "Quicksand", "Source Sans Pro", -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  display: block;
  font-weight: 300;
  font-size: 60px;
  padding: 40px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}
</style>
