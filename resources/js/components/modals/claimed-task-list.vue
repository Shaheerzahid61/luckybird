<template>
    <div v-if="isVisible" class="modal fade show" id="claimedTaskModal" aria-hidden="false" aria-labelledby="claimedTaskModalLabel" tabindex="-1" style="display: block;">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="claimedTaskModalLabel"><i class="fa-solid fa-shop me-1"></i> Task List</h5>
            <button type="button" class="btn-close btn-close-white" @click="closeModal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Add buttons -->
            <ul class="nav nav-pills justify-content-center mb-3">
                <li class="nav-item">
                    <a class="nav-link" @click="switchToActiveTask" href="javascript:void(0)">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-lin rounded-pill activek" @click="switchToClaimedTask" href="javascript:void(0)">Claimed</a>
                </li>
            </ul>
            <p class="text-primary fw-bold mb-2"><small>Get 1 treasure chest for every purchase of 10$</small></p>
            <div class="row g-4">
              <!-- Cards for purchase options -->
              <div v-for="(card, index) in cards" :key="index" class="col-6">
                <div class="card small">
                  <div class="card-header border-bottom py-1">
                    <i class="fa-solid fa-dollar-sign text-success me-1"></i> {{ card.freeCash }}
                  </div>
                  <div class="card-body text-center">
                    <img :src="card.image" class="img-fluid mx-auto" :alt="card.altText" width="65">
                    <p class="my-2 fw-bold lh-sm">{{ card.goldAmount }} <br> {{ card.goldText }}</p>
                    <button class="btn btn-primary rounded-1 w-100 fw-bold py-1">{{ card.price }}</button>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-muted py-2 text-center"><small>Maximum purchase of $9000 USD per day.</small></p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import AdBanner from './../sections/ad-landscape-banner.vue';
  
  export default {
    props: {
      isVisible: {
        type: Boolean,
        default: false,
      },
    },
    components: {
      AdBanner,
    },
    data() {
      return {
        cards: [
          {
            freeCash: "10.2 Free SC Cash",
            image: "/assets/images/gold-icon.png",
            altText: "Gold Icons",
            goldAmount: "100,000",
            goldText: "Gold Icons",
            price: "$10",
          },
          {
            freeCash: "20.5 Free SC Cash",
            image: "/assets/images/gold-icon.png",
            altText: "Gold Icons",
            goldAmount: "200,000",
            goldText: "Gold Icons",
            price: "$20",
          },
          {
            freeCash: "30.7 Free SC Cash",
            image: "/assets/images/gold-icon.png",
            altText: "Gold Icons",
            goldAmount: "300,000",
            goldText: "Gold Icons",
            price: "$30",
          },
          {
            freeCash: "50.0 Free SC Cash",
            image: "/assets/images/gold-icon.png",
            altText: "Gold Icons",
            goldAmount: "500,000",
            goldText: "Gold Icons",
            price: "$50",
          },
          {
            freeCash: "100.0 Free SC Cash",
            image: "/assets/images/gold-icon.png",
            altText: "Gold Icons",
            goldAmount: "1,000,000",
            goldText: "Gold Icons",
            price: "$100",
          },
        ],
      };
    },
    methods: {
      closeModal() {
        this.$emit('update:isVisible', false); // Emit event to parent to close modal
      },
      switchToActiveTask() {
        this.$emit('switch-modal', 'active'); // Emit event to switch to Buy modal
      },
      switchToClaimedTask() {
        this.$emit('switch-modal', 'claimed'); // Emit event to switch to Redeem modal
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add custom styles here if needed */
  </style>