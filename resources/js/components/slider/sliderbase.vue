<template>
    <div class="carousel-containers">
        <div class="baseline">
            <!-- Circle that rotates when clicked -->
            <!-- <div id="center-dot" class="rotating-dot"></div> -->
            <div class="rotating-dot"></div>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";

export default {};
</script>

<style scoped>
/* Main container for the carousel */
/* Main container for the carousel */
.carousel-containers {
    width: 100%;
    transform: rotateX(60deg);
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: -1;
}
.baseline::after {
    width: 450px;
    margin: auto;
    height: 1200px;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(0, 0, 0, 0.5),
        transparent
    );
    border-radius: 50%;
    transform: rotateX(60deg) scaleX(1.5); /* More scaling for larger ellipse */
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    /* background: rgba(0, 0, 0, 0.5); Adjust color and opacity here */
    z-index: 0;
}
/* Glowing elliptical baseline */
.baseline {
  position: absolute;
  width: 650px;
  height: 650px;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 0, 255, 0.8),
    transparent
  );
  border-radius: 50%;
  box-shadow: 0px 0px 30px 15px rgba(255, 0, 255, 0.5);
  transform: rotateX(60deg) scaleX(1.5); /* Ellipse shape and 3D effect */
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: visible;
}

/* Center glowing dot */

/* Play Now button */
.btn-pink {
    color: #ffffff;
    background-color: #ff00ff;
    border: none;
    border-radius: 20px;
    padding: 12px 24px; /* Increased padding for a larger button */
    font-size: 18px; /* Larger font size */
    cursor: pointer;
    box-shadow: 0px 4px 10px rgba(255, 0, 255, 0.4);
    transition: background-color 0.3s ease;
}

.btn-pink:hover {
    background-color: #ff66ff;
}

.rotating-dot {
  position: absolute;
  /* top: 250px; */
  width: 100%; /* Adjust dot size */
    height: 100%;

    border: 5px solid transparent;
    border-top: 10px solid #ff00ff; /* Dot border color */
    border-radius: 50%;
    animation: rotate 1s linear infinite;
    /* animation-play-state: paused; Start with animation paused */

    cursor: pointer;
    box-shadow: 0px 0px 10px 5px rgba(255, 0, 255, 0.5); /* Dot glow effect */
}

/* Keyframes for Rotation Around Ellipse */
/* Keyframes for Rotation Along an Ellipse */
@keyframes rotate {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
</style>
