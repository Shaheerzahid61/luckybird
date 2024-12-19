<template>
  <div class="row align-items-center">
    <div class="col-auto px-0">
      <div id="toggle-btn" @click="$emit('toggle-sidebar')" class="d-none d-md-flex align-items-center cursor-pointer">
        <span v-html="sidebarIcon"></span>
      </div>
    </div>
    <div class="col">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-auto">
            <a class="navbar-brand" href="#">
              <img src="/image/download.png" alt="Logo" class="logo">
            </a>
          </div>
          <div class="col-auto">
            <button @click="isBuyModalVisible = true" class="btn btn-primary rounded-pill me-2" style="width: 80px;">Buy</button>
            <!-- Modals -->
            <buyModalComponent
              :isVisible="isBuyModalVisible"
              @update:isVisible="isBuyModalVisible = $event"
              @switch-modal="handleSwitchModal"
            />
            <button @click="isRedeemModalVisible = true" class="btn btn-light rounded-pill" style="width: 80px;">Redeem</button>
            <redeemModalComponent
              :isVisible="isRedeemModalVisible"
              @update:isVisible="isRedeemModalVisible = $event"
              @switch-modal="handleSwitchModal"
            />
            <!-- Modals -->
            <rainModalComponent
              :isVisible="isRainModalVisible"
              @update:isVisible="isRainModalVisible = $event"
              @switch-modal="handleSwitchModal"
            />
            <!-- Modals -->
            <tipModalComponent
              :isVisible="isTipModalVisible"
              @update:isVisible="isTipModalVisible = $event"
              @switch-modal="handleSwitchModal"
            />
          </div>
          <div class="col-auto">
            <ul class="d-flex list-unstyled">
              <!-- User menu -->
              <li class="nav-item px-2 dropdown">
                <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import buyModalComponent from './modals/buy.vue';
import redeemModalComponent from './modals/redeem.vue';
import rainModalComponent from './modals/rain.vue';
import tipModalComponent from './modals/tip.vue';

export default {
  components: {
    buyModalComponent,
    redeemModalComponent,
    rainModalComponent,
    tipModalComponent,
  },
  data() {
    return {
      isBuyModalVisible: false,
      isRedeemModalVisible: false,
      isRainModalVisible: false,
      isTipModalVisible: false,
    };
  },
  methods: {
    handleSwitchModal(modal) {
      this.isBuyModalVisible = modal === 'buy';
      this.isRedeemModalVisible = modal === 'redeem';
      this.isRainModalVisible = modal === 'rain';
      this.isTipModalVisible = modal === 'tip';
    },
  },
  computed: {
    sidebarIcon() {
      return this.isSidebarExpanded
        ? `<i class="fa-solid fa-left-long" style="color: #ffffff;"></i>`
        : `<i class="fa-solid fa-right-long" style="color: #ffffff;"></i>`;
    },
  },
};
</script>
  
<style scoped>
  #toggle-btn {
    display: flex;
    align-items: center;
    height: 60px;
    width: 60px;
    cursor: pointer;
    padding: 8px 20px;
  }
  header .logo{
    width: 180px;
  }
</style>
  