<template>
  <div class="container">
    <!-- Add an image to the container -->
    <img src="Screenshot 2024-11-08 175226.png" alt="" />

    <!-- Create a row to hold the columns -->
    <div class="row">
      <!-- Create a column to hold the image and login form -->
      <div class="col-md-6">
        <!-- Add an image to the column -->
        <img src="main.png" alt="" class="main-image" />
      </div>

      <!-- Spacer Column -->
      <div class="col-md-2" style="display: flex">&nbsp; &nbsp; &nbsp;</div>

      <!-- Create a column to hold the background image -->
      <div class="col-md-4">
        <div class="background-image">
          <div class="image-color">
            <!-- Login Form Heading -->
            <div class="auth-form-heading-box">
              <h3 class="auth-form-heading">Login</h3>
            </div>

            <!-- Login Form Container -->
            <div class="login-container">
              <!-- Email Input Field -->
              <div class="input-group email-back">
                <input type="email" placeholder="Email" v-model="email" class="form-input" />
              </div>

              <!-- Password Input Field with Icon and Eye Toggle -->
              <div class="input-group pass-back">
                <input
                  :type="passwordFieldType"
                  placeholder="Password"
                  v-model="password"
                  class="form-input"
                />
                <i
                  :class="toggleIcon"
                  @click="togglePassword"
                ></i>
              </div>
            </div>

            <!-- Forgot Password Link -->
            <div class="forgot-password">
              <span class="psw"><a href="#">Forgot password?</a></span>
            </div>

            <!-- OR Divider -->
            <div class="or-text-box">
              <span class="horizontal-line left-line"></span>
              <span class="text">or</span>
              <span class="horizontal-line right-line"></span>
            </div>

            <!-- Google Signup -->
            <div class="sign-up">
              <i class="fa-brands fa-google"></i>
              <button type="button" class="sign-up-btn">Signup with Google</button>
            </div>

            <!-- Sign-In Button -->
            <button type="button" class="btn-signin">Sign In</button>
          </div>

          <!-- Sign-Up Prompt -->
          <div class="form-text-box">
            <p class="form-text">
              Don’t have an account?
              <a class="text-link" href="">Sign up</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
      isPasswordVisible: false,
    };
  },
  computed: {
    passwordFieldType() {
      return this.isPasswordVisible ? 'text' : 'password';
    },
    toggleIcon() {
      return this.isPasswordVisible ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye';
    },
  },
  methods: {
    togglePassword() {
      this.isPasswordVisible = !this.isPasswordVisible;
    },
  },
};
</script>

<style scoped>
/* Wrapper for all login styles */
.login-wrapper * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

.login-container {
  /* background: linear-gradient(145deg, #2a2a3b, #191927); */
  padding: 2rem;
  border-radius: 12px;
  /* box-shadow: 0 4px 30px rgba(0, 0, 0, 0.4); */
  text-align: center;
  width: 300px;
  /* color: #ffffff; */
  position: relative;
}

.login-container h2 {
  color: #35ff99;
  font-size: 1.5em;
  margin-bottom: 1rem;
}

.login-form {
  display: flex;
  flex-direction: column;
}
h3.auth-form-heading {
  color: white;
}
.input-group {
  display: flex;
  align-items: center;
  /* background-color: #292841; */
  margin-bottom: 1rem;
  padding: 0.5rem;
  border-radius: 8px;
  position: relative;
}

.input-group .icon {
  color: #ff2cfb;
  font-size: 1.2em;
  margin-right: 0.5rem;
}

.input-group input {
  border: none;
  outline: none;
  background: transparent;
  color: #ffffff;
  width: 100%;
  margin-left: 46px;
}

.show-password {
  color: #ff2cfb;
  font-size: 1.2em;
  cursor: pointer;
}

.forgot-password {
  text-align: right;
  font-size: 0.8em;
  margin-bottom: 1rem;
}

.forgot-password a {
  color: #7777ff;
  text-decoration: none;
}

.or-divider {
  color: #ffffff;
  opacity: 0.7;
  font-size: 0.8em;
  margin: 0.5rem 0;
  position: relative;
}

.or-divider:before,
.or-divider:after {
  content: '';
  display: inline-block;
  width: 40%;
  height: 1px;
  background-color: #666;
  vertical-align: middle;
}

.or-divider:before {
  margin-right: 0.5rem;
}

.or-divider:after {
  margin-left: 0.5rem;
}

.google-login {
  background-color: #ffdf4f;
  color: #333;
  padding: 0.5rem;
  border-radius: 8px;
  margin-bottom: 1rem;
  border: none;
  cursor: pointer;
  font-weight: bold;
}

.login-button {
  background-color: #35ff99;
  color: #000;
  padding: 0.6rem;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
  position: relative;
  box-shadow: 0 0 10px #35ff99;
}

