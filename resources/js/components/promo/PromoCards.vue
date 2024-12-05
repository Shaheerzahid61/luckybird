<template>
  <section class="user-promo">
    <div class="promo-card row">
      <div class="promo-content col-md-6">
        <!-- You can place an image or additional content here if needed -->
      </div>
      <div class="promo-content col-md-6 d-flex flex-column align-items-center justify-content-center text-center">
        <h3>Log In to Your Next Big Win!</h3>
        <p>Unlock a universe of top-tier casino games and exclusive off-market adventures.</p>
        <button class="btn btn-primary mt-3" @click="login">Login</button>
      </div>

    </div>
  </section>
</template>

<script>
export default {
  methods: {
    login() {
      alert('Navigating to login!');
    },
  },
};
</script>

<style scoped>
.user-promo {
  padding: 40px;
  display: flex;
  justify-content: center;
}

.promo-card {
  max-width: 800px;
  width: 100%;
  height: 450px;
  background: url('https://stag.bitsky.bet/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flanding-content-img-01.4cd38604.png&w=3840&q=75') no-repeat center center;
  background-size: contain;
  overflow: hidden;
  color: #ffffff;
  padding: 20px;
  display: flex;
  align-items: center;
}

.promo-content {
  text-align: center;
}

.promo-content h3 {
  font-family: 'Arial Black', sans-serif;
  font-size: 24px;
  color: #fff;
}

.promo-content p {
  font-size: 16px;
  color: #e0e0e0;
}




</style>
