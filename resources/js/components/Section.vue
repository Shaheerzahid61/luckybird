<template>
    <section class="info-section">
      <div v-for="item in sections" :key="item.id" class="info-card">
        <h3>{{ item.title }}</h3>
        <p>{{ item.description }}</p>
        <button @click="navigate(item.action)">{{ item.buttonText }}</button>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: "Section",
    props: ["sections"],
    methods: {
      navigate(action) {
        // Implement navigation logic
      },
    },
  };
  </script>
  
  <style scoped>
  .info-section {
    display: flex;
    justify-content: space-around;
    padding: 40px;
    background-color: #222;
    color: #fff;
  }
  .info-card {
    width: 45%;
    background-color: #333;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
  }
  </style>
  