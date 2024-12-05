<template>
    <section class="user-promo">
      <div class="promo-card">
        <h3>Log In to Your Next Big Win</h3>
        <button @click="login">Login</button>
      </div>
      <div class="promo-card">
        <h3>Unlock Exclusive Wins - Sign up Today!</h3>
        <button @click="goToSignup">Sign Up</button>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    methods: {
      goToSignup() {
        this.$router.push({ name: 'Signup' }); // Navigate to the Signup component
      },
    },
  };
  </script>
  
  <style scoped>
  .user-promo {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 30px;
  }
  .promo-card {
    background-color: #333;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
  }
  button {
    background-color: #ff00ff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
  }
  </style>
  