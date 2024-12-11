<template>
    <div>
     <!-- <luckyHeader /> -->
     <!-- Other content -->

 <!-- <div class="col-md-12"> -->
     <mainPage />
   <!-- </div> -->
    <RecentBigWin/>
    <SecondSlider/>
    <ThirdSlider/>
    <!-- <TableFirst/> -->
 </div>
 </template>

 <script>
 //   import Signup from './SignUp.vue';
//  import luckyHeader from './luckyHeader.vue';

 import HeroBanner from './Header.vue';
 import mainPage from './mainPage.vue';
 import RecentBigWin from './RecentBigWin.vue';
 import SecondSlider from './SecondSlider.vue';
 import ThirdSlider from './ThirdSlider.vue';
//  import TableFirst from './TableFirst.vue';
 // import signup from './SignUp.vue';
 // import Caraousal from "./slider/carousal.vue";
 // import Sliderline from "./slider/sliderbase.vue";
 // import UserPromo from './promo/PromoCards.vue';
 // import UserPromo2 from './promo/PromoCards2.vue';
 // import PlayOffMarket from './PlayOffMarket.vue';
 // import GamesGrid from './GamesGrid.vue';
 // import Footer from './Footer.vue';
 // import SocialMediaPlatform from './SocialMediaPlatform.vue';
 // import ScrollDownSection from './ScrollDownSection.vue';
 // import HeaderMain from './HeaderMain.vue';


 export default {
   components: {
     // HeaderMain,
     mainPage,
    //  luckyHeader,
     RecentBigWin,
     SecondSlider,
     ThirdSlider,

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
 .container.text-white.py-6.rounded.w-auto.p-3 {
     background: #011e41;
 }
 .slider-item:hover {
     transform: scale(1.05);
 }
 </style>
