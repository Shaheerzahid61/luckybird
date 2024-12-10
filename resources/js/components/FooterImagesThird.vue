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
      { src: "/image/new/bitcoin.svg", alt: "bitcoin" }, // Updated to SVG
      { src: "/image/new/eth.svg", alt: "eth" }, // Updated to SVG
      { src: "/image/new/dogecoin.svg", alt: "dogecoin" }, // Updated to SVG
      { src: "/image/new/litecoin.svg", alt: "litecoin" }, // Updated to SVG
      { src: "/image/new/bitcoincash.svg", alt: "bitcoincash" }, // Updated to SVG
      { src: "/image/new/aiuwj.svg", alt: "aiuwj" }, // Updated to SVG
      { src: "/image/new/sol.svg", alt: "sol" }, // Updated to SVG
      { src: "/image/new/xrp.svg", alt: "xrp" }, // Updated to SVG
      { src: "/image/new/afwij.svg", alt: "afwij" }, // Updated to SVG
      { src: "/image/new/tron.svg", alt: "tron" }, // Updated to SVG
      { src: "/image/new/safe.svg", alt: "safe" }, // Updated to SVG
      { src: "/image/new/over18.svg", alt: "over18" }, // Updated to SVG
    
    ],
  };
},
};
</script>

<style scoped>
footer.text-white.py-5 {
background: #011e41;
}
.footer-logo{
    height: 60px;
    width: 128px;
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
padding: 107px;
margin-bottom: 70px;
}
</style>