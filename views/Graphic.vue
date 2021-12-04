<template lang="pug">
	main
		WorksHead(value="gra",@increment="getSortNum = $event")
		div.graphic
			div(v-if="getSortNum == 0||getSortNum == 2")
				section.businessCard
					div.graphic__img
						img(src="@/assets/img/graphic_02_meishi_1.png",alt="2年名刺表")
						img(src="@/assets/img/graphic_02_meishi_2.png",alt="2年名刺裏")
					div.graphic__info
						div
							h3.graphic__info--ttl 名刺
							div.graphic__info--sort 2年前期
						div.graphic__info--tool 使用ツール：Illustrator／Photoshop
						div.graphic__info--txt 趣味で撮影した写真を利用して名刺を制作しました。
				section.businessCard2
					div.graphic__info
						div
							h3.graphic__info--ttl 友人名刺
							div.graphic__info--sort 2年前期
						div.graphic__info--tool 使用ツール：Illustrator／Photoshop
						div.graphic__info--txt 陶芸を学ぶ友人のために制作しました。肩書きが比較的多かったため、窮屈な見た目にならないように意識しました。
					div.graphic__img
						img(src="@/assets/img/graphic_02_muratameishi_1.png",alt="名刺表")
						img(src="@/assets/img/graphic_02_muratameishi_2.png",alt="名刺裏")
			div(v-if="getSortNum == 0||getSortNum == 1")
				section.businessCard
					div.graphic__img
						img(src="@/assets/img/graphic_01_meishi_1.png",alt="1年名刺表")
						img(src="@/assets/img/graphic_01_meishi_2.png",alt="1年名刺裏")
					div.graphic__info
						div
							h3.graphic__info--ttl 名刺
							div.graphic__info--sort 1年後期
						div.graphic__info--tool 使用ツール：Illustrator
						div.graphic__info--txt 生きていく上で、経験してきたことを白のペンキとして塗り広げていくイメージでイラストを描き、制作しました。<br>こちらで掲載しているのは、前期に制作したものを後期にブラッシュアップしたものです。
				section#koka.poster
					div.graphic__img
						img(src="@/assets/img/graphic_01_cw1.png",alt="紅香 - お香ポスター")
					div.graphic__info
						div
							h3.graphic__info--ttl 紅香 - お香ポスター
							div.graphic__info--sort 1年前期
						div.graphic__info--tool 使用ツール：Illustrator
						div.graphic__info--txt オリジナルのお香を注文することができる<br>サービスのポスターです。
						a(href="#",target="page").graphic__info--link
							span サイトを見る
				section#candleNight.poster
					div.graphic__img
						img(src="@/assets/img/graphic_01_candlenight.png",alt="キャンドルナイト ポスター")
					div.graphic__info
						div
							h3.graphic__info--ttl キャンドルナイト ポスター
							div.graphic__info--sort 1年後期
						div.graphic__info--tool 使用ツール：Illustrator／Photoshop
						div.graphic__info--txt 「中崎町キャンドルナイト」というイベントの<br>ポスターを授業で制作しました。
				section#jishatecho
					div.graphic__img
						img(src="@/assets/img/graphic_01_cw2_1.png",alt="寺社手帖 ポスター")
					div.jishatecho__wrap--2
						div.graphic__img
							img(src="@/assets/img/graphic_01_cw2_2.png",alt="寺社手帖 ポスター掲示イメージ")
						div.graphic__info
							div
								h3.graphic__info--ttl 寺社手帖 ポスター
								div.graphic__info--sort 1年後期
							div.graphic__info--tool 使用ツール：Illustrator／Photoshop
							div.graphic__info--txt 電車内及び駅等に掲示していただく想定で<br>電子広告を制作しました。
							a(href="#",target="page").graphic__info--link
								span サイトを見る
				section#seinen
					div.graphic__img
						img(src="@/assets/img/graphic_01_book_1.png",alt="文庫本カバー")
					div.graphic__info
						div
							h3.graphic__info--ttl 文庫本カバー
							div.graphic__info--sort 1年後期
						div.graphic__info--tool 使用ツール：Illustrator／Photoshop
						div.graphic__info--txt タイトル、モチーフ自由のもと<br>文庫本カバーを制作しました。
				section#userella
					div.graphic__img
						img(src="@/assets/img/graphic_01_group1.png",alt="userella アプリバナー")
					div.graphic__info
						div
							h3.graphic__info--ttl userella - アプリバナー
							div.graphic__info--sort 1年後期
						div.graphic__info--tool 使用ツール：Illustrator／Photoshop
						div.graphic__info--txt LPサイトからアプリLPサイトに<br>飛んでもらう際のバナーです。
						a(href="#",target="page").graphic__info--link
							span サイトを見る
				section#utakata
					div.graphic__img
						img(src="@/assets/img/graphic_01_utakata.png",alt="泡沫の砂")
					div.graphic__info
						div
							h3.graphic__info--ttl 文庫本カバー
							div.graphic__info--sort 1年後期
						div.graphic__info--tool 使用ツール：Illustrator
						div.graphic__info--txt 「泡沫の砂」という作品の表紙です。
						div
							div.graphic__img
								img(src="@/assets/img/graphic_01_utakata_1.png",alt="泡沫の砂2")
								img(src="@/assets/img/graphic_01_utakata_2.png",alt="泡沫の砂3")
							p ボツ版
			div(v-if="getSortNum == 3")
				p.graphic__none coming soon...
		Foot
