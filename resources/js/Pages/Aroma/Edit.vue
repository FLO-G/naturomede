<template>
  <div class="main">
    <div class="container">
      
  <main>
  <form @submit.prevent="form.put(route('aromas.update', form.id))">
    <label for="name" value="Nom"/>
    <input  id="name" name="name" type="string" v-model="form.name" required/>
    <br>
    <br>
    <div class="bouton">
    <PrimaryButton type="submit" :disabled="form.processing">
    <button type="submit" :disabled="form.processing">
      Modifier
    </PrimaryButton>
  </div>
    </button>
  </form>
</div>
</div>
</main>
</template>

<script lang="ts" setup>

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

/* @media screen and (min-width: 400px) and (max-width: 768px) {
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
    } */

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
   
  button{
  border: 2px solid orange;
  width: 100%;
  background-color:#9DD671;
}

button:hover{
  background-color: #8DD257;
}
</style>