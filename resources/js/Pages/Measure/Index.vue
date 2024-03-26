<template>
  <main>

    <Head title="Measure" />
    <h1>Je suis la page Measure HD</h1>
    <br>
    <CardLayout>

      <Button btn="add" @click="router.visit(route('measures.create'))">
        Ajouter
      </Button>
      <br>
      <br>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Modifier</th>
            <th>Effacer</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="measure in measures" :key="measure.id">
            <td class="row" @click="router.visit(route('measures.show', measure.id))">{{ measure.name }}</td>
            <td class="row" @click="router.visit(route('measures.show', measure.id))">{{ measure.description }}</td>
            <td>
              <Button btn="edit" @click="router.visit(route('measures.edit', measure.id))">
                Modifier
              </Button>
            </td>
            <td class="danger">
              <Button btn="danger" @click="router.delete(route('measures.destroy', measure.id))">
                Supprimer
              </Button>
            </td>
          </tr>
        </tbody>
      </table>
    </CardLayout>
    <br>
    <!-- <DynamicTable :headers="head" :data="props.aromas" @select="navigate($event)"/> -->
  </main>
</template>

<script lang="ts" setup>
import CardLayout from '@/Layouts/CardLayout.vue';
import DynamicTable from '@/Components/DynamicTable.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Button from '@/Components/Button.vue';
import type { Measure } from '@/Models/measures';
import { Head, router } from '@inertiajs/vue3';

const navigate = (measure: any) => {
  router.visit(route('measures.show', measure.id))
}

const props = defineProps<{ measures: Array<Measure> }>();

const head = {
  name: 'Nom',
  description: 'Description',
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

.edit {
  color: white;
  background-color: blue;
}
</style>