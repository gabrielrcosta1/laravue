<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  first_name: null,
  last_name: null,
  email: null,
})

function submit() {
  router.post('/users', form)
}
</script>

<template>
  <form @submit.prevent="submit">
    <label for="name"> name:</label>
    <input id="name" v-model="form.name" />
    <label for="email">Email:</label>
    <input id="email" v-model="form.email" />
    <label for="password">password:</label>
    <input id="password" v-model="form.password" />

    <button type="submit">Submit</button>
  </form>
</template>