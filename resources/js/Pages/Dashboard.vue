<template>
  <div class="main-container">

    <div class="sidebar-container">
      <SideBar/>
    </div>
    

    <main>
      <h1>Naturomede</h1>
      <!-- <h2>Bonjour {{ $page.props.auth.user.name }}</h2> -->

      <body class="content-container">
    
      <div class="item"><a href="aromas">L’Aromathérapie</a></div>
      <div class="item"><a href="measures">Les Mesures Hygiéno-Diététique</a></div>
      <div class="item"><a href="herbals">La Phytothérapie</a></div>
      <div class="item"><a href="nutris">La Nutrithérapie</a></div>
    
    </body>

</main>
</div>
</template>

<script lang="ts" setup>
import SideBar from '@/Components/SideBar.vue';
</script>

<style scoped>
.main-container{
  border: 7px solid purple;
  display: flex;
  height: 100vh;
  background-image:url(/resources/js/assets/LogoBackground.jpg);
}
.sidebar-container{
  position: fixed;
}
.searchfield-container{
  height: 5vh;
  margin-bottom: 20px;
}
#searchfield{
  border-radius: 7%;
  border: 2px solid #8DD257;
}
main{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  left:50%;
  top:50%;
  width: 100vw;
  height: 100vh;
  font-family: Lato;
}

h1{
  font-weight: bold;
  font-size: 2rem;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  top: 0;
}
/* .content-container{
  display: flex;
  justify-content: space-around;
} */
.add-button{
  width: 50%;
  border-radius: 10%;
  padding: 10px;
  font-weight: 700;
  background-color:#8DD257;
  border: 2px solid rgba(239, 157, 6, 0.947);
}
td button{
  border: 2px solid rgba(239, 157, 6, 0.947);
  width: 100%;
  background-color:#8DD257;
  height: 100%;
  font-weight: 700;
}
button:hover{
  background-color: #b3e68c;
  cursor: pointer;
}
table {
  border: 2px solid black;
  text-align: center;
}

 thead, tr {
  border: 2px solid black;
  text-align: center;
}
table {
  width: 25vw;
}
table td{
line-height: 3vw;
padding: 0px;
font-weight: 500;
}
tr:hover{
  background-color: #b3e68c;
}
@media (max-width: 900px) {
  .main-contianer {
    left: 30%;
    margin: 0;
  }
  .content-container {
    width: 50%;
    position: fixed;
    left: 40%;
    top: 30%;
  }
  main {
    justify-content: space-around;
    background-position: center;
  }
  .sidebar-container{
    width: 30%;
    margin: 0;
    position: fixed;
  }
  h1 {
    margin: 15px;
  }
  #searchfield {
    width: 100px;
  }
}
@media (max-width: 600px) {
 main {
  left: 10%;
  margin: 0;
 }
 header svg {
  margin: 0;
 }
}
</style>


<!-- <template>
  <div class="main-contianer">

    <SideBar></SideBar>

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

import SideBar from '@/Components/SideBar.vue';
  
  </script>
  
  <style>
  main {
      background-image: url('/resources/js/assets/LogoBackground.jpg');
      background-repeat: no-repeat;
      background-size: contain; 
      background-position: center;
      transform: translate(+35%, +5%);
      position: fixed;
      
  }
  
  .main-contianer{
    display: flex;
    width: 100vw;
    height: 100vh;
    border: 7x solid purple;
  }
  
   
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; 
    align-items: center;
    margin-top: 70px;
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
  
  </style> -->