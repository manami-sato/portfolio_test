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

const routes = [
  {
    path: "/ecc/msatou/portfolio/",
    name: "Home",
    component: Home,
  },
  {
    path: "/ecc/msatou/portfolio/web",
    name: "Web",
    component: Web,
  },
  {
    path: "/ecc/msatou/portfolio/graphic",
    name: "Graphic",
    component: Graphic,
  },
  {
    path: "/ecc/msatou/portfolio/practice",
    name: "Practice",
    component: Practice,
  },
  {
    path: "/ecc/msatou/portfolio/web/:id",
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
