<!-- Slider.vue -->
<template>
  <div class="d-flex mb-3 align-items-center">
    <i class="fa-solid fa-earth-americas text-primary rotating-icon me-2"></i>
    <h2 class="fs-6 fw-bold">{{ heading }}</h2>
  </div>

  <div class="row">
    <div class="col-auto px-1" v-for="(item, index) in items" :key="index">
      <div class="card border-0 bg-transparent rounded-3" style="width: 6.77rem;">
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
      ],
    };
  },
};
</script>

<style scoped>
  .rotating-icon {
    animation: rotate 3s linear infinite; /* Rotate the icon */
    display: inline-block; /* Ensure the icon stays in place */
    transform-origin: 50% 50%; /* Ensure the rotation happens from the center */
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