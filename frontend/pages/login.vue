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
</style>
