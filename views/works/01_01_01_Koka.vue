<template lang="pug">
	main
	  DetailedExplanation(value="0")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "Koka",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
