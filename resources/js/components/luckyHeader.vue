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
            <button class="btn btn-primary rounded-pill me-2" style="width: 80px;">Buy</button>
            <button class="btn btn-light rounded-pill" style="width: 80px;">Redeem</button>
          </div>
          <div class="col-auto">
            <ul class="d-flex list-unstyled">
              <li class="nav-item px-2">
          <a class="nav-link" href="/register">Join Now</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="/login">Login</a>
        </li>
              <li class="nav-item px-2 dropdown">
                <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu">
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
                  <li><hr class="dropdown-divider"></li>
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
    export default {
      props: {
        isSidebarExpanded: Boolean,
      },
      computed: {
        sidebarIcon() {
          return this.isSidebarExpanded
            ? `<i class="fa-solid fa-left-long" style="color: #ffffff;"></i>`
            : `<i class="fa-solid fa-right-long" style="color: #ffffff;"></i>`;
        },
      },
      name: "HeaderRight",
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
  