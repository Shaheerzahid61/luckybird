<template>
  <footer class="footer">
    <div style="margin-left:20%;">
      <div class="row">
        <!-- Logo and Download Section -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="logo-section">
            <div style="display:flex;gap:5%;align-items:center">
            <img
              src="https://stag.bitsky.bet/_next/image?url=https%3A%2F%2Fbitsky-stag-storage.s3.us-east-1.amazonaws.com%2Fassets%2FapplicationSettings%2Fapplication-settings%2Flogo.png&w=3840&q=75"
              alt="Bitsky Logo"
              class="footer-logo mb-2"
            />
            <h5 class="text-white download-title">Download APK</h5>
            <div class="download-icon text-center mb-3">
              <i class="bi bi-cloud-arrow-down-fill text-white"></i>
            </div>
          </div>
            
            <p class="footer-description">
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
            </p>
          </div>
        </div>

        <!-- Links Section -->
        <div class="col-lg-2 col-md-6 mb-4">
          <h5 class="text-white section-title">Blogs</h5>
          <ul class="list-unstyled">
            <li v-for="(item, index) in blogs" :key="index">
              <a href="#" class="text-muted">{{ item }}</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mb-4">
          <h5 class="text-white section-title">Bonus</h5>
          <ul class="list-unstyled">
            <li v-for="(item, index) in bonuses" :key="index">
              <a href="#" class="text-muted">{{ item }}</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mb-4">
          <h5 class="text-white section-title">Pages</h5>
          <ul class="list-unstyled">
            <li v-for="(item, index) in pages" :key="index">
              <a :href="item.link" class="text-muted">{{ item.text }}</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 mb-4">
          <h5 class="text-white section-title">Contact</h5>
          <ul class="list-unstyled">
            <li><span class="text-muted">Support:</span> <a href="mailto:Admin@Bitsky.In" class="text-muted">Admin@Bitsky.In</a></li>
            <li><span class="text-muted">Partners:</span> <a href="mailto:Admin@Partner.Com" class="text-muted">Admin@Partner.Com</a></li>
            <li><span class="text-muted">Legal:</span> <a href="mailto:Admin@Legal.Com" class="text-muted">Admin@Legal.Com</a></li>
            <li><span class="text-muted">Application Name:</span> <a href="#" class="text-muted">BitSky</a></li>
          </ul>
          <div class="d-flex mt-2 social-icons">
            <a href="#" class="text-muted me-3"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-muted"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Footer Text -->
    <div class="container text-center mt-3">
      <p class="text-muted">2024 Bitsky.bet, All Rights Reserved</p>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      blogs: [
        "How Can I Add Funds To My Bitsky Account?",
        "Gameroom Online 777",
        "American Roulette Wheel",
        "Baccarat Professional Series",
        "Aviator Casino Online",
        "Paradise Games Casino",
        "Ultra Panda",
        "Bonus Poker",
        "Mafia",
        "Milky Way Casino",
        "Vegas Sweeps",
        "BlackJack",
        "Rocketman",
        "Piggy Gold"
      ],
      bonuses: ["Bonus Item 1", "Bonus Item 2", "Bonus Item 3"],
      pages: [
        { text: "Blogs", link: "#" },
        { text: "Privacy Policy", link: "#" },
        { text: "Responsible Gambling", link: "#" },
        { text: "Vegas Sweeps", link: "#" },
        { text: "Bonus Terms EN", link: "#" },
        { text: "FAQ", link: "#" },
        { text: "Player", link: "#" },
        { text: "General Terms & Conditions", link: "#" },
        { text: "TestQr", link: "#" },
        { text: "English", link: "#" },
      ],
    };
  },
};
</script>

<style scoped>
a {
  text-decoration: none;
}
.footer {
  position: relative;
    background: url(https://stag.bitsky.bet/_next/static/media/landing-bg-img.a1eff019.png) no-repeat center center / cover, /* Overlay background image */ linear-gradient(to bottom, rgba(255, 0, 119, 0), rgb(191 2 184 / 0%)), /* Gradient overlay */ url(https://stag.bitsky.bet/_next/static/media/footer-bg-mask.b6e1f703.svg) no-repeat center center / cover, /* Main background image */ #fff;
    background-size: cover;
    color: #aa77a8;
    z-index: 2;
    overflow: hidden;
    padding-top: 100px;

}

.footer-logo {
  max-width: 100px;
}

.download-title {
  font-size: 1.2em;
  font-weight: bold;
  color: #aa77a8;
}

.download-icon {
  background-color: #ff0077;
  color: #aa77a8;
  border-radius: 50%;
  padding: 10px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8em;
}

.footer-description {
  color: #aa77a8;;
  font-size: 0.9em;
}

.section-title {
  font-size: 1.1em;
  font-weight: bold;
  color: #aa77a8;
}

.text-muted {
  color: #aa77a8 !important;
}

.list-unstyled a:hover {
  color: #aa77a8;
  text-decoration: underline;
}

.social-icons a {
  color: #aa77a8;
}

.social-icons a:hover {
  color: #aa77a8;
}

h5 {
  font-weight: bold;
}

.mt-2 {
  margin-top: 0.5rem;
}

.me-3 {
  margin-right: 1rem;
}
</style>
