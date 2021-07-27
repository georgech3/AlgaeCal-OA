<template>
  <div class="index_wrapper">
    <b-container>
      <b-row class="justify-content-md-center">
        <b-col cols="12" md="auto">
          <b-card title="User Login">
            <LoginForm />
          </b-card>
        </b-col>
      </b-row>
    </b-container>
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
:root {
  --algae-color-deep: rgba(22, 58, 48, 1);
  --algae-color-light: rgba(12, 113, 87);
}

.index_wrapper {
  padding: 0 auto;
  margin: 0;
  min-height: 95vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: var(--algae-color-deep);
}

.card-title {
  font-family: "Quicksand", "Source Sans Pro", -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  display: block;
  font-weight: 300;
  font-size: 60px;
  padding: 40px;
  color: var(--algae-color-deep);
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
