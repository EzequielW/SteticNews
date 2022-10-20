<template>
  <q-card flat bordered class="post-item">
    <q-card-section class="flex justify-between">
      <div class="text-subtitle2">{{ post.category.name }}</div>
      <div class="text-subtitle2">{{ post.region.name }}</div>
    </q-card-section>

    <q-separator inset class="q-mx-none" />

    <q-card-section>
      {{ post.content }}
    </q-card-section>

    <q-separator inset class="q-mx-none" />

    <q-card-section class="flex justify-between">
      <div class="text-subtitle2">hoy, 11:30</div>
      <div class="text-subtitle2 flex">
        Leer mas en
        <div v-for="(link, index) in post.externalLinks" v-bind:key="link.id">
          &nbsp;
          <a :href="link.url">
            {{ getHostname(link.url) }}
          </a>   
          <span v-if="index != Object.keys(post.externalLinks).length - 2 && index != Object.keys(post.externalLinks).length - 1">,</span>
          <span v-if="index == Object.keys(post.externalLinks).length - 2">&nbsp;&nbsp;y</span>
        </div>  
      </div>
    </q-card-section>
  </q-card>
</template>

<style>
  .post-item{
    max-width: 600px;
  }

  a{
    text-decoration: none;
  }
</style>

<script>
export default {
  name: 'PostItem',
  props: ['post'],
  methods: {
    formatDate(timestamp){
      return timestamp;
    },
    getHostname(url){
      let { hostname } = new URL(url);
      hostname = hostname.replace("www.", "")
      return hostname;
    }
  }
}
</script>
