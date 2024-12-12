<template>
    <div class="container mt-4">
      <div class="row">
        <div class="tabs">
          <div class="faq-tabs rounded-pill">
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
        <div class="container size mt-4">
          <!-- Timer and Prize Pool -->
          <div class="d-flex justify-content-between align-items-center mt-3 border-bottom mb-3">
  <div class="d-flex align-items-center">
    <span class="text-warning fs-5 me-2">🏆 Hour Contest</span>
    <i class="bi bi-question-circle text-light"></i>
  </div>
  <div class="d-flex align-items-center">
    <div class="rounded-pill d-flex">
      <p class="text mb-0 me-1">Prize Pool</p>
      <img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">
      <p class="text-success mb-0"> 28.0491</p>
    </div>
            <!-- <flip-countdown
      :end-time="endTime"
      :theme="'dark'"
      :size="'large'"
    /> -->
    <!-- <div class="flip-container">
      <div class="flip-number" :class="{ flipping: isFlipping }" @animationend="resetFlip"> -->
        <!-- <div class="top">{{ currentNumber }}</div>
        <div class="bottom">{{ nextNumber }}</div> -->

      <!-- </div> -->
    <!-- </div> -->
  </div>
</div>
  
          <!-- Tab Content -->
          <div v-if="currentTab === 0">
            <ul class="nav nav-tabs rounded-pill mb-3" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button
          class="nav-link active rounded-pill"
          id="home-tab"
          data-bs-toggle="tab"
          data-bs-target="#home"
          type="button"
          role="tab"
          aria-controls="home"
          aria-selected="true"
        >
          Home
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link rounded-pill"
          id="profile-tab"
          data-bs-toggle="tab"
          data-bs-target="#profile"
          type="button"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
        >
          Profile
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div
        class="tab-pane fade show active"
        id="home"
        role="tabpanel"
        aria-labelledby="home-tab"
      >
      <table class="table  table-striped">

<thead>
  <tr class="first">
    <th scope="col">Rank</th>
    <th scope="col">User</th>
    <th scope="col">Score</th>
    <th scope="col">Estimated Prize</th>
  </tr>
</thead>
<tbody>
  <tr class="second">
    <td><img src="\image\new\image-removebg-preview.png" alt="" class="1-2-3"></td>
    <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
    <td >3723.6162</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">18.0799</td>
  </tr>
  <tr class="first">
      <td><img src="\image\new\image-removebg-preview (2).png" alt="" class="1-2-3"></td>
       <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
    <td>1737.5222</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">7.5333</td>
  </tr>
  <tr class="second">
      <td><img src="\image\new\image-removebg-preview (1).png" alt="" class="1-2-3"></td>
     <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Codymw187</td>
    <td>1089.8372</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">4.5200</td>
  </tr>
  <tr class="first">
    <td>4th</td>
     <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
    <td>466.7594</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">2.3000</td>
  </tr>
  <tr class="second">
    <td>5th</td>
     <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">BigDthunder</td>
    <td>441.7400</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">1.8000</td>
  </tr>
