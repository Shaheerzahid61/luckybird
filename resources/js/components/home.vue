<template>
  <section class="py-3">
    <div class="container-fluid">
      <AdBannerCarousel dafaultCarousel="1" smCarousel="1" mdCarousel="2" lgCarousel="2" xlCarousel="2" carouselAnimationTime="4000" />
    </div>
  </section>
  <section class="py-3">
    <div class="container-fluid">
      <GamingCarousel heading="New & Exclusive" url="#" dafaultCarousel="3" smCarousel="4" mdCarousel="5" lgCarousel="6" xlCarousel="7" carouselAnimationTime="5000" />
    </div>
  </section>
  <section class="py-3">
    <div class="container-fluid">
      <WinnerCardCarousel heading="Recent Big Wins" headingIcon="fa-solid fa-earth-americas" dafaultCarousel="4" smCarousel="5" mdCarousel="8" lgCarousel="10" xlCarousel="12" carouselAnimationTime="3000" />
    </div>
  </section>
  <section class="py-3">
    <div class="container-fluid">
      <GamingCarousel heading="Social Live Casino" url="#" dafaultCarousel="3" smCarousel="4" mdCarousel="5" lgCarousel="6" xlCarousel="7" carouselAnimationTime="4000" />
    </div>
  </section>
  <section class="py-3">
    <div class="container-fluid">
      <GamingCarousel heading="New Games" url="#" dafaultCarousel="3" smCarousel="4" mdCarousel="5" lgCarousel="6" xlCarousel="7" carouselAnimationTime="6000" />
    </div>
  </section>
  <section class="my-3 d-none d-md-block">
    <div class="container-fluid">
      <WinningUsers />
    </div>
  </section>
</template>

<script>
  import AdBannerCarousel from './sections/ad-landscape-carousel-banner.vue';
  import GamingCarousel from './sections/gaming-carousel.vue';
  import WinnerCardCarousel from './sections/winner-card-carousel.vue';
  import WinningUsers from './sections/winning-users.vue';

  export default {
    components: {
      AdBannerCarousel,
      GamingCarousel,
      WinnerCardCarousel,
      WinningUsers,
    },
    methods: {
      // toggleRotation() {
      //   console.log("toggleRotation function called"); // Check if the function is triggered

      //   const dotElement = document.getElementById("center-dot");
      //   if (dotElement) {
      //     console.log("Dot element found:", dotElement); // Check if the dot element is found
      //     const isPaused =
      //       dotElement.style.animationPlayState === "paused";
      //     console.log(
      //       "Current animation state:",
      //       dotElement.style.animationPlayState
      //     ); // Log the current state
      //     dotElement.style.animationPlayState = isPaused
      //       ? "running"
      //       : "paused";
      //     console.log(
      //       "New animation state:",
      //       dotElement.style.animationPlayState
      //     ); // Log the updated state
      //   } else {
      //     console.error(
      //       "Dot element not found. Check the ID or if the component is rendered."
      //     ); // Error if not found
      //   }
      // },
    },
    mounted() {
      // console.log("Main component mounted."); // Check if the main component is loaded

      // // Check if the dot element is available on load
      // const dotElement = document.getElementById("center-dot");
      // if (dotElement) {
      //   console.log("Dot element initially found on load:", dotElement);
      //   dotElement.style.animationPlayState = "paused"; // Initialize with paused state
      // } else {
      //   console.error("Dot element not found on load.");
      // }
    },
  };
</script>

 <style></style>
