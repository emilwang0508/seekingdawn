<template>
    <div class="fb-comments" :data-href="url" data-width="1000" data-numposts="5"></div>
</template>

<script>
    export default {
        mounted() {
            console.log('Comment Component mounted.')

        },
        created(){
            console.log(this.url)
        },
        props:['index'],
        data(){
            return{
                url:'http://seekingdawnvr.com/posts/'+this.index
            }
        }
    }
</script>
