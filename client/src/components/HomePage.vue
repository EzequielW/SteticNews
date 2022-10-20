<template>
  <q-page class="row justify-center">
    <div class="col-auto q-pt-xl">
      <div>
        <div v-for="post in posts" v-bind:key="post.id">
          <PostItem v-bind:post="post" class="q-mb-sm"/>
        </div>
        <q-circular-progress
          v-if="posts.length == 0 || loadingPage"
          indeterminate
          rounded
          size="50px"
          color="blue"
          class="loading-page q-ma-md"
        />
      </div> 
      <div class="flex justify-end items-center">
        <span>{{ getPostsNumber() }} of {{ total }}</span>
        <q-pagination
          v-model="currentPage"
          :max="lastPage"
          direction-links
        />
      </div>
    </div>
  </q-page>
</template>

<style>
  .q-pagination__middle{
    display: none !important;
  }

  .loading-page{
    position: fixed !important;
    left: calc(50% - 50px);
    top: 35%;
    z-index: 10;
  }
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
      posts: [],
      currentPage: 0,
      lastPage: 0,
      loadingPage: false,
      total: 0
    }
  },
  methods: {
    getPostsNumber() {
      const first = 1 + 3 * this.currentPage;
      const last = 3 + 3 * this.currentPage;
      
      return  first + "-" + last;
    }
  },
  created() {
    this.loadingPage = true;
    PostService.getAll()
      .then(res => {
        this.posts = res.data;
        this.lastPage = res.meta.last_page;
        this.total = res.meta.total;
      })
      .catch(err => console.log(err));
  },
  watch: {
    currentPage: function(page) {
      this.loadingPage = true;
      PostService.getByPage(page)
        .then(res => {
          this.posts = res.data;
          this.lastPage = res.meta.last_page;
          this.total = res.meta.total;
          this.loadingPage = false;
        })
        .catch(err => console.log(err));
    }
  }
}
</script>
