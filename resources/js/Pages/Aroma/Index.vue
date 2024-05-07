<template>

  <div class="main-container">
        <!--SIDEBAR CONTAINER-->
      <div class="sidebar-container">
      <SideBar3/>
      </div>

     

  <main>

    <h1> Aromas </h1>
    <br>
    <body class="content-container">

       <!--REACTIVE SEARCH INPUT-->
     <div class="searchfield-container"> 
      <label for="searchfield"></label>
      <svg xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
        </svg>
      <input v-model="search" type="text" id="searchfield" placeholder="rechercher">
    </div>
    <br>

    <button class="add-button" @click="router.visit(route('aromas.create'))">
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
    </body>
    </main>

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

.main-container{
  border: 7px solid purple;
  display: flex;
  height: 100vh;
  background-image:url(/resources/js/assets/LogoBackground.jpg);
}
.sidebar-container{
  position: fixed;
}
.searchfield-container{
  height: 5vh;
  margin-bottom: 20px;
}

#searchfield{
  border-radius: 7%;
}


main{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  left:50%;
  top:50%;
  border: 2px solid red;
  width: 100vw;
}

h1{
  font-weight: bold;
  font-size: 2rem;
}

label {
  background-image: url();
}

content-container{
 display: flex;
 justify-content: center;
 align-self: center;
}

.add-button{
  width: 50%;
  border-radius: 10%;
  padding: 10px;
  font-weight: 700; 
}

button{
  border: 2px solid orange;
  width: 100%;
  background-color:#9DD671;
}

button:hover{
  background-color: #8DD257;
}

table, tr, td, thead{
  border: 2px solid black;
}


table {
  width: 25vw;
}

table td{
line-height: 3vw;
padding: 0px;
font-weight: 500;
}

tr:hover{
  background-color: #8DD257;
}


@media (max-width: 900px) {
  .main-contianer {
    left: 30%;
    margin: 0;
  }
  .content-container {
    width: 50%;
    position: fixed;
    left: 40%;
    top: 30%;
  }
  main {
    justify-content: space-around;
    background-position: center;
  }
  .sidebar-container{
    width: 30%;
    margin: 0;
    position: fixed;
  }
  h1 {
    margin: 15px;
  }
  #searchfield {
    width: 100px;
  }
}


@media (max-width: 600px) {
 main {
  left: 10%;
  margin: 0;
 }
 header svg {
  margin: 0;
 }
}

</style>