Window.Vue=require("vue")
import Vue from 'vue'
import VueRouter from 'vue-router'
import PostList from '../components/PostList.vue'
import PostDetail from '../components/PostDetail.vue'
import PostCategory from '../components/PostCategory.vue'
import Contact from '../components/Contact.vue'
Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    routes:[
        {path:'/',component:PostList,name:'home'},
        {path:'/contact',component:Contact,name:'contact'},
        {path:'/detail/:id',component:PostDetail,name:'detail'},
        {path:'/category/:id',component:PostCategory,name:'category'}
        
    ]
})