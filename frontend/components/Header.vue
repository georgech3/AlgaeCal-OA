<template>
  <b-navbar type="white" variant="white">
    <b-container fluid="md">
      <b-navbar-brand href="/">
        <Logo />
        <!-- <img src="@/assets/img/logo.jpeg" alt="logo of the AlgaeCal"/> -->
      </b-navbar-brand>
      <b-navbar-nav class="ml-auto" right>
        <b-nav-item href="/videos">Videos</b-nav-item>
        <b-nav-item href="/login">Logout</b-nav-item>
      </b-navbar-nav>
    </b-container>
  </b-navbar>
</template>

<script>
import Logo from "./Logo.vue";

export default {
  components: {
    Logo,
  },
};
</script>

<style scoped>
.navbar-brand > svg {
  height: auto;
  padding: 15px;
  width: 100px;
}
</style>