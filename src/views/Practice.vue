<template lang="pug">
	main
		WorksHead(value="tra")
		div.practice
			article(v-for="(data,i) in res",:key="i",:data="data.year")
				h3.practice__ttl
					div
						|{{data.title}}
						span {{data.sort}}
				div.practice__txt
					div {{data.text}}
				ul.practice__link
					li
						a(:href="`https://manami-sato.github.io/practice-${data.url}/`",target="page")
							span to Page
					li
						a(:href="`https://github.com/manami-sato/practice-${data.url}/`",target="page")
							span GitHub
		Foot
</template>

<script>
import WorksHead from "@/components/WorksHead.vue";
import Foot from "@/components/Foot.vue";
export default {
  name: "Web",
  components: {
    WorksHead,
    Foot,
  },
  head: {
    title() {
      return {
        inner: "practice",
        separator: "｜",
        complement: "佐藤真奈実's Portfolio",
      };
    },
  },
  data() {
    return {
      res: [],
    };
  },
  mounted() {
    fetch("https://click.ecc.ac.jp/ecc/msatou/portfolio/products.php")
      .then((res) => {
        return res.json();
      })
      .then((json) => {
        this.res = json.practice;
      });
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
.practice {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  width: 80%;
  min-width: 600px;
  margin: 0 auto;
  article {
    width: 45%;
    min-width: 430px;
    margin-bottom: 72px;
    position: relative;
    padding-bottom: 48px;
  }
  &__ttl {
    color: $mainColor;
    font-size: 2rem;
    // span {
    //   display: inline-flex;
    //   align-items: center;
    //   height: 24px;
    //   color: $white;
    //   background: $accentColor;
    //   border-radius: 16px;
    //   padding: 2px 12px 0;
    //   margin: 0 0 0 8px;
    //   font-weight: bold;
    //   font-size: 1.3rem;
    // }
  }
  &__txt {
    div {
      padding: 16px 0 24px;
    }
  }
  &__link {
    display: flex;
    justify-content: space-between;
    width: 95%;
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    li {
      display: flex;
      align-items: center;
      width: 48%;
      a {
        @include btn(
          $bg: $white,
          $c: $accentColor,
          $b: 3px solid $accentColor,
          $h: 48px,
          $m1: 0,
          $m2: 0
        );
        width: 100%;
        @include btnHoverAction($bg: $accentColor, $c: $white);
      }
    }
  }
}
</style>
