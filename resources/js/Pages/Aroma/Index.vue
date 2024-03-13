<template>
  <div class="container">
    <h1>My Aroma entries</h1>
    <div v-for="aroma in aromas" :key="aroma">
      {{ aroma.name }}
      <p v-for="family in aroma.families" :key="family">
        {{ family.name }} : {{ family.group.name }}
      <p v-for="property in family.properties" :key="property" @click="router.visit(route('aromas.show', aroma.id))">
        {{ property.name }}
      </p>
      </p>
    </div>
  </div>
</template>

<script setup lang="ts">
// import NavLink from '@/Components/Dropdown.vue';
import { defineProps } from 'vue';
import { Head, router} from '@inertiajs/vue3';
import type { Aroma } from '@/Models/aromas';

/* interface Aroma {
  aromas: Aroma[];  // Define the expected type for aromas
}

const { aromas } = defineProps<Aroma>();
 */

 const navigate = (aroma: any) => {
  router.visit(route('aromas.show', aroma.id))
 }

const props = defineProps<{aromas: Array<Aroma>}>();
const head = {
  name: 'Nom'
}

</script>