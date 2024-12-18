  <template>
    <header>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <a class="navbar-brand" href="#">
                        <img src="/image/download.png" alt="Bootstrap" width="180">
                    </a>
                </div>
                <div class="col-auto">
                    <a href="/">
                        <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="my-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-7 col-sm-9">
            <div class="mb-3">
                <LandscapeAd/>
            </div>
            <!-- Email Input -->
            <div class="mb-3">
              <input
                type="email"
                class="form-control rounded-3 py-2"
                :class="emailClass"
                name="email"
                id="email"
                placeholder="Email Address"
                v-model="email"
                @blur="emailTouched = true"
              />
              <!-- Email Invalid Feedback -->
              <div v-if="emailTouched && !validateEmail()" class="invalid-feedback text-danger d-block">
                Please enter a valid email address (e.g., example@domain.com).
              </div>
            </div>
  
            <!-- Password Input -->
            <div class="mb-3">
              <div class="position-relative">
                <input
                  :type="isPasswordVisible ? 'text' : 'password'"
                  class="form-control rounded-3 py-2"
                  :class="passwordClass"
                  name="password"
                  id="password"
                  placeholder="Password"
                  v-model="password"
                  @blur="passwordTouched = true"
                />
                <!-- Eye Icon -->
                <span
                  class="position-absolute top-50 end-0 translate-middle-y text-dark cursor-pointer"
                  :class="passwordClass === 'is-invalid' ? 'me-5' : 'me-3'"
                  @click="togglePasswordVisibility"
                >
                  <i :class="isPasswordVisible ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'"></i>
                </span>
              </div>
              <!-- Password Validation Message -->
              <div v-if="passwordTouched && !validatePassword()" class="invalid-feedback text-danger d-block">
                <p v-if="!isLengthValid">Password must be 8-20 characters long.</p>
                <p v-else-if="!hasUppercase">Password must include at least one uppercase letter.</p>
                <p v-else-if="!hasNumber">Password must include at least one number.</p>
              </div>
            </div>
  
            <!-- Register Button -->
            <div class="mb-3">
  <button class="btn btn-primary w-100" :disabled="!isFormValid" @click="login">
    Login
  </button>
</div>

            <div class="mb-3 text-center">
                <a href="#" class="link-primary text-decoration-underline">Forgot your password</a>
            </div>
  
            <!-- Divider with Transparent Background -->
            <div class="d-flex align-items-center my-4">
              <hr class="flex-grow-1">
              <div class="px-3 bg-transparent">
                <span>Or Login With Social</span>
              </div>
              <hr class="flex-grow-1">
            </div>

            <center class="mb-3">
                <button class="btn btn-secondary me-2"><i class="fa-brands fa-google"></i></button>
                <button class="btn btn-secondary me-2"><i class="fa-brands fa-facebook-f"></i></button>
                <button class="btn btn-secondary"><i class="fa-brands fa-apple"></i></button>
            </center>

            <p class="text-center">Don't have an account? <a href="/register" class="link-primary text-decoration-underline">Sign up now</a></p>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import axios from 'axios';
  import toastr from 'toastr';
  import 'toastr/build/toastr.min.css';
  import LandscapeAd from './../sections/ad-landscape-banner.vue';
  
  export default {
    components: {
      LandscapeAd,
    },
    data() {
      return {
        email: "",
        password: "",
        isPasswordVisible: false,
        emailTouched: false,
        passwordTouched: false,
      };
    },
    computed: {
      emailClass() {
        return this.emailTouched
          ? this.validateEmail()
            ? "is-valid"
            : "is-invalid"
          : "";
      },
      passwordClass() {
        return this.passwordTouched
          ? this.validatePassword()
            ? ""
            : "is-invalid"
          : "";
      },
      isFormValid() {
        return this.validateEmail() && this.validatePassword();
      },
      isLengthValid() {
        return this.password.length >= 8 && this.password.length <= 20;
      },
      hasUppercase() {
        return /[A-Z]/.test(this.password);
      },
      hasNumber() {
        return /\d/.test(this.password);
      },
    },
    methods: {
      togglePasswordVisibility() {
        this.isPasswordVisible = !this.isPasswordVisible;
      },
      validateEmail() {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return regex.test(this.email);
      },
      validatePassword() {
        return this.isLengthValid && this.hasUppercase && this.hasNumber;
      },
      async login() {
        if (!this.isFormValid) {
          toastr.error('Please fill in valid email and password.');
          return;
        }
  
        try {
          const response = await axios.post('/login', {
            email: this.email,
            password: this.password,
          });
  
          if (response.data.success) {
            toastr.success(response.data.message);
            this.$router.push({ name: 'home' }); // Redirect to dashboard or other routes
          }
        } catch (error) {
          if (error.response.status === 401) {
            toastr.error('Invalid email or password.');
          } else {
            toastr.error('An error occurred. Please try again.');
          }
        }
      },
    },
  };
  </script>
  
  
<style></style>