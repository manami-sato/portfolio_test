<template lang="pug">
	main
	  DetailedExplanation(value="3")
</template>

<script>
import DetailedExplanation from "@/components/DetailedExplanation.vue";
export default {
  name: "Userella",
  el: "main",
  components: {
    DetailedExplanation,
  },
};
</script>
