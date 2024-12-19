<template>
    <section class="py-3">
        <div class="container-fluid">
            <gamesCategoryFilter />
        </div>
    </section>
    <breadcrumb />
    <section class="py-3">
        <div class="container-fluid">
            <games />
        </div>
    </section>
</template>

<script>
import breadcrumb from './sections/breadcrumb.vue';
import gamesCategoryFilter from './sections/games-category-filter.vue';
import games from './sections/gaming-grid.vue';

export default {
    components: {
        breadcrumb,
        gamesCategoryFilter,
        games,
    },
};
</script>

<style scoped>
/* Add styles here if needed */
</style>