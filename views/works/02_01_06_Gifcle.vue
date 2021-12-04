<template lang="pug">
	main
	  DetailedExplanation(value="9")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "Gifcle",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
