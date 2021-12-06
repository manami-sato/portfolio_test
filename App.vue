<template>
  <div id="app">
    <router-view />
  </div>
</template>

<script>
export default {
  head: {
    meta: [
      {
        name: "description",
        content: "佐藤真奈実のポートフォリオサイトです。",
      },
      {
        name: "viewport",
        content: "width=device-width,initial-scale=1.0,minimum-scale=1.0",
      },
      { charset: "utf-8" },
      { property: "og:type", content: "website" },
      { property: "og:site_name", content: "佐藤真奈実's Portfolio" },
      { property: "og:title", content: "佐藤真奈実's Portfolio" }, //- サイト自体のタイトル
      {
        property: "og:description",
        content: "佐藤真奈実のポートフォリオサイトです。",
      }, //- サイトの説明
      {
        property: "og:url",
        content: "http://click.ecc.ac.jp/ecc/msatou/portfolio/",
      }, //- サイトのURL
      {
        property: "og:image",
        content: "",
      }, //- サイトのカバー画像
      { rel: "apple-touch-icon", href: "@/assets/img/favicon.png" },
    ],
    // script: [
    //   (function (d) {
    //     var config = {
    //         kitId: "adf3wnc",
    //         scriptTimeout: 3000,
    //         async: true,
    //       },
    //       h = d.documentElement,
    //       t = setTimeout(function () {
    //         h.className =
    //           h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    //       }, config.scriptTimeout),
    //       tk = d.createElement("script"),
    //       f = false,
    //       s = d.getElementsByTagName("script")[0],
    //       a;
    //     h.className += " wf-loading";
    //     tk.src = "https://use.typekit.net/" + config.kitId + ".js";
    //     tk.async = true;
    //     tk.onload = tk.onreadystatechange = function () {
    //       a = this.readyState;
    //       if (f || (a && a != "complete" && a != "loaded")) return;
    //       f = true;
    //       clearTimeout(t);
    //       try {
    //         this.Typekit.load(config);
    //       } catch (e) {
    //         console.log(e);
    //       }
    //     };
    //     s.parentNode.insertBefore(tk, s);
    //   })(document),
    // ],
  },
};
</script>

<style lang="scss"></style>
