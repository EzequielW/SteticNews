<template>
  <q-page class="row justify-center">
    <div class="col-auto q-pt-xl">
      <div class="posts-container column">
        <div v-for="post in posts" v-bind:key="post.id">
          <PostItem v-bind:post="post" class="q-mb-sm"/>
        </div>
        <div v-if="!loadingPage && posts.length == 0" 
          class="text-body1 q-my-auto empty-result">
          <q-icon name="info" size="24px" color="blue"/>
          No se encontraron resultados para tu busqueda
        </div>
        <q-circular-progress
          v-if="loadingPage"
          indeterminate
          rounded
          size="50px"
          color="blue"
          class="loading-page q-ma-md"
        />
      </div> 
      <div class="flex justify-end items-center">
        <span>{{ getPageNumber() }} of {{ total }}</span>
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

  .posts-container{
    min-height: 300px;
  }

  .empty-result{
    height: 100%;
  }
</style>

<script>
import PostItem from './PostItem'
import PostService from '../services/PostService'

export default {
  name: 'HomePage',
  props: ['searchTerm'],
  components: {
    PostItem
  },
  data() {
    return {
      posts: [],
      currentPage: 0,
      lastPage: 0,
      loadingPage: false,
      total: 0,
      from: 0,
      to: 0
    }
  },
  methods: {
    getPageNumber() {
      let pageNumber = this.from + '-' + this.to;

      if(this.from == this.to){
        if(this.from > 0){
          pageNumber = this.to;
        }
        else{
          pageNumber = 0;
        }
      }

      return pageNumber;
    },
    getPosts() {
      this.loadingPage = true;
      PostService.getByPage(this.currentPage, this.searchTerm)
        .then(res => {
          this.posts = res.data;
          this.lastPage = res.meta.last_page;
          this.total = res.meta.total;
          this.from = res.meta.from;
          this.to = res.meta.to;
        })
        .catch(err => console.log(err))
        .finally(() => this.loadingPage = false);
    }
  },
  created() {
    this.getPosts();
  },
  watch: {
    currentPage: function() {
      this.getPosts();
    },
    searchTerm: function() {
      this.getPosts();
      console.log(this.searchTerm);
    }
  }
}
</script>
