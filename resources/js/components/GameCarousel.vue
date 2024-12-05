<template>
  <div class="container text-center text-white">
    <h1 class="title">Top Games</h1>

    <!-- Carousel Section -->
    <div class="carousel d-flex justify-content-center align-items-center my-4">
      <img
        v-for="(game, index) in games"
        :key="index"
        :src="game.image"
        :alt="game.name + ' game image'"
        :class="{ active: currentGameIndex === index }"
        class="img-fluid rounded game mx-2"
        @click="selectGame(index)"
      />
    </div>

    <!-- Game Info -->
    <div class="game-info">
      <h3 class="game-name">{{ games[currentGameIndex].name }}</h3>
      <p class="game-title">{{ games[currentGameIndex].title }}</p>
    </div>

    <!-- Play Now Button -->
    <div class="play-now">
      <button class="btn btn-magenta" @click="playGame">Play Now</button>
    </div>

    <!-- Navigation Arrows -->
    <div class="navigation mt-4">
      <i class="fas fa-chevron-left" @click="prevGame"></i>
      <i class="fas fa-chevron-right" @click="nextGame"></i>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      games: [
        {
          name: "Wolf Run",
          title: "Wolf Run",
          image: "https://storage.googleapis.com/a1aa/image/7wT6kzysbjadOtxrtIz8e2G85szpqVyif4c54x1EDfqc83dnA.jpg",
        },
        {
          name: "Congo Cash",
          title: "Congo Cash",
          image: "https://storage.googleapis.com/a1aa/image/mGmfEfCkszhPoUh33dITlUIYfu8ddw3wzoaPUlTAsvoY83dnA.jpg",
        },
        {
          name: "Plinko",
          title: "Plinko",
          image: "https://storage.googleapis.com/a1aa/image/KosT7eZ1oOXegUSeY7sVyixoU1pjOXfoT5E4geGb0B3Eyfu7E.jpg",
        },
        {
          name: "Buffalo Thunderstacks",
          title: "Buffalo Thunderstacks",
          image: "https://storage.googleapis.com/a1aa/image/FqlCR2SDFcYQEtyvk2fTqQGsWE1mVnltHLv6qeVvwnTKe3dnA.jpg",
        },
        {
          name: "Caishen Wealth",
          title: "Caishen Wealth",
          image: "https://storage.googleapis.com/a1aa/image/OsBkID0hsrY5INhtMS8vtxjloTop5pyNASKGIeGnyPYJf7uTA.jpg",
        },
      ],
      currentGameIndex: 2, // Initially highlight "Plinko"
    };
  },
  methods: {
    nextGame() {
      this.currentGameIndex = (this.currentGameIndex + 1) % this.games.length;
    },
    prevGame() {
      this.currentGameIndex =
        (this.currentGameIndex - 1 + this.games.length) % this.games.length;
    },
    selectGame(index) {
      this.currentGameIndex = index;
    },
    playGame() {
      alert("Play " + this.games[this.currentGameIndex].name);
    },
  },
};
</script>

<style scoped>
body {
  margin: 0;
  padding: 0;
  font-family: "Arial", sans-serif;
  background: url("https://placehold.co/1500x800") no-repeat center center fixed;
  background-size: cover;
}

.title {
  font-family: "Pacifico", cursive;
  font-size: 48px;
  margin-bottom: 20px;
}

.carousel img {
  width: 150px;
  height: 150px;
  border-radius: 10px;
  transition: transform 0.3s;
}

.carousel img.active {
  transform: scale(1.5);
  border: 5px solid #fff;
}

.play-now .btn-magenta {
  background-color: #ff00ff;
  color: white;
  font-size: 18px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.play-now .btn-magenta:hover {
  background-color: #cc00cc;
}

.navigation i {
  font-size: 24px;
  color: #fff;
  cursor: pointer;
  margin: 0 20px;
}

.game-info .game-name {
  font-size: 24px;
  font-weight: bold;
}

.game-info .game-title {
  font-size: 18px;
}
</style>
