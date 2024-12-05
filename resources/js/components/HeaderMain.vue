<template>
  <header class="d-flex align-items-center p-3 border-bottom">
    <!-- Brand Logo for Desktop -->
    <a href="/" class="brand-logo-box d-none d-md-block">
      <img src="https://bitsky-stag-storage.s3.us-east-1.amazonaws.com/assets/applicationSettings/application-settings/logo.png"
           alt="Brand Logo Image"
           class="img-fluid" />
    </a>

    <!-- Navigation Section -->
    <section class="navigation-section d-flex align-items-center flex-grow-1">
      <!-- Brand Logo for Mobile -->
      <a href="/" class="brand-logo-box d-md-none me-auto">
        <img src="https://bitsky-stag-storage.s3.us-east-1.amazonaws.com/assets/applicationSettings/application-settings/logo.png"
             alt="Brand Logo Image"
             class="img-fluid" />
      </a>

      <!-- Off Market Button -->
      <a href="/off-market" class="off-market-btn d-flex align-items-center ms-3">
        <img src="/_next/static/media/big-win-img.e43e3804.png"
             alt="Big Win"
             class="me-2" />
        <span>Off Market</span>
      </a>

      <!-- Language Menu Button -->
      <div class="ms-auto me-3">
        <button class="btn btn-outline-secondary d-flex align-items-center" @click="toggleLanguageMenu">
          <img src="/_next/static/media/flag-english.3646c81b.png" alt="Flag Image" class="me-2" style="max-width: 20px;" />
          <span>En</span>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="ms-2">
            <path d="M1.9,3.1h16.2c0.7,0,1.4,0.4,1.7,1.1C19.9,4.4,20,4.7,20,5c0,0.4-0.1,0.9-0.4,1.2l-8.1,10c-0.4,0.4-0.9,0.7-1.5,0.7
                      c-0.6,0-1.1-0.3-1.5-0.7l-8.1-10C0,5.6-0.1,4.8,0.2,4.2C0.5,3.5,1.2,3.1,1.9,3.1z"/>
          </svg>
        </button>
      </div>

      <!-- Auth Buttons -->
      <div class="header-auth-btn-box d-flex">
        <button class="btn btn-outline-primary me-2">Login</button>
        <button class="btn btn-primary">Register</button>
      </div>
    </section>
  </header>
</template>

<script>
export default {
  methods: {
    toggleLanguageMenu() {
      // Logic for toggling language menu
    }
  }
};
</script>

<style scoped>
.brand-logo-box img, .off-market-btn img {
  max-width: 40px;
}
.off-market-btn {
  color: #ff0077;
}
</style>
