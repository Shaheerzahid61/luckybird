<template>
  <div class="luckybird-container">
    <div class="content-wrapper">
      <!-- Left Section -->
      <div class="left-section">
        <div class="tabs">
          <button 
            class="tab" 
            :class="{ active: activeTab === 'Manual' }" 
            @click="setTab('Manual')">
            Manual
          </button>
          <button 
            class="tab" 
            :class="{ active: activeTab === 'Auto' }" 
            @click="setTab('Auto')">
            Auto
          </button>
        </div>

        <div v-if="activeTab === 'Manual'">
          <div class="amount-section">
            <label>Amount</label>
            <div class="input-group">
              <input type="number" class="input" v-model.number="amount" placeholder="0.0001" />
              <div class="controls">
                <button @click="setAmount('min')">Min</button>
                <button @click="setAmount('half')">1/2</button>
                <button @click="setAmount('double')">2x</button>
                <button @click="setAmount('max')">Max</button>
              </div>
            </div>
          </div>
          <div class="profit-section">
            <label>Profit On Win</label>
            <input type="number" class="input" :value="profitOnWin" disabled />
          </div>
          <button class="play-btn">Play</button>
        </div>

     <div v-if="activeTab === 'Auto'" class="auto-settings">
  <div class="amount-section">
    <label>Amount</label>
    <div class="input-group">
      <input type="number" class="input" v-model.number="amount" placeholder="0.0001" />
      <div class="controls">
        <button @click="setAmount('min')">Min</button>
        <button @click="setAmount('half')">1/2</button>
        <button @click="setAmount('double')">2x</button>
        <button @click="setAmount('max')">Max</button>
      </div>
    </div>
  </div>

  <div class="number-rolls-section">
    <label>Number of Rolls</label>
    <input type="number" class="input bordered-shadow" v-model.number="numberOfRolls" placeholder="0" />
  </div>

  <div class="on-win-section">
    <label>On Win</label>
    <div class="input-group">
      <button class="reset-btn">Reset</button>
      <span>Increase by</span>
      <input type="number" class="input small bordered-shadow" v-model.number="onWinIncrease" placeholder="0.00" />
      <span>%</span>
    </div>
  </div>

  <div class="on-loss-section">
    <label>On Loss</label>
    <div class="input-group">
      <button class="reset-btn">Reset</button>
      <span>Increase by</span>
      <input type="number" class="input small bordered-shadow" v-model.number="onLossIncrease" placeholder="0.00" />
      <span>%</span>
    </div>
  </div>

  <div class="stop-win-section">
    <label>Stop Win by Profit</label>
    <div class="input-group">
      <span><img src="coin-icon.png" alt="coin" /></span>
      <input type="number" class="input bordered-shadow" v-model.number="stopWinProfit" placeholder="0.0000" />
    </div>
  </div>

  <div class="stop-loss-section">
    <label>Stop Loss by Profit</label>
    <div class="input-group">
      <span><img src="coin-icon.png" alt="coin" /></span>
      <input type="number" class="input bordered-shadow" v-model.number="stopLossProfit" placeholder="0.0000" />
    </div>
  </div>

  <div class="strategy-controls">
    <button class="save-strategy-btn">Save Strategy</button>
    <button class="more-options-btn">More Options</button>
  </div>

  <button class="start-auto-btn">Start Auto</button>
