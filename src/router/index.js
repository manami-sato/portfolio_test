import Vue from "vue";
import VueRouter from "vue-router";
import VueHead from "vue-head";
import Home from "../views/Home.vue";
import Web from "../views/Web.vue";
import Graphic from "../views/Graphic.vue";
import Practice from "../views/Practice.vue";
import WebData from "../views/WebData.vue";

Vue.use(VueRouter);
Vue.use(VueHead);

const route = "/ecc/msatou/portfolio/";
// /ecc/msatou/portfolio/
// manami-sato.github.io/portfolio/

const routes = [
  {
    path: `${route}`,
    name: "Home",
    component: Home,
  },
  {
    path: `${route}` + `web`,
    name: "Web",
    component: Web,
  },
  {
    path: `${route}` + `graphic`,
    name: "Graphic",
    component: Graphic,
  },
  {
    path: `${route}` + `practice`,
    name: "Practice",
    component: Practice,
  },
  {
    path: `${route}` + `web/:id`,
    name: "WebData",
    component: WebData,
    props: (route) => ({ id: Number(route.params.id) }),
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
