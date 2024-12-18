<template>
    <div>
      <!-- Sign Up Modal -->
      <!-- <div v-if="isSignupModalOpen" class="modal fade show" id="signupModal" aria-hidden="false" aria-labelledby="signupModalLabel" tabindex="-1" style="display: block;">
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
      </div> -->

      <!-- Sign In Modal -->
      <div v-if="isSigninModalOpen" class="modal fade show" id="signinModal" aria-hidden="false" aria-labelledby="signinModalLabel" tabindex="-1" style="display: block;">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="border-bottom mb-3">
                    <!-- <button class="btn btn-nav" @click="openSignupModal">Sign Up</button> -->
                    <button class="btn btn-nav active" @click="openSigninModal">Sign In</button>
                  </div>
                  <form @submit.prevent="submitSignin">
  <div class="mb-3">
    <label for="username" class="form-label">Email</label>
    <input 
      type="email" 
      class="form-control" 
      name="email" 
      id="email" 
      placeholder="Email" 
      v-model="signinForm.username" 
    />
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input 
      type="password" 
      class="form-control" 
      name="password" 
      id="password" 
      placeholder="Password" 
      v-model="signinForm.password" 
    />
  </div>
  <div class="mb-3 border-top pt-3">
    <button class="btn btn-primary w-100" type="submit" :disabled="!isFormValid">Signin</button>
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
import axios from "axios";
import toastr from "toastr";
import "toastr/build/toastr.min.css";

export default {
  name: "Authentication",
  data() {
    return {
      isSignupModalOpen: false, // Sign Up Modal is closed by default
      isSigninModalOpen: true, // Sign In Modal is open by default
      signupForm: {
        email: "",
        password: "",
        firstName: "",
        lastName: "",
      },
      signinForm: {
        username: "",
        password: "",
      },
    };
  },
  computed: {
  isFormValid() {
    return this.signinForm.username.trim().length > 0 && this.signinForm.password.trim().length > 0;
  },
},
methods: {
  async submitSignin() {
    // Ensure form is valid
    if (!this.isFormValid) {
      toastr.error("Please fill in both email and password.");
      return;
    }

    try {
      const response = await axios.post("/login", {
        email: this.signinForm.username, // Assuming 'username' is the email
        password: this.signinForm.password,
      });

      if (response.data.success) {
        toastr.success("Signin successful!");
        this.isSigninModalOpen = false;
        this.$router.push({ name: "Home" }); // Redirect to the dashboard route
      } else {
        toastr.error(response.data.message || "Invalid credentials.");
      }
    } catch (error) {
      console.error(error);
      if (error.response.status === 401) {
        toastr.error("Invalid email or password.");
      } else {
        toastr.error("An error occurred. Please try again.");
      }
    }
  },
},

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
