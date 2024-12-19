<template>
  <div :class="['sidebar', { expanded: isSidebarExpanded }]">
    <ul class="sidebar-menu">
      <!-- Profile menu with dropdown -->
      <li class="nav-item d-block p-2 mb-2">
        <div class="collapsible-header w-100 d-flex justify-content-between align-items-center text-white" @click="toggleMenuDropdown('profileMenu')">
          <span>
            <i class="fa-regular fa-user"></i>
            <span class="sidebar-menu-text">Profile</span>
          </span>
          <span class="ms-1" v-html="getMenuIcon('profileMenu')"></span>
        </div>
        <ul v-show="!collapsedDropdownMenus.profileMenu" class="collapsible-content pt-1 list-unstyled">
          <li class="py-2"><a href="#"><i class="fa-regular fa-user me-1"></i> My Info</a></li>
          <li class="py-2"><a href="#"><i class="bi bi-gear-fill me-1"></i> Settings</a></li>
          <li class="py-2"><a href="#"><i class="bi bi-bell-fill me-1"></i> Notice</a></li>
          <li class="py-2"><a href="#"><i class="bi bi-postcard-heart me-1"></i> VIP</a></li>
          <li class="py-2"><a href="#"><i class="bi bi-people-fill me-1"></i> Affiliate</a></li>
          <li class="py-2"><a href="#"><i class="bi bi-tv me-1"></i> Transactions</a></li>
          <li class="py-2"><a href="#"><i class="bi bi-share-fill me-1"></i> Share</a></li>
          <li class="py-2"><a href="#"><i class="bi bi-box-arrow-right me-1"></i> Logout</a></li>
        </ul>
      </li>
      <!-- Other sidebar items -->
      <li class="nav-item p-2">
        <a href="/promotions">
          <i class="fa-solid fa-ticket"></i>
          <span class="sidebar-menu-text">Promotions</span>
        </a>
      </li>
      <li class="nav-item p-2">
        <a href="#">
          <i class="fa-regular fa-star"></i>
          <span class="sidebar-menu-text">Favourites</span>
        </a>
      </li>
      <li class="nav-item p-2">
        <a href="javascript:void(0)" @click="isActiveTaskModalVisible = true">
          <i class="fa-regular fa-clipboard"></i> 
          <span class="sidebar-menu-text">Task List</span>
        </a>
        <!-- Modals -->
        <activeTaskComponent
          :isVisible="isActiveTaskModalVisible"
          @update:isVisible="isActiveTaskModalVisible = $event"
          @switch-modal="handleSwitchModal"
        />
        <!-- Modals -->
        <claimedTaskComponent
          :isVisible="isClaimedTaskModalVisible"
          @update:isVisible="isClaimedTaskModalVisible = $event"
          @switch-modal="handleSwitchModal"
        />
      </li>
      <li class="nav-item p-2">
        <a href="#">
          <i class="fa-solid fa-faucet"></i>
          <span class="sidebar-menu-text">Faucet</span>
        </a>
      </li>
      <li class="nav-item p-2">
        <a href="#">
          <i class="bi bi-layers-half"></i>
          <span class="sidebar-menu-text">Seed</span>
        </a>
      </li>
      <li class="nav-item p-2">
        <a href="#">
          <i class="fa-solid fa-scale-balanced"></i>
          <span class="sidebar-menu-text">Provably Fair</span>
        </a>
      </li>
      <li class="nav-item p-2 mb-2">
        <a href="#">
          <i class="fa-solid fa-question"></i>
          <span class="sidebar-menu-text">FAQ</span>
        </a>
      </li>
      <li class="nav-item p-2 mb-2">
        <a href="#">
          <i class="bi bi-suit-club"></i>
          <span class="sidebar-menu-text">Originals</span>
        </a>
      </li>
      <li class="nav-item p-2 mb-2">
        <a href="#">
          <i class="bi bi-cash-coin"></i>
          <span class="sidebar-menu-text">Slots</span>
        </a>
      </li>
      <li class="nav-item p-2 mb-2">
        <a href="#">
          <i class="bi bi-joystick"></i>
          <span class="sidebar-menu-text">Classic Slots</span>
        </a>
      </li>
      <li class="nav-item p-2 mb-2">
        <a href="#">
          <i class="bi bi-headset"></i>
          <span class="sidebar-menu-text">Live Support</span>
        </a>
      </li>
      <li class="nav-item p-2 mb-2">
        <a href="#">
          <i class="bi bi-ticket-detailed"></i>
          <span class="sidebar-menu-text">Tickets</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="bottom-fixed-footer">
    <div id="toggle-btn" @click="$emit('toggle-sidebar')" class="d-flex align-items-center cursor-pointer">
      <span v-html="sidebarIcon"></span>
    </div>
  </div>
