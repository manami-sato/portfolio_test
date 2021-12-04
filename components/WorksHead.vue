<template lang="pug">
	header.head
		div.head__link
			a(href="/web",:class="value == page[0] ? 'head__link--on':'head__link--off'") web site
			a(href="/graphic",:class="value == page[1] ? 'head__link--on':'head__link--off'") graphic
			a(href="/training",:class="value == page[2] ? 'head__link--on':'head__link--off'") training
		ul.head__sort
			li(v-for="(item,index) in sortTtl.length",:key="index",v-on:click="sortAction(index)",v-bind:class="{sortActive:sortFlag[index]}").head__sort--item {{sortTtl[index]}}
</template>

<script>
export default {
  name: "WorksHead",
  props: ["value"],
  data() {
    return {
      sortTtl: ["全て", "1年", "2年", "3年"],
      sortFlag: [true, false, false, false],
      sortIndex: 0,
      page: ["web", "gra", "tra"],
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
      this.sortFlag[index] = !this.sortFlag[index];
      // console.log(index, this.sortFlag[index]);
      this.$emit("increment", this.sortIndex);
    },
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
      &:first-child {
        grid-column: 1;
        grid-row: 2;
      }
      &:last-child {
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
    display: flex;
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
      &:last-child {
        margin: 0;
      }
    }
  }
}
.sortActive {
  background: $baceColor;
  color: $mainColor;
}
</style>
