<template>
  <b-navbar>
    <b-container fluid="md">
      <b-navbar-brand href="/">
        <Logo />
        <!-- <img src="@/assets/img/logo.jpeg" alt="logo of the AlgaeCal"/> -->
      </b-navbar-brand>
      <b-navbar-nav class="ml-auto" right>
        <b-nav-item href="/videos">VIDEOS</b-nav-item>
        <b-nav-item href="/login">LOGOUT</b-nav-item>
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
  /* parameter from official websites */
  height: 54px;
  width: 156px;
}

.navbar-nav > .nav-item > a.nav-link {
  /* fonts aligned with official websites */
  font-family: "roboto", Arial, Helvetica, sans-serif;
  color: #013b30;
}

li.nav-item {
  /* border-bottom: 5px solid #013b30; */
}

li.nav-item:hover {
  /* TODO: Improve with SCSS */
  -webkit-box-shadow: inset 0 20px #013b30;
  -moz-box-shadow: inset 0 20px #013b30;
  box-shadow: inset 0 -5px #013b30;
}
</style>