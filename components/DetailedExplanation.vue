<template lang="pug">
  section.db
    div(:style="{borderColor: bColor}").db__detail
      p 作品を通しての目標
      div 目標にしたこと
      section.db__detail--wrap
        h2 制作について
        table
          tr
            th 企画のきっかけ
            td {{chance}}
          tr
            th 意識した点
            td {{careful}}
          tr
            th 制作した感想
            td {{impression}}
      section.db__detail--wrap
        h2 デザイン
        table
          tr
            td(colspan="2")
              img(:src="worksLogo.img")
            td(colspan="2")
              div.db__detail--wrap--color
                div(v-for="(clr,i) in usedColor")
                  div(:style="{background:data.design.color[i].clr}")
                  p {{data.design.color[i].clr}}
          tr
            th ロゴ
            td {{logo}}
            th 使用色
            td {{colorDescription}}
      section.db__detail--wrap
        h2 サイト概要
        table
          tr
            th テーマ
            td  {{thema}}
            th コンセプト
            td  {{concept}}
          tr
            th ターゲット
            td  {{target}}
            th システム
            td  {{system}}
    div.db__description
      div.db__description--img
        img(:src="worksMockUp.img")
      ul.db__description--sort
        li(v-for="item in data.sort",:key="item") {{item}}
      section
        h1.db__description--ttl {{data.title}}
        p.db__description--catchphrase #きもちを贈り合うサブスクリプション
        p.db__description--txt {{data.text}}
        div.db__description--lang
          span 使用言語：
          span(v-for="item in data.lang",:key="item") {{item}}
        div
          a(:href="`https://manami-sato.github.io/${data.URL}/`",target="page").db__description--link
            span Web site
          a(:href="`https://github.com/manami-sato/${data.URL}/`",target="github").db__description--link
            span GitHub

</template>

<script>
export default {
  name: "DetailedExplanation",
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
      thema: "",
      concept: "",
      target: "",
      system: "",
      usedColor: "",
      usedColors: "",
      logo: "",
      colorDescription: "",
    };
  },
  head: {
    title() {
      return {
        inner: this.data.ttl,
        separator: "|",
        complement: "佐藤真奈実's Portfolio",
      };
    },
  },
  computed: {
    worksMockUp() {
      return {
        img: this.data.img && require(`@/assets/img/${this.data.img}`),
      };
    },
    worksLogo() {
      return {
        img:
          this.data.img &&
          require(`@/assets/img/works_logo_${this.data.URL}.svg`),
      };
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
        this.thema = this.data.summary.thema;
        this.concept = this.data.summary.concept;
        this.target = this.data.summary.target;
        this.system = this.data.summary.system;
        this.usedColor = this.data.design.color;
        // this.usedColors = this.data.design.color[i].clr;
        this.logo = this.data.design.logo;
        this.colorDescription = this.data.design.colorDescription;
      });
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
.db {
  display: flex;
  &__detail {
    width: 65%;
    min-height: 100vh;
    border-style: solid;
    border-width: 24px;
    padding: 56px 24px;
    &--wrap {
      h2 {
        color: $mainColor;
        margin-left: 24px;
      }
      &--color {
        display: flex;
        // justify-content: center;
        font-family: $font;
        margin: 0 auto;
        text-align: center;
        div {
          margin-right: 8px;
          &:last-child {
            margin: 0;
          }
          div {
            width: 88px;
            height: 88px;
          }
        }
      }
    }
  }
  &__description {
    width: 35%;
    padding: 3%;
    flex-direction: column;
    position: fixed;
    top: 0;
    right: 0;
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
  }
  table {
    border-spacing: 24px 16px;
  }
  th {
    width: 108px;
    color: $mainColor;
    text-align: left;
  }
}
</style>
