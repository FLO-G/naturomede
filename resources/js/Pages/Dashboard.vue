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
  <div class="main-contianer">

    <SideBar3></SideBar3>

      <main>
       
        <div>
          
          <h1>Naturomede</h1>
          <h2>Bonjour {{ $page.props.auth.user.name }}</h2>
      
        
        <div class="container">
          <div class="item"><a href="aromas">L’Aromathérapie</a></div>
          <div class="item"><a href="measures">Les Mesures Hygiéno-Diététique</a></div>
          <div class="item"><a href="herbals">La Phytothérapie</a></div>
          <div class="item"><a href="nutris">La Nutrithérapie</a></div>
        </div>
    
      </div>
    </main>
  </div>
 
  </template>
  
  <script lang="ts" setup>

import SideBar3 from '@/Components/SideBar3.vue';
  
  </script>
  
  <style>
  main {
      background-image: url('/resources/js/assets/LogoBackground.jpg');
      background-repeat: no-repeat;
      background-size: contain; 
      background-position: center;
      border: 2px solid red;
      transform: translate(+35%, +5%);
      position: fixed;
  }
  
  .main-contianer{
    display: flex;
    border: 2px solid blue;
    width: 100vw;
    height: 100vh;
    
  }
  
   
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; 
    align-items: center;
    margin-top: 70px;
    border: 2px solid orange;
  }
  
  .item {
    flex: 0 1 45%;
    margin-bottom: 2rem;
  }
  
  .item a {
    display: block;
    background-color: #45879F ;
    color: white;
    padding: 2rem;
    margin: 1rem;
    text-align: center;
    text-decoration: none;
  }
  
  h1 {
    font-size: 2rem;
    text-align: center;
    color: #41844E;
    width: 70%;
    margin: auto;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  h2 {
    font-size: clamp(1rem, 2rem, 3rem);
   ;
    color: #41844E;
  text-align: center;
  }
  
  </style>