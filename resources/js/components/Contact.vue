<template>
  <div>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          name="name"
          v-if="name"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Last name</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          name="lastname"
          v-model="lastname"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          name="email"
          v-model="email"
        />
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea2">Comments</label>
        <textarea
          class="form-control rounded-0"
          id="exampleFormControlTextarea2"
          rows="3"
          name="comments"
          v-model="comments"
        ></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";
export default {
  created() {
    this.getPosts();
  },
  data: function () {
    return {
      name:'',
      lastname:'',
      email:'',
      comments:''
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
  },
};
</script>

<style>
</style>