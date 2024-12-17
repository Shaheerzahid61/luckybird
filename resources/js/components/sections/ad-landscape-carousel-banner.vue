<template>
    <!-- Heading -->
    <div class="row justify-content-between align-items-center py-2 mb-1">
      <div class="col-auto">
        <h2 class="fs-5 fw-bold mb-0">{{ heading }}</h2>
      </div>
      <div class="col-auto">
        <!-- Add additional content if needed -->
      </div>
    </div>
  
    <div class="position-relative">
      <!-- Left Arrow -->
      <button
        class="d-inline-flex justify-content-center align-items-center cursor-point rounded-circle me-2 gaming-card-arrows left-arrow"
        @click="moveLeft"
      >
        <i class="fa-solid fa-chevron-left"></i>
      </button>
  
      <!-- Carousel Items -->
      <div class="row g-4" ref="carousel">
        <div
          class="col-sm-6 gaming-card"
          v-for="(item, index) in items"
          :key="index"
          :class="{
            'slide-left': slideDirection === 'left' && index >= currentStart && index < currentStart + visibleCards,
            'slide-right': slideDirection === 'right' && index >= currentStart && index < currentStart + visibleCards,
          }"
          :style="{ display: index >= currentStart && index < currentStart + visibleCards ? 'block' : 'none' }"
        >
          <div class="card">
            <img :src="item.image" :alt="item.alt" class="w-100 card-img" />
          </div>
        </div>
      </div>
  
      <!-- Right Arrow -->
      <button
        class="d-inline-flex justify-content-center align-items-center cursor-point rounded-circle me-2 gaming-card-arrows right-arrow"
        @click="moveRight"
      >
        <i class="fa-solid fa-chevron-right"></i>
      </button>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      heading: {
        type: String,
        required: true,
      },
    },
    data() {
      return {
        items: [
          { image: "assets/images/banner/landscape-ad.webp", alt: "Landscape Banner Ad 1" },
          { image: "assets/images/banner/landscape-ad.webp", alt: "Landscape Banner Ad 2" },
          { image: "assets/images/banner/landscape-ad.webp", alt: "Landscape Banner Ad 3" },
          { image: "assets/images/banner/landscape-ad.webp", alt: "Landscape Banner Ad 4" },
        ],
        visibleCards: 1, // Default to showing 1 card at a time
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
            // Ensure that visibleCards is never 0
            this.visibleCards = Math.max(Math.floor(rowWidth / cardWidth), 1);
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
  /* Arrow Styling */
  .gaming-card-arrows {
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 50%;
    z-index: 999;
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