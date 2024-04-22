<template>
    <h1>{{ aroma.name }}</h1>
      <p v-for="family in aroma.families" :key="family.id">
        {{ family.name }} : {{ family.group.name }}
        <p v-for="property in family.properties" :key="property.id">
          {{ property.name }}
        </p>
      </p>
      <PrimaryButton @click="router.visit(route('aromas.edit', aroma.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('aromas.destroy', aroma.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>
import type { Aroma } from '@/Models/aromas'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps<{aroma: Aroma}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

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
 box-sizing: border-box;
  text-align: center;
  padding: 30px;
  height: 70vh;
  width: 30vw;
  border-radius: 50px;
  backdrop-filter: blur(10px);
  box-shadow:  20px 20px 60px #bebebe,
             -20px -20px 60px #ffffff;
}

h1 {
  font-size: 5em;
  
}
p {
  font-size: 2em;
}

.bouton {
margin: 5%;
  
}

@media all and (max-width: 720px){
  .container {
     padding: 10px;
     height: 30vh;
     width: 50vw;
   }
   h1 {
    font-size: 2em;
  }
  p {
    font-size: 1em;
  }
}

@media all and (min-width: 721px) and (max-width: 900px){
  .container {
    padding: 20px;
    height: 50vh;
    width: 50vw;
  }
  h1 {
   font-size: 3em;
 }
 p {
   font-size: 2em;
 }
}

@media all and (min-width: 901px) and (max-width: 1024px){
  .container {
    padding: 20px;
    height: 55vh;
    width: 50vw;
  }
  h1 {
   font-size: 4em;
 }
 p {
   font-size: 2em;
 }
}

@media all and (min-width: 1025px)and (max-width: 1220px){
  .container {
    padding: 20px;
    height: 60vh;
    width: 50vw;
  }
  h1 {
   font-size: 4em;
 }
 p {
   font-size: 2em;
 }
}
</style>