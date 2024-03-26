<template>
    <h1>{{ measure.name }}</h1>
      <PrimaryButton @click="router.visit(route('measures.edit', measure.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('measures.destroy', measure.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>
import type { Measure } from '@/Models/measures';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps<{measure: Measure}>();

</script>

<style scoped>

</style>