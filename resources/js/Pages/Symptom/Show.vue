<template>
    <h1> Je suis la page Measure </h1>
    <p> {{ symptom.name }}</p>
    <p> {{ symptom.definition }}</p>
    <p> {{ symptom.cause }}</p>
    <p> {{ symptom.complication }}</p>
       
    <PrimaryButton @click="router.visit(route('symptoms.edit', symptom.id))">
    Modifier
    </PrimaryButton>
        <PrimaryButton @click="router.delete(route('symptoms.destroy', symptom.id))">
          Supprimer
        </PrimaryButton>  
  </template>
  
  <script lang="ts" setup>
  import  { Symptom } from '@/Models/symptoms';
  import PrimaryButton from '@/Components/PrimaryButton.vue';
  import { router } from '@inertiajs/vue3';
  
  const props = defineProps<{symptom: Symptom}>();
  
  // function destroy (id) {
  //     if (confirm("Are you sure you want to Delete")) {
  //         router.delete(route('aromas.destroy', id));
  //     }
  
  //     return {destroy}
  //   }
  
  </script>
  
  <style scoped>
  
  </style>