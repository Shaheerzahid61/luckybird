<template>
  <section class="py-3">
    <div class="container">
      <AdBannerCarousel />
    </div>
  </section>
  <section class="py-3">
    <div class="container">
      <GamingCarousel heading="New & Exclusive" url="#" />
    </div>
  </section>
  <section class="py-3">
    <div class="container">
      <BigWin heading="Recent Big Wins" />
    </div>
  </section>
  <section class="py-3">
    <div class="container">
      <GamingCarousel heading="Social Live Casino" url="#" />
    </div>
  </section>
  <section class="py-3">
    <div class="container">
      <GamingCarousel heading="New Games" url="#" />
    </div>
  </section>
  <section class="my-3 d-none d-md-block">
    <div class="container">
      <WinningUsers />
    </div>
  </section>
</template>

<script>
  import AdBannerCarousel from './sections/ad-landscape-carousel-banner.vue';
  import GamingCarousel from './sections/gaming-carousel.vue';
  import BigWin from './sections/big-wins.vue';
  import WinningUsers from './sections/winning-users.vue';

  export default {
    components: {
      AdBannerCarousel,
      GamingCarousel,
      BigWin,
      WinningUsers,
    },
    methods: {
      toggleRotation() {
        console.log("toggleRotation function called"); // Check if the function is triggered

        const dotElement = document.getElementById("center-dot");
        if (dotElement) {
          console.log("Dot element found:", dotElement); // Check if the dot element is found
          const isPaused =
            dotElement.style.animationPlayState === "paused";
          console.log(
            "Current animation state:",
            dotElement.style.animationPlayState
          ); // Log the current state
          dotElement.style.animationPlayState = isPaused
            ? "running"
            : "paused";
          console.log(
            "New animation state:",
            dotElement.style.animationPlayState
          ); // Log the updated state
        } else {
          console.error(
            "Dot element not found. Check the ID or if the component is rendered."
          ); // Error if not found
        }
      },
    },
    mounted() {
      console.log("Main component mounted."); // Check if the main component is loaded

      // Check if the dot element is available on load
      const dotElement = document.getElementById("center-dot");
      if (dotElement) {
        console.log("Dot element initially found on load:", dotElement);
        dotElement.style.animationPlayState = "paused"; // Initialize with paused state
      } else {
        console.error("Dot element not found on load.");
      }
    },
  };
</script>

 <style></style>
