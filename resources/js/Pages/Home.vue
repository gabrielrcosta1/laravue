<template>
  
<h1>{{title}}</h1>
<h1>{{ user.name }}</h1>
<Link href="/users">Home</Link>

</template>

<script>
export default {
  props: {
    title: String,
    user: Object
  }
}
</script>