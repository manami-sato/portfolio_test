<template lang="pug">
	main
		nav.index__nav
			header.index__nav--logo
				a(href="#")
					img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/logo.svg",alt="佐藤真奈実' Portfolio")
			ul.index__nav--link
				li
					a(href="#top") top
				li
					a(href="#about") about
				li
					a(href="#works") works
				li
					a(href="#contact") contact
		section.index__fv
			div.index__fv--illust
				//- img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/pf_illust.png",alt="")
			div
				h1.index__fv--logo
					img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/logo.svg",alt="佐藤真奈実' Portfolio")
				div
					div.index__fv--scroll
						svg(version="1.1",xmlns="http://www.w3.org/2000/svg",xmlns:xlink="http://www.w3.org/1999/xlink",x="0px",y="0px",viewBox="0 0 24 24",style="enable-background:new 0 0 24 24;",xml:space="preserve")
							path(d="M16,22c1.1,0,2-0.9,2-2V8c0-3.3-2.7-6-6-6S6,4.7,6,8v12c0,1.1,0.9,2,2,2H16z M20,20c0,2.2-1.8,4-4,4H8c-2.2,0-4-1.8-4-4V8c0-4.4,3.6-8,8-8s8,3.6,8,8V20z M13,19c0,0.6-0.4,1-1,1s-1-0.4-1-1v-4c0-0.6,0.4-1,1-1s1,0.4,1,1V19z")
					div scroll
		p.index__slogan {{slogan}}
		section.index__profile#about
			div.index__profile--icon
				//- img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/pf_icon.jpg",alt="アイコン")
			div.index__profile--txt
				h2
					|カメラとフロントエンドに<br>
					|興味を持って10年。
				h3 さとう まなみ（フロントエンドエンジニア志望）
				p
					|ECCコンピュータ専門学校 マルチメディア研究学科<br>
					|Webデザインコース 2年（23卒）
				p
					|小学生の頃に簡単なHTMLやCSSに触れ、コーディングの楽しさを<br>
					|感じていたことからこの分野を目指しました。<br>
					|記法に沿った・SEOを意識したコードを書けるように勉強中です。
				p
					|skills:HTML5、CSS3、JavaScript、Illustrator、Photoshop<br>
					|studying:Vue.js
				p
					|趣味：カメラです！桜と紅葉の時季には必ず撮影に行きます！
			div.index__profile--link
				a(href="https://github.com/manami-sato",target="_blank")
					span GitHub
				a(href="https://click.ecc.ac.jp/ecc/msatou/Philosophia/",target="_blank")
					span photography's portfolio
		section.index__rcm#works
			div
				ul.index__rcm--sort
					li(v-for="item in rcmSort",:key="item") {{item}}
				h2.index__rcm--appeal
					|がんばったこといろいろ<br>
					|2行になる程度
				div
					h3.index__rcm--ttl {{rcmTitle}}
					p.index__rcm--catchphrase  {{rcmCatchphrase}}
				p.index__rcm--txt {{rcmText}}
				div.index__rcm--lang
					span 使用言語：
					span(v-for="item in rcmLang",:key="item") {{item}}
				div.index__rcm--link
					a(:href="`https://manami-sato.github.io/${rcmURL}/`")
						span Web site
					a(:href="`https://github.com/manami-sato/${rcmURL}/`",target="github")
						span GitHub
					router-link(:to="`/ecc/msatou/portfolio/${rcmURL}/`")
						span more
			div.index__rcm--img
				img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/index_rcm_mock.png",alt="Gifcle")
		ul.index__logo
			li(v-for="(ttl,i) in rcmPath")
				router-link(:to="`/ecc/msatou/portfolio/${rcmPath[i]}`")
					img(:src="`https://click.ecc.ac.jp/ecc/msatou/portfolio/img/index_logo_${i+1}.svg`",:alt="rcmAlt[i]")
					img(:src="`https://click.ecc.ac.jp/ecc/msatou/portfolio/img/index_logo_${i+1}_on.svg`",:alt="rcmAlt[i]")
		router-link(to="/ecc/msatou/portfolio/web",v-on:mouseover="worksBnr",v-on:mouseleave="worksBnr").index__work
			span {{worksBnrTxt[worksBnrNum]}}
		div.index__slogan {{slogan}}
		Foot#contact
</template>
<script>
import Foot from "@/components/Foot.vue";

