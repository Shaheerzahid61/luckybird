<template>
    <div class="filter-container position-relative w-100 overflow-hidden d-grid">
        <!-- Left arrow -->
        <button
            class="btn position-absolute start-0 top-50 translate-middle-y rounded-circle filter-left-arrow"
            @click="moveLeft"
        >
            <i class="fa-solid fa-chevron-left text-white"></i>
        </button>

        <!-- Button container with horizontal scroll -->
        <div class="button-scroll-container">
            <div
                class="button-wrapper d-flex align-items-center overflow-visible"
            >
                <div
                    class="px-2"
                    v-for="(button, index) in buttons"
                    :key="index"
                >
                    <a
                        :href="button.link"
                        class="btn btn-secondary rounded-pill d-flex align-items-center"
                    >
                        <i :class="button.icon" class="me-2"></i>
                        {{ button.text }}
                    </a>
                </div>
            </div>
        </div>

        <!-- Right arrow -->
        <button
            class="btn position-absolute end-0 top-50 translate-middle-y rounded-circle filter-right-arrow"
            @click="moveRight"
        >
            <i class="fa-solid fa-chevron-right text-white"></i>
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            buttons: [
                { text: 'Lobby', link: '/games', icon: 'fa-solid fa-chess-queen' },
                { text: 'Popular', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'New & Exclusive', link: '/games/category-name', icon: 'fa-solid fa-clover' },
                { text: 'Spin Wins', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Jackpot Play', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Hold and Win', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Social Live Casino', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Slingo', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Clasic Slots', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Megaways', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Cascading', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'All New', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Online Slots', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Play The Future', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
                { text: 'Unlimited Play', link: '/games/category-name', icon: 'fa-solid fa-fire-flame-curved' },
            ],
        };
    },
    methods: {
        moveLeft() {
            const container = this.$el.querySelector('.button-scroll-container');
            container.scrollBy({ left: -100, behavior: 'smooth' });
        },
        moveRight() {
            const container = this.$el.querySelector('.button-scroll-container');
            container.scrollBy({ left: 100, behavior: 'smooth' });
        },
    },
};
</script>

<style scoped>
.button-scroll-container {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    scroll-behavior: smooth;
    width: 100%;
    box-sizing: border-box;
}

.button-scroll-container::-webkit-scrollbar {
    display: none;
}

.filter-left-arrow,
.filter-right-arrow {
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
}

.filter-left-arrow:hover,
.filter-right-arrow:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.filter-container:hover .filter-left-arrow,
.filter-container:hover .filter-right-arrow {
    display: block;
}

.filter-left-arrow,
.filter-right-arrow {
    z-index: 10;
}
</style>