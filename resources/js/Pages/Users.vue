
<template>
  <Layout>
    <Link href="/login">Login</Link>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
  </Layout>
</template>

<script>
export default {
  props: {
    user: Object
  }
}
</script>
