<template>
    <form @submit.prevent="form.put(route('nutris.update', form.id))">
      <InputLabel for="name" value="Nom"/>
      <TextInput  id="number" type="string" v-model="form.name" required/>
      <br>
      <br>
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
  import type { Nutri } from '@Models/nutris.ts'
  
  const props = defineProps<{
    nutri: Nutri
  }>();
  
  const form = useForm({
    id: props.nutri.id,
    name: props.nutri.name,
  })
  
  </script>
  
  <style scoped>
  
  </style>