.login-button:hover {
  background-color: #2ed489;
  box-shadow: 0 0 15px #35ff99;
}

.signup-option {
  font-size: 0.9em;
  margin-top: 1rem;
}

.signup-option a {
  color: #ff2cfb;
  text-decoration: none;
  font-weight: bold;
}

.signup-option a:hover {
  text-decoration: underline;
}
.container{

 width: 100%;
  background-image: url(auth-bg-img.cc65ee7b.png);
}
.login-wrapper {
  display: flex;
  justify-content: space-evenly;
}
img.main-image {
  width: 100%;
}
.background-image {
  background-position: center;
  background-image: url(without\ background.png);
  /* aspect-ratio: 51 / 61; */
  height: 100%;
  width: 115%;
  background-repeat: no-repeat;
  /* padding: 5rem 4rem 0; */
  background-size: contain;
  /* background: linear-gradient(-25deg, var(--primaryMain-150), var(--primaryMain-100), var(--primaryLight-50), var(--primaryLight-50), transparent); */
  /* backdrop-filter: blur(10px);*/
}

/* Auth form heading box styling */
.auth-form-heading-box {
  width: fit-content;
  z-index: 0;
  padding: .25rem .75rem;
  margin-left: auto;
  position: relative;
  margin-top: 77px;
  margin-right: 50px;
}

/* Auth form heading with unique text glow animation */
.auth-form-heading {
  font-size: 2rem;
  color: #ffffff;
  text-align: center;
  animation: greenGlowText 1.5s ease-in-out infinite;
}

/* Keyframe for the text glow */
@keyframes greenGlowText {
  0% {
    text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 15px #00ff00;
  }
  50% {
    text-shadow: 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00;
  }
  100% {
    text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 15px #00ff00;
  }
}

/* Create the diagonal cut */
/*  */
.login-container {
  width: 300px;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.input-group.email-back  {
  position: relative;
  background-image: url('image-removebg-preview.png');
  background-size: cover;
  padding: 17px;
  display: flex;
  align-items: center;
  border-radius: 5px;
  width: 300px;
}
.input-group.pass-back  {
  position: relative;
  background-image: url('pass_background-removebg-preview.png');
  background-size: cover;
  padding: 17px;
  display: flex;
  align-items: center;
  border-radius: 5px;
  width: 300px;
}
input#password {
  width: 60%;
}
.input-group i {
  color: #fff;
  margin-right: 10px;
}

.form-input {
  border: none;
  outline: none;
  background: transparent;
  color: #fff;
  flex-grow: 1;
  padding: 5px;
  font-size: 16px;
}

.form-input::placeholder {
  color: #ccc;
}

.toggle-password {
  cursor: pointer;
  color: #fff;
}
.forgot-password {
  color: white;
  font-size: 15px;
  margin: -50px 95px 0px 0px;
}
/* span.text {
  color: var(--operaMauve-1000);
  font-size: 1.375rem;
  font-weight: 500;
  line-height: 1.2;
  text-align: center;
  display: block;
} */
span.horizontal-line.left-line {
  color: white;
  width: 50%;
  height: 1px;
  /* background-color: var(--operaMauve-1000); */
  display: block;
}
.sign-up-btn{
  color: white;
  border: solid 1px var(--operaMauve-1000);
  background-color: transparent;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 20px;
  margin: 0px 15px;
}
span.horizontal-line.right-line {
  color: white;
  width: 50%;
  height: 1px;
}

/* span.text {
  font-family: CevicheOne;
  color: var(--deepJungleGreen-1000);
  font-size: 1.875rem;
  font-weight: 400;
  line-height: 1;
  text-align: center;
} */

