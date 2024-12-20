<template>
    <div class="position-relative">
        <!-- Search Icon -->
        <div class="position-absolute top-50 start-0 translate-middle-y ms-3">
            <i class="fa-solid fa-magnifying-glass text-dark"></i>
        </div>
        
        <!-- Search Input -->
        <input 
            type="text" 
            name="search" 
            id="search" 
            class="form-control rounded-pill px-5" 
            placeholder="Search Games and Game Providers"
            v-model="searchQuery" 
        />

        <!-- Clear Icon (X) that appears when there's text in the input -->
        <div 
            class="position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer" 
            v-if="searchQuery" 
            @click="clearSearch"
        >
            <i class="fa-solid fa-x text-dark"></i>
        </div>

        <!-- Custom Dropdown with filtered games -->
        <div v-if="filteredGames.length > 0 && searchQuery" class="games-search-dropdown position-absolute w-100 mt-1 p-3 shadow rounded-2 top-100">
            <p class="mb-3">Results</p>
            <div class="row flex-wrap">
                <div class="col-auto"
                    v-for="(game, index) in displayedGames" 
                    :key="index"
                >
                    <a href="#" class="card" @click="selectGame(game)">
                        <img :src="game.image" :alt="game.name" width="100" />
                    </a>
                </div>

                <!-- Show "View All" if there are more than 8 games -->
                <div v-if="filteredGames.length > 8" class="col-auto">
                    <a href="#" class="card h-100 border view-all-card" @click="viewAll">
                        <div class="card-body d-flex align-items-center justify-content-center h-100">
                            <span class="text-center">View All</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            searchQuery: '', // Holds the value of the search input
            games: [
                { image: 'assets/images/gaming/1.webp', name: 'Game 1' },
                { image: 'assets/images/gaming/2.webp', name: 'Game 2' },
                { image: 'assets/images/gaming/3.webp', name: 'Game 3' },
                { image: 'assets/images/gaming/4.webp', name: 'Game 4' },
                { image: 'assets/images/gaming/5.webp', name: 'Game 5' },
                { image: 'assets/images/gaming/6.webp', name: 'Game 6' },
                { image: 'assets/images/gaming/7.webp', name: 'Game 7' },
                { image: 'assets/images/gaming/8.webp', name: 'Game 8' },
                { image: 'assets/images/gaming/9.webp', name: 'Game 9' },
                { image: 'assets/images/gaming/10.webp', name: 'Game 10' },
                // Add more games as needed
            ],
        };
    },
    computed: {
        // Filter games based on the search query
        filteredGames() {
            const filtered = this.searchQuery
                ? this.games.filter(game => 
                    game.name.toLowerCase().includes(this.searchQuery.toLowerCase()) // Filter by game name
                )
                : [];

            // Log the filtered games to the console
            console.log('Filtered Games:', filtered);

            return filtered;
        },
        // Display only the first 8 games and the "View All" card if more than 8
        displayedGames() {
            return this.filteredGames.slice(0, 8);
        },
    },
    methods: {
        clearSearch() {
            this.searchQuery = '';  // Clears the search input when the X icon is clicked
        },
        selectGame(game) {
            this.searchQuery = game.name; // Set the search query to the selected game name
            console.log('Selected Game:', game); // Log the selected game
        },
        viewAll() {
            console.log('View All games'); // You can add logic to handle viewing all games
            // You can either redirect to a page or open a modal to show all the games
        },
    },
};
</script>

<style scoped>
/* Custom dropdown styles */
.games-search-dropdown {
    background-color: #10254A;
    z-index: 999;
    max-width: 100%; /* Ensure dropdown doesn't overflow */
    width: auto; /* Ensure dropdown width adjusts based on content */
    overflow: hidden; /* Prevent overflow outside the dropdown */
    left: 0; /* Ensure dropdown stays aligned to the left */
    right: auto; /* Remove any right-alignment */
    display: block;
}

.games-search-dropdown .view-all-card {
    border-style: dashed !important;
}

/* Ensure the cards inside the dropdown wrap */
.games-search-dropdown .row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Optional, to add space between the cards */
    justify-content: flex-start; /* Ensure the cards align to the left */
    max-width: 100%; /* Prevent overflow */
}

.games-search-dropdown .col-auto {
    flex: 0 0 auto; /* Prevent the cards from growing or shrinking */
    margin-bottom: 10px; /* Add space between rows */
}

/* Ensure that the dropdown doesn't go beyond the viewport */
.games-search-dropdown {
    max-width: calc(100vw - 20px); /* Ensure the dropdown stays within the viewport */
    overflow-x: auto; /* Allow horizontal scrolling if needed */
}
</style>