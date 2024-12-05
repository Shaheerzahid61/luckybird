<template>
  <div class="games-container">
    <div class="game-card" v-for="(game, index) in games" :key="index">
      <div class="img-container">
        <img :src="game.image" :alt="game.name" class="game-image" />
        <!-- Overlay with Play Button -->
        <div class="overlay">
          <button 
            class="btn btn-primary play-button d-inline-flex align-items-center justify-center" 
            type="button">
            Play Now
          </button>
        </div>
      </div>
      <!-- Game Title -->
      <div class="game-title">{{ game.name }}</div>
    </div>
    <div class="game-card view-all-card">
      <div class="img-container">
        <div class="overlay-view-all">
          <button class="btn btn-primary view-all-button" type="button">
            View All
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "GamesContainer",
  data() {
    return {
      games: [
      {
          name: "Medusa Money",
          image: "https://static.c2seven.com/thumbnails/235x235/wildmedusa_rp.jpg",
        },
        {
          name: "Piggy Gold",
          image: "https://static.c2seven.com/thumbnails/235x235/piggyriches_rp.jpg",
        },
        {
          name: "Brilliant Gems",
          image: "https://static.c2seven.com/thumbnails/235x235/brilliantgems_rp.jpg",
        },
        {
          name: "Ultra Burn",
          image: "https://static.c2seven.com/thumbnails/235x235/vs5ultrab_prg.jpg",
        },
        {
          name: "Master Chen's Fortune",
          image: "https://static.c2seven.com/thumbnails/235x235/vs9chen_prg.jpg",
        },
        {
          name: "Super 7s",
          image: "https://static.c2seven.com/thumbnails/235x235/vs5super7_prg.jpg",
        },
        {
          name: "Shining Hot 5",
          image: "https://static.c2seven.com/thumbnails/235x235/vs5sh_prg.jpg",
        },
        {
          name: "Striking Hot 5",
          image: "https://static.c2seven.com/thumbnails/235x235/vs5strh_prg.jpg",
        },
        {
          name: "Fire Hot 5",
          image: "https://static.c2seven.com/thumbnails/235x235/vs5firehot_prg.jpg",
        },
        {
          name: "Aztec Gems",
          image: "https://static.c2seven.com/thumbnails/235x235/vs5aztecgems_prg.jpg",
        },
        {
          name: "Shining Hot 40",
          image: "https://static.c2seven.com/thumbnails/235x235/vs40sh_prg.jpg",
        },
      ],
    };
  },
};
</script>

<style scoped>
/* Container styling */
.games-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(150px, 2fr));
  gap: 20px;
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

/* Game card styling */
.game-card {
  position: relative;
  background: #2a2a2a;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s;
}

.game-card:hover {
  transform: scale(1.05);
}

/* Image container */
.img-container {
  position: relative;
  overflow: hidden;
}

/* Game image styling */
.game-image {
  width: 90%;
    height: auto;
    margin: auto;
    display: block;
    border-radius: 20px;
    padding-top: 12px;
}

/* Overlay styling */
.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Dark overlay */
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s;
}

.overlay-view-all {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Dark overlay */
  display: flex;
  justify-content: center;
  align-items: center;
  transition: opacity 0.3s;
} 

.game-card:hover .overlay {
  opacity: 1;
}

/* Play button styling */
.play-button {
  background: linear-gradient(135deg, #ff00ff, #ff0077); /* Gradient background */
  color: white;
  font-weight: bold;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.play-button:hover {
  background: linear-gradient(135deg, #ff0077, #ff00ff); /* Reverse gradient on hover */
}

/* Game title styling */
.game-title {
  text-align: center;
  font-size: 1rem;
  font-weight: bold;
  color: white;
  padding: 10px 0;
}

/* View All button styling */
.view-all-card {
  width: 100%;
    height: 100%;
    background: linear-gradient(#e3a400, #996e00);
    border-radius: .75rem;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    padding: 1rem;
    position: relative;
}
/* View All button specific styling */
.view-all-card .img-container {
      width: 100%;
    height: 100%;
    background: linear-gradient(#e3a400, #996e00);
    border-radius: .75rem;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    padding: 1rem;
    position: relative;
}

.view-all-card .view-all-button {
  font-size: 1.2em;
}
</style>
