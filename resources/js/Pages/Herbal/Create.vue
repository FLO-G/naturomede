<template>

    <Head title="Create Herbal" />
    <h1>Ajouter un herbal : </h1>
    <br>
    <form @submit.prevent="form.post(route('herbals.store'))">
      <InputLabel for="name" value="Nom"/>
      <TextInput  id="number" type="string" v-model="form.name" required/>
      <br>
      <InputLabel for="latin_name" value="Nom_Latin"/>
      <TextInput  id="number" type="string" v-model="form.latin_name" required/>
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
    latin_name:'',
  })
  
  </script>
  
  <style scoped></style>