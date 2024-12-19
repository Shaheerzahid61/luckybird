<template>
    <div class="carousel-container position-relative">
        <!-- Left Arrow -->
        <button 
            class="carousel-arrow left-arrow"
            @click="scrollCarousel('left')"
        >
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <!-- Buttons Carousel -->
        <div class="carousel d-flex flex-nowrap">
            <div class="col-auto px-2" v-for="(button, index) in buttons" :key="index">
                <a :href="button.link" class="btn btn-secondary rounded-pill d-flex align-items-center">
                    <i :class="button.icon" class="me-2"></i>
                    {{ button.text }}
                </a>
            </div>
        </div>

        <!-- Right Arrow -->
        <button 
            class="carousel-arrow right-arrow"
            @click="scrollCarousel('right')"
        >
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            buttons: [
                { text: 'Home', link: '#', icon: 'fa-solid fa-house' },
                { text: 'Profile', link: '#', icon: 'fa-regular fa-user' },
                { text: 'Settings', link: '#', icon: 'fa-solid fa-gear' },
                { text: 'Notifications', link: '#', icon: 'fa-regular fa-bell' },
                { text: 'Help', link: '#', icon: 'fa-solid fa-question-circle' },
                { text: 'About', link: '#', icon: 'fa-solid fa-info-circle' },
                { text: 'Contact', link: '#', icon: 'fa-regular fa-envelope' },
                { text: 'Services', link: '#', icon: 'fa-solid fa-briefcase' },
                { text: 'FAQ', link: '#', icon: 'fa-solid fa-lightbulb' },
                { text: 'Logout', link: '#', icon: 'fa-solid fa-sign-out-alt' },
                { text: 'Dashboard', link: '#', icon: 'fa-solid fa-tachometer-alt' },
            ],
        };
    },
    methods: {
        scrollCarousel(direction) {
            const carousel = this.$el.querySelector('.carousel');
            const scrollAmount = 200; // Adjust scroll amount as needed
            if (direction === 'left') {
                carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        },
    },
};
</script>

<style scoped>
.carousel-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 20px 0;
}

.carousel {
    display: flex;
    overflow-x: auto;
    scrollbar-width: none; /* For Firefox */
    -ms-overflow-style: none; /* For IE and Edge */
}

.carousel::-webkit-scrollbar {
    display: none; /* For Chrome, Safari, and Opera */
}

.carousel-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 10;
}

.left-arrow {
    left: 10px;
}

.right-arrow {
    right: 10px;
}

.carousel-container:hover .carousel-arrow {
    opacity: 1;
}

.btn {
    display: flex;
    align-items: center;
    white-space: nowrap;
}
</style>