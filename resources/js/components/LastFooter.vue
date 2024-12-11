<template>
    <footer class="footer text-white py-5">
        <div class="container text-center">
            <!-- Logo -->
            <img
                src="/image/download.png"
                alt="LuckyBird Logo"
                class="footer-logo mb-3"
            />

            <!-- Text -->
            <p class="mb-2">©2024 LuckyBird. All Rights Reserved.</p>
            <p class="mb-3">
                NO PURCHASE REQUIRED to participate in the Sweepstakes.
                Sweepstakes are VOID WHERE PROHIBITED BY LAW. Please refer to
                the
                <a href="#" class="text-decoration-underline text-white"
                    >terms of service</a
                >.
            </p>

            <!-- Contact Info -->
            <p class="mb-3">
                Support:
                <a href="mailto:tony@luckybird.io" class="text-white"
                    >tony@luckybird.io</a
                >
                | Business:
                <a href="mailto:amy@luckybird.io" class="text-white"
                    >amy@luckybird.io</a
                >
                <br />(Welcome all kinds of cooperation)
            </p>

            <!-- Version and Time -->
            <p class="mb-2">version: 2.1.7</p>
            <p>Server Time: 2024-12-10 06:30:47</p>

            <!-- Bottom Section -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <!-- Powered By -->
                <div>
                    <img
                        src="/image/new/poweredBy.svg"
                        alt="Powered by SoftSwiss"
                        class="powered-by-logo"
                    />
                </div>

                <!-- Download Button -->
                <div>
                    <a href="#" class="btn btn-outline-primary rounded-pill">
                        <img
                            src="/image/new/downloadApp.svg"
                            alt="Download App"
                            class="powered-by-logo"
                        />
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {};
</script>

<style scoped>
.footer {
    background: #001f41;
    font-size: 14px;
}

.footer-logo {
    max-height: 60px;
    width: auto;
    margin: auto;
}

.text-decoration-underline {
    text-decoration: underline;
}

/* Style for the logo image */
.powered-by-logo {
  max-height: 40px;
  width: auto;
  display: inline-block;
}

/* Button outline style */
.btn-outline-primary {
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
}

/* Rounded pill button */
.rounded-pill {
  border-radius: 50px;
}
a.text-white.text-decoration-none, h6.fw-bold {
    line-height: 35px;
}
</style>
