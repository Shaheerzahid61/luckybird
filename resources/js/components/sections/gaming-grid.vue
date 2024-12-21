<template>
    <div>
        <div class="row g-4">
            <!-- Loop through the visible items array -->
            <div 
                class="col-4 col-sm-3 col-lg-2" 
                v-for="(item, index) in visibleItems" 
                :key="index"
            >
                <a href="#" class="card hover-slide-up rounded-4 border-0 overflow-hidden">
                    <img 
                        :src="imagePrefix + item.image" 
                        :alt="item.alt" 
                        class="w-100 rounded-4 card-img" 
                        height="250"
                    >
                </a>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-4" v-if="visibleItems.length < items.length">
            <button 
                class="btn btn-primary" 
                @click="loadMore"
            >
                Load More
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        imagePrefix: {
            type: String,
            default: '',
        },
    },
    data() {
        return {
            // Array of items to loop through
            items: [
                { image: 'assets/images/gaming/1.webp', alt: 'BGaming 1' },
                { image: 'assets/images/gaming/2.webp', alt: 'BGaming 2' },
                { image: 'assets/images/gaming/3.webp', alt: 'BGaming 3' },
                { image: 'assets/images/gaming/4.webp', alt: 'BGaming 4' },
                { image: 'assets/images/gaming/5.webp', alt: 'BGaming 5' },
                { image: 'assets/images/gaming/6.webp', alt: 'BGaming 6' },
                { image: 'assets/images/gaming/7.webp', alt: 'BGaming 7' },
                { image: 'assets/images/gaming/8.webp', alt: 'BGaming 8' },
                { image: 'assets/images/gaming/9.webp', alt: 'BGaming 9' },
                { image: 'assets/images/gaming/10.webp', alt: 'BGaming 10' },
                { image: 'assets/images/gaming/11.webp', alt: 'BGaming 11' },
                { image: 'assets/images/gaming/12.webp', alt: 'BGaming 12' },
                { image: 'assets/images/gaming/13.webp', alt: 'BGaming 13' },
                { image: 'assets/images/gaming/14.webp', alt: 'BGaming 14' },
                { image: 'assets/images/gaming/15.webp', alt: 'BGaming 15' },
                { image: 'assets/images/gaming/16.webp', alt: 'BGaming 16' },
                { image: 'assets/images/gaming/17.webp', alt: 'BGaming 17' },
                { image: 'assets/images/gaming/18.webp', alt: 'BGaming 18' },
                { image: 'assets/images/gaming/19.webp', alt: 'BGaming 19' },
                { image: 'assets/images/gaming/20.webp', alt: 'BGaming 20' },
                { image: 'assets/images/gaming/21.webp', alt: 'BGaming 21' },
                { image: 'assets/images/gaming/22.webp', alt: 'BGaming 22' },
                { image: 'assets/images/gaming/23.webp', alt: 'BGaming 23' },
                { image: 'assets/images/gaming/24.webp', alt: 'BGaming 24' },
                { image: 'assets/images/gaming/25.webp', alt: 'BGaming 25' },
                { image: 'assets/images/gaming/26.webp', alt: 'BGaming 26' },
                { image: 'assets/images/gaming/27.webp', alt: 'BGaming 27' },
                { image: 'assets/images/gaming/28.webp', alt: 'BGaming 28' },
                { image: 'assets/images/gaming/29.webp', alt: 'BGaming 29' },
                { image: 'assets/images/gaming/30.webp', alt: 'BGaming 30' },
                { image: 'assets/images/gaming/31.webp', alt: 'BGaming 31' },
                { image: 'assets/images/gaming/32.webp', alt: 'BGaming 32' },
                { image: 'assets/images/gaming/33.webp', alt: 'BGaming 33' },
                { image: 'assets/images/gaming/34.webp', alt: 'BGaming 34' },
                { image: 'assets/images/gaming/35.webp', alt: 'BGaming 35' },
                { image: 'assets/images/gaming/36.webp', alt: 'BGaming 36' },
                { image: 'assets/images/gaming/37.webp', alt: 'BGaming 37' },
                { image: 'assets/images/gaming/38.webp', alt: 'BGaming 38' },
                { image: 'assets/images/gaming/39.webp', alt: 'BGaming 39' },
                { image: 'assets/images/gaming/40.webp', alt: 'BGaming 40' },
                { image: 'assets/images/gaming/41.webp', alt: 'BGaming 41' },
                { image: 'assets/images/gaming/42.webp', alt: 'BGaming 42' },
            ],
            itemsPerPage: 30, // Number of items to display per page
            currentPage: 1,   // Current page index
        };
    },
    computed: {
        visibleItems() {
            // Calculate the items to display based on the current page
            return this.items.slice(0, this.currentPage * this.itemsPerPage);
        },
    },
    methods: {
        loadMore() {
            // Increment the page index to show more items
            this.currentPage++;
        },
    },
};
</script>

<style>
/* Card container styling */
.card.hover-slide-up {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.card.hover-slide-up:hover {
    transform: translateY(-10px); /* Slide up */
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Add shadow */
}
</style>