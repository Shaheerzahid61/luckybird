<template>
  <div v-if="isVisible" class="modal fade show" id="activeTaskModal" aria-hidden="false" aria-labelledby="activeTaskModalLabel" tabindex="-1" style="display: block;">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="activeTaskModalLabel"><i class="fa-solid fa-shop me-1"></i> Task List</h5>
          <button type="button" class="btn-close btn-close-white" @click="closeModal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Add buttons -->
          <ul class="nav nav-pills justify-content-center mb-3">
            <li class="nav-item">
              <a class="nav-link rounded-pill active" @click="switchToActiveTask" href="javascript:void(0)">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" @click="switchToClaimedTask" href="javascript:void(0)">Claimed</a>
            </li>
          </ul>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div
              class="accordion-item mb-2 border-0"
              v-for="(task, index) in tasks"
              :key="index"
            >
              <h2 class="accordion-header" :id="'flush-heading' + index">
                <button
                  class="accordion-button py-2 collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  :data-bs-target="'#flush-collapse' + index"
                  aria-expanded="false"
                  :aria-controls="'flush-collapse' + index"
                >
                  <div class="small fw-bold">
                    <span>{{ task.title }}</span> <br />
                    <div class="text-success d-flex align-items-center">
                      <img
                        src="assets/images/gold-icon.png"
                        alt="Gold Icon"
                        width="15"
                        class="d-inline-flex me-1"
                      />
                      <span class="me-1">{{ task.goldReward }}</span>
                      <img
                        src="assets/images/usd-icon.webp"
                        alt="USD Icon"
                        width="15"
                        class="d-inline-flex me-1"
                      />
                      <span>{{ task.usdReward }}</span>
                    </div>
                  </div>
                </button>
              </h2>
              <div
                :id="'flush-collapse' + index"
                class="accordion-collapse collapse"
                :aria-labelledby="'flush-heading' + index"
                data-bs-parent="#accordionFlushExample"
              >
                <div class="accordion-body">
                  <p class="small">Mission Target:</p>
                  <ol class="small text-muted">
                    <li v-for="(target, tIndex) in task.targets" :key="tIndex">{{ target }}</li>
                  </ol>
                  <hr class="my-2" />
                  <p class="small">Mission Rewards</p>
                  <div class="my-2">
                    <div class="row">
                      <div class="col-auto">
                        <div class="card position-relative p-1">
                          <img src="assets/images/gold-icon.png" alt="Gold Icons" width="30" />
                          <div class="position-absolute bottom-0 start-0 w-100">
                            <p class="small mb-0 text-center alert-dark lh-1" style="background-color: #00000050;">
                              {{ task.missionReward }}
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary w-100">Go Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  data() {
    return {
      tasks: [
        {
          title: "First Buy Bonus",
          goldReward: 50000,
          usdReward: 50000,
          targets: ["Purchases of more than $20", "Complete KYC verification"],
          missionReward: 500,
        },
        {
          title: "Daily Login Bonus",
          goldReward: 2000,
          usdReward: 100,
          targets: ["Login every day for a week"],
          missionReward: 200,
        },
        {
          title: "Referral Reward",
          goldReward: 10000,
          usdReward: 500,
          targets: ["Refer 5 friends", "Friends must complete their first purchase"],
          missionReward: 1000,
        },
      ],
    };
  },
  methods: {
    closeModal() {
      this.$emit("update:isVisible", false); // Emit event to parent to close modal
    },
    switchToActiveTask() {
      this.$emit("switch-modal", "active"); // Emit event to switch to Buy modal
    },
    switchToClaimedTask() {
      this.$emit("switch-modal", "claimed"); // Emit event to switch to Redeem modal
    },
  },
};
</script>

<style scoped>
.accordion-item .collapse.show {
  visibility: visible;
}
</style>