<template>
  <!-- Heading -->
  <div class="row justify-content-between align-items-center py-2 mb-1">
    <div class="col-auto">
      <h2 class="fs-5 fw-bold mb-0">{{ heading }}</h2>
    </div>
    <div class="col-auto">
      <!-- Left Arrow -->
      <button
        class="d-inline-flex justify-content-center align-items-center cursor-point rounded-circle me-2 gaming-card-arrows"
        @click="moveLeft"
      >
        <i class="fa-solid fa-chevron-left"></i>
      </button>
      <!-- Right Arrow -->
      <button
        class="d-inline-flex justify-content-center align-items-center cursor-point rounded-circle me-2 gaming-card-arrows"
        @click="moveRight"
      >
        <i class="fa-solid fa-chevron-right"></i>
      </button>
      <a v-if="url" :href="url" class="link-primary text-decoration-underline">View All</a>
    </div>
  </div>

  <!-- Carousel Items -->
  <div class="row g-4" ref="carousel">
    <div
      class="col-4 col-sm-3 col-lg-2 gaming-card"
      v-for="(item, index) in items"
      :key="index"
      :class="{
        'slide-left': slideDirection === 'left' && index >= currentStart && index < currentStart + visibleCards,
        'slide-right': slideDirection === 'right' && index >= currentStart && index < currentStart + visibleCards,
      }"
      :style="{ display: index >= currentStart && index < currentStart + visibleCards ? 'block' : 'none' }"
    >
      <div class="card hover-slide-up">
        <img :src="item.image" :alt="item.alt" class="w-100 card-img" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    heading: {
      type: String,
      required: true,
    },
    url: {
      type: String,
      default: null,
    },
  },
  data() {
    return {
      items: [
        { image: "assets/images/gaming/1.webp", alt: "Gaming 1" },
        { image: "assets/images/gaming/2.webp", alt: "Gaming 2" },
        { image: "assets/images/gaming/3.webp", alt: "Gaming 3" },
        { image: "assets/images/gaming/4.webp", alt: "Gaming 4" },
        { image: "assets/images/gaming/5.webp", alt: "Gaming 5" },
        { image: "assets/images/gaming/6.webp", alt: "Gaming 6" },
        { image: "assets/images/gaming/7.webp", alt: "Gaming 7" },
        { image: "assets/images/gaming/8.webp", alt: "Gaming 8" },
        { image: "assets/images/gaming/9.webp", alt: "Gaming 9" },
        { image: "assets/images/gaming/10.webp", alt: "Gaming 10" },
      ],
      visibleCards: 0, // Tracks visible card count
      currentStart: 0, // Starting index of visible cards
      slideInterval: null, // Interval ID for automatic sliding
      slideDirection: "", // Tracks the slide direction for animations
    };
  },
  mounted() {
    this.calculateVisibleCards();
    window.addEventListener("resize", this.calculateVisibleCards);

    // Start automatic sliding
    this.startAutoSlide();
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.calculateVisibleCards);
    this.stopAutoSlide();
  },
  methods: {
    calculateVisibleCards() {
      const carousel = this.$refs.carousel;
      if (carousel) {
        const cards = carousel.querySelectorAll(".gaming-card");
        cards.forEach((card) => (card.style.display = "block"));

        const cardWidth = cards[0]?.offsetWidth || 0;
        const rowWidth = carousel.offsetWidth;

        if (cardWidth > 0) {
          this.visibleCards = Math.floor(rowWidth / cardWidth);
        }
      }
    },
    moveLeft() {
      if (this.currentStart > 0) {
        this.slideDirection = "left";
        this.currentStart--;
        this.resetAutoSlide();

        setTimeout(() => {
          this.slideDirection = "";
        }, 500); // Reset animation direction
      }
    },
    moveRight() {
      if (this.currentStart + this.visibleCards < this.items.length) {
        this.slideDirection = "right";
        this.currentStart++;
      } else {
        this.currentStart = 0; // Reset to start if at the end
      }
      this.resetAutoSlide();

      setTimeout(() => {
        this.slideDirection = "";
      }, 500); // Reset animation direction
    },
    startAutoSlide() {
      this.slideInterval = setInterval(() => {
        this.moveRight();
      }, 5000);
    },
    stopAutoSlide() {
      if (this.slideInterval) {
        clearInterval(this.slideInterval);
        this.slideInterval = null;
      }
    },
    resetAutoSlide() {
      this.stopAutoSlide();
      this.startAutoSlide();
    },
  },
};
</script>

<style scoped>
/* Card container styling */
.card.hover-slide-up {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.card.hover-slide-up:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

/* Arrow Styling */
.gaming-card-arrows {
  background-color: rgba(0, 0, 0, 0.5);
  height: 35px;
  width: 35px;
}
.gaming-card-arrows:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Slide Left Animation */
.slide-left {
  animation: slideLeft 0.5s ease-out forwards;
}

@keyframes slideLeft {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(0);
  }
}

/* Slide Right Animation */
.slide-right {
  animation: slideRight 0.5s ease-out forwards;
}

@keyframes slideRight {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(0);
  }
}
</style>