<template lang="pug">
	main
	  Data(value="3")
</template>

<script>
import Data from "@/components/Data.vue";
export default {
  name: "Userella",
  el: "main",
  components: {
    Data,
  },
};
</script>
