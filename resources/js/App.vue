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
        <!-- Bootstrap Spinner for Loading -->
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
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
  },
};
</script>

<style>
header {
  position: sticky;
  top: 0;
  z-index: 999;
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
    width: 100%;
  }

  .content-container {
    margin-left: 0 !important;
  }
}
</style>