<template>
    <div>
        <h1>{{aroma.name}}</h1>
        <p v-for="family in aroma.families" :key="family">
            {{ family.name }} {{ family.group.name }} :
        <p v-for="property in family.properties" :key="property"> {{ property.name }}   </p>
        </p>
    </div>

    <PrimaryButton @click="router.delete(route('aromas.destroy', aroma.id))">
      Delete
    </PrimaryButton>
</template>

<script lang="ts" setup>
import { defineProps } from 'vue';
import type { Aroma } from '@/Models/aromas';
import { useForm,  router } from '@inertiajs/vue3'
import PrimaryButton from '@/Components/PrimaryButton.vue'

const props = defineProps<{aroma : Aroma}>();


</script>