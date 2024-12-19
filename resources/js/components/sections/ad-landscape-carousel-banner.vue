<template>
  <div class="position-relative">
    <!-- Left Arrow -->
    <button
      class="d-inline-flex justify-content-center align-items-center cursor-point rounded-circle me-2 banner-card-arrows left-arrow"
      @click="moveLeft"
    >
      <i class="fa-solid fa-chevron-left"></i>
    </button>

    <!-- Carousel Items -->
    <div class="carousel-container" ref="carousel"
          :data-visible-xs="dafaultCarousel" :data-visible-sm="smCarousel" :data-visible-md="mdCarousel" :data-visible-lg="lgCarousel" :data-visible-xl="xlCarousel">
      <div
        class="banner-card"
        v-for="(item, index) in items"
        :key="index"
        :class="{
          'slide-left': slideDirection === 'left' && index >= currentStart && index < currentStart + visibleCards,
          'slide-right': slideDirection === 'right' && index >= currentStart && index < currentStart + visibleCards,
        }"
        :style="{ display: index >= currentStart && index < currentStart + visibleCards ? 'block' : 'none' }"
      >
        <div class="card bg-transparent border-0">
          <img :src="item.image" :alt="item.alt" class="w-100 card-img" />
        </div>
      </div>
    </div>

    <!-- Right Arrow -->
    <button
      class="d-inline-flex justify-content-center align-items-center cursor-point rounded-circle me-2 banner-card-arrows right-arrow"
      @click="moveRight"
    >
      <i class="fa-solid fa-chevron-right"></i>
    </button>
  </div>
</template>

<script>
export default {
  props: {
    dafaultCarousel: {
      type: String,
      required: true,
    },
    smCarousel: {
      type: String,
      required: true,
    },
    mdCarousel: {
      type: String,
      required: true,
    },
    lgCarousel: {
      type: String,
      required: true,
    },
    xlCarousel: {
      type: String,
      required: true,
    },
    carouselAnimationTime: {
      type: Number, // Ensure this is a number for better handling
      required: true,
    },
  },
  data() {
    return {
      items: [
        { image: "assets/images/banner/ad-carousel-1.png", alt: "Landscape Banner Ad 1" },
        { image: "assets/images/banner/ad-carousel-2.png", alt: "Landscape Banner Ad 2" },
        { image: "assets/images/banner/ad-carousel-3.webp", alt: "Landscape Banner Ad 3" },
        { image: "assets/images/banner/ad-carousel-4.png", alt: "Landscape Banner Ad 4" },
        { image: "assets/images/banner/ad-carousel-5.webp", alt: "Landscape Banner Ad 5" },
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
        const rowWidth = carousel.offsetWidth;

        // Get the number of visible cards based on screen width
        if (window.innerWidth <= 576) {
          this.visibleCards = parseInt(carousel.getAttribute('data-visible-xs')) || 3; // Show 3 cards on xs screens
        } else if (window.innerWidth <= 768) {
          this.visibleCards = parseInt(carousel.getAttribute('data-visible-sm')) || 4; // Show 4 cards on sm screens
        } else if (window.innerWidth <= 992) {
          this.visibleCards = parseInt(carousel.getAttribute('data-visible-md')) || 5; // Show 5 cards on md screens
        } else if (window.innerWidth <= 1200) {
          this.visibleCards = parseInt(carousel.getAttribute('data-visible-lg')) || 7; // Show 7 cards on lg screens
        } else {
          this.visibleCards = parseInt(carousel.getAttribute('data-visible-xl')) || 8; // Show 8 cards on xl screens
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
      }, this.carouselAnimationTime); // Reset animation direction
    },
    startAutoSlide() {
      this.slideInterval = setInterval(() => {
        this.moveRight();
      }, this.carouselAnimationTime);
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

.carousel-container {
  display: flex;
  gap: 1rem; /* Space between cards */
  overflow: hidden; /* Prevent overflow */
}

.banner-card {
  flex: 1 1 auto; /* Allow cards to grow and shrink */
  max-width: 100%; /* Limit maximum width */
  box-sizing: border-box; /* Include padding and borders in width */
}

/* Responsive breakpoints */
@media (max-width: 768px) {
  .banner-card {
    flex: 1 1 calc(33.33% - 1rem); /* Show 3 cards per row on smaller screens */
  }
}

@media (max-width: 576px) {
  .banner-card {
    flex: 1 1 calc(50% - 1rem); /* Show 2 cards per row on extra small screens */
  }
}

.banner-card img {
  height: 250px;
  object-fit: cover;
  object-position: center;
}

.banner-card-arrows {
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 50%;
    z-index: 9;
    transform: translateY(-50%);
    height: 35px;
    width: 35px;
  }
  
  .left-arrow {
    left: 10px; /* Adjust to keep arrow visible */
  }
  
  .right-arrow {
    right: 10px; /* Adjust to keep arrow visible */
  }
.banner-card-arrows:hover {
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