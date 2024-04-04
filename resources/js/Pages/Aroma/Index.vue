<template>

<Sidebar></Sidebar>



  <main>

   

    <Head title="Aromas" />
    <h1>Je suis la page Aroma</h1>
    <br>
    <CardLayout>

      

      <Button btn="add" @click="router.visit(route('aromas.create'))">
        Ajouter
      </Button>
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
          <tr v-for="aroma in aromas" :key="aroma">
            <td class="row" @click="router.visit(route('aromas.show', aroma.id))">
              {{ aroma.name }}
            </td>
            <td>
              <Button btn="edit" @click="router.visit(route('aromas.edit', aroma.id))">
                Modifier
              </Button>
            </td>
            <td class="danger">
              <Button btn="danger" @click="router.delete(route('aromas.destroy', aroma.id))">
                Supprimer
              </Button>
            </td>
          </tr>
        </tbody>
      </table>
    </CardLayout>
    <!-- <p v-for="aroma in aromas" :key="aroma">
      {{ aroma.name }}
      <p v-for="family in aroma.families" :key="family">
        {{ family.name }} : {{ family.group.name }}
        <p v-for="property in family.properties" :key="property" @click="router.visit(route('aromas.show', aroma.id))">
          {{ property.name }}
        </p>
      </p>
      <PrimaryButton @click="router.visit(route('aromas.edit', aroma.id))">
          Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('aromas.destroy', aroma.id))">
      Supprimer
      </PrimaryButton>
    </p> -->
    <br>
    <!-- <DynamicTable :headers="head" :data="props.aromas" @select="navigate($event)"/> -->
  </main>
</template>

<script lang="ts" setup>
import CardLayout from '@/Layouts/CardLayout.vue';
import DynamicTable from '@/Components/DynamicTable.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Button from '@/Components/Button.vue';
import type { Aroma, Family } from '@/Models/aromas';
import { Head, router } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';
import Sidebar from '@/Components/Sidebar.vue';

const navigate = (aroma: any) => {
  router.visit(route('aromas.show', aroma.id))
}

const props = defineProps<{ aromas: Array<Aroma> }>();


const head = {
  name: 'Nom',
  family_id: 'Famille',
}

</script>

<style scoped>
main {
  margin: var(--main-margin);
}

table {
  width: 100%;
  max-height: 60vh;
}

tbody {
  border-collapse: collapse;
  width: 80vw;
}

tbody tr:nth-child(even) {
  background-color: var(--main-primary-lgt);
}

th {
  background-color: #fafafa;
  position: sticky;
  top: 0;
  text-align: left;
}

th,
td {
  padding: 5px;
}

td {
  cursor: pointer;
}

tbody tr:nth-child(even):hover,
tbody tr:hover {
  color: white;
  background-color: var(--main-primary);
}

h1 {
  display: flex;
  justify-content: center;
}
.edit {
  color: white;
  background-color: blue;
}
</style>