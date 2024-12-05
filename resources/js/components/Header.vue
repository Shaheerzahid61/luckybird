<template>
    <HeaderBackground>
      <AnimatedCoins />
      <SlotMachine />
      <HeaderText />
    </HeaderBackground>
  </template>
  
  <script>
  import HeaderBackground from './Header/HeaderBackground.vue';
  import AnimatedCoins from './Header/AnimatedCoins.vue';
  import SlotMachine from './Header/SlotMachines.vue';
  import HeaderText from './Header/HeaderText.vue';
  
  export default {
    components: {
      HeaderBackground,
      AnimatedCoins,
      SlotMachine,
      HeaderText,
    },
  };
  </script>
  
  <style scoped>
  /* Additional global styles if needed */
  </style>
  