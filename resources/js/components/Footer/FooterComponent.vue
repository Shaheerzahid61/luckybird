<template>
    <footer class="footer">
      <div class="footer-content">
        <FooterLogoSection />
        <FooterBlogSection />
        <FooterBonusSection />
        <FooterPagesSection />
        <FooterContactSection />
      </div>
      <div class="footer-bottom">
        <p>2024 Bitsky.bet, All Rights Reserved</p>
      </div>
    </footer>
  </template>
  
  <script>
  import FooterLogoSection from "@/Footer/FooterLogoSection.vue";
  import FooterBlogSection from "@/Footer/FooterBlogSection.vue";
  import FooterBonusSection from "@/Footer/FooterBonusSection.vue";
  import FooterPagesSection from "@/Footer/FooterPagesSection.vue";
  import FooterContactSection from "@/Footer/FooterContactSection.vue";
  
  export default {
    name: "FooterComponent",
    components: {
      FooterLogoSection,
      FooterBlogSection,
      FooterBonusSection,
      FooterPagesSection,
      FooterContactSection,
    },
  };
  </script>
  
  <style scoped>
  .footer {
    background: #2b2b2b;
    color: #ffffff;
    padding: 40px 20px;
  }
  .footer-content {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  .footer-bottom {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 10px;
  }
  </style>
  