</tbody>
</table>
      </div>
      <div
        class="tab-pane fade"
        id="profile"
        role="tabpanel"
        aria-labelledby="profile-tab"
      >
      <table class="table  table-striped">
              <thead>
                <tr  class="first">
                  <th scope="col">Rank</th>
                  <th scope="col">User</th>
                  <th scope="col">Score</th>
                  <th scope="col">Estimated Prize</th>
                </tr>
              </thead>
              <tbody>
                <tr class="second">
                    <td><img src="\image\new\image-removebg-preview.png" alt="" class="1-2-3"></td>
                    <td class="d-flex" > <img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt=""> DailyMaster</td>
                  <td>5820.9921</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">25.3412</td>
                </tr>
                <tr  class="first">
                    <td><img src="\image\new\image-removebg-preview (2).png" alt="" class="1-2-3"></td>
                  <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
                  <td>4901.2213</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">20.1187</td>
                </tr>
                <tr class="second">
                    <td><img src="\image\new\image-removebg-preview (1).png" alt="" class="1-2-3"></td>
                   <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Legendary</td>
                  <td>4590.2831</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">18.0045</td>
                </tr>
                <tr class="first" >
                  <td>4th</td>
                   <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
                  <td>4120.1234</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">15.7682</td>
                </tr>
                <tr class="second">
                  <td>5th</td>
                   <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">TopPlayer</td>
                  <td>3980.5678</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">14.2010</td>
                </tr>
              </tbody>
            </table>
              </div>
    </div>            
    
    
   
          </div>
          <div v-if="currentTab === 1">
            <ul class="nav nav-tabs rounded-pill mb-3" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button
          class="nav-link active rounded-pill"
          id="home-tab"
          data-bs-toggle="tab"
          data-bs-target="#home"
          type="button"
          role="tab"
          aria-controls="home"
          aria-selected="true"
        >
          Home
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link rounded-pill"
          id="profile-tab"
          data-bs-toggle="tab"
          data-bs-target="#profile"
          type="button"
          role="tab"
          aria-controls="profile"
          aria-selected="false"
        >
          Profile
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div
        class="tab-pane fade show active"
        id="home"
        role="tabpanel"
        aria-labelledby="home-tab"
      >
      <table class="table  table-striped">

<thead>
  <tr class="first">
    <th scope="col">Rank</th>
    <th scope="col">User</th>
    <th scope="col">Score</th>
    <th scope="col">Estimated Prize</th>
  </tr>
</thead>
<tbody>
  <tr class="second">
    <td><img src="\image\new\image-removebg-preview.png" alt="" class="1-2-3"></td>
    <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
    <td >3723.6162</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">18.0799</td>
  </tr>
  <tr class="first">
      <td><img src="\image\new\image-removebg-preview (2).png" alt="" class="1-2-3"></td>
       <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
    <td>1737.5222</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">7.5333</td>
  </tr>
  <tr class="second">
      <td><img src="\image\new\image-removebg-preview (1).png" alt="" class="1-2-3"></td>
     <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Codymw187</td>
    <td>1089.8372</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">4.5200</td>
  </tr>
  <tr class="first">
    <td>4th</td>
     <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
    <td>466.7594</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">2.3000</td>
  </tr>
  <tr class="second">
    <td>5th</td>
     <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">BigDthunder</td>
    <td>441.7400</td>
    <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">1.8000</td>
  </tr>
</tbody>
</table>
      </div>
      <div
        class="tab-pane fade"
        id="profile"
        role="tabpanel"
        aria-labelledby="profile-tab"
      >
      <table class="table  table-striped">
              <thead>
                <tr  class="first">
                  <th scope="col">Rank</th>
                  <th scope="col">User</th>
                  <th scope="col">Score</th>
                  <th scope="col">Estimated Prize</th>
                </tr>
              </thead>
              <tbody>
                <tr class="second">
                    <td><img src="\image\new\image-removebg-preview.png" alt="" class="1-2-3"></td>
                    <td class="d-flex" > <img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt=""> DailyMaster</td>
                  <td>5820.9921</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">25.3412</td>
                </tr>
                <tr  class="first">
                    <td><img src="\image\new\image-removebg-preview (2).png" alt="" class="1-2-3"></td>
                  <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
                  <td>4901.2213</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">20.1187</td>
                </tr>
                <tr class="second">
                    <td><img src="\image\new\image-removebg-preview (1).png" alt="" class="1-2-3"></td>
                   <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Legendary</td>
                  <td>4590.2831</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">18.0045</td>
                </tr>
                <tr class="first" >
                  <td>4th</td>
                   <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">Hidden</td>
                  <td>4120.1234</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">15.7682</td>
                </tr>
                <tr class="second">
                  <td>5th</td>
                   <td class="d-flex"><img src="https://luckybird.io/image/head/headPortrait_4.png" class="rounded-circle avatar mr-2" alt="">TopPlayer</td>
                  <td>3980.5678</td>
                  <td class="d-flex"><img src="https://luckybird.io/img/usd.png" alt="" class="madel-size">14.2010</td>
                </tr>
              </tbody>
            </table>
              </div>
    </div>            
    
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
//   import { FlipCountdown } from 'vue3-flip-countdown';

  export default {
//     components: {
//     FlipCountdown
//   },
  data() {
    return {
        // endTime: new Date().getTime() + 86400000, // 24 hours from now

        currentTab: 0,
        tabTitles: ["Hour Contest", "Daily Contest"],
      currentNumber: 0,
      nextNumber: 1,
      isFlipping: false,
    };
  },
  methods: {
    startFlip() {
      if (this.isFlipping) return; // Prevent overlapping flips

      this.isFlipping = true;
      setTimeout(() => {
        this.currentNumber = this.nextNumber;
        this.nextNumber = (this.nextNumber + 1) % 10; // Increment and loop the number
        this.isFlipping = false;
      }, 600); // Match the animation duration
    },
  },
  mounted() {
    setInterval(() => {
      this.startFlip();
    }, 1000); // Trigger every second
  },
};
  </script>
  
  <style>
 .flip-container {
  perspective: 1000px;
  display: inline-block;
}