.or-text-box {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.horizontal-line {
  flex-grow: 1;
  height: 1px;
  background-color: #ccc; /* Adjust color as needed */
}

span.text {
  font-family: 'CevicheOne', sans-serif; /* Ensure font is loaded */
  color: var(--operaMauve-1000); /* Update with desired color variable or hex code */
  font-size: 1.375rem;
  font-weight: 500;
  line-height: 1.2;
  text-align: center;
  display: inline-block;
}
span.text {
  color: white;
}
.or-text-box {
  width: 88%;
  margin-left: 25px;
  margin-top: 10px;
}
.sign-up {
  border: 1px solid #b8c94e;
  background: #474b25;
  width: 48%;
  margin-left: 90px;
  border-radius: 10px;
  width: 58%;
  margin-top: 10px;
}
i.fa-brands.fa-google {
  color: #e6e96c;
  font-size: 20px;
}
button.sign-up-btn {
  margin: 0px;
}
button.sign-up-btn {
  color: #e6e96c;
}
button.btn.sign-up-btn {
  color: #e6e96c;
  padding: 5px;
  margin: 0px;
}
button.sign-up-btn {
  background-color: #474b25;
  border: 1px solid #b8c94e;
  color: #e6e96c;
  border-radius: .75rem;
  font-size: 1rem;
  font-size: 1rem;
  font-weight: 500;
  width: 100%;
  height: auto;
  padding: 1rem;
  transition: all .2s ease-in-out;
  line-height: 1.4;
}
.sign-up {
  width: 100%;
  max-width: 20.125rem;
  margin: 1.25rem auto 0;
}




@keyframes greenGlowButton {
  0% {
    box-shadow: 0 0 5px #6ef4c4, 0 0 10px #009289, 0 0 15px #09726c;
  }
  50% {
    box-shadow: 0 0 20px #6ef4c4, 0 0 30px #009289, 0 0 40px #09726c;
  }
  100% {
    box-shadow: 0 0 5px #6ef4c4, 0 0 10px #009289, 0 0 15px #09726c;
  }
}

.btn-signin {
  background: linear-gradient(145deg, #6ef4c4, #009289);
  color: #ffffff;
  border: none;
  padding: 14px 35px;
  border-radius: 20px 14px 20px 14px; /* Asymmetric rounded corners */
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.4);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  transform: perspective(200px) translateY(-2px) rotateX(7deg) rotateY(-2deg); /* Subtle 3D tilt */
}

.btn-signin:hover {
  transform: perspective(200px) translateY(-4px) rotateX(7deg) rotateY(-2deg);
  animation: greenGlowButton 0.8s infinite alternate;
}

button.btn-signin {
  margin: 25px 0px 0px 162px;
  width: 38%;
}

.form-text-box {
  display: flex;
  justify-content: flex-end;
}
a.text-link {
  color: var(--primaryMain-1000);
  font-weight: 700;
  transition: all .2s ease-in-out;
  color: purple;
}
p.form-text {
  color: white;
}
.form-text-box {
  font-size: 20px;
  margin: -40px 0px 0px -75px;
}





@media (min-width: 768px) {
  .container, .container-md, .container-sm {
      max-width: 100%;
  }
}

@media (min-width: 768px) {
  .col-md-4 {
      flex: 0 0 auto;
      width: 33.33333333%;
      text-align: center;
      padding: 2%;
      display: flex;
      /* margin: 0px 7px; */
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
  }
}
@media (min-width: 1200px) {
  .container{
    max-width: 100% !important;
    }
}
/* Extra Small Devices (Mobile S, 320px and up) */
@media (max-width: 320px) {
  /* Styles specific to mobile S */
  .login-container {
    width: 100%;
    padding: 1rem;
  }

  .auth-form-heading {
    font-size: 1.2rem;
  }

  .input-group {
    padding: 0.4rem;
  }

  .btn-signin,
  .sign-up {
    width: 100%;
    padding: 0.5rem;
    font-size: 0.9rem;
  }
}

/* Small Devices (Up to 480px) */
@media (max-width: 480px) {
  /* Styles specific to small mobile devices */
  .login-container {
    width: 90%;
    margin: 0 auto;
  }

  .auth-form-heading {
    font-size: 1.4rem;
  }

  .input-group {
    padding: 0.5rem;
  }

  .btn-signin,
  .sign-up {
    width: 100%;
    padding: 0.6rem;
    font-size: 1rem;
  }

  .forgot-password {
    font-size: 0.75rem;
  }
}

/* Medium Devices (Up to 768px) */
@media (max-width: 768px) {
  /* Styles for tablets and larger mobile devices */
  .login-container {
    width: 80%;
    padding: 1.5rem;
    margin: 0 auto;
  }

  .auth-form-heading {
    font-size: 1.6rem;
  }

  .input-group {
    width: 100%;
    padding: 0.6rem;
  }

  .forgot-password {
    font-size: 0.8rem;
    text-align: left;
  }

  .btn-signin,
  .sign-up {
    width: 100%;
    margin-top: 10px;
    padding: 0.8rem;
    font-size: 1.1rem;
  }
}

/* Large Devices (Up to 1024px) */
@media (max-width: 1024px) {
  /* Styles for smaller desktops or larger tablets */
  .login-container {
    width: 70%;
    padding: 2rem;
  }

  .auth-form-heading {
    font-size: 1.8rem;
  }

  .btn-signin,
  .sign-up {
    width: 100%;
    padding: 1rem;
  }
}

/* Larger Devices (Up to 1345px) */
@media (max-width: 1345px) {
  /* Styles for desktops close to 1345px width */
  .login-container {
    width: 60%;
    padding: 2rem;
  }

  .auth-form-heading {
    font-size: 2rem;
  }

  .input-group {
    width: 100%;
    padding: 0.7rem;
  }

  .btn-signin,
  .sign-up {
    width: 80%;
    margin: 0 auto;
    padding: 1rem;
    font-size: 1.2rem;
  }
}
</style>
