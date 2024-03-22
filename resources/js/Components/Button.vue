<template>
  <button :class="buttonClass">
    <slot />
  </button>
</template>

<script lang="ts" setup>
import { ref, computed } from 'vue';

const props = defineProps({
  btn: String,
});

const buttonClass = computed(() => ({
  'btn-delete': props.btn === 'danger',
  'btn-edit': props.btn === 'edit',
  'btn-add': props.btn === 'add',
}));

</script>

<style scoped>
button {
  color: white;
  border-radius: 5px;
  padding: 5px;
}

.btn-delete {
  background-color: red;
  outline: thick double red;
}

.btn-delete:hover {
  outline: thick double lightcoral;
  background-color: lightcoral;
}

.btn-edit {
  background-color: blue;
  outline: thick double blue;
}

.btn-edit:hover {
  outline: thick double lightskyblue;
  background-color: lightskyblue;
}

.btn-add {
  outline: thick double green;
  background-color: green;
}

.btn-add:hover {
  outline: thick double lightgreen;
  background-color: lightgreen;
}
</style>
