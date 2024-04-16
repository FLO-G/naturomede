<template>
    <form @submit.prevent="form.put(route('herbals.update', form.id))">
      <InputLabel for="name" value="Nom"/>
      <TextInput  id="number" type="string" v-model="form.name" required/>
      <br>
      <InputLabel for="latin_name" value="Nom_Latin"/>
      <TextInput  id="number" type="string" v-model="form.latin_name" required/>
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
  import type { Herbal } from '@Models/herbals'
  
  const props = defineProps<{
    herbal: Herbal
  }>();
  
  const form = useForm({
    id: props.herbal.id,
    name: props.herbal.name,
    latin_name: props.herbal.latin_name,
  })
  
  </script>
  
  <style scoped>
  
  </style>