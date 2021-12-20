<template lang="pug">
	footer#contact
		div.foot__contact
			p.foot__contact--txt ご連絡お待ちしております。
			a(href="mailto:manamisato2001@gmail.com").foot__contact--mail
				span manamisato2001@gmail.com
		div.foot__link
			router-link(:to="{name:'Home'}").foot__link--index
				img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/logo.svg",alt="佐藤真奈実' Portfolio")
			//- ul
				li
					router-link(:to="{name:'Home'}")
						img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/logo.svg",alt="佐藤真奈実' Portfolio")
				li
					router-link(:to="{name:'Web'}") works
				li
					a(href="#contact") contact
			a(href="https://click.ecc.ac.jp/ecc/msatou/Philosophia/",target="_blank").foot__link--photo
				span photography’s portfolio
		small &copy; 2021 sato
</template>

<script>
export default {
  name: "Foot",
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
.foot__contact {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  &--txt {
    display: flex;
    color: $mainColor;
    font-size: 1.6rem;
    font-weight: bold;
    margin-bottom: 40px;
    &::before,
    &::after {
      content: "";
      display: block;
      background: $mainColor;
      margin-top: 11px;
      width: 20px;
      height: 2px;
    }
    &::before {
      margin-right: 8px;
      transform: rotateZ(50deg) skewX(320deg);
    }
    &::after {
      margin-left: 8px;
      transform: rotateZ(310deg) skewX(40deg);
    }
  }
  &--mail {
    height: 72px;
    display: block;
    display: flex;
    justify-content: center;
    align-items: center;
    @include btnHoverAction($white, $mainColor);
  }
}
.foot__link {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  // flex-direction: column;
  min-height: 200px;
  background: url("https://click.ecc.ac.jp/ecc/msatou/portfolio/img/foot.png");
  background-size: contain;
  background-position: center bottom -1px;
  background-repeat: repeat no-repeat;
  padding: 0 8vw 104px;
  // ここから追加
  &--index {
    display: block;
    width: 200px;
    // height: 80%;
    opacity: 1;
    transition: 0.2s opacity;
    &:hover {
      opacity: 0.7;
    }
    img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
  }
  // ここまで追加
  // ul {
  //   display: flex;
  //   font-family: $font;
  //   font-size: 1.8rem;
  //   font-weight: bold;
  //   li {
  //     display: flex;
  //     justify-content: center;
  //     align-items: center;
  //     margin-right: 40px;
  //     &:first-of-type {
  //       width: 200px;
  //       height: 80%;
  //       a {
  //         width: 100%;
  //         height: 100%;
  //         opacity: 1;
  //         transition: 0.2s opacity;
  //         &:hover {
  //           opacity: 0.7;
  //         }
  //         img {
  //           width: inherit;
  //           height: inherit;
  //           object-fit: contain;
  //         }
  //       }
  //     }
  //     a {
  //       opacity: 1;
  //       transition: 0.2s opacity;
  //       &:hover {
  //         opacity: 0.5;
  //       }
  //     }
  //   }
  // }
  &--photo {
    width: 296px;
    @include btn($white, $accentColor);
    @include btnHoverAction($accentColor, $white);
    border: $accentColor 3px solid;
  }
}
small {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  width: 100vw;
  height: 88px;
  // color: $mainColor;
  color: $baceColor;
  background: $mainColor;
  font-family: $font;
  padding-top: 24px;
}
@media screen and (min-width: 651px) {
  .foot__contact {
    padding: 120px 0;
    &--mail {
      width: 60vw;
      max-width: 600px;
      min-width: 480px;
      @include btn($fs: 2.4rem, $h: 72px);
      margin: 0;
    }
  }
}
@media screen and (max-width: 650px) {
  .foot__contact {
    padding: 80px 0;
    &--mail {
      width: 80vw;
      @include btn($fs: 1.8rem, $h: 72px);
    }
  }
}
</style>
