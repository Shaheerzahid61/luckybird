<template>
  <div>
    <!-- Conditionally render header, sidebar, and footer based on route -->
    <header v-if="!isAuthRoute" class="shadow-bottom">
      <div class="container-fluid">
        <luckyHeader :isSidebarExpanded="isSidebarExpanded" @toggle-sidebar="toggleSidebar" />
      </div>
    </header>
    <main>
      <div v-if="isLoading" class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <!-- Custom Loading Animation with Dots and Icons -->
        <div class="loading-container">
          <div class="dots" v-if="!isIconVisible">
            <span class="dot dot-1 me-1 text-white"></span>
            <span class="dot dot-2 me-1 text-white"></span>
            <span class="dot dot-3 text-white"></span>
          </div>
          <div class="icons" v-if="isIconVisible">
            <i class="fa-solid fa-chess-king me-1 text-white"></i>
            <i class="fa-solid fa-dice me-1 text-white"></i>
            <i class="fa-solid fa-clover text-white"></i>
          </div>
        </div>
      </div>
      <div v-else class="d-flex overflow-hidden">
        <!-- Sidebar only visible if not on login/register routes -->
        <div v-if="!isAuthRoute" class="sidebar-container flex-shrink-0">
          <sidebar :isSidebarExpanded="isSidebarExpanded" @toggle-sidebar="toggleSidebar" />
        </div>
        <div class="content-container flex-grow-1" :style="{ marginLeft: isAuthRoute ? '0' : '60px' }">
          <!-- Main content -->
          <router-view></router-view>
          <!-- Footer only visible if not on login/register routes -->
          <Footer v-if="!isAuthRoute" />
        </div>
      </div>
      <Authentication />
    </main>
  </div>
</template>

<script>
import { computed, ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import sidebar from './components/sidebar.vue';
import luckyHeader from './components/luckyHeader.vue';
import Authentication from './components/authentication/index.vue';
import Footer from './components/Footer.vue';

export default {
  data() {
    return {
      isSidebarExpanded: false,
      isLoading: true, // Set loading state to true initially
      isIconVisible: false, // To toggle between dots and icons
    };
  },
  methods: {
    toggleSidebar() {
      this.isSidebarExpanded = !this.isSidebarExpanded;
    },
  },
  components: {
    sidebar,
    luckyHeader,
    Authentication,
    Footer,
  },
  name: 'App',
  setup() {
    const route = useRoute();

    // Check if the current route is login or register
    const isAuthRoute = computed(() => ['login', 'register'].includes(route.name));

    return { isAuthRoute };
  },
  mounted() {
    // Simulate a delay to show the loader (you can remove this in production)
    setTimeout(() => {
      this.isLoading = false; // Set loading to false once the page is fully loaded
    }, 2000); // Adjust this timeout to match your loading duration

    // Toggle between dots and icons every 1 second
    setInterval(() => {
      this.isIconVisible = !this.isIconVisible;
    }, 1000); // 1 second interval
  },
};
</script>

<style>
header {
  position: sticky;
  top: 0;
  z-index: 99;
  background-color: #10254a;
}

.sidebar-container {
  width: 60px;
  flex-shrink: 0;
  position: fixed;
  top: 60px;
  z-index: 99;
  height: 100%;
  overflow-y: visible;
}

.content-container {
  flex-grow: 1;
  transition: margin-left 0.3s ease;
}

@media (max-width: 768px) {
  .sidebar-container {
    width: auto;
  }

  .content-container {
    margin-left: 0 !important;
  }
}

/* Styles for the loading container */
.loading-container {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

/* Styles for the bouncing dots */
.dots {
  display: flex;
  gap: 5px;
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: white;
  animation: bounce 1s infinite alternate;
}

.dot-1 {
  animation-delay: 0s;
}

.dot-2 {
  animation-delay: 0.2s;
}

.dot-3 {
  animation-delay: 0.4s;
}

/* Animation for the bouncing dots */
@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-10px);
  }
}

/* Styles for the icons */
.icons {
  display: flex;
  gap: 10px;
  color: white;
  font-size: 24px;
  animation: iconBounce 1s infinite alternate;
}

/* Animation for the icons */
@keyframes iconBounce {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-10px);
  }
}
</style>