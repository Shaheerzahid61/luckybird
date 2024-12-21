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
  <div class="carousel-container" ref="carousel"
       :data-visible-xs="dafaultCarousel" :data-visible-sm="smCarousel" :data-visible-md="mdCarousel" :data-visible-lg="lgCarousel" :data-visible-xl="xlCarousel">
    <div
      class="gaming-card"
      v-for="(item, index) in items"
      :key="index"
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
        { image: "assets/images/gaming/11.webp", alt: "Gaming 11" },
        { image: "assets/images/gaming/12.webp", alt: "Gaming 12" },
        { image: "assets/images/gaming/13.webp", alt: "Gaming 13" },
        { image: "assets/images/gaming/14.webp", alt: "Gaming 14" },
        { image: "assets/images/gaming/15.webp", alt: "Gaming 15" },
        { image: "assets/images/gaming/16.webp", alt: "Gaming 16" },
        { image: "assets/images/gaming/17.webp", alt: "Gaming 17" },
        { image: "assets/images/gaming/18.webp", alt: "Gaming 18" },
        { image: "assets/images/gaming/19.webp", alt: "Gaming 19" },
        { image: "assets/images/gaming/20.webp", alt: "Gaming 20" },
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
/* Card container styling */
.card.hover-slide-up {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.card.hover-slide-up:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

.carousel-container {
  display: flex;
  gap: 1rem; /* Space between cards */
  overflow: hidden; /* Prevent overflow */
}

.gaming-card {
  flex: 1 1 auto; /* Allow cards to grow and shrink */
  max-width: 100%; /* Limit maximum width */
  box-sizing: border-box; /* Include padding and borders in width */
}

/* Responsive breakpoints */
@media (max-width: 768px) {
  .gaming-card {
    flex: 1 1 calc(33.33% - 1rem); /* Show 3 cards per row on smaller screens */
  }
}

@media (max-width: 576px) {
  .gaming-card {
    flex: 1 1 calc(50% - 1rem); /* Show 2 cards per row on extra small screens */
  }
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
</style>