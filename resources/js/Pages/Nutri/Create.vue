<template>

    <Head title="Create Nutri" />
    <h1>Ajouter un Nutri : </h1>
    <br>
    <form @submit.prevent="form.post(route('nutris.store'))">
      <InputLabel for="name" value="Nom"/>
      <TextInput  id="number" type="string" v-model="form.name" required/>
      <br>
      <br>
      <PrimaryButton type="submit" :disabled="form.processing">
        Ajouter
      </PrimaryButton>
    </form>
  </template>
  
  <script lang="ts" setup>
  import InputLabel from '@/Components/InputLabel.vue'
  import TextInput from '@/Components/TextInput.vue'
  import PrimaryButton from '@/Components/PrimaryButton.vue'
  import { Head, useForm } from '@inertiajs/vue3'
  import { Nutris } from '@Models/nutris.ts'
  
  const form = useForm({
    name: '',
  })
  
  </script>
  
  <style scoped></style>