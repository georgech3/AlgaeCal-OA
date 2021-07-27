<template>
  <b-navbar>
    <b-container fluid>
      <b-navbar-brand href="/">
        <Logo />
        <!-- <img src="@/assets/img/logo.jpeg" alt="logo of the AlgaeCal"/> -->
      </b-navbar-brand>
      <b-navbar-nav class="ml-auto" right>
        <b-nav-item href="/videos">VIDEOS</b-nav-item>
        <b-nav-item @click="logout" href="/login">LOGOUT</b-nav-item>
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
  data() {
    return {
      login: false,
    };
  },
  methods: {
    logout() {
      if (this.$store.state.user.login_status == true) {
        this.$store.commit("user/logout");
        this.$store.commit("video/claerData");
        this.$router.push("/login");
        // info the user that he logouted
        this.$bvToast.toast(`Goodbye`, {
          title: "Logout Success",
          autoHideDelay: 800,
          variant: "success",
        });
      } else {
        // info the user that he logouted
        this.$bvToast.toast(`You haven't login`, {
          title: "Please login first",
          autoHideDelay: 800,
          variant: "danger",
        });
      }
    },
  },
};
</script>

<style scoped>
.navbar {
  width: 80%;
  margin: 0 auto;
}

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

li.nav-item:hover {
  /* TODO: Improve with SCSS */
  -webkit-box-shadow: inset 0 20px #013b30;
  -moz-box-shadow: inset 0 20px #013b30;
  box-shadow: inset 0 -5px #013b30;
}
</style>