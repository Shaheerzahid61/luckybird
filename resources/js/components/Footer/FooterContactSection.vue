<template>
    <div class="footer-section">
      <h3>Contact</h3>
      <ul>
        <li>Support: <a href="mailto:Admin@Bitsky.In">Admin@Bitsky.In</a></li>
        <li>Partners: <a href="mailto:Admin@Partner.Com">Admin@Partner.Com</a></li>
        <li>Legal: <a href="mailto:Admin@Legal.Com">Admin@Legal.Com</a></li>
      </ul>
      <div class="social-icons">
        <i class="icon-twitter"></i>
        <i class="icon-youtube"></i>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "FooterContactSection",
  };
  </script>
  
  <style scoped>
  .footer-section ul {
    list-style: none;
    padding: 0;
  }
  .footer-section li {
    margin: 5px 0;
  }
  .social-icons {
    margin-top: 10px;
  }
  .social-icons i {
    margin-right: 10px;
    cursor: pointer;
    font-size: 20px;
  }
  </style>
  