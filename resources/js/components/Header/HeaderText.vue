<template>
  <div class="header-text">
    <!-- Replacing the text with an image and adding animation -->
    <img
      src="https://stag.bitsky.bet/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flanding-banner-text-img.72b73604.png&w=3840&q=75"
      alt="Win Big in Bitsky"
      class="header-image"
    />
    <button @click="playNow" class="btn btn-primary mt-3">Play Now</button>
  </div>
</template>

<script>
export default {
  methods: {
    playNow() {
      alert('Navigating to game!');
    },
  },
};
</script>

<style scoped>
.header-text {
  position: absolute;
  left: 8%;
  
  /* bottom: 20%; */
  color: #fff;
  text-align: left;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  /* gap: 20px; Space between image and button */
}

.header-image {
  width: 40vw; /* Covers majority of the width on the right */
  max-width: 800px; /* Ensure it doesn’t exceed a reasonable size */
  height: auto;
  animation: pulseEffect 2s infinite alternate; /* Animation for pulsing effect */
  filter: drop-shadow(0px 0px 15px rgba(255, 255, 255, 0.8)); /* Glow effect */
}

/* Pulsing effect animation */
@keyframes pulseEffect {
  0% {
    transform: scale(1);
    filter: brightness(1) drop-shadow(0px 0px 10px rgba(255, 255, 255, 0.6));
  }
  100% {
    transform: scale(1.05);
    filter: brightness(1.2) drop-shadow(0px 0px 20px rgba(255, 255, 255, 1));
  }
}
button {
    max-width: var(--primary-btn-left-max-width);
    background: linear-gradient(var(--primaryLight-1000), var(--primaryDark-1000));
    aspect-ratio: var(--primary-btn-left-aspect-ratio);
    -webkit-mask-image: var(--primary-btn-left-mask-image);
    mask-image: var(--primary-btn-left-mask-image);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    padding: 1rem 1.25rem;
    position: relative;
    transition: all .2s ease-in-out;

  background-color: #ff00ff;
  color: #fff;
  margin-left: 200px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #ff66ff;
}
</style>
