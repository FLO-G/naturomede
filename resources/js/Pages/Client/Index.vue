<template>


    <div class="flex">
      
    <div class=""><Sidebar></Sidebar></div>
    
      <main>
    
        
        <div class="">
        <Head title="Clients" />
        
        
        
        <br>
        <CardLayout>
    
          
    
          <Button btn="add" @click="router.visit(route('clients.create'))">
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
              <tr v-for="client in clients" :key="client.id">
                <td class="row" @click="router.visit(route('clients.show', client.id))">
                    
                  {{ client.firstname}} {{' '}} {{ client.lastname }}
                </td>
                <td>
                  <Button btn="edit" @click="router.visit(route('clients.edit', client.id))">
                    Modifier
                  </Button>
                </td>
                <td class="danger">
                  <Button btn="danger" @click="router.delete(route('clients.destroy', client.id))">
                    Supprimer
                  </Button>
                </td>
              </tr>
            </tbody>
          </table>
          
        </CardLayout>
        <br>

      </div>
      </main>
    </div>
    
    </template>
    
    <script lang="ts" setup>
    import CardLayout from '@/Layouts/CardLayout.vue';
    import DynamicTable from '@/Components/DynamicTable.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import Button from '@/Components/Button.vue';
    import type { Client } from '@/Models/client';
    import { Head, router } from '@inertiajs/vue3';
    import Sidebar from '@/Components/Sidebar.vue';
    
    
    
    const navigate = (client: any) => {
      router.visit(route('clients.show', client.id))
    }
    
    const props = defineProps<{ clients: Array<Client> }>();
    
    
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