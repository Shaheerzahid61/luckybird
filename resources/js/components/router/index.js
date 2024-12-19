import { createRouter, createWebHistory } from "vue-router";

// Import your components that will be used for different routes
import Home from "../home.vue";
import FAQ from "../faq.vue";
import Setting from "../Setting.vue";
import TermsOfUse from "../TermsOfUse.vue";
import dice from "../dice.vue";
import promotions from "../promotions.vue";
import games from "../games.vue";
import login from "../authentication/login.vue";
import register from "../authentication/register.vue";

const routes = [
    { path: "/", component: Home },
    { path: "/faq", component: FAQ },
    { path: "/Setting", component: Setting },
    { path: "/TermsOfUse", component: TermsOfUse },
    { path: "/dice", component: dice },
    { path: "/promotions", component: promotions },
    { path: "/games", component: games },
    { path: "/login", component: login, name: "login" },
    { path: "/register", component: register, name: "register" },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
