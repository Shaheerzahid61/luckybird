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
          <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button py-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <div class="small fw-bold">
                    <span>First Buy Bonus</span> <br>
                    <div class="text-success d-flex align-items-center">
                      <img src="assets/images/gold-icon.png" alt="Gold Icon" width="15" class="d-inline-flex me-1" /> 
                      <span class="me-1">50000</span> 
                      <img src="assets/images/usd-icon.webp" alt="Gold Icon" width="15" class="d-inline-flex me-1" /> 
                      <span>50000</span>
                    </div>
                  </div>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="small">Mission Target:</p>
                  <ol class="small text-muted">
                    <li>Purchases of more than $20</li>
                    <li>Complete KYC verification</li>
                  </ol>
                </div>
              </div>
            </div>
          </div> -->
          <div class="accordion">
  <div 
    v-for="(mission, index) in missions" 
    :key="index" 
    class="mission-item">
    <div class="mission-header" @click="toggleMission(index)">
      <div class="mission-title">
        <div class="d-flex">
        <div class="text">
          <i class="fa-solid fa-dollar-sign text-success mr-2"></i>
        50000
        </div>
        <div class="text">
        <img src="assets/images/gold-icon.png" alt="Mission Icon" class="icon ml-2" />
        50000
        </div>
      </div>
        <span>{{ mission.title }}</span>
      </div>
      <button class="toggle-button">
        <span v-if="activeMission === index">&#9650;</span>
        <span v-else>&#9660;</span>
      </button>
    </div>
    <div 
      v-if="activeMission === index" 
      class="mission-content">
      <p class="mission-target-title">Mission target:</p>
      <ul class="mission-targets">
        <li v-for="(target, i) in mission.targets" :key="i">{{ target }}</li>
      </ul>
      <hr class="mb-2">
      <p class="mission-rewards-title">Mission rewards:</p>
      <div class="rewards">
        <span v-for="(reward, i) in mission.rewards" :key="i" class="reward">
          <i :class="reward.icon"></i> {{ reward.amount }}
          <img class="second-img-on ml-2" :src="reward.img"/>
        </span> 
      </div>
      <button class="go-now-button">Go Now</button>
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
    activeMission: null,
    missions: [
      {
        title: "First Buy Bonus",
        icon: "path/to/first-buy-icon.png",
        targets: [
          "Purchases of more than $20",
          "Complete KYC verification"
        ],
        rewards: [
          { icon: "fa-solid fa-dollar-sign", amount: "50000" },
          {  img:"assets/images/gold-icon.png",amount: "5" }
        ]
      },
      {
        title: "Set Up 2FA",
        icon: "path/to/2fa-icon.png",
        targets: ["Enable two-factor authentication"],
        rewards: [
          { icon: "fa-solid fa-dollar-sign", amount: "0.02" }
        ]
      },
      {
        title: "Time-limited wager bonus",
        icon: "path/to/wager-bonus-icon.png",
        targets: ["Complete time-limited wagers"],
        rewards: [
          { icon: "fa-solid fa-dollar-sign", amount: "200000" },
          { img:"assets/images/gold-icon.png", amount: "10" },
          { img:"assets/images/gold-icon.png", amount: "20" }
        ]
      }
    ]
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
    toggleMission(index) {
    this.activeMission = this.activeMission === index ? null : index;
  }
  },
};
</script>

<style scoped>
img.second-img-on {
  width: 16px;
}
.text {
  display: flex;
}
.accordion {
max-width: 600px;
margin: auto;
font-family: Arial, sans-serif;
color: #fff;
background-color: #122852;
border-radius: 8px;
overflow: hidden;
box-shadow: 0 4px 8px #122852;
display: flex;
flex-direction: column;
gap: 10px;
}



.mission-item {
border-bottom: 1px solid #0b1d418c;
}

.mission-header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 15px;
cursor: pointer;
background-color: #0b1d418c;
}

.mission-title {
  display: flex;
  /* align-items: center; */
  flex-direction: column-reverse;
}

.mission-header .icon {
  width: 15px;
  height: 15px;
  margin-right: 10px;
} 

.mission-content {
  padding: 15px;
  background-color: #071127;
}
li {
  color: #3e5a8f;
}

.mission-target-title,
.mission-rewards-title {
font-weight: bold;
margin-bottom: 10px;
}

.mission-targets {
margin: 0 0 15px;
padding: 0;
list-style: none;
}

.mission-targets li {
margin-bottom: 5px;
}

.rewards {
display: flex;
gap: 10px;
margin: 10px 0;
}

.reward {
display: flex;
align-items: center;
}

.reward-icon {
width: 20px;
height: 20px;
margin-right: 5px;
}

.go-now-button[data-v-e3a0ef81] {
  padding: 10px 20px;
  background-color: #20e793;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  color: #000;
  font-weight: bold;
  font-size: 14px;
  width: 100%;
}

.go-now-button:hover {
background-color: #9cfed4;
}
.modal-content {
  width: 100%;
  max-width: 800px;
  min-width: 600px;
  background: #122852;

}
i.fa-solid.fa-dollar-sign.text-success.mr-2 {
  margin-top: 5px;
}
</style>