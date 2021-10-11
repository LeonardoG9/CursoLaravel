<template>
  <div>
    <!-- <h1>{{category.title}}</h1> -->
    <div
      class="card mt-3"
      style="width: 25rem"
      v-for="post in posts"
      :key="post.id"
    >
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ post.url_clean }}</h6>
        <p class="card-text">
          {{ post.content }}
        </p>
        <a class="btn btn-primary" @click="postClick(post)">See more</a>
        <router-link
          class="btn btn-success"
          :to="{ name: 'detail', params: { id: post.id } }"
          >Detail</router-link
        >
      </div>
    </div>
    <v-pagination
      class="mt-2"
      v-model="currentPage"
      :classes="bootstrapPaginationClasses"
      :labels="paginationAnchorTexts"
      :page-count="total"
    ></v-pagination>
    <post-modal :post="postSelected"></post-modal>
  </div>
</template>

<script>
import vPagination from "vue-plain-pagination";
export default {
  components: { vPagination },
  props: ["posts","total"],
  data: function () {
    return {
      currentPage: 1,
     
      postSelected: "",
      bootstrapPaginationClasses: {
        ul: "pagination",
        li: "page-item",
        liActive: "active",
        liDisable: "disabled",
        button: "page-link",
      },
      paginationAnchorTexts: {
        first: "First",
        prev: "Previous",
        next: "Next",
        last: "Last",
      },
    };
  },
  methods: {
    postClick: function (p) {
      this.postSelected = p;
    },
  },
  watch:{
    currentPage:function(newVal,oldVal){
      console.log(newVal)
      this.$emit('getCurrentPage',newVal)
    }
  }
};
</script>

<style>
</style>