<template>
  <div>
    <h1>{{ title }}</h1>
    <div v-for="user in users" :key="user.id">
      <h2>{{ user.name }}</h2>

    </div>
    <Link href="/users">Home</Link>
  </div>
</template>

<script setup>
defineProps({
  users: Array,
  title: String
})
</script>
