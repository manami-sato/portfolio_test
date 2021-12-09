<template lang="pug">
	main
		WorksHead(value="web",@increment="getSortNum = $event")
		div(v-if="getSortNum == 0").web
			section(v-for="(data,i) in res",:key="i",:data-year="data.year",ref="item",:class=" i > 6 ? 'worksIndex1':'worksIndex2'",:style="{order:worksOrder - i}").web__contents.contentsActive
				div.web__contents--img
					img(:src="`https://click.ecc.ac.jp/ecc/msatou/portfolio/img/${data.img}`")
				ul.web__contents--sort
					li(v-for="item in data.sort",:key="item") {{item}}
				h2.web__contents--appeal がんばったこと
				div.web__contents--info
					h3.web__contents--ttl {{data.title}}
					p.web__contents--catchphrase {{data.catchphrase}}
				p.web__contents--txt {{data.text}}
				div.web__contents--lang
					span 使用言語
					span(v-for="item in data.lang",:key="item") {{item}}
				div.web__contents--link
					a(:href="`https://manami-sato.github.io/${data.URL}/`",target="detail")
						span Web site
					a(:href="`https://github.com/manami-sato/${data.URL}/`",target="github")
						span GitHub
					router-link(:to="`/ecc/msatou/portfolio/${data.URL}`")
						span more
		div.test
			section(v-for="(data,i) in res",:key="i",:data-year="data.year",v-if="getSortNum == data.year",class="contentsActive",ref="item",:style="{order:worksOrder - i}").web__contents
				div.web__contents--img
					img(:src="`https://click.ecc.ac.jp/ecc/msatou/portfolio/img/${data.img}`")
				div.test2
					ul.web__contents--sort
						li(v-for="item in data.sort",:key="item") {{item}}
					h2.web__contents--appeal
						|がんばったこと
					div.web__contents--info
						h3.web__contents--ttl {{data.title}}
						p.web__contents--catchphrase {{data.catchphrase}}
					p.web__contents--txt {{data.text}}
					div.web__contents--lang
						span 使用言語
						span(v-for="item in data.lang",:key="item") {{item}}
					div.web__contents--link
						a(:href="`https://manami-sato.github.io/${data.URL}/`",target="detail")
							span Web site
						a(:href="`https://github.com/manami-sato/${data.URL}/`",target="github")
							span GitHub
						router-link(:to="`/ecc/msatou/portfolio/${data.URL}`")
							span more
		div(v-if="getSortNum == 3")
			p.graphic__none coming soon...
		//- div.web__circle
			div(v-for="(circle,i) in res",:key="i",v-on:click="circleAction(i)",:data-year="circle.year",v-if="getSortNum == circle.year",:class="{circleActive:selectedNumber == i}").web__circle--items
			//- contentsDisplay == getSortNum
		Foot

</template>

