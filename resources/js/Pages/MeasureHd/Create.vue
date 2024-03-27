<template>

    <Head title="Create MeasureHd" />
    <h1>Ajouter un MeasureHd : </h1>
    <br>
    <form @submit.prevent="form.post(route('measuresHd.store'))">
      <InputLabel for="name" value="Nom"/>
      <TextInput  id="number" type="string" v-model="form.name" required/>
      <br>
      <br>
      <InputLabel for="description" value="Desc"/>
      <TextInput  id="number" type="string" v-model="form.description" required/>
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
  
  const form = useForm({
    name: '',
    description: '',
  })
  
  </script>
  
  <style scoped></style>