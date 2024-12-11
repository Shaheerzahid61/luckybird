<template>
    <div class="faq-container">
        <!-- Tabs Header -->
        <h1><i class="bi bi-gear-fill"></i> Setting</h1>
        <div class="row main-faq">
            <div class="col-md-3">
                <div class="faq-tabs">
                    <div
                        v-for="(tab, index) in tabTitles"
                        :key="index"
                        :class="['faq-tab', { active: currentTab === index }]"
                        @click="currentTab = index"
                    >
                        {{ tab }}
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="faq-content">
                    <div v-show="currentTab === 0">
                        <div class="container my-5">
                            <div class="form-box mx-auto">
                                <form>
                                    <!-- Username Field -->
                                    <div class="p-4">
                                        <label
                                            for="username"
                                            class="form-label text-white"
                                        >
                                            Username
                                        </label>
                                        <p class="form-text text-muted">
                                            (The username and email are the only
                                            credentials for login)
                                        </p>

                                        <input
                                            type="text"
                                            id="username"
                                            class="form-control"
                                            placeholder="Enter your username"
                                            value="abc"
                                            readonly
                                        />
                                    </div>

                                    <!-- Nickname Field -->
                                    <div class="mb-4 p-4">
                                        <label
                                            for="nickname"
                                            class="form-label text-white"
                                        >
                                            Nickname<span class="text-danger"
                                                >*</span
                                            >
                                        </label>
                                        <input
                                            type="text"
                                            id="nickname"
                                            class="form-control"
                                            placeholder="Enter your nickname"
                                        />
                                    </div>

                                    <!-- Update Button -->
                                    <div class="text-end">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                        >
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div v-show="currentTab === 1">
                        <div class="container my-5">
                            <div class="form-box mx-auto">
                                <form>
                                    <!-- Nickname Field -->
                                    <div class="mb-4 p-4">
                                        <label
                                            for="nickname"
                                            class="form-label text-white"
                                        >
                                            E-mail<span class="text-danger"
                                                >*</span
                                            >
                                            <p class="form-text text-muted">
                                                (you will receive bouse email
                                                per week)
                                            </p>
                                        </label>
                                        <input
                                            type="text"
                                            id="nickname"
                                            class="form-control"
                                            placeholder="E-mail"
                                        />
                                    </div>

                                    <!-- Update Button -->
                                    <div class="text-end bottom">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                        >
                                            Send
                                        </button>
                                    </div>
                                    <!-- Nickname Field -->
                                    <div class="mb-4 p-4">
                                        <label
                                            for="nickname"
                                            class="form-label text-white"
                                        >
                                            Verification Code<span
                                                class="text-danger"
                                                >*</span
                                            >
                                            <p class="form-text text-muted">
                                                (haven't receive? please check
                                                junk email)
                                            </p>
                                        </label>
                                        <input
                                            type="text"
                                            id="nickname"
                                            class="form-control"
                                            placeholder="Code"
                                        />
                                    </div>

                                    <!-- Update Button -->
                                    <div class="text-end second">
                                        <p class="text-send ml-3">
                                            If you don't receive the email, you
                                            can check it in spam
                                        </p>

                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                        >
                                            Send
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div v-show="currentTab === 2">
                        <div class="form-box mx-auto">
                            <form>
                                <!-- Username Field -->
                                <div class="p-4">
                                    <label
                                        for="username"
                                        class="form-label text-white"
                                    >
                                        Google Secret Key
                                    </label>
                                    <p class="form-text text-muted">
                                        (Must save this key to restore 2fa once
                                        you lost it)
                                    </p>
                                    <div class="check">
                                        <div class="2-faotor-code">
                                            <p
                                                class="2-factor"
                                                ref="twoFactorText"
                                            >
                                                {{ twoFactor }}
                                            </p>
                                            <i
                                                class="fa-solid fa-copy"
                                                @click="copyTwoFactorText"
                                            ></i>
                                        </div>
                                        <i
                                            v-if="copied"
                                            class="bi bi-check-all"
                                        ></i>
                                    </div>
                                </div>
                                <div class="qr-code">
                                    <p>
                                        Sweep the qr code with google
                                        authenticator
                                    </p>
                                </div>
                                <!-- Nickname Field -->
                                <div class="mb-4 p-4">
                                    <label
                                        for="nickname"
                                        class="form-label text-white"
                                    >
                                        Two Factor Code

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        id="nickname"
                                        class="form-control size"
                                        placeholder=""
                                    />
                                </div>

                                <!-- Update Button -->
                                <div class="text-end">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                    >
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div v-show="currentTab === 3">
                        <div class="container my-5">
                            <div class="form-box mx-auto">
                                <form>
                                    <div>
                                        <!-- Current Password Field -->
                                        <div class="p-4">
                                            <label
                                                for="current-password"
                                                class="form-label text-white"
                                            >
                                                Current Password<span
                                                    class="text-danger"
                                                    >*</span
                                                >
                                            </label>
                                            <div class="input-group input-size">
                                                <input
                                                    :type="
                                                        showCurrentPassword
                                                            ? 'text'
                                                            : 'password'
                                                    "
                                                    id="current-password"
                                                    class="form-control"
                                                    placeholder="Enter your current password"
                                                />
                                                <span
                                                    class="input-group-text"
                                                    @click="
                                                        toggleShowCurrentPassword
                                                    "
                                                >
                                                    <i
                                                        :class="
                                                            showCurrentPassword
                                                                ? 'bi bi-eye-fill'
                                                                : 'bi bi-eye-slash-fill'
                                                        "
                                                    ></i>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- New Password Field -->
                                        <div class="p-4">
                                            <label
                                                for="new-password"
                                                class="form-label text-white"
                                            >
                                                New Password<span
                                                    class="text-danger"
                                                    >*</span
                                                >
                                            </label>
                                            <div class="input-group input-size">
                                                <input
                                                    :type="
                                                        showNewPassword
                                                            ? 'text'
                                                            : 'password'
                                                    "
                                                    id="new-password"
                                                    class="form-control"
                                                    placeholder="Enter your new password"
                                                />
                                                <span
                                                    class="input-group-text"
                                                    @click="
                                                        toggleShowNewPassword
                                                    "
                                                >
                                                    <i
                                                        :class="
                                                            showNewPassword
                                                                ? 'bi bi-eye-fill'
                                                                : 'bi bi-eye-slash-fill'
                                                        "
                                                    ></i>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Confirm Password Field -->
                                        <div class="p-4">
                                            <label
                                                for="confirm-password"
                                                class="form-label text-white"
                                            >
                                                Confirm New Password<span
                                                    class="text-danger"
                                                    >*</span
                                                >
                                            </label>
                                            <div class="input-group input-size">
                                                <input
                                                    :type="
                                                        showConfirmPassword
                                                            ? 'text'
                                                            : 'password'
                                                    "
                                                    id="confirm-password"
                                                    class="form-control"
                                                    placeholder="Enter your confirm password"
                                                />
                                                <span
                                                    class="input-group-text"
                                                    @click="
                                                        toggleShowConfirmPassword
                                                    "
                                                >
                                                    <i
                                                        :class="
                                                            showConfirmPassword
                                                                ? 'bi bi-eye-fill'
                                                                : 'bi bi-eye-slash-fill'
                                                        "
                                                    ></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Update Button -->
                                    <div class="text-end">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-update mr-3 mb-3 mt-3 forgot"
                                        >
                                            Forget password?
                                        </button>
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                        >
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div v-show="currentTab === 4">
                        <div class="container my-5">
                            <div class="form-box mx-auto">
                                <div class="img-avatar">
                                    <img
                                        src="https://luckybird.io/image/head/headPortrait_1.png"
                                        class="rounded-circle"
                                        alt=""
                                    />
                                    <p class="jpg-text">* JPG or PNG</p>
                                    <p class="jpg-text">* Max File Size 2MB</p>
                                </div>

                                <!-- Update Button -->
                                <div class="text-end">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                    >
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-show="currentTab === 5">
                        <div class="container my-5">
                            <div class="form-box mx-auto">
                                <div
                                    class="container py-4"
                                    style="
                                        background-color: #011e41;
                                        color: #fff;
                                    "
                                >
                                    <!-- Sound Setting -->
                                    <div
                                        class="d-flex justify-content-between align-items-center mb-3"
                                    >
                                        <h6 class="fw-bold">Sound</h6>
                                        <div class="form-check form-switch">
                                            <input
                                                class="form-check-input check-size"
                                                type="checkbox"
                                                id="sound"
                                                v-model="sound"
                                            />
                                        </div>
                                    </div>

                                    <!-- Options -->
                                    <div
                                        v-for="(option, index) in options"
                                        :key="index"
                                        class="d-flex justify-content-between align-items-center mb-3"
                                    >
                                        <span>{{ option.label }}</span>
                                        <div class="form-check form-switch">
                                            <input
                                                class="form-check-input check-size"
                                                type="checkbox"
                                                :id="`option-${index}`"
                                                v-model="option.checked"
                                            />
                                        </div>
                                    </div>
                                </div>

                                <!-- Update Button -->
                                <div class="text-end">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                    >
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-show="currentTab === 6">
                        <div class="form-box mx-auto ignored">
                            <img
                                src="https://luckybird.io/img/history_noData.0846420d.png"
                                alt=""
                                class="ignored-users"
                            />
                            <p class="ignored">No ignored users to show</p>
                        </div>
                    </div>
                    <div v-show="currentTab === 7">
                        <div class="container my-5">
                            <div class="form-box mx-auto">
                                <div class="ml-6 mt-3">
                                    <h2 class="Redeem">Redeem Bonus Drop</h2>
                                    <p class="find">
                                        Find bonus drop codes on our social
                                        media's such as Twitter & Telegram
                                    </p>
                                </div>
                                <hr class="break ml-4" />
                                <form>
                                    <!-- Nickname Field -->
                                    <div class="mb-4 p-4">
                                        <label
                                            for="nickname"
                                            class="form-label text-white"
                                        >
                                            Code<span class="text-danger"
                                                >*</span
                                            >
                                        </label>
                                        <input
                                            type="text"
                                            id="nickname"
                                            class="form-control code"
                                            placeholder="Enter your nickname"
                                        />
                                    </div>

                                    <!-- Update Button -->
                                    <div class="text-end">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-update mr-3 mb-3 mt-3"
                                        >
                                            Update
                                        </button>
                                    </div>
                                </form>
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
    data() {
        return {
            currentTab: 0,
            tabTitles: [
                "Profile",
                "Email",
                "Two Factor",
                "Password",
                "Avatar",
                "Preferences",
                "Ignored Users",
                "Bonus Drop",
            ],
            twoFactor: "TAJDEZHCFPWYRFC5", // Initial 2-factor code
            copied: false, // State to track if the text was copied
            showCurrentPassword: false, // Toggle for current password visibility
            showNewPassword: false, // Toggle for new password visibility
            showConfirmPassword: false, // Toggle for confirm password visibility
            sound: true, // State for sound toggle
            options: [
                { label: "Hide my purchase message", checked: false },
                { label: "Hide my redeem message", checked: false },
                { label: "Don't show all buy&redeem message", checked: false },
                { label: "Hide my buy amount", checked: true },
                { label: "Hide my redeem amount", checked: true },
                { label: "Hide my total wagered from public", checked: true },
                { label: "Ghost mode (make my plays hidden)", checked: false },
                { label: "Always refuse friend request", checked: false },
                { label: "Don't @me in chatroom", checked: false },
                { label: "Hide top instant notification", checked: false },
            ],
        };
    },
    methods: {
        copyTwoFactorText() {
            const twoFactorText = this.$refs.twoFactorText.textContent.trim();
            navigator.clipboard
                .writeText(twoFactorText)
                .then(() => {
                    this.copied = true;
                    setTimeout(() => {
                        this.copied = false;
                    }, 2000);
                })
                .catch((err) => {
                    console.error("Failed to copy text: ", err);
                });
        },
        toggleShowCurrentPassword() {
            this.showCurrentPassword = !this.showCurrentPassword;
        },
        toggleShowNewPassword() {
            this.showNewPassword = !this.showNewPassword;
        },
        toggleShowConfirmPassword() {
            this.showConfirmPassword = !this.showConfirmPassword;
        },
    },
};
</script>

