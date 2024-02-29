<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
defineProps({ errors: Object })
const form = reactive({
  name: null,
  email: null,
  password: null,
})

function submit() {
  router.post('/users', form)
}
</script>

<template>
  <Link href="/login"></Link>
  <form @submit.prevent="submit">
    <label for="name"> name:</label>
    <input id="name" v-model="form.name" />
    <div v-if="errors.name">{{ errors.name }}</div>
    <label for="email">Email:</label>
    <input id="email" v-model="form.email" />
    <div v-if="errors.email">{{ errors.email }}</div>
    <label for="password">password:</label>
    <input id="password" v-model="form.password" />
    <div v-if="errors.password">{{ errors.password }}</div>
    <button type="submit">Submit</button>
  </form>
</template>