<template>
    <div class="container d-flex justify-content-center my-5">
        <div class="carousel-container position-relative">
            <div
                class="carousel"
                :style="{ transform: translateX, transition: transitionStyle }"
                @transitionend="handleTransitionEnd"
            >
                <div
                    v-for="(image, index) in clonedImages"
                    :key="`clone-${index}`"
                    :class="[
                        'carousel-item',
                        {
                            active: index === displayIndex,
                            left:
                                index === displayIndex - 1 ||
                                (displayIndex === 0 &&
                                    index === clonedImages.length - 2),
                            right:
                                index === displayIndex + 1 ||
                                (displayIndex === clonedImages.length - 1 &&
                                    index === 1),
                        },
                    ]"
                >
                    <img :src="image.src" :alt="image.alt" class="img-fluid" />
                </div>

            </div>
            
        </div>
        
    </div>
    <Sliderline :toggle-rotation="toggleRotation"/>

    <div class="container d-flex justify-content-center my-5">
        <div class="row d-flex justify-content-between">
            <div class="col-md-3 text-center">
                <button class="carousel-button left btn" @click="prevSlide">
                    <svg
                        width="40"
                        height="20"
                        viewBox="0 0 40 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <!-- First Chevron (Larger, Left Pointing) -->
                        <polygon points="15,2 5,10 15,18" fill="#ff00ff" />
                        <!-- Second Chevron (Smaller, Left Pointing) -->
                        <polygon points="25,2 15,10 25,18" fill="#ff00ff" />
                    </svg>
                </button>
            </div>
            <div class="col-md-6 text-center">
                <button class="btn-primary">Play now</button>
            </div>
            <div class="col-md-3 text-center">
                <button class="carousel-button right btn" @click="nextSlide">
                    <svg
                        width="40"
                        height="20"
                        viewBox="0 0 40 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <!-- First Chevron -->
                        <polygon points="5,2 15,10 5,18" fill="#ff00ff" />
                        <!-- Second Chevron -->
                        <polygon points="15,2 25,10 15,18" fill="#ff00ff" />
                    </svg>
                </button>

                <!-- <button class="btn-pink" @click="handleClick">
                    Toggle Rotation
                </button> -->
            </div>
        </div>
    </div>
</template>

<script>
  import Sliderline from "./sliderbase.vue";
import { ref, computed, onMounted } from "vue";

