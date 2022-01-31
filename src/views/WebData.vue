<template lang="pug">
	div(:style="{borderColor: color}").data
		div.data__description
			div.data__description--img
				img(:src="dataMockUp.img")
			ul.data__description--sort
				li(v-for="item in data.sort",:key="item") {{item}}
			section
				p.data__description--catchphrase {{data.catchphrase}}
				h1.data__description--ttl {{data.title}}
				p.data__description--txt {{data.text}}
				div.data__description--list
					div
						span 使用言語
						span(v-for="(lang,langKey) in data.lang",:key="langKey") {{lang}}
					div
						span 役割分担
						span(v-for="(role,roleKey) in data.role",:key="roleKey") {{role}}
				//- div.data__description--lang
				//- 	div(v-for="item in data.lang",:key="item")
				//- 		img(:src="`${path}img/lang_${item}.svg`",:alt="`${item}`")
		section.data__detail
			h2.data__detail--ttl {{data.headline}}
			div
				section.data__detail--appeal
					h3.data__detail--appeal--ttl 問題定義／企画のきっかけ
					p.data__detail--appeal--txt {{data.chance}}
				section.data__detail--appeal
					h3.data__detail--appeal--ttl フロントエンドにおける技術目標
					p.data__detail--appeal--txt {{data.target}}
				//- section.data__detail--appeal
					h3.data__detail--appeal--ttl 反省と次回に活かすこと
					p.data__detail--appeal--txt data.introspection}}
		div.data__link
			a(v-for="(link,i) in data.link",:key="data.link[i].id",:href="data.link[i].url",target="page")
				span {{data.link[i].name}}
		nav.data__nav
			div.data__nav--logo
				img(:src="dataLogo.img")
			div(@click="dataBack").data__nav--back
</template>

<script>
import Mixin from "@/mixins/Mixin.vue";
export default {
  name: "Data",
  mixins: [Mixin],
  // props: {
  //   id: Number,
  // },
  data() {
    return {
      res: [],
      dataId: "",
      data: "",
      color: "",
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
        img:
          this.data.img &&
          `${this.path}img/web_0${this.data.year}_${this.data.img}.png`,
      };
    },
    dataLogo() {
      return {
        img: this.data.img && `${this.path}img/logo_${this.data.img}.png`,
      };
    },
  },
  methods: {
    dataBack() {
      history.back();
    },
  },
  mounted() {
    fetch(`${this.productsData}`)
      .then((res) => {
        return res.json();
      })
      .then((json) => {
        this.res = json.web;
        for (let i = 0; i < this.res.length; i++) {
          if (this.res[i].img == this.$route.params.id) {
            this.dataId = i;
          }
        }
        this.data = this.res[this.dataId];
        this.color = this.data.color;
        document.title = this.data.title + `｜佐藤真奈実's Portfolio`;
      });
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
.data {
  min-height: 100vh;
  border-style: solid;
  border-width: 24px;
  padding: 56px 10%;
  position: relative;
  &__description {
    flex-direction: column;
    @include worksPreset();
    &--img {
      width: 90%;
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
  &__link {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;
    a {
      width: 200px;
      @include btn(
        $bg: $accentColor,
        $c: $white,
        $b: 3px solid $accentColor,
        $h: 48px
      );
      @include btnHoverAction($c: $accentColor);
    }
  }
  &__nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 120px;
    position: absolute;
    top: 0;
    left: 0;
    &--logo {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 32%;
      padding: 0 0 0 4vw;
      img {
        height: 100%;
      }
    }
    &--back {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 120px;
      height: inherit;
      background: $mainColor;
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
@media screen and (min-width: 1000px) {
  .data {
    display: grid;
    grid-template-columns: 40% 55%;
    grid-template-rows: auto auto;
    grid-gap: 0 5%;
    &__description {
      grid-column: 1;
      grid-row: 1;
    }
    &__detail {
      grid-column: 2;
      grid-row: 1;
    }
    &__link {
      grid-column: 1/3;
      grid-row: 2;
    }
  }
}
@media screen and (max-width: 1000px) {
  .data {
    display: flex;
    flex-direction: column;
    &__description {
      order: 1;
    }
    &__detail {
      order: 3;
      &--ttl {
        margin: 64px 0 48px;
      }
    }
    &__link {
      order: 2;
      a {
        min-width: 104px;
        margin: 8px 16px 8px 0;
        &:last-of-type {
          margin: 8px 16px 8px 0;
        }
      }
    }
  }
}
</style>
