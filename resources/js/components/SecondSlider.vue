<template>
    <div class="container-fluid">
      <div class="container text-white py-6 rounded w-auto p-3">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center justify-content-center px-3 py-2 rounded">
            <i class="bi bi-suit-spade-fill mr-2"></i>
            <span class="fs-5 fw-bold">Originals</span>
            <img src="/image/chicked.png" alt="Originals Icon" class="ms-2 leg w-10" />
          </div>
          <!-- Navigation Buttons -->
          <div class="slider-button-right">
            <button class="slider-button prev mr-2" @click="scrollPrev">
              <i class="bi bi-arrow-left"></i>
            </button>
            <button class="slider-button next" @click="scrollNext">
              <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </div>
  
        <!-- Slider -->
        <div class="slider-container">
          <div class="slider-wrapper" ref="sliderContainer">
            <!-- Top Row -->
            <div class="slider-row">
              <div v-for="(image, index) in slides" :key="'top-' + index" class="slider-item">
                <img :src="image.image" :alt="image.alt" class="rounded" />
              </div>
            </div>
            <!-- Bottom Row -->
            <div class="slider-row">
              <div v-for="(image, index) in slides2" :key="'bottom-' + index" class="slider-item">
                <img :src="image.image" :alt="image.alt" class="rounded" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>


<script>
export default {
  data() {
    return {
      slides: [
        { image: "/image/diceClassic.webp", alt: "Dice" },
        { image: "/image/limbo.png", alt: "Limbo" },
        { image: "/image/crash.webp", alt: "Crash" },
        { image: "/image/plinko.webp", alt: "Plinko" },
        { image: "/image/tower.webp", alt: "Tower" },
        { image: "/image/mines.webp", alt: "Mines" },
        { image: "/image/hilo.webp", alt: "Hi-Lo" },
      ],
      slides2: [
        { image: "/image/coinflip.webp", alt: "Coin Flip" },
        { image: "/image/superbird.webp", alt: "Super Bird" },
        { image: "/image/wheel.webp", alt: "Wheel" },
        { image: "/image/luckydice.webp", alt: "Lucky Dice" },
        { image: "/image/blackjack.webp", alt: "Blackjack" },
        { image: "/image/keno.webp", alt: "Keno" },
        { image: "/image/gems.webp", alt: "Gems" },
      ],
    };
  },
  methods: {
    scrollPrev() {
      const container = this.$refs.sliderContainer;
      container.scrollLeft -= container.offsetWidth;
    },
    scrollNext() {
      const container = this.$refs.sliderContainer;
      container.scrollLeft += container.offsetWidth;
    },
  },
};
</script>



<style scoped>
.container {
  position: relative;
  max-width: 100%;
}

.slider-container {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.slider-wrapper {
  display: flex;
  flex-direction: column;
  overflow-x: auto;
  scroll-behavior: smooth;
  gap: 1rem;
  width: 80%;
  padding: 0 1rem;
}

.slider-wrapper::-webkit-scrollbar {
  display: none; /* Hide scrollbar for better aesthetics */
}

.slider-row {
  display: flex;
  flex-direction: row;
  gap: 1rem;
}

.slider-item {
  flex: 0 0 auto;
  text-align: center;
  width: 150px; /* Set width for each image */
}

.slider-item img {
  width: 100%;
  border-radius: 8px;
}

.slider-button-right {
  margin-top: 20px;
}

.slider-button {
  background-color: #001434;
  color: white;
  border: none;
  cursor: pointer;
  padding: 0.5rem 1rem;
  font-size: 1.5rem;
  z-index: 10;
  transition: all 0.3s ease;
  width: 75px;
  border-radius: 8px;
  position: relative;
  overflow: hidden; /* Ensures the glow stays within bounds */
}

.slider-button:hover {
  animation: glow 1s infinite;
}

.slider-button.prev {
  left: 0;
}

.slider-button.next {
  right: 0;
}

/* Keyframes for the glow effect */
@keyframes glow {
  0% {
    box-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
  }
  50% {
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.6), 0 0 40px rgba(255, 255, 255, 0.4);
  }
  100% {
    box-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
  }
}

.d-flex.align-items-center.justify-content-center.px-3.py-2.rounded {
  background: #001434;
}
</style>
