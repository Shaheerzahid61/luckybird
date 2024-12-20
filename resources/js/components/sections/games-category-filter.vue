<template>
    <div class="filter-container position-relative">
        <button class="btn position-absolute start-0 top-50 translate-middle-y rounded-circle filter-left-arrow" @click="moveLeft">
            <i class="fa-solid fa-chevron-left text-white"></i>
        </button>
        <!-- left arrow -->
        <div class="row overflow-hidden flex-nowrap" ref="carouselContainer">
            <div class="col-auto px-2" v-for="(button, index) in buttons" :key="index">
                <a :href="button.link" class="btn btn-secondary rounded-pill d-flex align-items-center">
                    <i :class="button.icon" class="me-2"></i>
                    {{ button.text }}
                </a>
            </div>
        </div>
        <!-- right arrow -->
        <button class="btn position-absolute end-0 top-50 translate-middle-y rounded-circle filter-right-arrow" @click="moveRight">
            <i class="fa-solid fa-chevron-right text-white"></i>
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
            visibleButtonsCount: 5, // Number of visible buttons at a time
        };
    },
    methods: {
        moveLeft() {
            const container = this.$refs.carouselContainer;
            container.scrollBy({ left: -container.offsetWidth / this.visibleButtonsCount, behavior: 'smooth' });
        },
        moveRight() {
            const container = this.$refs.carouselContainer;
            container.scrollBy({ left: container.offsetWidth / this.visibleButtonsCount, behavior: 'smooth' });
        },
    },
};
</script>

<style scoped>
.filter-left-arrow, 
.filter-right-arrow {
    background-color: #00000050;
    display: none;
}

.filter-left-arrow:hover, 
.filter-right-arrow:hover {
    background-color: #000000;
}

.filter-container:hover .filter-left-arrow, 
.filter-container:hover .filter-right-arrow {
    display: block;
}

.filter-container {
    position: relative;
    width: 100%;
}

.filter-left-arrow, 
.filter-right-arrow {
    z-index: 10;
    background-color: rgba(0, 0, 0, 0.5);
}
</style>