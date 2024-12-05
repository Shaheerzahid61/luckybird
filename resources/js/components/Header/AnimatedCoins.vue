<template>
    <div class="coin" v-for="n in 5" :key="n" :class="`coin${n}`">
      <img src="https://stag.bitsky.bet/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flanding-crypto-coin-01.a2713125.png&w=3840&q=75" alt="Bitcoin Icon" />
    </div>
  </template>
  
  <script>
  export default {
    mounted() {
      this.animateCoins();
    },
    methods: {
      animateCoins() {
        // You can add more complex animations here or use CSS animations
      },
    },
  };
  </script>
  
  <style scoped>
.coin {
  position: absolute;
  animation: float 5s infinite ease-in-out;
  filter: blur(3px); /* Adjust the blur level as desired */
}

.coin1 {
  top: 5%;
  left: 53%;
  width: 6%;
  animation-delay: 0s;
  filter: blur(1px); /* Optional: specific blur value for each coin */
}

.coin2 {
  top: 40%;
  left: 50%;
  width: 2%;
  animation-delay: 1s;
  filter: blur(2px);
}

.coin3 {
  top: 70%;
  left: 47%;
  width: 8%;
  animation-delay: 2s;
  filter: blur(1px);
}

.coin4 {
  top: 50%;
  left: 85%;
  width: 4%;
  animation-delay: 3s;
  filter: blur(1.5px);
}

.coin5 {
  top: 30%;
  left: 80%;
  width: 3%;
  animation-delay: 4s;
  filter: blur(2.5px);
}

@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}
</style>
  