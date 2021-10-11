<template>
  <div>
    <post-default @getCurrentPage="getCurrentPage" v-if="total > 0" :posts="posts" :total="total"></post-default>
  </div>
</template>

<script>
import axios from "axios";
import PostDefault from "./PostDefault.vue";
export default {
  components: { PostDefault },
  created() {
    this.getPosts();
  },
  data: function () {
    return {
      postSelected: "",
      posts: [],
      total: 0,
      currentPage:1
    };
  },
  methods: {
    postClick: function (p) {
      this.postSelected = p;
    },
    getPosts() {
      axios.get(`/api/post?page=${this.currentPage}`).then((res) => {
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