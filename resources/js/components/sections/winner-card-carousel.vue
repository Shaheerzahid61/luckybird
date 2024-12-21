<template>
  <!-- Heading -->
  <div class="row justify-content-between align-items-center py-2 mb-1">
    <div class="col-auto">
      <div class="d-flex">
        <i v-if="headingIcon" :class="[headingIcon, 'text-primary', 'rotating-icon', 'me-2']"></i>
        <h2 class="fs-6 fw-bold mb-0">{{ heading }}</h2>
      </div>
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
      <div class="card hover-slide-up bg-transparent border-0">
        <!-- Image -->
        <img :src="item.image" :alt="item.name" class="card-img-top" />
        
        <!-- Card Content -->
        <div class="card-body text-center p-0">
          <h5 class="card-title text-muted mb-0 text-truncate">{{ item.name }}</h5>
          <p class="card-text text-success fw-bold  mb-0">{{ item.score }}</p>
        </div>
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
    headingIcon: {
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
        { image: '/image/new/sticky_piggy.webp', name: 'Hidden', score: '5442.00 SC' },
        { image: '/image/new/LuckyLadyMoonMegaways.webp', name: 'Hidden', score: '5906.00 SC' },
        { image: '/image/new/JungleRave.webp', name: 'td1236', score: '10683.50 SC' },
        { image: '/image/new/ChickenRush.webp', name: 'Hidden', score: '5663.78 SC' },
        { image: '/image/new/TrampDay.webp', name: 'Hidden', score: '5397.00 SC' },
        { image: '/image/new/pussnboots.webp', name: 'Hidden', score: '7561.20 SC' },
        { image: '/image/new/BuffaloHoldandWin.webp', name: 'Hidden', score: '8050.49 SC' },
        { image: '/image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
        { image: '/image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
        { image: '/image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
        { image: '/image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
        { image: '/image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
        { image: '/image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
        { image: '/image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
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
.rotating-icon {
  animation: rotate 3s linear infinite; /* Rotate the icon */
  display: inline-block; /* Ensure the icon stays in place */
  transform-origin: 50% 50%; /* Ensure the rotation happens from the center */
  font-size: 18px;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg); /* Start at 0 degrees */
  }
  100% {
    transform: rotate(360deg); /* Rotate to 360 degrees */
  }
}
</style>