<template>

      <!-- Divider -->
      <hr class="border-light" />

      <!-- Media Promotion Section -->
      <div class="blurred-container">
        <div class="content">
      <div class="text-center">
        <h6 class="fw-bold mb-3">Global Partners</h6>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <template v-for="(image, index) in mediaLogos" :key="index">
            <img :src="image.src" :alt="image.alt" class="footer-logo" />
          </template>
        </div>
      </div>
    </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      mediaLogos: [
        { src: "/image/new/bgaming.svg", alt: "bgaming" }, // Updated to SVG
        { src: "/image/new/gameart.svg", alt: "gameart" }, // Updated to SVG
        { src: "/image/new/endorphina.svg", alt: "endorphina" }, // Updated to SVG
        { src: "/image/new/boominggames.svg", alt: "boominggames" }, // Updated to SVG
        { src: "/image/new/3oaks.svg", alt: "3oaks" }, // Updated to SVG
        { src: "/image/new/belatra.svg", alt: "belatra" }, // Updated to SVG
      
      ],
    };
  },
};
</script>

<style scoped>
footer.text-white.py-5 {
  background: #011e41;
}

.footer-logo {
    height: 60px;
    width: 175px;
}
.blurred-container {
  position: relative;
  width: 100%;
  height: 300px;
  background: rgba(0, 31, 65, 0.7); /* Semi-transparent #001f41 */
  -webkit-backdrop-filter: blur(10px); /* Safari and modern browsers */
  backdrop-filter: blur(10px); /* Standard property */
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 10px;
}

.content {
  color: white;
  text-align: center;
  padding: 0px;
  margin-bottom: 70px;
}
</style>