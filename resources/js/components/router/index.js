import { createRouter, createWebHistory } from "vue-router";

// Import your components that will be used for different routes
// import Home from '../components/Home.vue';
// import Signup from '../components/Signup.vue';
// import happyhourbonus from '../happyhourbonus/happyhourbonus.vue';
<<<<<<< Updated upstream
import Home from "../home.vue";
import FAQ from "../faq.vue";
import Setting from "../Setting.vue";
import TermsOfUse from "../TermsOfUse.vue";
import dice from "../dice.vue";


const routes = [
    { path: "/", component: Home },
    { path: "/faq", component: FAQ },
    { path: "/Setting", component: Setting },
    { path: "/TermsOfUse", component: TermsOfUse },
    { path: "/dice", component: dice },

=======
import Home from '../home.vue';
import FAQ from '../FAQs/faq.vue';

const routes = [
  { path: '/', component: Home },
  { path: '/faq', component: FAQ },
>>>>>>> Stashed changes
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

<<<<<<< Updated upstream
export default router;
=======
export default router;
>>>>>>> Stashed changes
