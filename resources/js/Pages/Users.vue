
<template>
  <Layout>
    <Link href="/login">Login</Link>
    <Head title="Welcome" />
    <h1>Welcome</h1>

    <button @click="incrementValue">click: {{ values }} </button>
  </Layout>
  
</template>

<script>

import { router } from '@inertiajs/vue3'
export default {

  props: {
    user: Object,
    values: Number,
  },
 
  methods: {
    incrementValue() {
      router.post('/counter/increment', {}, {
        preserveState: false,
        
      });
    },
  },
}
</script>