export default {
    components: {
        Sliderline,
    },
    props: {
        toggleRotation: Function,
    },
    methods: {
        handleClick() {
            console.log("Button clicked - calling toggleRotation"); // Check if the button is clicked
            this.toggleRotation();
        },
    },
    mounted() {
        console.log("Button component mounted."); // Check if the button component is loaded
    },

    setup() {
        const images = ref([
            {
                src: "https://stag.bitsky.bet/_next/image?url=https%3A%2F%2Fstatic.c2seven.com%2Fthumbnails%2F235x235%2Fplinko_stake.jpg&w=3840&q=75",
                alt: "Plinko",
            },
            {
                src: "https://stag.bitsky.bet/_next/image?url=https%3A%2F%2Fstatic.c2seven.com%2Fthumbnails%2F235x235%2Fvs432congocash_prg.jpg&w=3840&q=75",
                alt: "Congo Cash",
            },
            {
                src: "https://stag.bitsky.bet/_next/image?url=https%3A%2F%2Fstatic.c2seven.com%2Fthumbnails%2F235x235%2Fcaishen_wealth_bng_html.jpg&w=3840&q=75",
                alt: "Caishen Wealth",
            },
            {
                src: "https://stag.bitsky.bet/_next/image?url=https%3A%2F%2Fstatic.c2seven.com%2Fthumbnails%2F235x235%2Fcaishen_wealth_bng_html.jpg&w=3840&q=75",
                alt: "Buffalo Thunderstacks",
            },
            {
                src: "https://stag.bitsky.bet/_next/image?url=https%3A%2F%2Fstatic.c2seven.com%2Fthumbnails%2F235x235%2Fcaishen_wealth_bng_html.jpg&w=3840&q=75",
                alt: "Caishen Wealth",
            },
        ]);

        const currentIndex = ref(0); // Track the real index
        const transitionEnabled = ref(true);

        // Clone images to create an infinite loop effect
        const clonedImages = computed(() => [
            images.value[images.value.length - 1],
            ...images.value,
            images.value[0],
        ]);

        const displayIndex = computed(() => {
            // Adjusted index to wrap around with the cloned items
            return (currentIndex.value + 1) % clonedImages.value.length;
        });
        const translateX = computed(() => {
            const itemWidth = 200; // Width of each carousel item
            const spacing = 20; // Adjust spacing between items
            const visibleItems = 3; // Only three items are visible
            const containerWidth =
                itemWidth * visibleItems + spacing * (visibleItems - 1);

            // Center offset for positioning the active item in the center of the container
            const centerOffset = (containerWidth - itemWidth) / 2;

            // Adjusted `translateX` to align the active item in the center
            return `translateX(${
                centerOffset - displayIndex.value * (itemWidth + spacing)
            }px)`;
        });

        const transitionStyle = computed(() =>
            transitionEnabled.value ? "transform 0.5s ease" : "none"
        );

        const prevSlide = () => {
            if (currentIndex.value === 0) {
                // Temporarily disable transition and jump to the last real item
                transitionEnabled.value = false;
                currentIndex.value = images.value.length - 1;
            } else {
                transitionEnabled.value = true;
                currentIndex.value -= 1;
            }
        };

        const nextSlide = () => {
            if (currentIndex.value === images.value.length - 1) {
                // Temporarily disable transition and jump to the first real item
                transitionEnabled.value = false;
                currentIndex.value = 0;
            } else {
                transitionEnabled.value = true;
                currentIndex.value += 1;
            }
        };

        const handleTransitionEnd = () => {
            // Re-enable transition after jump for smooth looping
            transitionEnabled.value = true;
        };

        return {
            clonedImages,
            displayIndex,
            translateX,
            transitionStyle,
            prevSlide,
            nextSlide,
            handleTransitionEnd,
        };
    },
};
</script>

<style scoped>
.carousel-container {
    width: 100%;
    max-width: 700px;
    overflow: hidden;
    top: 100px;
    display: flex;
    align-items: center;
    position: relative;
    padding: 20px;
    border-radius: 10px;
    height: 300px;
}

.carousel {
    display: flex;
    transition: transform 0.5s ease;
    justify-content: center;
    position: relative;
}

.carousel-item {
    border: 2px solid #ff00ff;
    box-shadow: 0 0 20px rgba(255, 0, 255, 0.5);
    flex: 0 0 auto;
    width: 200px; /* Ensure this matches `itemWidth` */
    margin: 0 10px;
    padding: 5px;
    opacity: 0.8;
    transition: transform 0.5s ease, opacity 0.5s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transform: perspective(800px) rotateY(15deg) scale(0.8); /* Apply tilt and scale */
}

.carousel-item img {
    border-radius: 8px;
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
}

.carousel-item.active {
    transform: perspective(800px) scale(1.2) rotateY(0deg);
    opacity: 1;
    border: 2px solid #ff00ff;
    box-shadow: 0 0 20px rgba(255, 0, 255, 0.5);
    z-index: 2;
}

.carousel-button {
    background: transparent;
    border: none;
    cursor: pointer;
    z-index: 5;
}

.carousel-button svg {
    transition: transform 0.2s;
}

.carousel-button:hover svg {
    transform: scale(1.1);
}
.left {
    transform: perspective(230px) translateY(-2px) translateX(-25px)
        rotateX(6deg) rotateY(-20deg) !important;
}
.right {
    transform: perspective(250px) translateY(-2px) translateX(25px)
        rotateX(8deg) rotateY(20deg) !important;
}
.btn-pink {
    color: #ffffff;
    background-color: #ff00ff;
    border: none;
    border-radius: 20px;
    padding: 12px 24px;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0px 4px 10px rgba(255, 0, 255, 0.4);
    transition: background-color 0.3s ease;
    margin-top: 20px;
}

.btn-pink:hover {
    background-color: #ff66ff;
}
</style>
