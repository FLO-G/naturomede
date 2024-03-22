<template>
    <h1>{{ aroma.name }}</h1>
      <p v-for="family in aroma.families" :key="family">
        {{ family.name }} : {{ family.group.name }}
        <p v-for="property in family.properties" :key="property">
          {{ property.name }}
        </p>
      </p>
      <PrimaryButton @click="router.visit(route('aromas.edit', aroma.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('aromas.destroy', aroma.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>
import type { Aroma } from '@/Models/aromas'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps<{aroma: Aroma}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

</script>

<style scoped>

</style>