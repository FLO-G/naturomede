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
  background-color: #D4362B;
  outline: thick double #D4362B;
}

.btn-delete:hover {
  outline: thick double lightcoral;
  background-color: lightcoral;
}

.btn-edit {
  background-color: #ECC30B;
  outline: thick double #ECC30B;
}

.btn-edit:hover {
  outline: thick double lightskyblue;
  background-color: lightskyblue;
}

.btn-add {
  outline: thick double #2BC9D4;
  background-color: #2BC9D4;
}

.btn-add:hover {
  outline: thick double lightgreen;
  background-color: lightgreen;
}
</style>
