<template>
  <div class="footer-logo-section">
    <img
      src="https://stag.bitsky.bet/_next/image?url=https%3A%2F%2Fbitsky-stag-storage.s3.us-east-1.amazonaws.com%2Fassets%2FapplicationSettings%2Fapplication-settings%2Flogo.png&w=3840&q=75"
      alt="Bitsky Bet Logo"
      class="footer-logo"
    />
    <h3 class="download-title">Download APK</h3>
    <div class="download-icon">
      <i class="icon-download"></i>
    </div>
    <p class="footer-description">
      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    </p>
  </div>
</template>

<script>
export default {
  name: "FooterLogoSection",
};
</script>

<style scoped>
.footer-logo-section {
  text-align: center;
  margin: 20px;
  color: #ffffff;
  font-family: Arial, sans-serif;
  max-width: 250px;
}

.footer-logo {
  max-width: 120px;
  margin-bottom: 10px;
}

.download-title {
  font-size: 18px;
  margin-top: 10px;
  font-weight: bold;
}

.download-icon {
  background-color: #ff0077;
  border-radius: 50%;
  padding: 10px;
  display: inline-block;
  margin: 10px 0;
  color: #ffffff;
}

.footer-description {
  color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
  line-height: 1.5;
}
</style>
