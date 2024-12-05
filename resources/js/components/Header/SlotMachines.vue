<template>
  <div class="slot-machine">
    <img
      src="https://stag.bitsky.bet/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flanding-slot-machine-img.fd4eedf9.png&w=3840&q=75"
      alt="Slot Machine"
    />
  </div>
</template>

<style scoped>
.slot-machine[data-v-50d65be8] {
    position: absolute;
    right: 15%;
    bottom: 5%;
    width: 30%;
    height: auto;
    animation: focusPulse-50d65be8 2s infinite alternate;
    filter: drop-shadow(0px 0px 20px rgba(255, 0, 255, 0.8));
}

/* Keyframe animation for pulsing effect */
@keyframes focusPulse {
  0% {
    transform: scale(1);
    filter: brightness(1) drop-shadow(0px 0px 15px rgba(255, 0, 255, 0.6));
  }
  100% {
    transform: scale(1.05);
    filter: brightness(1.2) drop-shadow(0px 0px 25px rgba(255, 0, 255, 1));
  }
}
</style>
