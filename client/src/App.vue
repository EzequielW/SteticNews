<template>
  <q-layout>
    <q-header class="bg-white text-black">
      <q-toolbar>
        <q-toolbar-title>
          Stetic News
        </q-toolbar-title>
        
        <q-input
          debounce="500"
          borderless
          placeholder="Search"
          v-model="searchTerm"
        >
          <template v-slot:append>
            <q-icon name="search" />
          </template>
        </q-input>
      </q-toolbar>
    </q-header>

    <q-page-container>
      <HomePage v-bind:searchTerm="searchTerm"/>
    </q-page-container>
  </q-layout>
</template>

<script>
import { ref } from 'vue'
import HomePage from './components/HomePage.vue'

export default {
  name: 'LayoutDefault',

  components: {
    HomePage
  },
  data() {
    return {
      searchTerm: ''
    }
  },
  setup () {
    return {
      leftDrawerOpen: ref(false)
    }
  }
}
</script>
