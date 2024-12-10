<!-- Slider.vue -->
<template>
    <div class="recent">
   <div class="recent-wins">
    <span class="glowing-dot"></span>
    Recent Big Wins
  </div>
</div>
    <div class="slider-container">
        
      <swiper
        :slides-per-view="10"
        :space-between="5"
        :loop="true"
        :autoplay="{ delay: 2000, disableOnInteraction: false }"
      >
     
        <swiper-slide v-for="(item, index) in items" :key="index">
          <div class="slide">
            <img :src="item.image" :alt="item.name" class="slide-image" />
            <p class="slide-name">{{ item.name }}</p>
            <p class="slide-score">{{ item.score }}</p>
          </div>
        </swiper-slide>
      </swiper>
    </div>
  </template>
  
  <script>
  import { Swiper, SwiperSlide } from 'swiper/vue';
  import 'swiper/swiper-bundle.css';
  
  export default {
    components: {
      Swiper,
      SwiperSlide,
    },
    data() {
      return {
        items: [
          { image: '/image/new/sticky_piggy.webp', name: 'Hidden', score: '5442.00 SC' },
          { image: '/image/new/LuckyLadyMoonMegaways.webp', name: 'Hidden', score: '5906.00 SC' },
          { image: '/image/new/JungleRave.webp', name: 'td1236', score: '10683.50 SC' },
          { image: '/image/new/ChickenRush.webp', name: 'Hidden', score: '5663.78 SC' },
          { image: '/image/new/TrampDay.webp', name: 'Hidden', score: '5397.00 SC' },
          { image: 'image/new/pussnboots.webp', name: 'Hidden', score: '7561.20 SC' },
          { image: 'image/new/BuffaloHoldandWin.webp', name: 'Hidden', score: '8050.49 SC' },
          { image: 'image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
          { image: 'image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
          { image: 'image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
          { image: 'image/new/HowlingforGold.webp', name: 'Notcorn', score: '5375.25 SC' },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
 .recent {
    font-size: 18px;
    font-weight: bold;
    color: white;
    display: flex;
    align-items: center;
    background: #011e41;
}
.recent-wins {
    margin-left: 182px;
}

.glowing-dot {
  width: 10px;
  height: 10px;
  background-color: #50fa7b;
  border-radius: 50%;
  margin-right: 10px;
  box-shadow: 0 0 10px #50fa7b, 0 0 20px #50fa7b, 0 0 30px #50fa7b;
  display: inline-block;
  animation: glow 1.5s infinite ease-in-out;
}

@keyframes glow {
  0%, 100% {
    box-shadow: 0 0 10px #50fa7b, 0 0 20px #50fa7b, 0 0 30px #50fa7b;
  }
  50% {
    box-shadow: 0 0 20px #50fa7b, 0 0 30px #50fa7b, 0 0 40px #50fa7b;
  }
}
  .slider-container {
    width: 100%;
    background-color: #011e41;
    padding: 10px;
    border-radius: 10px;
  }
  
  .slide {
    text-align: center;
  }
  
  .slide-image {
    width: 95px;
    height: 114px;
    border-radius: 10px;
    /* margin: auto; */
  }
  .slide {
    display: flex;
    flex-direction: column;
    align-items: center;
}
  
  .slide-name {
    color: white;
    font-size: 14px;
    margin-top: 5px;
  }
  
  .slide-score {
    color: #50fa7b;
    font-size: 12px;
  }
  .swiper-slide {
    /* flex-shrink: 1 !important; */
    
  }
  .swiper.swiper-initialized.swiper-horizontal.swiper-backface-hidden {
    width: 77%;
}
/* .swiper-slide {
    width: 95px !important;
} */
.swiper.swiper-initialized.swiper-horizontal {
    width: 76%;
}
  </style>
  