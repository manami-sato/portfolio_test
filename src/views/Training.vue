<template lang="pug">
	main
		WorksHead(value="tra")
		div.practice
			article(v-for="(data,i) in res",:key="i",:data="data.year")
				div.practice__info
					div.practice__info--ttl
						h3 {{data.title}}
						div {{data.sort}}
					div.practice__info--txt {{data.text}}
				a(:html="data.URL").practice__btn
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
        inner: "Training",
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
        this.res = json.training;
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
    display: flex;
    width: 45%;
    min-width: 430px;
    margin-bottom: 30px;
    border: 3px solid $mainColor;
    transform: skewX(340deg);
  }
  &__info {
    width: 85%;
    transform: skewX(20deg);
    margin: 24px 0;
    padding: 0 24px 0 32px;
    &--ttl {
      display: flex;
      width: 100%;
    }
    &--txt {
      margin: 12px 0 0;
    }
  }
  &__btn {
    display: block;
    width: 15%;
    background: $mainColor;
  }
}
</style>
