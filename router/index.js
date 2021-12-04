import Vue from "vue";
import VueRouter from "vue-router";
import VueHead from "vue-head";
import Home from "../views/Home.vue";
import Web from "../views/Web.vue";
import Graphic from "../views/Graphic.vue";
import Training from "../views/Training.vue";
import Gifcle from "../views/works/02_01_06_Gifcle.vue";
import Fribo from "../views/works/02_01_05_Fribo.vue";
import Philosophia from "../views/works/02_01_04_Philosophia.vue";
import minicomi from "../views/works/02_01_03_minicomi.vue";
import Pf_ver1 from "../views/works/02_01_01_Pf_ver1.vue";
import Pf_murata from "../views/works/02_01_02_Pf_murata.vue";
import Koka from "../views/works/01_01_01_Koka.vue";
import Findfont from "../views/works/01_01_02_Findfont.vue";
import Jishatecho from "../views/works/01_02_01_Jishatecho.vue";
import Userella from "../views/works/01_02_02_Userella.vue";

Vue.use(VueRouter);
Vue.use(VueHead);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/web",
    name: "Web",
    component: Web,
  },
  {
    path: "/graphic",
    name: "Graphic",
    component: Graphic,
  },
  {
    path: "/training",
    name: "Training",
    component: Training,
  },
  {
    path: "/gifcle",
    name: "Gifcle",
    component: Gifcle,
  },
  {
    path: "/fribo",
    name: "Fribo",
    component: Fribo,
  },
  {
    path: "/philosophia",
    name: "Philosophia",
    component: Philosophia,
  },
  {
    path: "/minicomi",
    name: "minicomi",
    component: minicomi,
  },
  {
    path: "/pf_ver1",
    name: "Pf_ver1",
    component: Pf_ver1,
  },
  {
    path: "/pf_murata",
    name: "Pf_murata",
    component: Pf_murata,
  },
  {
    path: "/koka",
    name: "Koka",
    component: Koka,
  },
  {
    path: "/findfont",
    name: "Findfont",
    component: Findfont,
  },
  {
    path: "/jishatecho",
    name: "Jishatecho",
    component: Jishatecho,
  },
  {
    path: "/userella",
    name: "Userella",
    component: Userella,
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