<style scoped>
hr.break.ml-4 {
    color: white;
    width: 95%;
}
h2.Redeem {
    font-size: 30px !important;
    color: white !important;
}
.code {
    width: 60%;
}
.ignored {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 30px;
    margin-top: 18px;
}
img.ignored-users {
    width: 180px;
}
.form-switch .form-check-input {
    width: 3em;
    height: 1.5em;
}
.container {
    border-radius: 8px;
    padding: 20px;
}
h6 {
    margin-bottom: 20px;
}
.img-avatar {
    display: flex;
    flex-direction: column;
    align-items: center;
}
img.rounded-circle {
    width: 100px;
    margin: 20px;
}

.forgot {
    background: #0d3c65 !important;
    border: #0d3c65;
}
.input-size {
    width: 75%;
}
span.input-group-text {
    background: none;
    color: white;
}
.input-group-text {
    cursor: pointer;
}
.check {
    display: flex;
}
.qr-code {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.size {
    width: 56%;
}
p.\32 -factor {
    /* Escaped class name for '2-factor' */
    color: white !important;
}
i.fa-solid.fa-copy {
    color: white;
}
i.bi.bi-check-all {
    color: #00ea9b;
    font-size: 27px;
}
.\32 -faotor-code {
    /* Escaped class name for '2-faotor-code' */
    display: flex;
    justify-content: space-between;
    border: 1px solid white;
    height: 35px;
    align-items: center;
    padding: 8px;
    border-radius: 8px;
    width: 56%;
}
/* Styling for the Form Box */
.text-send {
    color: white !important;
}
.second {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.form-box {
    background-color: #051438;
    border: 1px solid #1f3b65;
    border-radius: 10px;
    max-width: 610px; /* Keeps the box small and centered */
}
.text-end.bottom {
    border-bottom: 1px solid #1f3b65;
}
.text-end {
    border-top: 1px solid #1f3b65;
}
/* Styling for the Inputs */
.form-control {
    background-color: #0b2541;
    color: #ffffff;
    border: 1px solid #3a5d79;
    border-radius: 5px;
}

.form-control:focus {
    background-color: #0b2541;
    color: #ffffff;
    border-color: #1e90ff;
    box-shadow: none;
}

/* Button Styling */
.btn-update[data-v-d9d79af7] {
    color: white;
    background-color: #00ea9b;
}

.btn-update:hover {
    background-color: #00b894;
}
.btn-update {
    color: white;
    background-color: #4a746b;
}

/* Styling for the Tabs */

.faq-container h1 {
    color: white;
    font-size: 25px;
    font-weight: 700;
    margin: 15px;
}
.faq-container {
    max-width: 1000px;
    margin: 20px auto;
    background: transparent;
    border-radius: 8px;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    overflow: hidden;
    font-family: Arial, sans-serif;
}

.faq-tabs {
    display: flex;
    background-color: #051438;
    flex-direction: column;
    border-radius: 10px;
    padding: 15px 0px;
}

.faq-tab {
    padding: 15px 20px;
    cursor: pointer;
    color: #fff;
    flex: 1;
    font-size: 15px;
    text-align: left;
    font-weight: bold;
    transition: background 0.3s, color 0.3s;
}

.faq-tab:hover {
    background-color: #102f5c;
}

.faq-tab.active {
    background-color: #102f5c;
    color: #fff;
    border-left: 3px solid #20e793;
}

.faq-content {
    padding: 20px;
    background-color: #051438;
    height: 100%;
    border-radius: 10px;
}

.faq-content h2 {
    margin-top: 0;
    font-size: 1.5em;
    color: #20e793;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 10px;
}
.faq-content h4 {
    color: white;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 10px;
}

.faq-content p,
ol,
li {
    /* margin-bottom: 10px; */
    line-height: 1.6;
    color: #738cbc;
}
</style>
