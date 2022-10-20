<template>
  <q-page class="row">
    <div class="col-12">
      <div v-for="post in posts" v-bind:key="post.id">
        <PostItem v-bind:post="post" class="q-mx-auto q-mb-sm"/>
      </div>
    </div>
  </q-page>
</template>

<style>
</style>

<script>
import PostItem from './PostItem'
import PostService from '../services/PostService'

export default {
  name: 'HomePage',
  components: {
    PostItem
  },
  data() {
    return {
      posts: []
    }
  },
  created() {
    PostService.getAll()
      .then(res => {
        this.posts = res;
      })
      .catch(err => console.log(err));
  }
}
</script>
