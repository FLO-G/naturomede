<template>

  <div class="main-container">
        <!--SIDEBAR CONTAINER-->
      <div class="sidebar-container">
      <SideBar/>
      </div>

     

  <main>

    <h1> Aromas </h1>
    <br>
    <body class="content-container">

       <!--REACTIVE SEARCH INPUT-->
     <div class="searchfield-container"> 
      <label for="searchfield"></label>
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
import SideBar from "@/Components/SideBar.vue";
import { ref, computed } from 'vue';
import { router } from '@inertiajs/vue3';
// import { usePage } from '@inertiajs/vue3';

// const page = usePage();


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
  background-repeat: no-repeat;
  background-size: contain; 
  background-position: center; 
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
  border: 2px solid #8DD257;
}
main{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  left:50%;
  top:50%;
  width: 100vw;
  height: 100vh;
  font-family: Lato;
}
h1{
  font-weight: bold;
  font-size: 2rem;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.add-button{
  width: 50%;
  border-radius: 10%;
  padding: 10px;
  font-weight: 700;
  background-color:#8DD257;
  border: 2px solid rgba(239, 157, 6, 0.947);
}
td button{
  border: 2px solid rgba(239, 157, 6, 0.947);
  width: 100%;
  background-color:#8DD257;
  height: 100%;
  font-weight: 700;
}
button:hover{
  background-color: #b3e68c;
  cursor: pointer;
}
table {
  border: 2px solid black;
  text-align: center;
}

 thead, tr {
  border: 2px solid black;
  text-align: center;
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
  background-color: #b3e68c;
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