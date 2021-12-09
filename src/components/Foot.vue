<template lang="pug">
	footer#contact
		div.foot__contact
			p.foot__contact--txt ご連絡お待ちしております。
			a(href="mailto:manamisato2001@gmail.com").foot__contact--mail
				span manamisato2001@gmail.com
		div.foot__link
			ul
				li
					router-link(to="/ecc/msatou/portfolio/")
						img(src="https://click.ecc.ac.jp/ecc/msatou/portfolio/img/logo.svg",alt="佐藤真奈実' Portfolio")
				li
					router-link(to="/ecc/msatou/portfolio/web") works
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
  padding: 120px 0;
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
    width: 60vw;
    max-width: 600px;
    min-width: 480px;
    height: 72px;
    display: block;
    display: flex;
    justify-content: center;
    align-items: center;
    @include btn($fs: 2.4rem, $h: 72px);
    @include btnHoverAction($white, $mainColor);
    margin: 0;
  }
}
.foot__link {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 200px;
  background: url("https://click.ecc.ac.jp/ecc/msatou/portfolio/img/foot.png");
  background-size: contain;
  background-position: center bottom -1px;
  background-repeat: repeat no-repeat;
  padding: 0 5vw 104px;
  ul {
    display: flex;
    font-family: $font;
    font-size: 1.8rem;
    font-weight: bold;
    li {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 40px;
      &:first-of-type {
        width: 200px;
        height: 80%;
        a {
          width: 100%;
          height: 100%;
          opacity: 1;
          transition: 0.2s opacity;
          &:hover {
            opacity: 0.7;
          }
          img {
            width: inherit;
            height: inherit;
            object-fit: contain;
          }
        }
      }
      a {
        opacity: 1;
        transition: 0.2s opacity;
        &:hover {
          opacity: 0.5;
        }
      }
    }
  }
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
</style>
