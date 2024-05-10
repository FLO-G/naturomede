<template>
  <div>
    <slot />
  </div>
</template>

<script lang="ts" setup>

</script>

<style scoped>
div {
  box-sizing: border-box;
  width: 50vw;
  padding: 50px;
  margin: 3vw;
  border-radius: 50px;
  background: #fafafa;
  box-shadow: 20px 20px 42px #bebebe,
              -20px -20px 42px #ffffff;
}

@media all and (min-width: 600px) and (max-width: 900px) {
 div {
  background-color: red;
  width: 50vw;
  justify-content: center;
 }
}
</style>