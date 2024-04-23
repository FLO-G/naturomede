<template>
  <form @submit.prevent="form.put(route('aromas.update', form.id))">
    <InputLabel for="name" value="name"/>
    <TextInput  id="name" name="name" type="string" v-model="form.name" required/>
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
import type { Aroma } from '@Models/aromas'

const props = defineProps<{
  aroma: Aroma
}>();

const form = useForm({
  id: props.aroma.id,
  name: props.aroma.name,
})

</script>

<style scoped>

</style>