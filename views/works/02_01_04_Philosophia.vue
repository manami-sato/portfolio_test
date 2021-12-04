<template lang="pug">
	main
	  DetailedExplanation(value="7")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "Philosophia",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
