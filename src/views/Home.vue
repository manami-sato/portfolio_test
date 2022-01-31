<template lang="pug">
	main
		nav.index__nav
			header.index__nav--logo
				a(href="#")
					img(:src="`${path}img/logo.png`",alt="佐藤真奈実's Portfolio")
			ul.index__nav--link
				li
					a(href="#about") about
				li
					a(href="#works") works
				li
					a(href="#contact") contact
		section(:style="{backgroundImage:'url(' + path + 'img/pf_illust.png)'}").index__fv
			div.index__fv--illust
			div
				h1.index__fv--logo
					img(:src="`${path}img/logo.png`",alt="佐藤真奈実's Portfolio")
				div
					div.index__fv--scroll
						svg(version="1.1",xmlns="http://www.w3.org/2000/svg",xmlns:xlink="http://www.w3.org/1999/xlink",x="0px",y="0px",viewBox="0 0 24 24",style="enable-background:new 0 0 24 24;",xml:space="preserve")
							path(d="M16,22c1.1,0,2-0.9,2-2V8c0-3.3-2.7-6-6-6S6,4.7,6,8v12c0,1.1,0.9,2,2,2H16z M20,20c0,2.2-1.8,4-4,4H8c-2.2,0-4-1.8-4-4V8c0-4.4,3.6-8,8-8s8,3.6,8,8V20z M13,19c0,0.6-0.4,1-1,1s-1-0.4-1-1v-4c0-0.6,0.4-1,1-1s1,0.4,1,1V19z")
					div scroll
		//- FadeIn
		p.index__slogan {{slogan}}
		//- FadeIn
		section.index__profile#about
			div.index__profile--icon
				div
					div
						img(:src="`${path}img/index_about_icon.png`",alt="アイコン")
						img(:src="`${path}img/index_about_icon_on.png`",alt="アイコン")
			div.index__profile--txt
				h2
					|カメラとフロントエンドに<br>
					|興味を持って10年。
				h3 さとう まなみ（フロントエンドエンジニア志望）
				p
					|ECCコンピュータ専門学校 マルチメディア研究学科<br>
					|Webデザインコース 2年（23卒）
				p
					|小学生の頃にHTMLやCSSに触れ、コーディングの楽しさを<br>
					|感じていたことからこの分野を目指しました。<br>
					|記法に沿い、編集のしやすいコードを書けるよう勉強中です。
				div.index__profile--txt--skills
					span Skills：
					ul
						li(v-for="(lang,langKey) in langData",:key="langKey") {{lang}}
					//- ul
						li(v-for="(lang, i) in langData")
							img(:src="`${path}img/lang_${langData[i]}.svg`",:alt="`${langData[i]}`")
				p
					|趣味：カメラです！桜と紅葉の時季には必ず撮影に行きます！
			div.index__profile--link
				a(href="https://github.com/manami-sato",target="page")
					span GitHub
				a(href="https://click.ecc.ac.jp/ecc/msatou/Philosophia/",target="_blank")
					span photography's portfolio
		FadeIn
			section.index__rcm#works
				div(v-for="(item,itemKey) in rcmData",:key="itemKey")
					ul.index__rcm--sort
						li(v-for="(sort,sortKey) in item.sort",:key="sortKey") {{sort}}
					h2.index__rcm--headline {{item.headline}}
					div
						h3.index__rcm--ttl {{item.title}}
						p.index__rcm--catchphrase  {{item.catchphrase}}
					p.index__rcm--txt {{item.text}}
					div.index__rcm--list
						div
							span 使用言語
							span(v-for="(lang,langKey) in item.lang",:key="langKey") {{lang}}
						div
							span 役割分担
							span(v-for="(role,roleKey) in item.role",:key="roleKey") {{role}}
					div.index__rcm--link
						a(v-for="(link,linkKey) in item.link.slice(0,2)",:key="linkKey",:href="`${link.url}`",target="page")
							span {{link.name}}
						router-link(:to="`${routerPath}web/${item.img}`")
							span more
				div.index__rcm--img
					img(:src="`${path}img/index_rcm_mock.png`",alt="raict")
		FadeIn
			ul.index__logo
				li(v-for="(item,i) in rcmWorks")
					router-link(:to="`${routerPath}web/${item.path}`")
						img(:src="`${path}img/index_logo_${i+1}.svg`",:alt="item.alt")
						img(:src="`${path}img/index_logo_${i+1}_on.svg`",:alt="item.alt")
		FadeIn
			router-link(:to="{name:'Web'}",@mouseover="worksBnrOver",@mouseleave="worksBnrLeave").index__work
				span {{worksBnrTxt[worksBnrNum]}}
		FadeIn
			div.index__slogan {{slogan}}
		FadeIn
			Foot#contact
		transition(name="fade1")
			a(href="#",v-show="backFlag").index__back
				svg(xmlns="http://www.w3.org/2000/svg",viewBox="0 0 80.19 100.57")
					path(d="M40.1,100.57a7,7,0,0,1-7-7V23.9L12,45.05a7,7,0,0,1-9.9-9.9L35.11,2.09a7,7,0,0,1,6-2h0l.45.08A7,7,0,0,1,45,2h0l33.09,33.1a7,7,0,0,1-9.9,9.9L47.1,23.9V93.57A7,7,0,0,1,40.1,100.57Z")
