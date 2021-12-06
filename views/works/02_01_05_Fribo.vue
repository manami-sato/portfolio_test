<template lang="pug">
	main
	  Data(value="7")
</template>

<script>
import Data from "@/components/Data.vue";
export default {
  name: "Fribo",
  el: "main",
  components: {
    Data,
  },
};
</script>
