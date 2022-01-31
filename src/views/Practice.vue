<template lang="pug">
	main
		WorksHead(value="practice",@increment="getSortNum = $event")
		div.practice
			article(v-for="(data,i) in res",:key="i",:data="data.year",v-if="0 == getSortNum||data.year == getSortNum")
				div.practice__info
					h3.practice__info--ttl {{data.title}}
					span.practice__info--sort {{data.sort}}
				div.practice__txt
					div {{data.text}}
				ul.practice__link
					li
						a(:href="`https://manami-sato.github.io/practice-${data.url}/`",target="page")
							span to Page
					li
						a(:href="`https://github.com/manami-sato/practice-${data.url}/`",target="page")
							span GitHub
			div(v-if="getSortNum == 1||getSortNum == 3")
				p.practice__none coming soon...
		Foot
</template>

<script>
import WorksHead from "@/components/WorksHead.vue";
import Foot from "@/components/Foot.vue";
import Mixin from "@/mixins/Mixin.vue";
export default {
  name: "Web",
  components: {
    WorksHead,
    Foot,
  },
  mixins: [Mixin],
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
      getSortNum: 0,
    };
  },
  mounted() {
    fetch(`${this.productsData}`)
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
  @include contentsNone();
  article {
    width: 45%;
    min-width: 430px;
    margin-bottom: 72px;
    position: relative;
    padding-bottom: 48px;
  }
  &__info {
    @include worksInfoSet($w: 40px, $ml: 8px);
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
@media screen and (max-width: 650px) {
  .practice {
    flex-direction: column;
    min-width: 80%;
    article {
      min-width: 100%;
    }
  }
}
</style>
