<template>
    <section class="py-3">
        <div class="container-fluid">
            <gamesSearch imagePrefix="../" />
        </div>
    </section>
    <section class="py-3">
        <div class="container-fluid">
            <gamesCategoryFilter />
        </div>
    </section>
    <breadcrumb />
    <section class="py-3">
        <div class="container-fluid">
            <div class="d-flex align-items-center mb-3">
                <a href="/"><i class="fa-solid fa-arrow-left me-3"></i></a>
                <h1 class="fs-5 fw-bold">Play Popular Games</h1>
            </div>
            <div class="position-relative">
                <p
                    ref="paragraph"
                    class="mb-0 overflow-hidden"
                    v-html="displayedText"
                ></p>
                <a
                    v-if="isTruncated"
                    href="javascript:void(0)"
                    class="text-decoration-underline"
                    @click="toggleReadMore"
                >
                    {{ isExpanded ? 'Read Less' : 'Read More' }}
                </a>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container-fluid">
            <games imagePrefix="../" />
        </div>
    </section>
</template>

<script>
import gamesSearch from './sections/games-search.vue';
import breadcrumb from './sections/breadcrumb.vue';
import gamesCategoryFilter from './sections/games-category-filter.vue';
import games from './sections/gaming-grid.vue';

export default {
    components: {
        gamesSearch,
        breadcrumb,
        gamesCategoryFilter,
        games,
    },
    data() {
        return {
            isExpanded: false, // Tracks if the content is expanded
            isTruncated: false, // Tracks if the content needs truncation
            fullText: `Our social casino offers a diverse selection of popular casino games and slots, each packed with exciting features, engaging themes, and thrilling jackpots. Enjoy hours of entertainment with our hand-picked games designed to provide you with a realistic casino experience. Start your adventure today! Enjoy hours of entertainment with our hand-picked games designed to provide you with a realistic casino experience. Start your adventure today! Enjoy hours of entertainment with our hand-picked games designed to provide you with a realistic casino experience. Start your adventure today!`, // Full text content
            truncatedText: '', // Truncated text content
            wordLimit: 50, // Limit to show the first 20 words
        };
    },
    computed: {
        displayedText() {
            if (this.isExpanded) {
                return this.fullText; // Show full text when expanded
            } else {
                return this.truncatedText + '...'; // Show truncated text with ellipsis
            }
        },
    },
    mounted() {
        this.truncateText();
    },
    methods: {
        toggleReadMore() {
            this.isExpanded = !this.isExpanded;
        },
        truncateText() {
            const words = this.fullText.split(' '); // Split the text into words
            if (words.length > this.wordLimit) {
                this.truncatedText = words.slice(0, this.wordLimit).join(' '); // Get the first 20 words
                this.isTruncated = true; // Set truncation flag to true
            } else {
                this.truncatedText = this.fullText; // No truncation needed if content is shorter than the word limit
                this.isTruncated = false;
            }
        },
    },
};
</script>

<style scoped>
/* No need for line-clamp, as word count-based truncation is now used */
</style>