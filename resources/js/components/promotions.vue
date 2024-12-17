<template>
    <section class="my-3">
        <div class="container">
            <LandscapeAd />
        </div>
    </section>
    <section class="my-3">
        <div class="container">
            <div class="card" style="border-style: dashed; border-color: #627aa8; border-width: 2px;">
                <div class="card-body">
                    <p class="text-muted fw-bold">Black Friday Progressive Drops — BGaming</p>
                    <ol class="text-muted">
                        <li>Provider: BGaming</li>
                        <li>Duration: 1 - 30 November 2024</li>
                        <li>Entry Fee: 1.09 SC to participate</li>
                        <li>Prize Pool: 40,000 SC + 25,000 SC (progressive prize pool)</li>
                        <li>Minimum Bet Requirement: No minimum bet is required for participation.</li>
                        <li>Prizes are credited instantly to winners' Luckybird accounts.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="my-3">
        <div class="container">
            <h3 class="text-white fs-5 fw-bold mb-3">Prize pool: 20,000 SC</h3>
            <PrizePool />
        </div>
    </section>
    <section class="my-3">
        <div class="container">
            <h3 class="text-white fs-5 fw-bold mb-3">Fortune Gravity</h3>
            <GamingGrid />
        </div>
    </section>
    <section class="my-3 d-none d-md-block">
        <div class="container">
            <WinningUsers />
        </div>
    </section>
</template>

<script>
    import LandscapeAd from './sections/ad-landscape-banner.vue';
    import PrizePool from './sections/prize-pool.vue';
    import GamingGrid from './sections/gaming-grid.vue';
    import WinningUsers from './sections/winning-users.vue';
  
    export default {
        components: {
            LandscapeAd,
            PrizePool,
            GamingGrid,
            WinningUsers,
        },
    };
</script>

<style></style>  