<template>
  <main>

  
  <div class="container">
  <p> {{ herbal.name }}</p>
  <p> {{ herbal.latin_name }}</p>                                                                                                                                 
      
      <PrimaryButton @click="router.visit(route('herbals.edit', herbal.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('herbals.destroy', herbal.id))">
        Supprimer
      </PrimaryButton>  
    </div>
  </main>
</template>

<script lang="ts" setup>
import type { Herbal } from '@/Models/herbals'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps<{herbal: Herbal}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

</script>

<style scoped>
main{
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
</style>