</template>

<script>
import WorksHead from "@/components/WorksHead.vue";
import Foot from "@/components/Foot.vue";
export default {
  name: "Graphic",
  el: "main",
  components: {
    WorksHead,
    Foot,
  },
  head: {
    title() {
      return {
        inner: "Graphic",
        separator: "|",
        complement: "佐藤真奈実's Portfolio",
      };
    },
  },
  data() {
    return {
      getSortNum: 0,
    };
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
.graphic {
  width: 85vw;
  max-width: 1200px;
  margin: 0 auto;
  @include contentsNone();
  > div {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    &:last-child {
      section:last-child {
        margin: 0;
      }
    }
  }
  section {
    margin: 0 0 120px;
  }
  &__img {
    img {
      width: 100%;
      box-shadow: 8px 8px 0 $mainColor;
    }
  }
  &__info {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin-top: 40px;
    > div:first-child {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: center;
    }
    &--ttl {
      font-size: 22px;
      color: $mainColor;
      margin-right: 30px;
    }
    &--txt {
      text-align: center;
    }
    &--tool {
      text-align: center;
      font-size: 1.2rem;
      margin: 8px 0 20px;
    }
    &--link {
      width: 50%;
      // margin: 32px auto 0;
      margin-top: 32px;
      @include btn($white, $mainColor, $fs: 1.4rem, $h: 48px);
      @include btnHoverAction($mainColor, $baceColor);
    }
  }
}

/* 名刺 */
.businessCard {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
  .graphic__img {
    width: 40%;
    min-width: 380px;
    img {
      width: 100%;
      &:first-child {
        margin-bottom: 5vh;
      }
    }
  }
  .graphic__info {
    width: 40%;
    min-width: 380px;
    margin: 50px 0;
  }
}
/* ポスター共通 */
.poster {
  width: 45%;
  .graphic__img {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60vh;
    img {
      width: auto;
      height: 100%;
      object-fit: contain;
    }
  }
}
#candleNight {
  margin-bottom: 91px;
}

/* 寺社手帖 */
#jishatecho {
  display: flex;
  justify-content: space-around;
  > .graphic__img {
    width: 50%;
    display: flex;
    align-items: center;
  }
  .jishatecho__wrap--2 {
    width: 40%;
    .graphic__img {
      width: 100%;
    }
  }
}

/* 文庫本 */
#seinen {
  width: 30%;
  min-width: 250px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

/* userella */
#userella {
  width: 55%;
  min-width: 400px;
}

/* 泡沫の砂 */
#utakata {
  display: flex;
  justify-content: space-around;
  height: 90vh;
  > div {
    // width: 40%;
    display: flex;
    align-items: center;
    min-width: 400px;
  }
  > .graphic__img {
    width: 30%;
    img {
      width: 100%;
      height: auto;
      object-fit: contain;
    }
  }
  > .graphic__info {
    width: 40%;
    flex-direction: column;
    justify-content: center;
    > div {
      &:last-child {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-top: 40px;
        div {
          text-align: center;
          img {
            width: 40%;
            &:nth-child(1) {
              margin-right: 30px;
            }
          }
        }
        p {
          font-size: 1.3rem;
          margin: 15px auto 0;
        }
      }
    }
  }
}

/* 名刺 */
.businessCard2 {
  display: flex;
  justify-content: space-around;
  align-items: center;
  width: 90%;
  flex-wrap: wrap;
  .graphic__img {
    width: 50%;
    display: flex;
    img {
      width: 50%;
      &:first-child {
        margin-right: 20px;
      }
    }
  }
  .graphic__info {
    width: 30%;
    margin: 50px 0;
  }
}
</style>
