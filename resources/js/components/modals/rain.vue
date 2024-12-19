<template>
    <div v-if="isVisible" class="modal fade show" id="rainModal" aria-hidden="false" aria-labelledby="rainModalLabel" tabindex="-1" style="display: block;">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="rainModalLabel"><i class="fa-solid fa-shop me-1"></i> Store</h5>
            <div class="d-inline-flex align-items-center">
              <a href="#" class="link-primary text-decoration-underline me-3">Rain Transactions</a>
              <button type="button" class="btn-close btn-close-white" @click="closeModal" aria-label="Close"></button>
            </div>
          </div>
          <div class="modal-body">
            <!-- Add buttons -->
            <ul class="nav nav-pills justify-content-center mb-3">
                <li class="nav-item">
                    <a class="nav-link" @click="switchToBuy" href="javascript:void(0)">Buy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  @click="switchToRedeem" href="javascript:void(0)">Redeem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill active"  @click="switchToRain" href="javascript:void(0)">Rain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  @click="switchToTip" href="javascript:void(0)">Tips</a>
                </li>
            </ul>
            <div class="mb-3">
                <label for="" class="form-label d-flex justify-content-between align-items-center small">
                    <div class="col-auto">
                        Rain Amount
                    </div>
                    <div class="col-auto text-end text-muted">
                        0.1SC - 100SC
                    </div>
                </label>
                <div class="input-group mb-3">
                    <select name="" id="" class="form-select">
                        <option value="">SC</option>
                        <option value="">GC</option>
                    </select>
                    <input type="text" class="form-control w-75 text-end" id="" name="" value="0">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label d-flex justify-content-between align-items-center small">
                    <div class="col-auto">
                        Player Number
                    </div>
                    <div class="col-auto text-end text-muted">
                        5-30
                    </div>
                </label>
                <div class="input-group mb-3">
                    <select name="" id="" class="form-select">
                        <option value="">All</option>
                        <option value="">VIP Only</option>
                    </select>
                    <input type="text" class="form-control w-75 text-end" id="" name="" value="10">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label small">Message</label>
                <select name="" id="" class="form-select">
                    <option value="Good Luck Every One!">Good Luck Every One!</option>
                    <option value="I won a lot, feeling great!">I won a lot, feeling great!</option>
                    <option value="This site is amazing">This site is amazing</option>
                    <option value="Love you so much">Love you so much</option>
                    <option value="What a day of luck">What a day of luck</option>
                    <option value="Winner winner bird dinner">Winner winner bird dinner</option>
                </select>
            </div>
            <button class="btn btn-primary w-100">Pour Rain</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      isVisible: {
        type: Boolean,
        default: false,
      },
    },
    methods: {
      closeModal() {
        this.$emit('update:isVisible', false); // Emit event to parent to close modal
      },
      switchToBuy() {
        this.$emit('switch-modal', 'buy'); // Emit event to switch to Buy modal
      },
      switchToRedeem() {
        this.$emit('switch-modal', 'redeem'); // Emit event to switch to Redeem modal
      },
      switchToRain() {
        this.$emit('switch-modal', 'rain'); // Emit event to switch to Redeem modal
      },
      switchToTip() {
        this.$emit('switch-modal', 'tip'); // Emit event to switch to Redeem modal
      },
    },
  };
  </script>  

<style scoped>
/* Style the select box */
.custom-select select {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  background-color: #fff;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  font-size: 16px;
}

/* Add a background image for each option */
.custom-select select option {
  background-size: 20px 20px;
  background-repeat: no-repeat;
  background-position: left center;
  padding-left: 30px; /* Space for the image */
}

/* Example background images for options */
.custom-select select option[value="BTC"] {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z"/></svg>');
}

.custom-select select option[value="ETH"] {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z"/></svg>');
}

.custom-select select option[value="LTC"] {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z"/></svg>');
}

.custom-select select option[value="XRP"] {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z"/></svg>');
}

.custom-select select option[value="ADA"] {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z"/></svg>');
}
</style>