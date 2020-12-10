<template>
  <div class="main-layout">
    <navbar />
    <sidebar/>
      <child />  
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import Sidebar from '~/components/Sidebar'

export default {
  name: 'MainLayout',

  components: {
    Navbar,Sidebar
  }
}
</script>
