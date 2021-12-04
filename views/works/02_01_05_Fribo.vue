<template lang="pug">
	main
	  DetailedExplanation(value="8")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "Fribo",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
