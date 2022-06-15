<template>
    <div>
        <Header/>
        <main>
            <div class="container">
                <PostsList/>
            </div>
            <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <Header/>
                    <div class="card-body">
                        <h2 class="text">Sito in costruzione</h2>
                    </div>
                </div>
            </div>
        </div> -->
        </main>
    </div>


</template>

<script>

import Header from './Header.vue'
import PostsList from './posts/PostsList.vue'

export default{
    name: "App",
    components: {
        Header,
        PostsList
    }
}   
</script>