<script>
import WorksHead from "@/components/WorksHead.vue";
import Foot from "@/components/Foot.vue";
export default {
  name: "Web",
  // el: "main",
  components: {
    WorksHead,
    Foot,
  },
  head: {
    title() {
      return {
        inner: "Web",
        separator: "｜",
        complement: "佐藤真奈実's Portfolio",
      };
    },
  },
  data() {
    return {
      res: [],
      getSortNum: 0,
      // contentsDisplay: 0,
      selectedNumber: 0,
      old: 0,
      test: [0, 0],
      data: [],
      num: 0,
      worksOrder: 0,
    };
  },
  methods: {
    circleAction(i) {
      // console.log(i);
      this.selectedNumber = i;
      // console.log(this.selectedNumber);
    },
    // newTab(i) {
    //   open(`https://click.ecc.ac.jp/ecc/msatou/portfolio/${this.res[i].URL}`);
    // },
  },
  // watch: {
  //   getSortNum(newVal, oldVal) {
  //     // データの値が変化した時にコンソールに新しい値と古い値を出力
  //     console.log(newVal, oldVal);
  //   },
  // },
  mounted() {
    fetch("https://click.ecc.ac.jp/ecc/msatou/portfolio/php/web.php")
      .then((res) => {
        return res.json();
      })
      .then((json) => {
        this.res = json;
        this.worksOrder = this.res.length;
        // console.log(this.worksOrder);
        // this.res = this.res[this.res.length - 1];
      });
  },
  // updated() {
  //   let item = this.$refs.item; //コンテンツ取得
  //   let itemTop = item[this.selectedNumber].getBoundingClientRect().top; //コンテンツの上からの高さ
  //   let pageY = window.pageYOffset; //現在のスクロール量
  //   let itemMargin = (innerY - item[this.selectedNumber].clientHeight) / 2; //コンテンツを中央寄せするための空白
  //   let setHeight = itemTop + pageY - itemMargin; //設定する高さ
  //   document.documentElement.scrollTop = setHeight;
  //   // スクロールするごとに検知する
  //   // ビューポートの縦幅(a)
  //   // コンテンツの上からの高さ(bx)+コンテンツの縦幅(by) = b
  //   window.addEventListener("scroll", () => {
  //     for (let i = this.num; i < item.length; i++) {
  //       let itemsTop = item[i].getBoundingClientRect().top; // bx
  //       let itemsHeight = item[i].clientHeight; // by
  //       let itemsValue = itemsTop + itemsHeight; // b
  //       let itemsFlag = innerY - itemsValue; // c
  //       this.test = [itemsFlag, i];
  //       if (Math.sign(itemsFlag) >= this.num) {
  //         // コンテンツ最下部が正の数
  //         if (this.old < i) {
  //           this.old = i;
  //           this.selectedNumber = i;
  //         }
  //       }
  //       if (this.test[1] == this.old) {
  //         if (Math.sign(this.test[this.num]) == -1) {
  //           this.old = this.old - 1;
  //           this.selectedNumber = this.old;
  //         }
  //       }
  //     }
  //   });
  // },
};
// let innerY = window.innerHeight; // ビューポートの縦幅 a
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";

.web {
  display: flex;
  justify-content: space-around;
  width: 85vw;
  max-width: 1200px;
  flex-wrap: wrap;
  margin: 0 auto;
  &__contents {
    flex-wrap: wrap;
    width: 85vw;
    max-width: 1200px;
    margin: 0 auto 80px;
    @include worksPreset(16px 0 12px, flex);
    @include contentsNone();
    opacity: 0.5;
    transition: 0.2s opacity;
    &--img {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40%;
      min-width: 400px;
      height: 360px;
      img {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }
    }
  }
  &__circle {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 16px;
    position: fixed;
    top: 0;
    right: 5%;
    bottom: 0;
    margin: auto;
    &--items {
      width: inherit;
      height: 16px;
      background: $baceColor;
      margin-bottom: 16px;
      border-radius: 8px;
      transition: 0.2s background;
      &:last-of-type {
        margin: 0;
      }
      &:hover {
        background: $mainColor;
      }
    }
  }
}
.contentsActive {
  opacity: 1;
}
.circleActive {
  background: $mainColor;
}
.test {
  display: flex;
  flex-direction: column;
}
.test2 {
  width: 50%;
  min-width: 400px;
}
.worksIndex1 {
  width: 45%;
  min-width: 300px;
  margin-bottom: 80px;
  @include worksPreset(16px 0 24px, block);
  .web__contents--img {
    width: 100%;
    height: 400px;
    padding: 0 0 32px 0;
  }
}
.worksIndex2 {
  display: block;
  width: 28%;
  min-width: 304px;
  margin-bottom: 80px;
  .web__contents--img {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-width: auto;
    height: 256px;
    padding-bottom: 16px;
    img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
  }
  .web__contents--info {
    display: flex;
    flex-direction: column;
    h3 {
      order: 2;
    }
    p {
      order: 1;
    }
  }
  .web__contents--appeal {
    display: none;
  }
  .web__contents--txt {
    min-height: 88px;
  }
  .web__contents--link {
    display: grid;
    grid-template-columns: 48% 48%;
    grid-template-rows: auto auto;
    grid-gap: 8px 4%;
    width: 90%;
    margin: 0 auto;
    a {
      width: 100%;
      &:nth-of-type(1) {
        grid-column: 1;
        grid-row: 1;
      }
      &:nth-of-type(2) {
        grid-column: 2;
        grid-row: 1;
      }
      &:nth-of-type(3) {
        width: 100%;
        grid-column: 1/3;
        grid-row: 2;
      }
    }
  }
}
</style>
