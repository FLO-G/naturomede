<template>
    <form @submit.prevent="form.put(route('measuresHd.update', {measuresHd: form.id}))">
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
  import type { MeasureHd } from '@/Models/measuresHd';
  
  const props = defineProps<{
    measureHd: MeasureHd
  }>();
  
  const form = useForm({
    id: props.measureHd.id,
    name: props.measureHd.name,
    description: props.measureHd.description,
  })
  
  </script>
  
  <style scoped>
  
  </style>