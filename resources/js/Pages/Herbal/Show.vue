<template>
    <h1> Je suis la page Herbal </h1>
  <p> {{ herbal.name }}</p>
  <p> {{ herbal.latin_name }}</p>
      
      <PrimaryButton @click="router.visit(route('herbals.edit', herbal.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('herbals.destroy', herbal.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>
import type { Herbal } from '@/Models/herbals'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps<{herbal: Herbal}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

</script>

<style scoped>

</style>