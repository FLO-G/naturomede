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
  import type { Client } from '@Models/Client'
  
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
    @media screen and (min-width: 400px) and (max-width: 768px) {
      .container {
        display: flex;
        flex-basis: 2;
        flex-direction: row;
        position: relative;
        overflow: auto;
        max-width: 100%;
        width: calc(100vw - 2rem);
        height: 100vh;
        margin: 2rem;
      }
    }

    main{
    height: 100vh;
    width: 100vw;
    background-image:url(/resources/js/assets/LogoBackground.jpg) ;
    background-repeat: no-repeat;
    background-size: contain; 
    background-position: center; 
    display: flex;
    justify-content: center;
    align-items: center;
}
  
  table {
    width: 100%;
    max-height: 60vh;
  }
  
  tbody {
    border-collapse: collapse;
    width: 80vw;
  }
  
  tbody tr:nth-child(even) {
    background-color: var(--main-primary-lgt);
  }
  
  th {
    background-color: #fafafa;
    position: sticky;
    top: 0;
    text-align: left;
  }
  
  th,
  td {
    padding: 5px;
  }
  
  td {
    cursor: pointer;
  }
  
  tbody tr:nth-child(even):hover,
  tbody tr:hover {
    color: white;
    background-color: var(--main-primary);
  }
  
  h1 {
    display: flex;
    justify-content: center;
    font-size: 2rem;
    font-weight: bold;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin-bottom: 1rem;
  }
  .edit {
    color: white;
    background-color: blue;
  }
  </style>