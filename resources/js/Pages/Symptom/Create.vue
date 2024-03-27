<template>

    <Head title="Create symptom" />
    <h1>Ajouter un symptomHd : </h1>
    <br>
    <form @submit.prevent="form.post(route('symptoms.store'))">
      <InputLabel for="name" value="Nom"/>
      <TextInput  id="number" type="string" v-model="form.name" required/>
      <br>
      <br>
      <InputLabel for="definition" value="Def"/>
      <TextInput  id="number" type="string" v-model="form.definition" required/>
      <br>
      <br>
      <InputLabel for="cause" value="Cause"/>
      <TextInput  id="number" type="string" v-model="form.cause" required/>
      <br>
      <br>
      <InputLabel for="complication" value="Complication"/>
      <TextInput  id="number" type="string" v-model="form.complication" required/>
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
  import { Head, useForm, router } from '@inertiajs/vue3'
  
  const form = useForm({
    name: '',
    definition: '',
    cause: '',
    complication: '',


  })
  
  </script>
  
  <style scoped></style>