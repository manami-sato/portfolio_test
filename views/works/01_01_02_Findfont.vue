<template lang="pug">
	main
	  DetailedExplanation(value="1")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "Findfont",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
