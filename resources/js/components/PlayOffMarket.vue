<template>
    <div class="playoff-market-container">
      <!-- Background Overlay -->
      <div class="background-overlay"></div>
  
      <!-- Text and Button Section -->
      <div class="btn-box">
  <button
    class="z-0 group relative inline-flex items-center justify-center 
            box-border appearance-none select-none whitespace-nowrap font-normal 
            subpixel-antialiased overflow-hidden tap-highlight-transparent 
            data-[pressed=true]:scale-[0.97] outline-none 
            data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 
            data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 
            px-4 min-w-20 h-10 text-small gap-2 rounded-medium 
            [&>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity 
            motion-reduce:transition-none bg-default text-default-foreground 
            data-[hover=true]:opacity-hover off-market-play-btn"
    type="button"
  >
    <div class="btn-inner">
      <span class="text" style="    font-family: CevicheOne;
    color: var(--prussianBlue-1000);
    font-size: 2.75rem;
    font-weight: 400;
    line-height: 1;
    text-align: center;">Play Off Market Games</span>
    </div>
  </button>
</div>

    </div>
  </template>
  
  <script>
  export default {
    name: "PlayOffMarket",
  };
  </script>
  
  <style scoped>
  .btn-inner {
    width: 100%;
    max-width: var(--off-market-play-btn-max-width);
    background: linear-gradient(var(--aquamarine-1000), var(--darkCyan-1000));
    aspect-ratio: var(--off-market-play-btn-aspect-ratio);
    -webkit-mask-image: var(--off-market-play-btn-mask-image);
    mask-image: var(--off-market-play-btn-mask-image);
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-size: 100% 100%;
    mask-size: 100% 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    padding: 1.75rem 2rem;
    position: relative;
    transition: all .2s ease-in-out;
  }
  button.z-0.group.relative.inline-flex.items-center.justify-center.box-border.appearance-none.select-none.whitespace-nowrap.font-normal.subpixel-antialiased.overflow-hidden.tap-highlight-transparent.data-\[pressed\=true\]\:scale-\[0\.97\].outline-none.data-\[focus-visible\=true\]\:z-10.data-\[focus-visible\=true\]\:outline-2.data-\[focus-visible\=true\]\:outline-focus.data-\[focus-visible\=true\]\:outline-offset-2.px-4.min-w-20.h-10.text-small.gap-2.rounded-medium.\[\&\>svg\]\:max-w-\[theme\(spacing\.8\)\].transition-transform-colors-opacity.motion-reduce\:transition-none.bg-default.text-default-foreground.data-\[hover\=true\]\:opacity-hover.off-market-play-btn {
    --off-market-play-btn-max-width: var(--btn-box-max-width);
    --off-market-play-btn-mask-image: url(/_next/static/media/off-market-play-btn-bg-mask.19766b64.svg);
    --off-market-play-btn-aspect-ratio: 131 / 27;
    outline: none;
    cursor: pointer;
    overflow: unset;
    padding: 0;
    position: relative;
     transform: scale(1) rotate(5deg);
     width: 100%;
    max-width: var(--off-market-play-btn-max-width);
    background-image: var(--off-market-play-btn-mask-image);
    background-size: 100% 100%;
    background-repeat: no-repeat;
    aspect-ratio: var(--off-market-play-btn-aspect-ratio);
    transition: all .2s ease-in-out;
  }
  .btn-box {
    --btn-box-max-width: 32.75rem;
    width: 100%;
    max-width: var(--btn-box-max-width);
    position: absolute;
    top: 55%;
    left: 9%;
    transform: translateY(-50%);
  }
  /* Container styling */
  .playoff-market-container {
    position: relative;
    width: 100%;
    max-width: 1200px;
    height: 300px; /* Adjust height to match the provided design */
    margin: 0 auto;
    background: url('https://stag.bitsky.bet/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Foff-market-play-img.401e0cf1.png&w=3840&q=75') center center / cover no-repeat;
    border-radius: 20px; /* Slightly larger border-radius to soften edges */
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding-left: 40px; /* Spacing to align content properly */
  }
  .custom-button {
  background: linear-gradient(135deg, #00c9b1, #009688); /* Gradient similar to image */
  color: #0a3c3d; /* Darker text color */
  font-weight: bold;
  font-family: "Comic Sans MS", cursive, sans-serif; /* Font to mimic the style */
  padding: 10px 20px;
  border: none;
  border-radius: 15px; /* Rounded corners */
  transform: skewX(-10deg); /* Tilt effect */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  transition: transform 0.2s, box-shadow 0.2s;
}

.custom-button:hover {
  transform: skewX(-10deg) scale(1.05); /* Slight scale-up on hover */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
}
  </style>
  