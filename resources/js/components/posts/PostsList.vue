<template>
    <div>
        <!-- loader -->
        <Loader v-if="isLoading"/>
        <ul v-if="posts.length">
            <li v-for="post in posts" :key="post.id">
                {{post.title}}
            </li>
        </ul>
        <p v-else>Non ci sono articoli</p>
    </div>
</template>

<script>
import axios from 'axios';
import Loader from '../Loader.vue';

    export default{
        name: "PostsList",
        components: {
            Loader
        },
        data(){
            return{
                posts: [],
                isLoading: true,
            }
        },
        methods: {
            getPosts(){
                axios.get("http://127.0.0.1:8000/api/posts")
                    .then((res)=>{
                        this.posts = res.data.posts;
                    }).then(()=>{
                        console.log('terminato il caricamento dei posts')
                        this.isLoading = false;
                    })
            }
        },
        mounted(){
            this.getPosts();
        }
    }
</script>

<style scoped>

</style>