</template>

<script>
import activeTaskComponent from './modals/active-task-list.vue';
import claimedTaskComponent from './modals/claimed-task-list.vue';
export default {
  props: {
    isSidebarExpanded: Boolean,
  },
  components: {
    activeTaskComponent,
    claimedTaskComponent,
  },
  data() {
    return {
      isActiveTaskModalVisible: false,
      isClaimedTaskModalVisible: false,
      collapsedDropdownMenus: {
        profileMenu: true, // Initially collapsed
      },
    };
  },
  computed: {
    sidebarIcon() {
      return this.isSidebarExpanded
        ? `<i class="fa-solid fa-left-long" style="color: #ffffff;"></i>`
        : `<i class="fa-solid fa-right-long" style="color: #ffffff;"></i>`;
    },
  },
  methods: {
    handleSwitchModal(modal) {
      this.isActiveTaskModalVisible = modal === 'active';
      this.isClaimedTaskModalVisible = modal === 'claimed';
    },
    toggleMenuDropdown(menu) {
      this.collapsedDropdownMenus[menu] = !this.collapsedDropdownMenus[menu];
    },
    getMenuIcon(menu) {
      if (!this.isSidebarExpanded) {
        // If sidebar is collapsed, show left/right arrow
        return this.collapsedDropdownMenus[menu]
          ? `<i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i>`
          : `<i class="fa-solid fa-chevron-left" style="color: #ffffff;"></i>`;
      } else {
        // If sidebar is expanded, show down/up arrow
        return this.collapsedDropdownMenus[menu]
          ? `<i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i>`
          : `<i class="fa-solid fa-chevron-up" style="color: #ffffff;"></i>`;
      }
    },
  },
};
</script>

<style scoped>
  .sidebar {
    width: 60px;
    height: 100%;
    background-color: #003366;
    overflow: hidden;
    transition: width 0.3s ease;
    overflow-y: auto;
  }
  
  .sidebar.expanded {
    width: 200px;
  }
  
  .sidebar .sidebar-menu {
    background-color: rgb(0, 21, 52);
    list-style: none;
    padding: 8px;
    margin: 0;
    height: 100%;
  }
  
  .sidebar .sidebar-menu li.nav-item {
    background-color: rgb(11, 29, 65);
    display: flex;
    justify-content: center;
  }

  .sidebar.expanded .sidebar-menu li.nav-item {
    justify-content: start;
  }
  
  .sidebar .sidebar-menu li.nav-item a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
  }
  
  .sidebar-menu li.nav-item .sidebar-menu-text {
    margin-left: 10px;
    display: none;
  }
  
  .sidebar.expanded .sidebar-menu li.nav-item .sidebar-menu-text {
    display: inline;
  }

  .collapsible-header {
    position: relative;
    cursor: pointer;
  }

  .collapsible-header:hover .collapsible-content {
    display: block; /* Show dropdown when hovered */
  }

  .collapsible-content {
    position: absolute;
    left: 60px;
    background-color: rgb(11, 29, 65);
    padding: 10px 20px;
    border-radius: 5px;
    z-index: 1050;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
  }

  .sidebar.expanded .collapsible-content {
    position: static;
    background-color: transparent;
    box-shadow: none;
    display: block;
    padding: 10px 0px;
  }

  .bottom-fixed-footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 15px 10px;
    background-color: rgb(11, 29, 65);
    display: none;
  }

  @media (max-width: 768px) {
    .sidebar {
      display: none;
      width: 0;
    }

    .sidebar.expanded {
      display: block;
      width: 200px;
    }

    .bottom-fixed-footer {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }
  }
</style>