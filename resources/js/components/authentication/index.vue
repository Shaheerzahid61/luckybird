<template>
    <div>
      <!-- Sign Up Modal -->
      <div v-if="isSignupModalOpen" class="modal fade show" id="signupModal" aria-hidden="false" aria-labelledby="signupModalLabel" tabindex="-1" style="display: block;">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="border-bottom mb-3">
                    <button class="btn btn-nav active" @click="openSignupModal">Sign Up</button>
                    <button class="btn btn-nav" @click="openSigninModal">Sign In</button>
                  </div>
                  <form @submit.prevent="submitSignup">
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="acceptAdultery" id="acceptAdultery" checked>
                        <label class="form-check-label" for="acceptAdultery">
                          I am at least 18 years old and not a resident of the restricted states.
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="acceptPolicies" id="acceptPolicies" checked>
                        <label class="form-check-label" for="acceptPolicies">
                          I accept the Luckybird <a href="#" class="link-primary">Terms of Use</a> and <a href="#" class="link-primary">Privacy Policy</a>.
                        </label>
                      </div>
                    </div>
                    <div class="mb-3 border-top pt-3">
                      <button class="btn btn-primary w-100" type="submit">Signup</button>
                    </div>
                  </form>
                </div>
                <div class="col-md-6">
                  <img src="https://luckybird.io/img/back.47e88397.png" alt="login/register" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Sign In Modal -->
      <div v-if="isSigninModalOpen" class="modal fade show" id="signinModal" aria-hidden="false" aria-labelledby="signinModalLabel" tabindex="-1" style="display: block;">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="border-bottom mb-3">
                    <button class="btn btn-nav" @click="openSignupModal">Sign Up</button>
                    <button class="btn btn-nav active" @click="openSigninModal">Sign In</button>
                  </div>
                  <form @submit.prevent="submitSignin">
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="mb-3 border-top pt-3">
                      <button class="btn btn-primary w-100" type="submit">Signin</button>
                    </div>
                  </form>
                </div>
                <div class="col-md-6">
                  <img src="https://luckybird.io/img/back.47e88397.png" alt="login/register" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "Authentication",
    data() {
      return {
        isSignupModalOpen: false,  // Sign Up Modal is open by default
        isSigninModalOpen: false // Sign In Modal is closed by default
      };
    },
    methods: {
      openSignupModal() {
        this.isSignupModalOpen = true;
        this.isSigninModalOpen = false;
      },
      openSigninModal() {
        this.isSigninModalOpen = true;
        this.isSignupModalOpen = false;
      },
      submitSignup() {
        // Handle signup form submission
      },
      submitSignin() {
        // Handle signin form submission
      }
    }
  };
  </script>
  
  <style scoped>
  #signupModal .modal, #signinModal .modal {
    display: none;
    transition: opacity 0.3s ease;
  }
  
  #signupModal .modal.show, #signinModal .modal.show {
    display: block;
    opacity: 1;
  }
  #signupModal .modal-content, #signinModal .modal-content{
    background-color: #10254a;
    color: #fff;
  }
  #signupModal .btn-nav, #signinModal .btn-nav{
    border: 0;
    color: rgb(111, 125, 152);
    font-size: 25px;
    border-radius: 0;
    font-weight: 600;
  }
  #signupModal .btn-nav.active, #signinModal .btn-nav.active{
    color: #fff;
    border-bottom: 2px solid #20e793;
    font-size: 22px;
  }
  </style>  