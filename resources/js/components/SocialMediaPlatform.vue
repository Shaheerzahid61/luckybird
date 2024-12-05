<template>
  <div class="container social-media-section p-5 rounded my-3">
    <!-- Follow Us Heading and Social Buttons -->
    <div class="d-flex gap-3 align-items-start">
      <!-- Follow Us Text -->
      <h2 class="follow-us-text mb-3 text-white">
        FOLLOW US ON <i class="bi bi-arrow-right ms-2"></i>
      </h2>
      
      <!-- Social Media Buttons -->
      <div class="d-flex gap-3">
        <!-- WhatsApp Button -->
        <a href="https://whatsapp.com" target="_blank" class="btn btn-light social-button d-flex align-items-center gap-2">
          <i class="bi bi-whatsapp icon-whatsapp"></i> Whatsapp
        </a>

        <!-- Instagram Button -->
        <a href="https://instagram.com" target="_blank" class="btn btn-light social-button d-flex align-items-center gap-2">
          <i class="bi bi-instagram icon-instagram"></i> Instagram
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SocialMediaSection",
};
</script>

<style scoped>
.social-media-section {
  background: url('https://stag.bitsky.bet/_next/static/media/landing-content-img-05.4673bd9f.png') no-repeat center center / cover;
  border-radius: 15px;
  color: #ffffff;
  text-align: left;
  min-height: 240px;
}
.d-flex.gap-3.align-items-start {
    margin-top: 83px;
}
.follow-us-text {
  font-size: 2.25rem;
  font-weight: 700;
  line-height: 1.2;
  text-transform: uppercase;
  text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.35);
  margin: 0;
}

.social-button {
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 1.5rem;
  padding: 0.75rem 1.5rem;
  transition: all 0.2s ease-in-out;
}

.social-button:hover {
  background-color: #ffffff;
  transform: translateY(-2px);
}

.icon-whatsapp {
  color: #25d366;
}

.icon-instagram {
  color: #e1306c;
}
</style>
