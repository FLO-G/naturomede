<template>

    <div class="main-container">

        <SideBar3></SideBar3>

        <!--Reactive Searchinput-->
      <div class=""> <!-- Ajout de la classe relative -->
        <label for="searchfield"> <!-- Ajout de la classe absolute -->
          <svg xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
          </svg>
        </label>
        <input v-model="search" type="text" id="searchfield" placeholder="filtrer des résultats"
          class="block rounded-lg border-2 py-2 pl-10"> <!-- Pas de changement ici -->
      </div>
        <br>

      <h1> Aromas </h1>



      
      <button @click="router.visit(route('aromas.create'))">
          Ajouter
      </button>
        <br>
        <br>
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Modifier</th>
              <th>Effacer</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="aroma in filteredAromas" :key="aroma.id">
              <td @click="router.visit(route('aromas.show', aroma.id))">
                {{ aroma.name }}
              </td>
              <td>
                <button @click="router.visit(route('aromas.edit', aroma.id))">
                  Modifier
                </button>
              </td>
              <td>
                <button @click="router.delete(route('aromas.destroy', aroma.id))">
                  Supprimer
                </button>
              </td>
            </tr>
          </tbody>
        </table>


    </div>

</template>

<script setup lang="ts">
import type { Aroma } from '@/Models/aromas';
import SideBar3 from "@/Components/SideBar3.vue";
import { ref, computed } from 'vue';
import { router } from '@inertiajs/vue3';


const search = ref("");

const props = defineProps<{ aromas: Array<Aroma> }>();

const filteredAromas = computed(() => {
  return props.aromas.filter((aroma) => aroma.name.toLowerCase().includes(search.value.toLowerCase().trim()));
});

</script>

<style scoped>


</style>