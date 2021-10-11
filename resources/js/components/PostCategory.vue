<template>
  <div>
    <!-- <h1>{{category.title}}</h1> -->
    <post-default @getCurrentPage="getCurrentPage" :total="total" v-if="total>0" :posts="posts"></post-default>
  </div>
</template>

<script>
import axios from "axios";
import PostDefault from "./PostDefault.vue";
export default {
  created() {
    this.getPosts();
    PostDefault;
  },
  data: function () {
    return {
      postSelected: "",
      posts: [],
      id: this.$route.params.id,
      total:0,
      currentPage:1
    };
  },
  methods: {
    postClick: function (p) {
      this.postSelected = p;
    },
    getPosts() {
      axios.get(`/api/post/${this.id}/category?page=${this.currentPage}`).then((res) => {
        const data = res.data;
        this.posts = data.data.data;
        this.total = data.data.last_page;
      });
    },
    getCurrentPage(current){
      this.currentPage=current
      this.getPosts()
    }
  },
};
</script>

<style>
</style>