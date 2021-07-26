<template>
  <b-navbar type="white" variant="white">
    <b-container fluid="md">
      <b-navbar-brand href="/"
        ><img src="@/assets/img/logo.jpeg" alt="logo of the AlgaeCal"
      /></b-navbar-brand>
      <b-navbar-nav class="ml-auto" right>
        <b-nav-item href="/videos">Videos</b-nav-item>
        <b-nav-item href="/login">Logout</b-nav-item>
      </b-navbar-nav>
    </b-container>
  </b-navbar>
</template>

<style scoped>
.navbar-brand > img {
  height: auto;
  padding: 15px;
  width: 80px;
}
</style>