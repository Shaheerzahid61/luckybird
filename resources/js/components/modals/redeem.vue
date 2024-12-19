<template>
    <div v-if="isVisible" class="modal fade show" id="redeemModal" aria-hidden="false" aria-labelledby="redeemModalLabel" tabindex="-1" style="display: block;">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="redeemModalLabel"><i class="fa-solid fa-shop me-1"></i> Store</h5>
            <div class="d-inline-flex align-items-center">
              <a href="#" class="link-primary text-decoration-underline me-2">Transactions</a> | <a href="#" class="link-primary text-decoration-underline ms-2 me-3">Tickets</a>
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
                <a class="nav-link rounded-pill active"  @click="switchToRedeem" href="javascript:void(0)">Redeem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  @click="switchToRain" href="javascript:void(0)">Rain</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  @click="switchToTip" href="javascript:void(0)">Tips</a>
              </li>
            </ul>
            <div class="d-flex justify-content-center mb-3">
                <select name="coin" id="coin" class="form-select w-50">
                    <option value="BTC" data-icon="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='20' height='20'><path d='M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z'/></svg>">BTC</option>
                    <option value="ETH" data-icon="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='20' height='20'><path d='M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z'/></svg>">ETH</option>
                    <option value="LTC" data-icon="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='20' height='20'><path d='M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z'/></svg>">LTC</option>
                    <option value="XRP" data-icon="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='20' height='20'><path d='M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z'/></svg>">XRP</option>
                    <option value="ADA" data-icon="<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='20' height='20'><path d='M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zM12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z'/></svg>">ADA</option>
                </select>
            </div>
            <div class="card border-danger mb-3">
                <div class="card-body text-center">
                    <h4 class="fs-5 fw-bold"><i class="fa-solid fa-triangle-exclamation me-2"></i> Warning:</h4>
                    <p>You can redeem after <a href="#" class="text-decoration-underline">setting email.</a></p>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label d-flex justify-content-between align-items-center">
                    <div class="col-auto">
                        Amount To Redeem <br>
                        <small class="text-muted">(Min 30SC)</small>
                    </div>
                    <div class="col-auto text-end small">
                        Redeemable <br>
                        <a href="#" class="text-primary text-decoration-underline">0.0000 SC</a> ≈ 0 $
                    </div>
                </label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="mb-3 small">
                <label for="" class="form-label">Bitcoin(BTC) Address</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3 small">
                <span>Transaction Fee:</span> <span><a href="#" class="link-primary">0.00005000</a> BTC</span>
            </div>
            <div class="mb-3 small">
                <label for="" class="form-label d-flex justify-content-between align-items-center"><span>Estimate Receive</span> <span class="float-end text-muted">≈0USDT</span></label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <p class="small">
                        Note: <br>
                        Most redemptions are completed instantly. However, in rare cases, large or suspicious redemptions may require a 1-24 hours review process. Thank you for your patience.
                    </p>
                </div>
            </div>
            <button class="btn btn-primary w-100" disabled>Redeem</button>
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