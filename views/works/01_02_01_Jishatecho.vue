<template lang="pug">
	main
	  DetailedExplanation(value="2")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "Jishatecho",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