.flip-number {
  position: relative;
  width: 50px;
  height: 100px;
  text-align: center;
  font-size: 2rem;
  font-weight: bold;
  line-height: 70px;
}

.flip-number.flipping .top {
  animation: flip-top 0.6s forwards;
}

.flip-number.flipping .bottom {
  animation: flip-bottom 0.6s forwards;
}

.top,
.bottom {
  position: absolute;
  left: 0;
  width: 100%;
  height: 50%;
  background: #222;
  color: #fff;
  overflow: hidden;
  border: 1px solid #333;
}

.top {
  top: 0;
  border-bottom: none;
  transform-origin: center bottom;
}

.bottom {
  bottom: 0;
  border-top: none;
  transform-origin: center top;
}

@keyframes flip-top {
  0% {
    transform: rotateX(0);
  }
  100% {
    transform: rotateX(-90deg);
  }
}

@keyframes flip-bottom {
  0% {
    transform: rotateX(90deg);
  }
  100% {
    transform: rotateX(0);
  }
}
  button#home-tab, button#profile-tab  {
    color: white;
    /* background: #00254a; */
    border: none;
}
ul#myTab {
    border-bottom: none;
    width: 160px;
    background: #264e88;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

.nav-link.rounded-pill.active {
    background: #00254a;
}
 ul#myTab {
    border-bottom: none;
    width: 157px;
}
  img.rounded-circle.avatar {
    width: 20px;
}
  td.d-flex {
    align-items: center;
}
  img.\31 -2-3 {
    width: 30px;
}
  tr.second {
    background: #02264a;
    color: white;
}
td {
    color: wheat !important;
}
th {
    color: white;
}
p.text.mb-0.me-1 {
    color: #ffffff;
}
  .rounded-pill.d-flex {
    background: #02264a;
    width: 190px;
    height: 34px;
    align-items: center;
    justify-content: space-evenly;
}
  img.madel-size {
    width: 15px;
}
.faq-tabs {
    /* border: 1px solid #ddd; */
    /* border-radius: 4px; */
    /* overflow: hidden; */
    display: flex;
    width: 20%;
    background: #001434;
    color: white;
    height: 58px;
    align-items: center;
    justify-content: space-around;
}
  .faq-tab {
    padding: 10px;
    cursor: pointer;
    /* background: #f8f9fa; */
    /* border-bottom: 1px solid #ddd; */
    text-align: center;
  }
  
  .faq-tab.active {
    background: #0d244a;
    color: white;
    border-radius: 35px;
}
  .timer {
    font-size: 1.5rem;
  }
  .timer-box {
    width: 40px;
    height: 50px;
    background-color: #0d6efd;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    font-size: 1.2rem;
    margin: 0 2px;
  }
  .size {
    background: #001434;
    width: 90%;
}
  </style>