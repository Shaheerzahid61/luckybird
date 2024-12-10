<template>
   <div>
    <mainPage />
</div>
</template>

<script>

import HeroBanner from './Header.vue';
import mainPage from './mainPage.vue';


export default {
  components: {
    mainPage,
    HeroBanner,
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

<style>
body {
  background: linear-gradient(#0b1d41, /* Black gradient with 70% opacity */ rgba(0, 0, 0, 0.7)
  ),
    url('/thanksgivingBG.95cd1fe5.png') no-repeat center center fixed;
  background-size: cover; /* Ensure the image covers the entire viewport */
  color: #0b1d41; /* Optional: Ensure text stands out */
}

</style>