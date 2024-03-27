<template>
    <form @submit.prevent="form.put(route('measures.update', form.id))">
      <InputLabel for="name" value="Nom"/>
      <TextInput  id="number" type="string" v-model="form.name" required/>
      <br>
      <br>
      <InputLabel for="description" value="description"/>
      <TextInput  type="string" v-model="form.description" required/>
      <PrimaryButton type="submit" :disabled="form.processing">
        Modifier
      </PrimaryButton>
    </form>
  </template>
  
  <script lang="ts" setup>
  import InputLabel from '@/Components/InputLabel.vue'
  import TextInput from '@/Components/TextInput.vue'
  import PrimaryButton from '@/Components/PrimaryButton.vue'
  import { useForm } from '@inertiajs/vue3'
  import type { Measure } from '@/Models/measures';
  
  const props = defineProps<{
    measure: Measure
  }>();
  
  const form = useForm({
    id: props.measure.id,
    name: props.measure.name,
    description: props.measure.description,
  })
  
  </script>
  
  <style scoped>
  
  </style>