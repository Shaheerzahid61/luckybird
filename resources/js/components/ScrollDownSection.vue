<template>
    <section class="scroll-down-section d-flex justify-content-center align-items-center">
      <button class="btn btn-outline-light scroll-down-btn" @click="scrollDown">
        <div>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 500 500"
            width="50"
            height="50"
            preserveAspectRatio="xMidYMid meet"
            style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;"
          >
            <defs>
              <clipPath id="clip-path">
                <rect width="500" height="500" x="0" y="0"></rect>
              </clipPath>
              <clipPath id="inner-clip">
                <path d="M0,0 L500,0 L500,500 L0,500z"></path>
              </clipPath>
            </defs>
            <g clip-path="url(#clip-path)">
              <g clip-path="url(#inner-clip)" transform="matrix(0,1,-1,0,500,0)" opacity="1">
                <!-- Line -->
                <g transform="matrix(-1,0,0,-1,191.86,250)" opacity="1">
                  <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      fill-opacity="0"
                      stroke="rgb(255,255,255)"
                      stroke-opacity="1"
                      stroke-width="16"
                      d="M-112.22,0 C-28.75,0 113.36,0 113.36,0"
                    ></path>
                  </g>
                </g>
                <!-- Arrow -->
                <g transform="matrix(1,0,0,1,189.56,250)" opacity="1">
                  <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      fill-opacity="0"
                      stroke="rgb(255,255,255)"
                      stroke-opacity="1"
                      stroke-width="16"
                      d="M55.23,-58.8 C55.23,-58.8 113.36,0 113.36,0 C113.36,0 55.23,58.8 55.23,58.8"
                    ></path>
                  </g>
                </g>
                <!-- Outer Circle -->
                <g transform="matrix(1,0,0,1,250,250)" opacity="1">
                  <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      fill-opacity="0"
                      stroke="rgb(255,0,238)"
                      stroke-opacity="1"
                      stroke-width="16"
                      d="M-107.08,-58.8 C-84.66,-110.72 -33.44,-147 26.16,-147 C106.43,-147 171.5,-81.19 171.5,0 C171.5,81.19 106.43,147 26.16,147 C-33.44,147 -84.66,110.72 -107.08,58.8"
                    ></path>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </div>
      </button>
    </section>
  </template>
  
  <script>
  export default {
    name: 'ScrollDownButton',
    methods: {
      scrollDown() {
        // Adjust the behavior to your app, here it scrolls down by 800px.
        window.scrollBy({ top: 800, behavior: 'smooth' });
      },
    },
  };
  </script>
  
  <style scoped>
  .scroll-down-section {
    width: 100%;
    height: 3.813rem;
    background-color: #0e0e0e;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 1.5rem;
  }
  
  .scroll-down-btn {
  border: none;
  background: transparent;
  cursor: pointer;
  outline: none;
  animation: moveUpDown 1.5s ease-in-out infinite; /* Animation loop */
  transition: transform 0.2s ease-in-out;
}

@keyframes moveUpDown {
  0%, 100% {
    transform: translateY(0); /* Start at default position */
  }
  50% {
    transform: translateY(10px); /* Move down by 10px */
  }
}
  
  .scroll-down-btn:hover {
    transform: scale(1.1); /* Slight scaling effect on hover */
  }
  </style>
  