</template>
<script>
import FadeIn from "@/components/FadeIn.vue";
import Foot from "@/components/Foot.vue";
import Mixin from "@/mixins/Mixin.vue";
export default {
  name: "Home",
  components: {
    FadeIn,
    Foot,
  },
  mixins: [Mixin],
  head: {
    title() {
      return {
        inner: "佐藤真奈実's Portfolio",
      };
    },
  },
  data() {
    return {
      res: [],
      langData: ["Vue.js", "Pug", "Sass", "JavaScript", "HTML5", "CSS3"],
      rcmData: 0,
      rcmWorks: [
        {
          path: "fribo",
          alt: "Fribo",
        },
        {
          path: "userella",
          alt: "userella",
        },
        {
          path: "jishatecho",
          alt: "寺社手帖",
        },
        {
          path: "gifcle",
          alt: "Gifcle",
        },
        {
          path: "minicomi",
          alt: "ミニコミ！",
        },
      ],
      // rcmPath: ["fribo", "userella", "jishatecho", "gifcle", "minicomi"],
      // rcmAlt: ["Fribo", "userella", "寺社手帖", "Gifcle", "ミニコミ！"],
      // rcmId: [8, 5, 9, 3, 6],
      worksBnrTxt: ["作品をもっとご覧になりませんか？", "view more!"],
      worksBnrNum: 0,
      slogan: "チームの軸を支えられるフロントエンドエンジニアになるために。",
      scrollY: 0,
      backFlag: false,
    };
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  methods: {
    worksBnrOver() {
      this.worksBnrNum = 1;
    },
    worksBnrLeave() {
      this.worksBnrNum = 0;
    },
    handleScroll() {
      this.scrollY = window.scrollY;
      if (!this.backFlag && this.scrollY > 300) {
        this.backFlag = true;
      }
      if (this.backFlag && this.scrollY < 300) {
        this.backFlag = false;
      }
    },
  },
  mounted() {
    fetch(`${this.productsData}`)
      .then((res) => {
        return res.json();
      })
      .then((json) => {
        this.res = json.web;
        this.rcmData = this.res.slice(this.res.length - 1, this.res.length);
      });
  },
  updated() {
    if (this.$refs.profile == "") {
      this.profileTop = this.$refs.profile.getBoundingClientRect().top;
    }
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
/* ------------------------------
fvここから
------------------------------ */
.index__fv {
  display: flex;
  background-size: contain;
  background-repeat: no-repeat;
  margin: 0 auto;
  &--illust {
    width: 40%;
    img {
      width: 100%;
    }
    & + div {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-end;
      width: 60%;
    }
  }
  &--logo {
    display: flex;
    width: 100%;
    height: 200px;
    & + div {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin-right: 24%;
    }
    img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
  }
  &--scroll {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 24px;
    margin-right: 8px;
    position: relative;
    animation: fvMouseMove 2.8s ease-in-out infinite;
    animation-delay: 2s;
    & + div {
      font-family: $font;
      margin-top: 32px;
    }
    svg {
      width: 100%;
      path {
        fill: $accentColor;
      }
    }
    &::after {
      content: "";
      display: block;
      width: 2px;
      height: 48px;
      background: $accentColor;
      margin-top: 12px;
      border-radius: 1px;
    }
  }
}
@keyframes fvMouseMove {
  0% {
    transform: translateY(0);
  }
  10% {
    transform: translateY(24px);
  }
  20% {
    transform: translateY(16px);
  }
  30% {
    transform: translateY(24px);
  }
  40% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(0);
  }
}
/* ------------------------------
fvここまで
------------------------------ */
/* ------------------------------
navここから
------------------------------ */
.index__nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100vw;
  height: 80px;
  padding: 0 10%;
  font-size: 2rem;
  font-weight: bold;
  font-family: $font;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10;
  > * {
    display: flex;
    align-items: center;
    height: inherit;
  }
  &--logo {
    width: 200px;
    height: 80%;
    &:hover {
      opacity: 0.7;
    }
    a {
      width: 100%;
      height: 100%;
      opacity: 1;
      transition: 0.2s opacity;
      img {
        width: inherit;
        height: inherit;
        object-fit: contain;
      }
    }
  }
  &--link {
    a {
      display: inline-block;
      color: $accentColor;
      margin-left: 36px;
      opacity: 1;
      transition: 0.2s opacity;
      &:hover {
        color: $accentColor;
        opacity: 0.5;
      }
    }
  }
}
/* ------------------------------
navここまで
------------------------------ */
/* ------------------------------
sloganここから
------------------------------ */
.index__slogan {
  color: $mainColor;
  font-size: 2.4rem;
  font-weight: bold;
  text-align: center;
}
/* ------------------------------
sloganここまで
------------------------------ */
/* ------------------------------
プロフィールここから
------------------------------ */
.index__profile {
  margin: 0 auto;
  &--icon {
    div {
      margin: 0 auto;
      div {
        width: 100%;
        padding-top: 100%;
        box-shadow: 8px 8px 0 $mainColor;
        position: relative;
        img {
          width: 100%;
          height: 100%;
          object-fit: contain;
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          transition: 0.2s opacity;
          &:first-of-type {
            opacity: 1;
          }
          &:last-of-type {
            opacity: 0;
          }
        }
        &:hover {
          img {
            &:first-of-type {
              opacity: 0;
            }
            &:last-of-type {
              opacity: 1;
            }
          }
        }
      }
    }
  }
  &--txt {
    display: flex;
    flex-direction: column;
    justify-content: center;
    h2 {
      color: $mainColor;
      font-size: 2.8rem;
      margin-bottom: 32px;
    }
    h3 {
      font-size: 2rem;
    }
    p {
      line-height: 24px;
      margin-top: 16px;
      &:nth-of-type(1) {
        font-weight: bold;
      }
    }
    &--skills {
      display: flex;
      font-family: $font;
      margin-top: 16px;
      font-weight: bold;
      span {
        color: $mainColor;
      }
      ul {
        display: flex;
        li {
          &:not(:last-of-type) {
            &::after {
              content: "／";
            }
          }
        }
      }
    }
    // ul {
    //   display: flex;
    //   margin-top: 16px;
    //   li {
    //     height: 32px;
    //     margin-right: 8px;
    //     img {
    //       height: 100%;
    //       object-fit: contain;
    //     }
    //     &:last-of-type {
    //       margin: 0;
    //     }
    //   }
    // }
  }
  &--link {
    display: flex;
    justify-content: space-around;
    a {
      &:first-of-type {
        @include btn();
        @include btnHoverAction();
      }
      &:last-of-type {
        @include btn($white, $mainColor);
        @include btnHoverAction($mainColor, $baceColor);
      }
    }
  }
}
/* ------------------------------
プロフィールここまで
------------------------------ */
/* ------------------------------
おすすめの作品ここから
------------------------------ */
.index__rcm {
  margin: 0 auto 104px;
  padding-top: 144px;
  &--img {
    img {
      width: 100%;
    }
  }
}
/* ------------------------------
おすすめの作品ここまで
------------------------------ */
/* ------------------------------
ロゴここから
------------------------------ */
.index__logo {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  width: 85vw;
  max-width: 1200px;
  margin: 0 auto;
  // padding-bottom: 32px;
  padding: 32px 0;
  li {
    width: 20%;
    background-position: center center;
    transition: 0.2s background-image;
    a {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
      position: relative;
      // transition: 0.2s width;
      img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transition: 0.2s opacity;
        &:first-of-type {
          opacity: 1;
        }
        &:last-of-type {
          opacity: 0;
        }
      }
      &:hover {
        img {
          &:first-of-type {
            opacity: 0;
          }
          &:last-of-type {
            opacity: 1;
          }
        }
      }
    }
  }
}
/* ------------------------------
ロゴここまで
------------------------------ */
/* ------------------------------
worksここから
------------------------------ */
.index__work {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  width: 100vw;
  font-weight: bold;
  font-size: 2.4rem;
  font-family: $font;
  overflow: hidden;
  transition: 0.2s color, 0.2s background;
  &:hover {
    background: $mainColor;
    color: $baceColor;
    &::after {
      color: $mainColor;
    }
  }
  span {
    display: block;
    width: 400px;
    text-align: center;
    pointer-events: none;
  }
}
/* ------------------------------
worksここまで
------------------------------ */
/* ------------------------------
backここから
------------------------------ */
.index__back {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 56px;
  height: 56px;
  background: $mainColor;
  transition: 0.2s background;
  position: fixed;
  right: 48px;
  bottom: 64px;
  mix-blend-mode: multiply;
  z-index: 100;
  svg {
    width: 16px;
    transform: translateY(0);
    // transition: 0.2s transform;
  }
  path {
    fill: $baceColor;
    transition: 0.2s fill;
  }
  &:hover {
    background: $accentColor;
    cursor: pointer;
    // svg {
    //   transform: translateY(-3px);
    // }
    path {
      fill: $mainColor;
    }
  }
}
/* ------------------------------
backここまで
------------------------------ */
@media screen and (min-width: 1001px) {
  .index__fv {
    width: 80vw;
    max-width: 1200px;
    min-height: 80vh;
    &--logo {
      margin-bottom: 56px;
    }
  }
  .index__slogan {
    margin-top: 104px;
  }
  .index__profile {
    width: 80%;
    max-width: 1200px;
    min-width: 400px;
    display: grid;
    grid-template-columns: 40% 55%;
    grid-template-rows: auto auto;
    column-gap: 5%;
    row-gap: 48px;
    padding: 104px 0 0 4%;
    @include throughTtl("</about>", auto, 0, 5%, auto);
    &--icon {
      div {
        max-width: 360px;
        grid-column: 1;
        grid-row: 1;
      }
    }
    &--txt {
      grid-column: 2;
      grid-row: 1/3;
    }
    &--link {
      grid-column: 1;
      grid-row: 2;
      a {
        &:first-of-type {
          width: 40%;
        }
        &:last-of-type {
          width: 55%;
        }
      }
    }
  }
  .index__rcm {
    width: 85vw;
    max-width: 1200px;
    @include worksPreset();
    @include throughTtl("</recommend works>", 12%, auto, auto, -3%);
    > div:first-of-type {
      width: 45%;
    }
    &--img {
      width: 50%;
      img {
        width: 100%;
      }
    }
  }
  .index__logo {
    li {
      min-width: 180px;
      height: 80px;
      margin: 24px 5%;
    }
  }
  .index__work {
    height: 360px;
    background: $baceColor;
    padding: 0 0 0 20%;
    @include throughTtl("</works>", auto, 10%, -8%, auto, auto, multiply);
  }
}
@media screen and (max-width: 1000px) {
  .index__fv {
    width: 80vw;
    height: 60vh;
  }
  .index__slogan {
    margin: 64px auto;
  }
  .index__profile {
    width: 80%;
    @include throughTtl("</about>", auto, 0, 5%, auto, $fs: 8rem);
    &--txt {
      width: 80%;
      margin: 64px auto 24px;
    }
    &--icon {
      max-width: 360px;
      margin: 0 auto;
    }
    &--link {
      width: 80%;
      margin: 0 auto;
      a {
        width: 48%;
      }
    }
  }
  .index__rcm {
    width: 80vw;
    @include worksPreset($ai: flex-end);
    @include throughTtl("</recommend works>", 20%, auto, auto, -3%, $fs: 8rem);
    flex-direction: column;
    > div:first-of-type {
      order: 2;
    }
    &--img {
      width: 60%;
      min-width: 400px;
      margin-right: 8%;
      order: 1;
    }
  }
  .index__logo {
    li {
      min-width: 120px;
      height: 80px;
      margin: 0 3%;
    }
  }
  .index__work {
    height: 256px;
    background: $baceColor;
    padding: 0 0 0 20%;
    @include throughTtl(
      "</works>",
      auto,
      10%,
      -8%,
      auto,
      auto,
      multiply,
      $fs: 8rem
    );
  }
}
@media screen and (max-width: 650px) {
  .index__fv {
    width: 100vw;
    height: 70vh;
    background-size: cover;
    background-position: left 10% top 0;
    // background-position: 0 80px;
    &--illust + div {
      width: 95%;
      margin-right: 5%;
    }
    &--logo {
      margin-top: 72px;
    }
  }
  .index__nav {
    display: none;
  }
  .index__slogan {
    width: 90%;
    margin: 80px auto 0;
  }
  .index__profile {
    width: 90%;
    margin-top: 104px;
    @include throughTtl("</about>", auto, 0, 5%, auto, $fs: 6rem);
    &--icon {
      width: 60%;
      margin: 0 auto;
    }
    &--txt {
      width: 90%;
      margin: 64px auto;
    }
    &--link {
      margin: 0 auto;
      width: 100%;
      a {
        width: 48%;
      }
    }
  }
  .index__rcm {
    flex-direction: column;
    @include worksPreset();
    @include throughTtl("</recommend works>", 12%, auto, auto, -3%, $fs: 6rem);
    width: 90%;
    overflow: hidden;
    &--img {
      width: 90%;
      margin: 0 auto;
    }
    &--headline + div {
      display: flex;
    }
    &--link {
      justify-content: center;
    }
  }
  .index__logo {
    li {
      min-width: 104px;
      height: 64px;
      margin: 0 3%;
    }
  }
  .index__work {
    height: 200px;
    background: $mainColor;
    color: $baceColor;
    padding: 0 4%;
    @include throughTtl(
      "</works>",
      auto,
      10%,
      -8%,
      auto,
      auto,
      multiply,
      $c: $mainColor,
      $fs: 6rem
    );
    &:hover {
      background: $baceColor;
      color: $mainColor;
      &::after {
        color: $mainColor;
      }
    }
  }
}
.fade1-enter-active,
.fade1-leave-active {
  transition: opacity 0.5s, transform 0.5s;
}
.fade1-enter, .fade1-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
  transform: translateX(32px);
}
.fade1-leave, .fade1-enter-to /* .fade-leave-active below version 2.1.8 */ {
  transform: 0;
}
</style>
