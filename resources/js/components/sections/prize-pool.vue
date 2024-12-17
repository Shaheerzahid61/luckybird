<template>
    <div class="row">
        <div class="col-6">
            <div class="card-header bg-transparent">
                <p class="card-title text-center mb-0 fw-bold text-muted">Prize</p>
            </div>
            <div 
                class="card my-2" 
                v-for="(prize, index) in prizes" 
                :key="'prize-' + index"
            >
                <div class="card-body">
                    <p class="text-center fw-bold mb-0">{{ prize.amount }}</p>
                </div>
            </div>
            <div class="card my-2">
                <div class="card-body">
                    <p class="text-center fw-bold text-muted mb-0">Total: {{ totalPrize }}</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card-header bg-transparent">
                <p class="card-title text-center mb-0 fw-bold text-muted">Number Of Prize</p>
            </div>
            <div 
                class="card my-2" 
                v-for="(count, index) in prizeCounts" 
                :key="'count-' + index"
            >
                <div class="card-body">
                    <p class="text-center fw-bold mb-0">{{ count }}</p>
                </div>
            </div>
            <div class="card my-2">
                <div class="card-body">
                    <p class="text-center fw-bold text-muted mb-0">Total: {{ totalPrizeCount }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            prizes: [
                { amount: "1,000 SC" },
                { amount: "500 SC" },
                { amount: "100 SC" },
                { amount: "500 SC" },
                { amount: "20 SC" },
                { amount: "10 SC" },
            ],
            prizeCounts: [1, 5, 20, 50, 100, 1000],
        };
    },
    computed: {
        totalPrize() {
            return "20,000 SC"; // Or calculate dynamically if needed
        },
        totalPrizeCount() {
            return this.prizeCounts.reduce((total, count) => total + count, 0);
        },
    },
};
</script>

<style>
/* Add any additional styles here if needed */
</style>