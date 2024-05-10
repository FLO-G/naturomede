<script setup>
import NavLink from '@/Components/NavLink.vue';
</script>



<template>
    <div><h3>Naturomede</h3></div>
    <div class="container">
        
        <ul>
            <input type="text" placeholder="recherche">
            <li>Acceuil</li>
            <li>Clients</li>
            <li>Aroma</li>
            <li>Nutri</li>
            <li>Herbal</li>
            <li>Measure</li>
            <li>Patho</li>
            <li>Symptom</li>
            <li>System</li>
            <li>Logout</li>
            <li>Measure</li>
        </ul>
    </div>

</template>



<style scoped>
.container {
    display: flex;
    flex-direction: column;
    justify-content: left;
    border: solid 1px black;
    border-radius: 5px;
    width: 15%;
    height: 100%;
}
</style>