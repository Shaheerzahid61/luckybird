<template>
  <header class="shadow-bottom">
    <div class="container-fluid">
      <luckyHeader :isSidebarExpanded="isSidebarExpanded" @toggle-sidebar="toggleSidebar" />
    </div>
  </header>
  <main>
    <div class="d-flex overflow-hidden">
      <div class="sidebar-container flex-shrink-0 position-relative">
        <sidebar :isSidebarExpanded="isSidebarExpanded" @toggle-sidebar="toggleSidebar" />
      </div>
      <div class="content-container flex-grow-1">
        <router-view></router-view>
        <Footer/>
      </div>
    </div>
    <Authentication />
  </main>
</template>

<script>
import sidebar from './components/sidebar.vue';
import luckyHeader from './components/luckyHeader.vue';
import Authentication from './components/authentication/index.vue';
import Footer from './components/Footer.vue';

export default {
  data() {
    return {
      isSidebarExpanded: false,
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
    Footer
  },
  name: 'App',
};
</script>

<style>
header {
  background-color: #10254a;
}

.sidebar-container {
  width: 60px; /* Fixed sidebar width */
  flex-shrink: 0; /* Prevent sidebar from shrinking */
}

.content-container {
  flex-grow: 1; /* Ensures the rest of the space is used by the content */
}

@media (max-width: 768px) {
  .sidebar-container {
    width: 100%; /* Sidebar takes full width on smaller screens */
  }

  .content-container {
    display: none; /* Hide the content when sidebar is full-width */
  }
}
</style>
