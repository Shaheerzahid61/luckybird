<template>
  <header class="header">
    <!-- Left section of the header -->
    <div class="header-left">
      <!-- Logo image -->
      <img src="/image/download.png" alt="LuckyBird Logo" class="logo" />
    </div>
    <!-- Center section of the header -->
    <div class="header-center">
      <!-- Buy button -->
      <button class="btn buy rounded-pill">Buy</button>
      <!-- Redeem button -->
      <button class="btn-dark rounded-pill">Redeem</button>
    </div>
    <!-- Right section of the header -->
    <div class="header-right">
      <!-- Bootstrap dropdown -->
      <div class="dropdown">
        <!-- User icon as dropdown toggle -->
        <button class="btn btn-secondary dropdown-toggle user-icon" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user-circle"></i>
        </button>
        <!-- Dropdown menu -->
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">My Info</a></li>
          <li><a class="dropdown-item" href="#">Setting</a></li>
          <li><a class="dropdown-item" href="#">Vault</a></li>
          <li><a class="dropdown-item" href="#">VIP</a></li>
          <li><a class="dropdown-item" href="#">Transactions</a></li>
          <li><a class="dropdown-item" href="#">Tickets</a></li>
          <li><a class="dropdown-item" href="#">Notice</a></li>
          <li><a class="dropdown-item" href="#">Share</a></li>
          <li><a class="dropdown-item" href="#">Affiliate</a></li>
          <li><a class="dropdown-item" href="#">Install App</a></li>
          <li><a class="dropdown-item" href="#">Live Support</a></li>
          <li><a class="dropdown-item" href="#">Log Out</a></li>
        </ul>
      </div>
    </div>
  </header>
  <Authentication />
</template>
  
  
  <script>
    import Authentication from './authentication/index.vue';
    export default {
      components: {
        Authentication,
      },
      name: "HeaderRight",
    };
  </script>
  
  
  
  <style scoped>
  .user-icon {
  font-size: 24px; /* Adjust size */
  color: white; /* Match your theme */
  cursor: pointer;
}

.user-icon:hover {
  color: #00c86e; /* Add a hover effect */
}
  /* Header container */
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #0b2545; /* Dark navy blue */
    color: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }
  
  /* Left Section */
  .header-left .logo {
    height: 40px;
  }
  
  /* Center Buttons */
  .header-center {
    display: flex;
    gap: 10px;
  }
  
  .btn-green {
    background-color: #00c86e; /* Green */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    color: white;
    cursor: pointer;
  }
  
  .btn-dark {
    background-color: #1a2b49; /* Dark button */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    color: white;
    cursor: pointer;
  }
  
  /* Right Dropdown */
  .header-right {
    position: relative;
  }
  
  .user-icon {
    height: 40px;
    width: 40px;
    cursor: pointer;
  }
  
 /* Dropdown Menu Styles */
/* Customize the user icon */
.user-icon {
  display: flex;
  align-items: center;
  font-size: 24px;
  color: white;
  cursor: pointer;
  border: none;
  background: none;
}

.user-icon:hover {
  color: #00c86e;
}
.buy  {
    background-color: #20e793;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    color: black;
    cursor: pointer;
}
.buy:hover {
    background: #9cfed4;
    color: black;
}
  </style>
  