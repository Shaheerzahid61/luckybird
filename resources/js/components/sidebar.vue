<template>
  <div>
    <!-- Hamburger Menu -->
    <div id="hamburger-menu" @click="toggleSidebar">
      <span class="hamburger-icon">{{ isSidebarExpanded ? '✖' : '☰' }}</span>
    </div>
    <!-- Sidebar -->
    <div :class="['sidebar', { expanded: isSidebarExpanded }]">
      <div id="toggle-btn" @click="toggleSidebar">
        <span id="toggle-icon" class="text-white fs-6">{{ isSidebarExpanded ? '←' : '➔' }}</span>
      </div>
      <ul class="sidebar-menu">
        <li class="nav-item dropdown">
          <a 
            class="nav-link dropdown-toggle" 
            href="#" 
            role="button" 
            data-bs-toggle="dropdown" 
            aria-expanded="false"
          >
            <i class="fa-regular fa-user"></i> <span class="sidebar-menu-text"> Profile</span>
          </a>
          <ul :class="['dropdown-menu', 'dropdown-menu-dark', dropdownAlignmentClass]">
            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user"></i> My Info</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-bell-fill"></i> Notice</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-postcard-heart"></i> VIP</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i> Affiliate</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-tv"></i> Transactions</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-share-fill"></i> Share</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
          </ul>
        </li>
        <hr class="dropdown-divider">
        <li class="nav-item">
          <a href="#"><i class="fa-solid fa-ticket"></i> <span class="sidebar-menu-text">Promotions</span></a>
        </li>
        <li>
          <a href="#"><i class="fa-regular fa-star"></i> <span class="sidebar-menu-text">Favourites</span></a>
        </li>
      </ul>
    </div>
  </div>
</template>

  
<script>
export default {
  data() {
    return {
      isSidebarExpanded: false,
    };
  },
  computed: {
    dropdownAlignmentClass() {
      return this.isSidebarExpanded ? 'dropdown-menu-end' : 'dropdown-menu-start';
    },
  },
  methods: {
    toggleSidebar() {
      this.isSidebarExpanded = !this.isSidebarExpanded;
    },
  },
};
</script>
  
<style scoped>  
  .sidebar {
    position: fixed;
    width: 60px;
    height: 100%;
    background-color: #003366;
    overflow: hidden;
    transition: width 0.3s, display 0.3s;
    z-index: 1000;
  }
  
  .sidebar.expanded {
    width: 200px;
  }
  
  #toggle-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60px;
    background-color: #0b2545;
    cursor: pointer;
  }
  
  .sidebar-menu {
    background-color: rgb(0, 21, 52);
    list-style: none;
    padding: 8px;
    margin: 0;
    height: 100%;
  }
  
  .sidebar-menu li.nav-item, .sidebar-menu li.nav-item.dropdown {
    background-color: rgb(11, 29, 65);
    padding: 10px;
    display: flex;
  }
  .sidebar .sidebar-menu li.nav-item{
    justify-content: center;
  }
  .sidebar.expanded .sidebar-menu li.nav-item{
    justify-content: start;
  }
  .sidebar-menu li.nav-item a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
  }
  
  .sidebar-menu li a .icon {
    font-size: 18px;
    width: 30px;
  }
  
  .sidebar-menu li.nav-item a .sidebar-menu-text {
    margin-left: 10px;
    display: none;
  }
  
  .sidebar.expanded .sidebar-menu li.nav-item a .sidebar-menu-text {
    display: inline;
  }
  
  /* Hamburger Menu Styling */
  #hamburger-menu {
    display: none;
    position: fixed;
    top: 10px;
    left: 10px;
    z-index: 1100;
    background-color: #003366;
    color: white;
    font-size: 24px;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  /* Responsive Design */
  @media (max-width: 768px) {
    .sidebar {
      display: none;
      width: 0;
    }
  
    .sidebar.expanded {
      display: block;
      width: 200px;
    }
  
    #hamburger-menu {
      display: block;
    }
  
    #toggle-btn {
      display: none;
    }
  }
  ul.dropdown-menu.show {
    background: #002645;
}
li.nav-item.dropdown {
    background: rgb(0 21 52);
}
hr.dropdown-divider {
    height: 5px;
}
  </style>
  