<template lang="pug">
	header.head
		div.head__link
			router-link(:to="{name:'Web'}",:class="value == page[0] ? 'head__link--on':'head__link--off'") web site
			router-link(:to="{name:'Graphic'}",:class="value == page[1] ? 'head__link--on':'head__link--off'") graphic
			router-link(:to="{name:'Practice'}",:class="value == page[2] ? 'head__link--on':'head__link--off'") practice
		ul.head__sort
			li(v-for="(item,index) in sortTtl.length",:key="index",@click="sortAction(index)",:class="{sortActive:sortFlag[index]}").head__sort--item {{sortTtl[index]}}
</template>

<script>
export default {
  name: "WorksHead",
  props: ["value"],
  data() {
    return {
      page: ["web", "gra", "tra"],
      sortTtl: ["全て", "1年", "2年", "3年"],
      sortFlag: [true, false, false, false],
      // sortFlag0: true,
      // sortFlag1: false,
      // sortFlag2: false,
      // sortFlag3: false,
      // sortFlag: [],
      sortIndex: 0,
    };
  },
  methods: {
    sortAction(index) {
      this.sortIndex = index;
      for (let i = 0; i < this.sortTtl.length; i++) {
        if (this.sortFlag[i]) {
          this.sortFlag[i] = !this.sortFlag[i];
        }
      }
      console.log(this.sortFlag);
      // this.sortFlag[index] = !this.sortFlag[index];

      this.$emit("increment", this.sortIndex);
    },
  },
  mounted() {
    this.sortFlag.push(this.sortFlag0);
    this.sortFlag.push(this.sortFlag1);
    this.sortFlag.push(this.sortFlag2);
    this.sortFlag.push(this.sortFlag3);
    console.log(this.sortFlag);
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/common.scss";
.head {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  width: 100vw;
  height: 256px;
  background: $mainColor;
  color: $baceColor;
  padding: 0 10% 32px;
  margin-bottom: 114px;
  @include throughTtl("</works>", -15%, 3%, auto, auto, auto, multiply);
  &::after {
    color: $mainColor;
  }
  &__link {
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: auto auto;
    grid-gap: 12px 20px;
    font-family: $font;
    &--on {
      grid-column: 1/3;
      grid-row: 1;
      color: $baceColor;
      font-size: 4.8rem;
      font-weight: bold;
      pointer-events: none;
    }
    &--off {
      display: block;
      color: $baceColor;
      font-size: 2.4rem;
      opacity: 0.7;
      transition: 0.2s opacity;
      &:first-of-type {
        grid-column: 1;
        grid-row: 2;
      }
      &:last-of-type {
        grid-column: 2;
        grid-row: 2;
      }
      &:hover {
        color: $baceColor;
        opacity: 0.3;
      }
    }
  }
  &__sort {
    &--item {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 112px;
      height: 40px;
      background: inherit;
      color: inherit;
      font-size: 1.6rem;
      font-weight: bold;
      margin-right: 16px;
      border-radius: 20px;
      cursor: pointer;
      transition: 0.2s background, 0.2s color;
      &:hover {
        background: $baceColor;
        color: $mainColor;
      }
      &:last-of-type {
        margin: 0;
      }
    }
  }
}
.sortActive {
  background: $baceColor;
  color: $mainColor;
}
@media screen and (min-width: 951px) {
  .head {
    &__sort {
      display: flex;
    }
  }
}
@media screen and (max-width: 950px) {
  .head {
    &__sort {
      z-index: 3;
    }
  }
}
</style>
