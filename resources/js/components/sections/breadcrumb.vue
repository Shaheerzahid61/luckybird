<template>
    <section>
        <div class="container-fluid">
            <nav
                style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb"
            >
                <ol class="breadcrumb">
                    <li
                        v-for="(item, index) in breadcrumbs"
                        :key="index"
                        class="breadcrumb-item"
                        :class="{ active: item.active }"
                        :aria-current="item.active ? 'page' : null"
                    >
                        <a v-if="!item.active" :href="item.link">{{ item.text }}</a>
                        <span v-else>{{ item.text }}</span>
                    </li>
                </ol>
            </nav>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            breadcrumbs: [
                { text: 'Home', link: '/', active: false },
                { text: 'Games', link: null, active: true },
            ],
        };
    },
};
</script>

<style scoped></style>