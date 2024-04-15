<template>
    <form @submit.prevent="form.put(route('clients.update', form.id))">
      <InputLabel for="firstname" value="Prénom"/>
      <TextInput  id="firstname" type="string" v-model="form.firstname" required/>
      <br>
      <InputLabel for="lastname" value="Lastname"/>
      <TextInput  id="lastname" type="string" v-model="form.lastname" required/>
      <br>
      <br>
      <InputLabel for="email" value="email"/>
      <TextInput  id="email" type="string" v-model="form.email" required/>
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
  import type { Client } from '@Models/client'
  
  const props = defineProps<{
    client: Client
  }>();
  
  const form = useForm({
    id: props.client.id,
    firstname: props.client.firstname,
    lastname: props.client.lastname,
    email: props.client.email
  })
  
  </script>
  
  <style scoped>
  
  </style>