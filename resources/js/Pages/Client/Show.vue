<template>
    <h1>{{client.firstname}} {{ client.lastname }}</h1>
     
      <PrimaryButton @click="router.visit(route('clients.edit', client.id))">
        Modifier
      </PrimaryButton>
      <PrimaryButton @click="router.delete(route('clients.destroy', client.id))">
        Supprimer
      </PrimaryButton>  
</template>

<script lang="ts" setup>
import type { Client } from '@/Models/clients'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, router } from '@inertiajs/vue3';


const props = defineProps<{client: Client
}>();

// function destroy (id) {
//     if (confirm("Are you sure you want to Delete")) {
//         router.delete(route('aromas.destroy', id));
//     }

//     return {destroy}
//   }

</script>

<style scoped>

</style>