export default {
  name: "Home",
  // el: "main",
  components: {
    Foot,
  },
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
      rcmData: 0,
      rcmPath: ["fribo", "userella", "jishatecho", "gifcle", "minicomi"],
      rcmAlt: ["Fribo", "userella", "寺社手帖", "Gifcle", "ミニコミ！"],
      worksBnrTxt: ["作品をもっとご覧になりませんか？", "view more!"],
      worksBnrFlag: true,
      worksBnrNum: 0,
      rcmSort: "",
      rcmTitle: "",
      rcmCatchphrase: "",
      rcmText: "",
      rcmLang: "",
      rcmURL: "",
      slogan: "チームの軸を支えられるフロントエンドエンジニアになるために。",
    };
  },
  methods: {
    worksBnr() {
      console.log(this.worksBnrFlag);
      this.worksBnrFlag = !this.worksBnrFlag;
      if (this.worksBnrFlag) {
        this.worksBnrNum = 0;
      } else {
        this.worksBnrNum = 1;
      }
    },
  },
  mounted() {
    fetch("https://click.ecc.ac.jp/ecc/msatou/portfolio/php/web.php")
      .then((res) => {
        return res.json();
      })
      .then((json) => {
        this.res = json;
        this.rcmData = this.res.length - 1;
        this.rcmSort = this.res[this.rcmData].sort;
        this.rcmTitle = this.res[this.rcmData].title;
        this.rcmCatchphrase = this.res[this.rcmData].catchphrase;
        this.rcmText = this.res[this.rcmData].text;
        this.rcmLang = this.res[this.rcmData].lang;
        this.rcmURL = this.res[this.rcmData].URL;
      });
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
/* ------------------------------
navここから
------------------------------ */
.index__nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100vw;
  height: 80px;
  // background: rgba($color: $white, $alpha: 0.8);
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
fvここから
------------------------------ */
.index__fv {
  display: flex;
  width: 80vw;
  min-height: 80vh;
  background: url("https://click.ecc.ac.jp/ecc/msatou/portfolio/img/pf_illust.png")
    no-repeat;
  background-size: contain;
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
      // padding: 8% 0;
    }
  }
  &--logo {
    width: 100%;
    height: 200px;
    margin-bottom: 56px;
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
プロフィールここから
------------------------------ */
.index__profile {
  width: 80%;
  max-width: 1200px;
  min-width: 400px;
  display: grid;
  grid-template-columns: minmax(40%, 440px) 55%;
  grid-template-rows: auto auto;
  column-gap: 5%;
  row-gap: 48px;
  margin: 0 auto;
  padding: 104px 0 0 4%;
  @include throughTtl("</about>", auto, 0, 5%, auto);
  &--icon {
    grid-column: 1;
    grid-row: 1;
    width: 360px;
    height: 360px;
    box-shadow: 8px 8px 0 $mainColor;
    margin: 0 auto;
    background: url("https://click.ecc.ac.jp/ecc/msatou/portfolio/img/index_about_icon.png");
    background-size: cover;
    background-position: center, center;
    transition: 0.2s background;
    img {
      width: 100%;
    }
    &:hover {
      background: url("https://click.ecc.ac.jp/ecc/msatou/portfolio/img/index_about_icon_on.png");
      background-size: cover;
      background-position: center, center;
    }
  }
  &--txt {
    grid-column: 2;
    grid-row: 1/3;
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
      &:nth-of-type(2) {
        font-weight: bold;
        margin: 0;
      }
    }
  }
  &--link {
    grid-column: 1;
    grid-row: 2;
    display: flex;
    justify-content: space-around;
    a {
      &:first-of-type {
        @include btn();
        width: 40%;
        @include btnHoverAction();
      }
      &:last-of-type {
        @include btn($white, $mainColor);
        width: 55%;
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
  flex-wrap: wrap;
  width: 85vw;
  max-width: 1200px;
  margin: 0 auto 104px;
  @include worksPreset();
  @include throughTtl("</recommend works>", 12%, auto, auto, -3%);
  padding-top: 144px;
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
  padding-bottom: 32px;
  li {
    width: 20%;
    min-width: 180px;
    height: 80px;
    background-position: center center;
    margin: 24px 5%;
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
        // width: 110%;
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
  height: 352px;
  background: $baceColor;
  padding: 0 0 0 20%;
  font-weight: bold;
  font-size: 2.4rem;
  font-family: $font;
  overflow: hidden;
  transition: 0.2s color, 0.2s background;
  @include throughTtl("</works>", auto, 10%, -8%, auto, auto, multiply);
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
sloganここから
------------------------------ */
.index__slogan {
  color: $mainColor;
  font-size: 2.4rem;
  font-weight: bold;
  text-align: center;
  margin-top: 168px;
}
/* ------------------------------
sloganここまで
------------------------------ */
</style>
