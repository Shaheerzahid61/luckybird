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
					<!-- Steps -->
					<div class="mb-3">
						<div class="d-flex align-items-center my-4">
							<div class="cursor-pointer" v-if="currentStep !== 1" @click="previousStep">
								<i class="fa-solid fa-arrow-left me-3"></i>
							</div>
							<template v-for="step in [1, 2, 3]" :key="step">
								<div class="d-flex justify-content-center align-items-center border border-1 rounded-circle"
									:class="completedStepClass(step)" style="width: 30px; height: 30px;">
									<i v-if="currentStep > step" class="fa-solid fa-check"></i>
									<span v-else>{{ step }}</span>
								</div>
								<hr v-if="step < 3" class="flex-grow-1 mx-2" :class="currentStep > step ? 'border-success' : ''"/>
							</template>
						</div>
					</div>
					<!-- Step 1: Email and Password -->
					<div v-if="currentStep === 1">
						<div class="mb-3">
							<input type="email" class="form-control rounded-3 py-2" :class="emailClass" name="email" id="email"
								placeholder="Email Address" v-model="email" @blur="emailTouched = true" @focus="clearEmailError"/>
							<div v-if="emailTouched && !validateEmail()" class="invalid-feedback text-danger d-block">
								Please enter a valid email address (e.g., example@domain.com).
							</div>
						</div>
						<div class="mb-3">
							<div class="position-relative">
								<input :type="isPasswordVisible ? 'text' : 'password'" class="form-control rounded-3 py-2"
									:class="passwordClass" name="password" id="password" placeholder="Create Password"
									v-model="password" @blur="passwordTouched = true" @focus="clearPasswordError"/>
								<span class="position-absolute top-50 end-0 translate-middle-y text-dark cursor-pointer"
									:class="passwordClass === 'is-invalid' ? 'me-5' : 'me-3'" @click="togglePasswordVisibility">
								<i :class="isPasswordVisible ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye'"></i>
								</span>
							</div>
							<div id="passwordHelp" class="form-text" v-if="!passwordTouched || validatePassword()">
								8-20 characters. At least one number & one uppercase letter.
							</div>
							<div v-if="passwordTouched && !validatePassword()" class="invalid-feedback text-danger d-block">
								<p v-if="!isLengthValid">Password must be 8-20 characters long.</p>
								<p v-else-if="!hasUppercase">Password must include at least one uppercase letter.</p>
								<p v-else-if="!hasNumber">Password must include at least one number.</p>
							</div>
						</div>
						<div class="mb-3">
							<button class="btn btn-primary w-100" :disabled="currentStep === 1 && !isFormValid" @click="nextStep">
							Next
							</button>
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
							<button class="btn btn-secondary"><i class="fa-brands fa-facebook-f"></i></button>
						</center>
					</div>
					<!-- Step 2: Name and Country -->
					<div v-else-if="currentStep === 2">
						<div class="row mb-3">
							<div class="col">
								<input type="text" class="form-control rounded-3 py-2" name="first_name" id="first_name"
									placeholder="First Name" v-model="firstName" @blur="firstNameTouched = true" :class="firstNameClass" />
								<div v-if="firstNameTouched && !isFirstNameValid" class="invalid-feedback text-danger">
									Minimum 2 letter.
								</div>
							</div>
							<div class="col">
								<input type="text" class="form-control rounded-3 py-2" name="last_name" id="last_name"
									placeholder="Last Name" v-model="lastName" @blur="lastNameTouched = true" :class="lastNameClass" />
								<div v-if="lastNameTouched && !isLastNameValid" class="invalid-feedback text-danger">
									Minimum 2 letter.
								</div>
							</div>
						</div>
						<div class="mb-3">
							<select name="country" id="country" class="form-select rounded-3 py-2" v-model="country" @blur="countryTouched = true" :class="countryClass">
								<option value="">Country Of Residence</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
								<option value="BY">Belarus</option>
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BR">Brazil</option>
								<option value="BN">Brunei</option>
								<option value="BG">Bulgaria</option>
								<option value="BF">Burkina Faso</option>
								<option value="BI">Burundi</option>
								<option value="KH">Cambodia</option>
								<option value="CM">Cameroon</option>
								<option value="CA">Canada</option>
								<option value="CV">Cape Verde</option>
								<option value="KY">Cayman Islands</option>
								<option value="CF">Central African Republic</option>
								<option value="TD">Chad</option>
								<option value="CL">Chile</option>
								<option value="CN">China</option>
								<option value="CO">Colombia</option>
								<option value="KM">Comoros</option>
								<option value="CG">Congo</option>
								<option value="CR">Costa Rica</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CY">Cyprus</option>
								<option value="CZ">Czech Republic</option>
								<option value="DR">Dominican Republic</option>
								<option value="DK">Denmark</option>
								<option value="DJ">Djibouti</option>
								<option value="DM">Dominica</option>
								<option value="EC">Ecuador</option>
								<option value="EG">Egypt</option>
								<option value="SV">El Salvador</option>
								<option value="GQ">Equatorial Guinea</option>
								<option value="ER">Eritrea</option>
								<option value="EE">Estonia</option>
								<option value="SZ">Eswatini</option>
								<option value="ET">Ethiopia</option>
								<option value="FJ">Fiji</option>
								<option value="FI">Finland</option>
								<option value="FR">France</option>
								<option value="GA">Gabon</option>
								<option value="GM">Gambia</option>
								<option value="GE">Georgia</option>
								<option value="DE">Germany</option>
								<option value="GH">Ghana</option>
								<option value="GR">Greece</option>
								<option value="GD">Grenada</option>
								<option value="GT">Guatemala</option>
								<option value="GN">Guinea</option>
								<option value="GW">Guinea-Bissau</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HN">Honduras</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Laos</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libya</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MG">Madagascar</option>
								<option value="MW">Malawi</option>
								<option value="MY">Malaysia</option>
								<option value="MV">Maldives</option>
								<option value="ML">Mali</option>
								<option value="MT">Malta</option>
								<option value="MH">Marshall Islands</option>
								<option value="MR">Mauritania</option>
								<option value="MU">Mauritius</option>
								<option value="MX">Mexico</option>
								<option value="FM">Micronesia</option>
								<option value="MD">Moldova</option>
								<option value="MC">Monaco</option>
								<option value="MN">Mongolia</option>
								<option value="ME">Montenegro</option>
								<option value="MA">Morocco</option>
								<option value="MZ">Mozambique</option>
								<option value="MM">Myanmar</option>
								<option value="NA">Namibia</option>
								<option value="NR">Nauru</option>
								<option value="NP">Nepal</option>
								<option value="NL">Netherlands</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="KP">North Korea</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="QA">Qatar</option>
								<option value="RO">Romania</option>
								<option value="RU">Russia</option>
								<option value="RW">Rwanda</option>
								<option value="KN">Saint Kitts and Nevis</option>
								<option value="LC">Saint Lucia</option>
								<option value="VC">Saint Vincent and the Grenadines</option>
								<option value="WS">Samoa</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome and Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="SO">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="KR">South Korea</option>
								<option value="SS">South Sudan</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syria</option>
								<option value="TW">Taiwan</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania</option>
								<option value="TH">Thailand</option>
								<option value="TL">Timor-Leste</option>
								<option value="TG">Togo</option>
								<option value="TO">Tonga</option>
								<option value="TT">Trinidad and Tobago</option>
								<option value="TN">Tunisia</option>
								<option value="TR">Turkey</option>
								<option value="TM">Turkmenistan</option>
								<option value="TC">Turks and Caicos Islands</option>
								<option value="TV">Tuvalu</option>
								<option value="UG">Uganda</option>
								<option value="UA">Ukraine</option>
								<option value="AE">United Arab Emirates</option>
								<option value="GB">United Kingdom</option>
								<option value="US">United States</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VA">Vatican City</option>
								<option value="VE">Venezuela</option>
								<option value="VN">Vietnam</option>
								<option value="YE">Yemen</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option>
							</select>
							<div v-if="countryTouched && !country" class="invalid-feedback text-danger d-block">
								Please select a country.
							</div>
						</div>
						<!-- Step 2: Name and Country -->
						<div class="row mb-3">
							<div class="col">
								<select name="birth_month" id="birth_month" class="form-select rounded-3 py-2" v-model="birthMonth" @blur="birthMonthTouched = true" :class="birthMonthClass">
									<option value="">Month</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
								<div v-if="birthMonthTouched && !birthMonth" class="invalid-feedback text-danger d-block">
									Please select a Birth month.
								</div>
							</div>
							<div class="col">
								<input type="text" class="form-control rounded-3 py-2" name="birth_day" id="birth_day" placeholder="Day" v-model="birthDay" @blur="birthDayTouched = true" :class="birthDayClass" @input="filterNumbers('birthDay')"/>
								<div v-if="birthDayTouched && !birthDay" class="invalid-feedback text-danger d-block">
									Please select a Birth Day.
								</div>
							</div>
							<div class="col">
								<input type="text" class="form-control rounded-3 py-2" name="birth_year" id="birth_year" placeholder="Year" v-model="birthYear" @blur="birthYearTouched = true" :class="birthYearClass" @input="filterNumbers('birthYear')"/>
								<div v-if="birthYearTouched && !birthYear" class="invalid-feedback text-danger d-block">
									Please select a Birth Year.
								</div>
							</div>
						</div>
						<div class="mb-3">
							<button class="btn btn-primary w-100" :disabled="!isFirstNameValid || !isLastNameValid || !country || !birthMonth || !isBirthDayValid || !isBirthYearValid" @click="nextStep">
							Continue
							</button>
						</div>
					</div>
					<!-- Step 3 Placeholder -->
					<div v-else-if="currentStep === 3">
						<div class="mb-3">
							<label class="form-label">Read and accept the Terms of Service</label>
							<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-dark p-3 rounded-2" tabindex="0" style="max-height: 300px; overflow-y: auto;">
								<h4 id="scrollspyHeading1">First heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading2">Second heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading3">Third heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading4">Fourth heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading5">Fifth heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading6">Sixth heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading7">Seventh heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading8">Eighth heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading9">Ninth heading</h4>
								<p>...</p>
								<h4 id="scrollspyHeading10">Tenth heading</h4>
								<p>...</p>
							</div>
						</div>
						<div class="mb-3">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="1" v-model="termsAccepted" id="readTerms">
								<label class="form-check-label" for="readTerms">
								<small>I am at least 18 years old and by creating an account or using the services provided on McLuck.com, I agree to be bound by the McLuck <a href="#" class="link-primary text-decoration-underline">Terms and Service</a> and <a href="#" class="link-primary text-decoration-underline">Privacy Policy</a></small>
								</label>
							</div>
							<div v-if="birthYearTouched && !birthYear" class="invalid-feedback text-danger d-block">
								Please select the checkbox to start playing.
							</div>
						</div>
						<div class="mb-3">
							<!-- Disable the button if termsAccepted is false -->
							<button class="btn btn-primary w-100" :disabled="!termsAccepted">Play Now</button>
						</div>
					</div>
					<p class="text-center">Already got an account? <a href="/login" class="link-primary text-decoration-underline">Login</a></p>
				</div>
			</div>
		</div>
	</section>
