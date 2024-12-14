<template>
  <footer class="text-white py-5">

    <div class="container">
      <!-- Top Section -->
      <div class="row mb-4">
        <!-- Casino Section -->
        <div class="col-md-2">
          <h6 class="fw-bold">Casino</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Promotions</a></li>
            <li><a href="#" class="text-white text-decoration-none">Slots</a></li>
            <li><a href="#" class="text-white text-decoration-none">Dice</a></li>
            <li><a href="#" class="text-white text-decoration-none">Limbo</a></li>
            <li><a href="#" class="text-white text-decoration-none">Plinko</a></li>
            <li><a href="#" class="text-white text-decoration-none">Tower</a></li>
          </ul>
        </div>

        <!-- My Account Section -->
        <div class="col-md-2">
          <h6 class="fw-bold">My Account</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">My Info</a></li>
            <li><a href="#" class="text-white text-decoration-none">Setting</a></li>
            <li><a href="#" class="text-white text-decoration-none">Faucet</a></li>
            <li><a href="#" class="text-white text-decoration-none">Transaction</a></li>
            <li><a href="#" class="text-white text-decoration-none">Affiliate</a></li>
          </ul>
        </div>

        <!-- Features Section -->
        <div class="col-md-2">
          <h6 class="fw-bold">Features</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Chest & Card</a></li>
            <li><a href="#" class="text-white text-decoration-none">Task List</a></li>
            <li><a href="#" class="text-white text-decoration-none">Tickets</a></li>
            <li><a href="#" class="text-white text-decoration-none">Vault</a></li>
            <li><a href="#" class="text-white text-decoration-none">Install App</a></li>
          </ul>
        </div>

        <!-- Support Section -->
        <div class="col-md-2">
          <h6 class="fw-bold">Support</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">FAQ</a></li>
            <li><a href="#" class="text-white text-decoration-none">Provably Fair</a></li>
            <li><a href="#" class="text-white text-decoration-none">Vip Rules</a></li>
            <li><a href="#" class="text-white text-decoration-none">Terms of use</a></li>
            <li><a href="#" class="text-white text-decoration-none">Live Support</a></li>
          </ul>
        </div>

        <!-- Community Section -->
        <div class="col-md-4">
          <h6 class="fw-bold">Community</h6>
          <div class="d-flex align-items-center gap-3">
            <a href="#" class="btn btn-primary rounded-pill">
              <i class="bi bi-twitter me-2"></i> Twitter
            </a>
            <a href="#" class="btn btn-info rounded-pill">
              <i class="bi bi-telegram me-2"></i> Telegram
            </a>
          </div>
        </div>
      </div>

      <!-- Divider -->
      <hr class="border-light" />

      <!-- Media Promotion Section -->
      <div class="blurred-container">
        <div class="content">
      <div class="text-center">
        <h6 class="fw-bold mb-3">Media Promotion</h6>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <template v-for="(image, index) in mediaLogos" :key="index">
            <img :src="image.src" :alt="image.alt" class="footer-logo" />
          </template>
        </div>
      </div>
    </div>
    </div>
    </div>
  </footer>
  <FooterImages />

<FooterImagesThird />
<LastFooter />
</template>

<script>
<<<<<<< Updated upstream
=======
// import Footer from './components/Footer.vue';
>>>>>>> Stashed changes
import FooterImages from './FooterImages.vue';
import FooterImagesThird from './FooterImagesThird.vue';
import LastFooter from './LastFooter.vue';
export default {
  data() {
    return {
      mediaLogos: [
        { src: "/image/new/casino.png", alt: "Casino.org" },
        { src: "/image/new/coincu.svg", alt: "Coincu" }, // Updated to SVG
        { src: "/image/new/onlinecasinos.png", alt: "Online Casinos" },
        { src: "/image/new/sportsbook.png", alt: "Sportsbook Review" },
        { src: "/image/new/sweepskings.png", alt: "Sweep Kings" },
        { src: "/image/new/sweepstakes.png", alt: "Sweepstakes" },
        { src: "/image/new/SweepstakeCasino.svg", alt: "SweepstakeCasino" }, // Updated to SVG
        { src: "/image/new/unitedgambling.svg", alt: "unitedgambling" }, // Updated to SVG
        { src: "/image/new/lkh.svg", alt: "lkh" }, // Updated to SVG
        { src: "/image/new/cardschat.svg", alt: "cardschat" }, // Updated to SVG
        { src: "/image/new/hjfv.svg", alt: "hjfv" }, // Updated to SVG
        { src: "/image/new/gambleusa.svg", alt: "gambleusa" }, // Updated to SVG
        { src: "/image/new/sweepstake.svg", alt: "sweepstake" }, // Updated to SVG
        { src: "/image/new/SweepsGods.svg", alt: "SweepsGods" }, // Updated to SVG
        { src: "/image/new/deadspin.svg", alt: "deadspin" }, // Updated to SVG
      ],

    };
  },
  components: {

    FooterImages,
    FooterImagesThird,
    LastFooter,
  },
  name: 'App',
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
  padding: 40px;
}
</style>
