<template>
  <div>
    <div
    v-if="post"
      class="card mt-3"
      style="width: 25rem"
      
    >
    <div class="card-header">
        <img src="http://lorempixel.com/400/200/" class="card-img-top">
    </div>
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <router-link class="btn btn-success" :to="{name:'category',params:{id:post.category.id}}">{{post.category.title}}</router-link>

        <p class="card-text">
          {{
            post.content
          }}
          </p>
      </div>
    </div>
    <div v-else>
        <h1>Post not defined</h1>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  created(){
    this.getPost()
  },
  data: function () {
    return {
      image:require('../../../public/images/land.jpg'),
      postSelected:'',
      post: "",
      id:this.$route.params.id
    };
  },
  methods:{

      getPost(){
       axios.get(`/api/post/${this.id}`).then(res=>{
          const data=res.data
          this.post=data.data
        })
      }
  },
};
</script>


<style>

</style>