</template>
  
<script>
  import LandscapeAd from "./../sections/ad-landscape-banner.vue";
  
  export default {
    components: {
      LandscapeAd,
    },
    data() {
      return {
        email: "",
        password: "",
        firstName: "",
        lastName: "",
        country: "",
        birthMonth: "",
        birthDay: "",
        birthYear: "",
        isPasswordVisible: false,
        emailTouched: false,
        passwordTouched: false,
        firstNameTouched: false,
        lastNameTouched: false,
        countryTouched: false,
        birthMonthTouched: false,
        birthDayTouched: false,
        birthYearTouched: false,
        termsAccepted: false,
        currentStep: 1,
      };
    },
    computed: {
    emailClass() {
        return this.emailTouched ? (this.validateEmail() ? "is-valid" : "is-invalid") : "";
    },
    passwordClass() {
        return this.passwordTouched ? (this.validatePassword() ? "" : "is-invalid") : "";
    },
    firstNameClass() {
        return this.firstNameTouched ? (this.isFirstNameValid ? "is-valid" : "is-invalid") : "";
    },
    lastNameClass() {
        return this.lastNameTouched ? (this.isLastNameValid ? "is-valid" : "is-invalid") : "";
    },
    countryClass() {
        return this.countryTouched ? (this.country ? "is-valid" : "is-invalid") : "";
    },
    birthMonthClass() {
        return this.birthMonthTouched ? (this.birthMonth ? "is-valid" : "is-invalid") : "";
    },
    birthDayClass() {
        return this.birthDayTouched ? (this.isBirthDayValid ? "is-valid" : "is-invalid") : "";
    },
    birthYearClass() {
        return this.birthYearTouched ? (this.isBirthYearValid ? "is-valid" : "is-invalid") : "";
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
    isFirstNameValid() {
        return this.firstName.length >= 2;
    },
    isLastNameValid() {
        return this.lastName.length >= 2;
    },
    isBirthDayValid() {
        const day = parseInt(this.birthDay);
        return day >= 1 && day <= 31; // Basic validation for day (you can add more checks for specific months later)
    },
    isBirthYearValid() {
        const year = parseInt(this.birthYear);
        return year >= 1900 && year <= new Date().getFullYear(); // Example of a valid year range
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
      nextStep() {
        if (this.currentStep < 3) {
          this.currentStep++;
        }
      },
      previousStep() {
        if (this.currentStep > 1) {
          this.currentStep--;
        }
      },
      completedStepClass(step) {
        if (this.currentStep > step) {
          return "bg-success border-success text-white";
        }
        if (this.currentStep === step) {
          return "border-success text-success";
        }
        return "";
      },
      clearEmailError() {
        this.emailTouched = true;
      },
      clearPasswordError() {
        this.passwordTouched = true;
      },
      filterNumbers(field) {
    // This method will filter out any non-numeric characters
    if (field === 'birthDay') {
      this.birthDay = this.birthDay.replace(/\D/g, ''); // Replace all non-digit characters
    } else if (field === 'birthYear') {
      this.birthYear = this.birthYear.replace(/\D/g, ''); // Replace all non-digit characters
    }
  },
    },
  };
</script>
  
  <style>
  /* Add custom styles if needed */
  </style>  