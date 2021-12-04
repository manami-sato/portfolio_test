<template lang="pug">
	main
	  DetailedExplanation(value="6")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "minicomi",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
