<template>
    <main>
  
      <Head title="Symptoms" />
      <h1>Je suis la page Symptom</h1>
      <br>
      <CardLayout>
  
        <Button btn="add" @click="router.visit(route('symptoms.create'))">
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
            <tr v-for="symptom in symptoms" :key="symptom.id">
              <td class="row" @click="router.visit(route('symptoms.show', {symptom:symptom.id}))">
                {{ symptom.id }}
                {{ symptom.name }}
                {{ symptom.definition }}
                {{ symptom.cause }}
                {{ symptom.complication }}


               
                 
              </td>
              <td>
                <Button btn="edit" @click="router.visit(route('symptoms.edit', {symptom: symptom.id}))">
                  Modifier
                </Button>
              </td>
              <td class="danger">
                <Button btn="danger" @click="router.delete(route('symptoms.destroy', {symptom: symptom.id}))">
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
  import Button from '@/Components/Button.vue';
  import type { Symptom } from '@/Models/symptoms';
  import { Head, router } from '@inertiajs/vue3';
  
  // const navigate = (measureHd: any) => {
  //   router.visit(route('measuresHd.show', measureHd.id))
  // }
  
  const props = defineProps<{ symptoms: Array<Symptom> }>();
  
  
  
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