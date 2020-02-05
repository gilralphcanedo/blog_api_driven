<template>
    <div>
        <div class="card mb-3" v-for="post in posts" :key="post.id">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="m-0">{{post.author.name}}</p>
                    <p class="m-0">{{humanizeDate(post.created_at)}}</p>
                </div>
            </div>
            <div class="card-body">
                <h4>{{post.title}}</h4>
                <p>{{post.content}}</p>
            </div>
            <div class="card-footer bg-white">
                <div class="mb-2" v-for="comment in post.comments" :key="comment.id">
                    <div class="m-0 p-2 bg-light">
                        <a href="#">{{comment.author.name}}</a>
                        <span>{{comment.content}}</span>
                        <p class="m-0 small">{{humanizeDate(comment.created_at)}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [],
        created () {
            
        },
        mounted () {
            this.getPosts();
        },
        data() {
            return {
                posts: []
            }
        },
        watch: {
            
        },
        methods: {
            getPosts() {
                axios.get('api/posts')
                    .then(response => {
                        console.log(response.data.data);
                        this.posts = response.data.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
            },
            humanizeDate(date){
                return moment(date).fromNow();
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>