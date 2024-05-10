<template>
  <div class="main">
    <div class="container">
      
  <form @submit.prevent="form.put(route('aromas.update', form.id))">
    <InputLabel for="name" value="Nom"/>
    <TextInput  id="number" type="string" v-model="form.name" required/>
    <br>
    <br>
    <div class="bouton">
    <PrimaryButton type="submit" :disabled="form.processing">
      Modifier
    </PrimaryButton>
  </div>
  </form>
</div>
</div>
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
.main{
  height: 100vh;
  width: 100vw;
    background-image:url(/resources/js/assets/LogoBackground.jpg) ;
    background-repeat: no-repeat;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
  
}

.container {
  box-sizing:content-box ;
   text-align: center;
   padding: 30px;
   height: 30vh;
   width: 30vw;
   border-radius: 50px;
   backdrop-filter: blur(10px);
   box-shadow:  20px 20px 60px #bebebe,
              -20px -20px 60px #ffffff;
}

</style>