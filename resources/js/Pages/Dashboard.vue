<!-- <script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />
   

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" flex bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900 dark:text-gray-100">Tu es connecté !</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
  import Sidebar from '@/Components/Sidebar.vue';

</script> -->


<template>  
  <main>
    <Head title="Accueil" />
    
    <div class="ts">
        <div class="aroma">
            <a href="aromas">L’Aromathérapie</a>
        </div>
        <div class="measure">
            <a href="measures">Les Mesures Hygiéno-Diététique</a>

        </div>
        <div class="herbal">
            <a href="herbals">La Phytothérapie</a>

        </div>
        <div class="nutri">
            <a href="nutris">La Nutrithérapie</a>

        </div>

    </div>
    
    
</main>
</template>

<script lang="ts" setup>
  import CardLayout from '@/Layouts/CardLayout.vue';
  import PrimaryButton from '@/Components/PrimaryButton.vue';
  import Button from '@/Components/Button.vue';
  import type { Aroma, Family } from '@/Models/aromas';
  import { Head, router } from '@inertiajs/vue3';
  import Sidebar from '@/Components/Sidebar.vue';
  import { ref } from 'vue';
</script>

<style>
*{
    
}
.ts{
    display: flex;
    flex-wrap: wrap;
    padding: 1rem;
    justify-content: space-evenly;
    margin-top: 2rem;
}
.ts a {
    
    padding: 10px 20px;
    border-radius: 50px;
    backdrop-filter: blur(10px);
    box-shadow: 20px 20px 60px #bebebe, -20px -20px 60px #ffffff;
    transition: background-color 0.3s ease;
    color: inherit;
    text-decoration: none;
}

.ts a:hover {
    background-color: #45a049;
}

</style>