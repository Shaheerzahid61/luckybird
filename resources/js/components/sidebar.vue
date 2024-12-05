<template>
    <div>
      <!-- Hamburger Menu -->
      <div id="hamburger-menu" @click="toggleSidebar">
        <span class="hamburger-icon">{{ isSidebarExpanded ? '✖' : '☰' }}</span>
      </div>
  
      <!-- Sidebar -->
      <div :class="['sidebar', { expanded: isSidebarExpanded }]">
        <div id="toggle-btn" @click="toggleSidebar">
          <span id="toggle-icon">{{ isSidebarExpanded ? '←' : '➔' }}</span>
        </div>
        <ul class="menu">
          <li class="nav-item dropdown color-change">
  <a 
    href="#" 
    class="nav-link dropdown-toggle" 
    id="profileDropdown" 
    role="button" 
    data-bs-toggle="dropdown" 
    aria-expanded="false"
  >
    <i class="fa-regular fa-user"></i> <span class="text">Profile</span>
  </a>
  <ul class="dropdown-menu" aria-labelledby="profileDropdown">
    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user"></i> My Info</a></li>
    <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i>Settings</a></li>
    <li><a class="dropdown-item" href="#"><i class="bi bi-bell-fill"></i>Notice</a></li>
    <li><a class="dropdown-item" href="#"><i class="bi bi-postcard-heart"></i>VIP</a></li>
    <li><a class="dropdown-item" href="#"><i class="bi bi-people-fill"></i>Affiliate</a></li>
    <li><a class="dropdown-item" href="#"><i class="bi bi-tv"></i>Transactions</a></li>
    <li><a class="dropdown-item" href="#"><i class="bi bi-share-fill"></i>Share</a></li>
    <hr class="dropdown-divider">
    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
  </ul>
</li>
<hr class="dropdown-divider">
<div class="color-change">
          <li>
            <a href="#"><i class="fa-solid fa-ticket"></i> <span class="text">Promotions</span></a>
          </li>
          <li>
            <a href="#"><i class="fa-regular fa-star"></i> <span class="text">Favourites</span></a>
          </li>
          <li>
            <a href="#"><i class="fa-regular fa-clipboard"></i> <span class="text">Task List</span></a>
          </li>
          <li>
            <a href="#"><i class="fa-solid fa-faucet"></i> <span class="text">Faucet</span></a>
          </li>
          <li>
            <a href="#"><i class="fa-sharp fa-thin fa-treasure-chest"></i> <span class="text">Chest & Card</span></a>
          </li>
          <li>
            <a href="#"><i class="fa-duotone fa-thin fa-peapod"></i> <span class="text">Seed</span></a>
          </li>
          <li>
            <a href="#"><i class="fa-solid fa-question"></i> <span class="text">FAQ</span></a>
          </li>
        </div>
        <hr class="dropdown-divider">

        <div class="color-change">
          
          <li>
            <a href="#"><i class="icon"></i> <span class="text">Originals</span></a>
          </li>
        </div>
        <hr class="dropdown-divider">

        <div class="color-change">
          <li>
            <a href="#"><i class="icon"></i> <span class="text">Originals</span></a>
          </li>
        </div>
        <hr class="dropdown-divider">

        <div class="color-change">
          <li>
            <a href="#"><i class="icon"></i> <span class="text">Originals</span></a>
          </li>
        </div>
        <hr class="dropdown-divider">

        <div class="color-change">
          <li>
            <a href="#"><i class="icon"></i> <span class="text">Originals</span></a>
          </li>
        </div>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isSidebarExpanded: false
      };
    },
    methods: {
      toggleSidebar() {
        this.isSidebarExpanded = !this.isSidebarExpanded;
      }
    }
  };
  </script>
  
  <style scoped>
  /* General Body and Sidebar Styling */
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }
  
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
    background-color: #002244;
    padding: 10px;
    cursor: pointer;
    text-align: center;
  }
  
  #toggle-icon {
    color: white;
    font-size: 18px;
  }
  
  .menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .menu li {
    padding: 10px;
    text-align: left;
  }
  
  .menu li a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
  }
  
  .menu li a .icon {
    font-size: 18px;
    width: 30px;
  }
  
  .menu li a .text {
    margin-left: 10px;
    display: none;
  }
  
  .sidebar.expanded .menu li a .text {
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
.color-change {
    background: rgb(0 21 52);
}
hr.dropdown-divider {
    height: 5px;
}
  </style>
  