<template>
    <div class="header-background">
      <slot></slot>
    </div>
  </template>
  
  <style scoped>
  .header-background {
    background: linear-gradient(180deg, #1a0033, #330066);
    background-image: url('https://stag.bitsky.bet/_next/static/media/landing-banner-bg-img.0c90d6dc.png'); /* Replace with actual path */
    background-size: cover;
    background-position: center;
    height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  </style>
  