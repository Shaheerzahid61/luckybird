<!-- resources/js/App.vue -->
<template>
  <div class="section">

      <div class="col-12">

        <sidebar />
        <router-view></router-view>
      </div>
    </div>
</template>

<script>
import sidebar from './components/sidebar.vue';

export default {
  components: {
    sidebar,
  },
  name: 'App',
};
</script>
<style>
/* .section{
  background: url('/thanksgivingBG.95cd1fe5.png');

} */
</style>
