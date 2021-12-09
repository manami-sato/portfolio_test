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
      {
        rel: "apple-touch-icon",
        href: "https://click.ecc.ac.jp/ecc/msatou/portfolio/img/favicon.png",
      },
    ],
  },
};
</script>

<style lang="scss"></style>
