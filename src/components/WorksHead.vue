<template lang="pug">
	header.head
		div.head__link
			router-link(v-for="(item,i) in page",:key="i",:to="`${routerPath}${item.path}`",:class="value == item.ttl ? 'head__link--on':'head__link--off'") {{item.ttl}}
		ul.head__sort
			li(v-for="(item,i) in sort",:key="i",@click="sortAction(i)",:class="{sortActive:item.flag}").head__sort--item {{item.ttl}}
</template>

<script>
import Mixin from "@/mixins/Mixin.vue";
export default {
  name: "WorksHead",
  mixins: [Mixin],
  props: ["value"],
  data() {
    return {
      page: [
        { path: "web", ttl: "web site" },
        { path: "graphic", ttl: "graphic" },
        { path: "practice", ttl: "practice" },
      ],
      sort: [
        { ttl: "全て", flag: true },
        { ttl: "1年", flag: false },
        { ttl: "2年", flag: false },
        { ttl: "3年", flag: false },
      ],
      sortIndex: 0,
    };
  },
  methods: {
    sortAction(i) {
      this.sortIndex = i;
      for (let index = 0; index < this.sort.length; index++) {
        if (this.sort[index].flag) {
          this.sort[index].flag = !this.sort[index].flag;
        }
      }
      this.sort[i].flag = !this.sort[i].flag;
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
@media screen and (max-width: 650px) {
  .head {
    margin-bottom: 64px;
    &__sort {
      &--item {
        margin: 0;
      }
    }
  }
}
</style>
