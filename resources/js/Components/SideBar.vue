<template>
  <div class="flex" >

  
  <div class="relative flex min-h-screen " >
    
      
      <!--Logo Section of the sidebar-->
      <div v-show="showSidebar" class="bg-cyan-600 text-cyan-100 relative" id="sidebar">
          
       
        <div class="flex items-center space-x-2 px-4">
              <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-12 h-12">
              <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/>
              </svg>

              <span class="text-2xl text-white font-extrabold">Naturomede</span>
          </div>

          
         

          <hr>

         <!--Toggle Button SideBar -->
          

           <!--Side bar starts here-->
          <nav  class="h-full overflow-y-auto">
              <!-- <div class="group flex items-center space-x-2 py-3 px-4 hover:bg-cyan-700 rounded  hover:text-cyan-300 transition duration-200">
              <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-10 h-10">
              <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
              </svg><input id="search" placeholder="recherche" class="text-black">
          </div> -->

              <a href="/" class="group flex items-center space-x-2 py-3 px-4 hover:bg-cyan-700 rounded hover:text-cyan-300 transition duration-200">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6">
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819"/>
                  </svg><span class="text-white group-hover:text-cyan-300">Accueil</span>
                  </a>
              <a href="/" class="group flex items-center space-x-2 py-3 px-4 hover:bg-cyan-700 rounded  hover:text-cyan-300 transition duration-200">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6">
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                  </svg><span>Clients</span>
                  </a>
              <a href="/" class="group flex items-center space-x-2 py-3 px-4  hover:bg-cyan-700 rounded  hover:text-cyan-300 transition duration-200">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6">
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                  </svg><span class="text-white group-hover:text-cyan-300">Aroma</span>
                  </a>

              <a href="/" class="group flex items-center space-x-2 py-3 px-4  hover:bg-cyan-700 rounded  hover:text-cyan-300 transition duration-200">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6">
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                  </svg><span class="text-white group-hover:text-cyan-300">Nutri</span></a>
                  <a href="/" class="group flex items-center space-x-2 py-3 px-4  hover:bg-cyan-700 rounded  hover:text-cyan-300 transition duration-200">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6">
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg><span class="text-white group-hover:text-cyan-300">Herbal</span></a>
                  <a href="/" class="group flex items-center space-x-2 py-3 px-4  hover:bg-cyan-700 rounded  hover:text-cyan-300 transition duration-200">
                  <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6">
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                  </svg><span class="text-white group-hover:text-cyan-300">Measure</span></a>
              
              <a href="#" class="group flex items-center space-x-2 py-3 px-4 hover:bg-cyan-700 rounded  hover:text-cyan-300 transition duration-200">
              <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6">
              <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
              </svg><span class="text-white group-hover:text-cyan-300">Logout</span></a>
              </nav>
      </div>

     
      
  </div>
  <div class=" ">
            
          <button @click="showSidebar = !showSidebar">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
              </svg>

          </button>

          </div>
      </div>
</template>

<script setup lang="ts">

import { ref } from 'vue';

const showSidebar = ref(false);


</script>

<style scoped>

  





  /* xs */
  /* @media (min-width: 475px) {
      
  } */
  
  /* sm */
  /* @media (min-width: 640px) {
      
  } */

  /* md */
  /* @media (min-width: 765px) {

  } */

  /* lg */
  /* @media (min-width: 1024px) {

  } */

  /* xl */
  /* @media (min-width: 1280px) {

  } */

  /* 2xl */
  /* @media (min-width: 1536px) {

  } */




/* @media (min-width: 1201px) {

#sidebar {
  width: 20vw;
  position: absolute;
}
}

@media (max-width: 1200px) and (min-width: 901px) {

#sidebar {
  width: 25vw;
}
}

@media (max-width: 900px) and (min-width: 601px) {

#sidebar {
  width: 30vw;
}
}

@media (max-width: 600px) {

#sidebar {
  width: 25vw;
  position: relative;
}
} */
</style>