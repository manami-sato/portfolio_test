<template lang="pug">
  section(:style="{borderColor: bColor}").data
    div.data__description
      div.data__description--img
        img(:src="dataMockUp.img")
      ul.data__description--sort
        li(v-for="item in data.sort",:key="item") {{item}}
      section
        p.data__description--catchphrase {{data.catchphrase}}
        h1.data__description--ttl {{data.title}}
        p.data__description--txt {{data.text}}
        div.data__description--lang
          span 使用言語
          span(v-for="item in data.lang",:key="item") {{item}}
        div.data__description--link
          a(:href="`https://manami-sato.github.io/${data.URL}/`",target="page")
            span Web site
          a(:href="`https://github.com/manami-sato/${data.URL}/`",target="github")
            span GitHub
          a(:href="`/graphic#${data.URL}/`",target="page")
            span to Graphic
    section.data__detail
      h2.data__detail--ttl がんばったこといろいろ
      div
        section.data__detail--appeal
          h3.data__detail--appeal--ttl 問題定義／企画のきっかけ
          p.data__detail--appeal--txt {{chance}}
        section.data__detail--appeal
          h3.data__detail--appeal--ttl フロントの立場で問題解決にどうやって関与してきたか
        section.data__detail--appeal
          h3.data__detail--appeal--ttl それを叶えるためにプログラム上頑張ったこと
          p.data__detail--appeal--txt {{careful}}
        section.data__detail--appeal
          h3.data__detail--appeal--ttl 技術目標（それを叶えるためにプログラム上意識したこと）
          p.data__detail--appeal--txt {{impression}}
    nav.data__nav
      div.data__nav--logo
        img(:src="dataLogo.img")
      div(@click="dataBack").data__nav--back
</template>

<script>
export default {
  name: "Data",
  el: "section",
  props: ["value"],
  data() {
    return {
      res: [],
      data: "",
      bColor: "",
      chance: "",
      careful: "",
      impression: "",
      logo: "",
      title: "",
    };
  },
  head: {
    title() {
      return {
        inner: this.title,
        separator: "｜",
        complement: "佐藤真奈実's Portfolio",
      };
    },
  },
  computed: {
    dataMockUp() {
      return {
        img: this.data.img && require(`@/assets/img/${this.data.img}`),
      };
    },
    dataLogo() {
      return {
        img:
          this.data.img &&
          require(`@/assets/img/works_logo_${this.data.URL}.svg`),
      };
    },
  },
  methods: {
    dataBack() {
      window.close();
    },
  },
  mounted() {
    fetch("https://click.ecc.ac.jp/ecc/msatou/web.php")
      .then((res) => {
        return res.json();
      })
      .then((json) => {
        this.res = json;
        this.data = json[this.value];
        this.bColor = this.data.design.color[0].clr;
        this.chance = this.data.products.chance;
        this.careful = this.data.products.careful;
        this.impression = this.data.products.impression;
        document.title = this.data.title + `｜佐藤真奈実's Portfolio`;
      });
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
.data {
  display: flex;
  justify-content: space-around;
  min-height: 100vh;
  border-style: solid;
  border-width: 24px;
  padding: 56px 5%;
  position: relative;
  &__description {
    width: 40%;
    min-width: 360px;
    flex-direction: column;
    @include worksPreset();
    &--img {
      width: 80%;
      height: 300px;
      img {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }
    }
    &--ttl {
      color: $mainColor;
    }
  }
  &__detail {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 50%;
    min-width: 520px;
    &--ttl {
      color: $mainColor;
      font-size: 3.2rem;
      margin-bottom: 48px;
    }
    &--appeal {
      margin-bottom: 32px;
      &:last-of-type {
        margin: 0;
      }
      &--ttl {
        color: $mainColor;
        font-size: 1.6rem;
        margin-bottom: 12px;
      }
      &--txt {
        line-height: 2.4rem;
      }
    }
  }
  &__nav {
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 120px;
    position: absolute;
    top: 0;
    left: 0;
    &--logo {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 200px;
      height: inherit;
      img {
        height: 24px;
      }
    }
    &--back {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 120px;
      height: inherit;
      background: $mainColor;
      // border: 8px solid $mainColor;
      position: relative;
      transition: 0.2s background;
      cursor: pointer;
      &:hover {
        background: rgba($color: $mainColor, $alpha: 0.3);
        &::before,
        &::after {
          background: $mainColor;
        }
      }
      &::before,
      &::after {
        content: "";
        display: block;
        background: $white;
        width: 32px;
        height: 8px;
        border-radius: 10px;
        position: absolute;
      }
      &::before {
        transform: rotateZ(45deg);
      }
      &::after {
        transform: rotateZ(-45deg);
      }
    }
  }
}
</style>
