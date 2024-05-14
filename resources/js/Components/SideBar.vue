<template>
        <div class="burger-menu-wrapper">
            <div :class="{ 'sidebar-open': showSideBar }"  @click="showSideBar = !showSideBar" class="burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


    <nav v-show="showSideBar">

        <!--Logo Section of the sidebar-->
      
        <div class="header-container">
          <header>
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-12 h-12 logo">
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/>
                </svg>
                <span>Naturomede</span>
            </header>
        </div>

        <ul>
            <li><svg
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
                  </svg><a href="/dashboard">Accueil</a></li>
            <li> <svg
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
                  </svg><a href="/aromas">Aroma</a></li>

            <li><svg
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
                  </svg><a href="/nutris">Nutri</a></li>
            <li><svg
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
                  </svg><a href="/measures">Measure</a></li>

            <li><svg
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
                  </svg><a href="/herbals">Herbal</a></li>

            <li><svg
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
                  </svg><a href="/clients">Client</a></li>

            <li><svg
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
              </svg>
              <a><Link href="/logout" method="post" as="button" type="button">Logout</Link></a>
            </li>
        </ul>
    </nav>
</template>

<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';
import { ref } from "vue";

const showSideBar = ref(false);

</script>

<style scoped>

nav {
    border: 2px solid black;
    width: 20vw;
    position: relative;
    height: 100vh;
    background-color: #45879F;
    transition-duration: 300;
}

.burger-menu.sidebar-open {
   transform: translateX(20vw);
   transition-duration: 300;
}

.header-container, header {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    height: 20%;
    margin-top: 20px;
    margin-bottom: 20px;
}

header {
    flex: 1;
}

span {
    font-size: 1.8em;
}

ul {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 15px;
}

ul li {
    display: flex;
    gap: 7px;
    padding: 7px;
    width: 100%;
    justify-content: center;
}


ul li:hover{
    background-color: #1990BB;
    border-radius: 5%;
}

ul li a, ul li svg, Link {
    color: #fff;
}

.burger-menu-wrapper{
    position: relative;
}

.burger-menu{
    height: 40px;
    width: 40px;
    position: absolute;
    margin: 12px;
    top: 5%;
    cursor: pointer;
}

.burger-menu span{
    height: 5px;
    width: 100%;
    background-color:  #45879F;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.burger-menu span:nth-child(1) {
    top: 25%;
}
.burger-menu span:nth-child(3) {
    top: 75%;
}


@media (max-width: 900px) {
   .burger-menu {
    display: flex;
    position: absolute;
    width: 40px;
    height: 40px;
   }

   .burger-menu.sidebar-open {
   transform: translateX(30vw);
   transition-duration: 300;
    }

    
   header svg, header span {
    font-size: 25px;
   }
   
   nav {
    width: 25vw;
   }

    .header-container {
    display: flex;
    align-items: center;
    justify-content: center;
    
    margin-bottom: 20px;
   }

header {
    width: 100%;
}
}

@media (max-width: 600px) {
   .burger-menu {
    width: 40px;
    height: 40px;
   }

   header svg, header span {
    font-size: 20px;
   }
   nav {
    width: 30vw;
   }
}

@media (max-width: 426px) {
   header span, header svg {
    font-size: 15px;   }

   nav {
    width: 30vw;
   }
}

</style>