<template>
  <h1> Je suis la page Measure </h1>
  <p> {{ measure.name }}</p>
  <p> {{ measure.description }}</p>
     
  <PrimaryButton @click="router.visit(route('measures.edit', measure.id))">
  Modifier
  </PrimaryButton>
      <PrimaryButton @click="router.delete(route('measures.destroy', measure.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>
import  { Measure } from '@/Models/measures';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { router } from '@inertiajs/vue3';

const props = defineProps<{measure: Measure}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

</script>

<style scoped>

</style>