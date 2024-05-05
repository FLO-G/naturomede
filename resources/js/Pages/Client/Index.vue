<template>

  <div class="main-container">

      <SideBar3></SideBar3>

      <!--Reactive Searchinput-->
    <div class="searchfield"> 
      <svg xmlns="http://www.w3.org/2000/svg"
          fill="none" viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
        </svg>
      <input v-model="search" type="text" id="searchfield" placeholder=""
        class="block rounded-lg border-2 py-2 pl-10"> <!-- Pas de changement ici -->
    </div>
      <br>



      <main>

    <h1> Clients </h1>
    <br>
    <div class="content-container">
      
    <button class="add-button" name="add-button" @click="router.visit(route('clients.create'))">
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
          <tr v-for="client in filteredClients" :key="client.id">
                <td class="row" @click="router.visit(route('clients.show', client.id))"> 
                  {{ client.firstname}} {{' '}} {{ client.lastname }}
                </td>
                <td>

              <button @click="router.visit(route('clients.edit', client.id))">
                Modifier
              </button>
            </td>
            <td>
              <button @click="router.delete(route('clients.destroy', client.id))">
                Supprimer
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    </main>

  </div>

</template>
    
    <script lang="ts" setup>
    import type { Client } from '@/Models/Client';
    import { router } from '@inertiajs/vue3';
    import SideBar3 from '@/Components/SideBar3.vue';
    import { ref, computed} from 'vue';
    
    
const props = defineProps<{ clients: Array<Client> }>();

const filteredClients = computed(() => {
return props.clients.filter((client) => client.firstname.concat(' ', client.lastname).toLowerCase().includes(search.value.toLowerCase().trim()));
});

  const search = ref("");

    </script>
    
<style scoped>

.main-container{
  border: 2px solid blue;
  display: flex;
  height: 100vh;
  background-image:url(/resources/js/assets/LogoBackground.jpg);
}

.searchfield{
  transform: translate(150px, 0px);
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
  display: flex;
  justify-content: center;
  font-weight: bold;
  font-size: 2rem;
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
padding: 7px;
font-weight: 500;
}

tr:hover{
  background-color: #8DD257;
}

@media (max-width:900px) {
  content-container {
    height: 100%;
    overflow: hidden;
  }
}
</style>