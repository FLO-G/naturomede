<template>
  <h1> Je suis la page MeasureHd </h1>
  <p> {{ measureHd.name }}</p>
     
      <PrimaryButton @click="router.visit(route('measuresHd.edit', measureHd.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('measuresHd.destroy', measureHd.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>
import type { MeasureHd } from '@/Models/measuresHd';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { router } from '@inertiajs/vue3';

const props = defineProps<{measureHd: MeasureHd}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

</script>

<style scoped>

</style>