import Vue from "vue";
import VueRouter from "vue-router";
import VueHead from "vue-head";
import Home from "../views/Home.vue";
import Web from "../views/Web.vue";
import Graphic from "../views/Graphic.vue";
import Training from "../views/Training.vue";
import Koka from "../views/works/01_01_Koka.vue";
import Findfont from "../views/works/01_02_Findfont.vue";
import Jishatecho from "../views/works/01_03_Jishatecho.vue";
import Pf_ver1 from "../views/works/01_04_Pf_ver1.vue";
import Userella from "../views/works/01_05_Userella.vue";
import minicomi from "../views/works/02_01_minicomi.vue";
// import Pf_murata from "../views/works/02_01_02_Pf_murata.vue";
import Philosophia from "../views/works/02_03_Philosophia.vue";
import Fribo from "../views/works/02_04_Fribo.vue";
import Gifcle from "../views/works/02_05_Gifcle.vue";

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
    path: "/ecc/msatou/portfolio/training",
    name: "Training",
    component: Training,
  },
  {
    path: "/gifcle",
    name: "Gifcle",
    component: Gifcle,
  },
  {
    path: "/ecc/msatou/portfolio/fribo",
    name: "Fribo",
    component: Fribo,
  },
  {
    path: "/ecc/msatou/portfolio/philosophia",
    name: "Philosophia",
    component: Philosophia,
  },
  {
    path: "/ecc/msatou/portfolio/minicomi",
    name: "minicomi",
    component: minicomi,
  },
  {
    path: "/ecc/msatou/portfolio/pf_ver1",
    name: "Pf_ver1",
    component: Pf_ver1,
  },
  // {
  //   path: "/ecc/msatou/portfolio/pf_murata",
  //   name: "Pf_murata",
  //   component: Pf_murata,
  // },
  {
    path: "/ecc/msatou/portfolio/koka",
    name: "Koka",
    component: Koka,
  },
  {
    path: "/ecc/msatou/portfolio/findfont",
    name: "Findfont",
    component: Findfont,
  },
  {
    path: "/ecc/msatou/portfolio/jishatecho",
    name: "Jishatecho",
    component: Jishatecho,
  },
  {
    path: "/ecc/msatou/portfolio/userella",
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
