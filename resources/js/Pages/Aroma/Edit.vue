<template>
<div>
    <h1>Edit Page</h1>
    <div>
    <form @submit.prevent="form.put(route('aromas.update', form.id))">
    <InputLabel for="aromaname" value="Nom"/>
    <TextInput  id="aromaname" name="aromaname" type="string" v-model="form.name" required/>
    <br>
    <br>
    <PrimaryButton type="submit" :disabled="form.processing">
      Modifier
    </PrimaryButton>
    

  </form>

    </div>
</div>
</template>

<script setup lang="ts">
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import { useForm } from '@inertiajs/vue3'
import { Aroma } from '@/Models/aromas'

const props = defineProps<{aroma: Aroma}>();
const form = useForm({
    id: props.aroma.id, 
  name: props.aroma.name,
});

 function test() {
  console.log('clicked!!')
}

</script>