</div>

      </div>

      <!-- Right Section -->
      <div class="right-section">
        <div class="content-center">
          <div class="slider-section">
            <div class="slider-wrapper">
              <input 
                type="range" 
                min="2" 
                max="98" 
                step="0.01" 
                class="slider" 
                v-model.number="rollOver" 
                @input="updateStats" />
              <div class="slider-labels">
                <span>2</span>
                <span>98</span>
              </div>
            </div>
          </div>

          <div class="stats-bar">
            <div class="stat">
              <span>Roll Over to Win</span>
              <input type="number" class="stat-input" v-model.number="rollOver" @input="updateStats" />
            </div>
            <div class="stat">
              <span>Multiplier</span>
              <span>{{ multiplier.toFixed(4) }}x</span>
            </div>
            <div class="stat">
              <span>Win Chance</span>
              <span>{{ winChance.toFixed(2) }}%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      activeTab: 'Manual',
      amount: 0.0001,
      profitOnWin: 0.0001,
      rollOver: 50,
      winChance: 50,
      multiplier: 1.9800,
      numberOfRolls: 0,
      onWinIncrease: 0.00,
      onLossIncrease: 0.00,
      stopWinProfit: 0.0000,
      stopLossProfit: 0.0000,
    };
  },
  methods: {
    setTab(tab) {
      this.activeTab = tab;
    },
    setAmount(type) {
      switch (type) {
        case 'min':
          this.amount = 0.0001;
          break;
        case 'half':
          this.amount /= 2;
          break;
        case 'double':
          this.amount *= 2;
          break;
        case 'max':
          this.amount = 1;
          break;
      }
      this.updateProfitOnWin();
    },
    updateProfitOnWin() {
      this.profitOnWin = this.amount * (this.multiplier - 1);
    },
    updateStats() {
      this.winChance = 100 - this.rollOver;
      this.multiplier = 99 / this.winChance;
      this.updateProfitOnWin();

      // Dynamically adjust slider background gradient
      const slider = this.$el.querySelector('.slider');
      const percentage = ((this.rollOver - 2) / 96) * 100; // Scale value to percentage
      slider.style.background = `linear-gradient(to right, #ff4c4c ${percentage}%, #14c46d ${percentage}%)`;
    }
  },
  mounted() {
    this.updateStats();
  },
};
</script>

<style scoped>
.luckybird-container {
  background-color: #0e1b33;
  color: white;
  font-family: Arial, sans-serif;
  padding: 20px;
  border-radius: 8px;
  width: 900px;
  margin: auto;
}

.content-wrapper {
  display: flex;
  gap: 20px;
}

.left-section {
  width: 35%;
  background-color: #1a2d4f;
  padding: 15px;
  border-radius: 8px;
}

.right-section {
  width: 65%;
  background-color: #1f3e6e;
  padding: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.content-center {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.tabs {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.tab {
  flex: 1;
  padding: 10px;
  background-color: #1a2d4f;
  border: none;
  color: white;
  cursor: pointer;
  text-align: center;
  border-radius: 4px;
}

.tab.active {
  background-color: #1f3e6e;
}

.amount-section,
.profit-section {
  margin-bottom: 20px;
}

.input-group {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.input {
  width: 60%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color: #1a2d4f;
  color: white;
}

.input.bordered-shadow {
  border: 1px solid #14c46d;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

.controls button {
  margin-left: 5px;
  padding: 5px 10px;
  border: none;
  border-radius: 4px;
  background-color: #1f3e6e;
  color: white;
  cursor: pointer;
}

.play-btn {
  width: 100%;
  padding: 15px;
  background-color: #14c46d;
  border: none;
  border-radius: 8px;
  color: white;
  font-size: 16px;
  cursor: pointer;
  margin-bottom: 20px;
}

.slider-section {
  width: 100%;
}

.slider-wrapper {
  position: relative;
  width: 100%;
}

.slider {
  width: 100%;
  -webkit-appearance: none;
  height: 8px;
  background: linear-gradient(to right, #ff4c4c 50%, #14c46d 50%);
  border-radius: 4px;
  outline: none;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: white;
  cursor: pointer;
  border: 2px solid #ccc;
}

.slider-labels {
  display: flex;
  justify-content: space-between;
  margin-top: 5px;
}

.stats-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #1a2d4f;
  padding: 15px;
  border-radius: 8px;
  width: 100%;
  gap: 20px;
}

.stat {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #1f3e6e;
  padding: 10px;
  border-radius: 8px;
  text-align: center;
}

.stat-input {
  background: none;
  border: none;
  color: white;
  text-align: center;
  font-size: 16px;
  width: 80%;
  margin-top: 5px;
}

.auto-settings label {
  font-size: 14px;
  color: #8ba1c9;
  display: block;
  margin-bottom: 5px;
}

.input.small {
  width: 80px;
}

.reset-btn {
  padding: 5px 10px;
  background-color: #1f3e6e;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 12px;
}

.reset-btn:hover {
  background-color: #14c46d;
}

.strategy-controls {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

.strategy-controls button {
  flex: 1;
  margin: 5px;
  padding: 10px;
  background-color: #1f3e6e;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.strategy-controls button:hover {
  background-color: #14c46d;
}

.start-auto-btn {
  width: 100%;
  padding: 15px;
  background-color: #14c46d;
  border: none;
  border-radius: 8px;
  color: white;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  margin-top: 20px;
}

.start-auto-btn:hover {
  background-color: #12b85f;
}
</style>