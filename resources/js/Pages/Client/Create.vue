<template>

    <Head title="Create Client" />
    <h1>Ajouter un Client : </h1>
    <br>
    <form @submit.prevent="form.post(route('clients.store'))">
      <InputLabel for="firstname" value="Prénom"/>
      <TextInput  id="firstname" type="string" v-model="form.firstname" required/>
      <br>
      <br>
      <InputLabel for="lastname" value="Nom"/>
      <TextInput  id="lastname" type="string" v-model="form.lastname" required/>
      <br>
      <br>
      <InputLabel for="email" value="Email"/>
      <TextInput  id="email" type="string" v-model="form.email" required/>
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
    firstname: '',
    lastname: '',
    email: '',
  })
  
  </script>
  
  <style scoped></style>