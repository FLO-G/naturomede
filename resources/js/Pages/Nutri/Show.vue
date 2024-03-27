<template>
    <h1>{{ nutri.name }}</h1>
      
      <PrimaryButton @click="router.visit(route('nutris.edit', nutri.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('nutris.destroy', nutri.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>

import PrimaryButton from '@/Components/PrimaryButton.vue';
import { router } from '@inertiajs/vue3';
import type { Nutri } from '@/Models/nutris';


const props = defineProps<{nutri: Nutri}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

</script>

<style scoped>

</style>