<template>
  <div class="container-fluid">
  <div class="container text-white py-6 rounded w-auto p-3">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
     
      <div class="d-flex align-items-center justify-content-center px-3 py-2 rounded rounded-pill">
        <i class="bi bi-suit-spade-fill mr-2"></i>
        <span class="fs-5 fw-bold">Originals</span>
        <img src="/image/chicked.png" alt="" class="ms-2 leg w-10">
      </div>
      <div class="slider-button-right">
       <!-- Navigation Buttons -->
       <button class="slider-button prev mr-2 rounded-start-pill" @click="scrollPrev">
        <i class="bi bi-arrow-left"></i>
      </button>
      <button class="slider-button next rounded-end-circle" @click="scrollNext">
        <i class="bi bi-arrow-right"></i>
      </button>
    </div>
    </div>

    <!-- Slider -->
    <div class="slider-container">
     
      <div class="slider-wrapper" ref="sliderContainer">
        <div class="slider-row">
          <!-- Top Row -->
          <div v-for="(image, index) in slides" :key="'top-' + index" class="slider-item">
            <img :src="image.image" :alt="image.alt" class="rounded" />
          </div>
        </div>
        <div class="slider-row">
          <!-- Bottom Row -->
          <div v-for="(image, index) in slides2" :key="'bottom-' + index" class="slider-item">
            <img :src="image.image" :alt="image.alt" class="rounded" />
          </div>
        </div>
      </div>
     
    </div>
  </div>









  




   <!-- Button to Toggle Offcanvas -->
   <button
  class="btn position-fixed bottom-0 end-0 m-3 rounded-circle"
  type="button"
  data-bs-toggle="offcanvas"
  data-bs-target="#offcanvasRight"
  aria-controls="offcanvasRight"
>
<i class="bi bi-chevron-double-right"></i>
</button>


      <section id="expandedSection" class="expanded-section">

    <!-- Offcanvas -->
    <div
      class="offcanvas offcanvas-end"
      tabindex="-1"
      id="offcanvasRight"
      aria-labelledby="offcanvasRightLabel"
    >
      
      
      <section id="chatPage" class="chat-page container">
      <!-- Chat Page Section -->
      <div id="chat_nav" class="d-flex justify-content-between align-items-center p-3  text-white">
        <!-- Chat Navigation Bar -->
        <div class="d-flex align-items-center">
          <!-- Country Selection -->
          <div class="dropdown">
            <img src="/image/en.png" alt class="mr-2">
           <p>EN</p>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <!-- Icons -->
          <button class="btn okay  me-1"><i class="fa-solid fa-toolbox"></i></button>
          <button class="btn okay  me-1"><i class="bi bi-cloud-drizzle-fill"></i></button>
          <button class="btn okay "><i class="bi bi-bell-fill"></i></button>
          <button class="btn okay "><i class="bi bi-card-list"></i></button>
          <button class="btn okay "><i class="bi bi-people-fill"></i></button>
        </div>
      </div>
      <div class="chat">

      <!-- Chat Tag Section -->
      <div class="p-2 ">
        <div id="chat_tag" class="d-flex">
          <span class="badge bg-primary me-2">EN</span>
        </div>
      </div>

      <!-- Chat Container -->
      <div id="chat_container" class="chat-main p-3" style="height: 300px; overflow-y: auto;">
        <!-- Chat Messages -->
        <div class="mb-3">
          <div class="text-muted">User1: Hello!</div>
          <div class="text-muted">User2: Hi there!</div>
        </div>
      </div>
      </div>

      <!-- Chat Send Section -->
      <div id="chat_send" class="p-3 bg-secondary text-white">
        <div class="input-group">
          <textarea
            class="form-control"
            placeholder="Type your message"
            rows="1"
            style="resize: none;"
          ></textarea>
          <button class="btn btn-primary ms-2">Send</button>
        </div>
        <div class="mt-2 d-flex justify-content-between">
          <div>
            <span class="badge bg-success">Online: 1208</span>
          </div>
          <div>
            <button class="btn   btn-sm me-2">GIFs</button>
            <button class="btn   btn-sm">Simple Mode</button>
          </div>
        </div>
      </div>
      
    </section>
    </div>

  </section>

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
      const sliderContainer = this.$refs.sliderContainer;
      sliderContainer.scrollBy({
        left: -sliderContainer.offsetWidth / 2,
        behavior: "smooth",
      });
    },
    scrollNext() {
      const sliderContainer = this.$refs.sliderContainer;
      sliderContainer.scrollBy({
        left: sliderContainer.offsetWidth / 2,
        behavior: "smooth",
      });
    },
    toggleChat() {
      const chatPage = this.$refs.chatPage;
      const expandedSection = this.$refs.expandedSection;

      chatPage.classList.toggle("hidden");
      if (
        expandedSection.style.display === "block" ||
        expandedSection.style.display === ""
      ) {
        expandedSection.style.display = "none";
      } else {
        expandedSection.style.display = "block";
      }
    },
  },
};
</script>




<style>
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
button.btn.position-fixed.bottom-0.end-0.m-3.rounded-circle {
  background: #001434;
    color: #ffffff;
    font-size: x-large;
    z-index: 999;
}
div#chat_nav {
    background: #0b1d41;
    width: 100%;
}
button.btn.okay {
    color: white;
}
.chat {
    min-height: 200px !important;
    background: linear-gradient(rgba(11, 29, 65, 0.7), /* Black gradient with 70% opacity */ rgba(11, 29, 65, 0.7)), url(/image/chatroom.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: #fff;
    height: 450px;
    min-height: 100vh;
}

.chat-page.container{
  padding: 0px
}
</style>


