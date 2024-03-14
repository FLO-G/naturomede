<template>

  <Head title="Create Aroma" />
  <h1>Ajouter un Aroma : </h1>
  <br>
  <form @submit.prevent="form.post(route('aromas.store'))">
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

const form = useForm({
  name: '',
})

</script>

<style scoped></style>