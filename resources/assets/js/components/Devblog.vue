<template>
    <div class="dev-blog container-fluid" style="margin-bottom: 130px;" v-if="list.length===3">
        <title-bar msg='THE DEVELOPERS BLOG' came='default'></title-bar>
        <div class="subtitle">
            <p>Every week we plan to release a new developer blog highlighting that weeks development for Seeking Dawn!</p>
            <p>We encourage you to follow our journey through these blogs and let us know your thoughts. </p>
        </div>
        <ul class="blog-list container ">
            <li v-for="(item, index) in list">
                <div class="top">
                    <img v-lazy="blogCover" :alt="item.thumb_title" class="thumb" v-if="item.thumb==''||item.thumb==null">
                    <img v-lazy="item.thumb" :alt="item.thumb_title" class="thumb" v-else>
                    <p class="title">{{item.title}}</p>
                    <p class="update-at">{{item.update_at}}</p>
                </div>
                <div class="bottom">
                    <p class="summary">
                        {{item.description}}
                    </p>
                    <a :href="item.link" class="more_link_btn">More</a>
                </div>
            </li>
        </ul>
    </div>

</template>

<script>
    import titleBar from "./title"
    export default {
        mounted() {
            console.log('Dev Component mounted.')
            let _this = this
            axios.post('posts',{
                from:'index'
            })
                .then(function (response) {
                    console.log(response);
                    console.log(response.data)
//               _this.list = eval('('+response.data+ ')')
                    _this.list = response.data
                })
                .catch(function (error) {
                    console.log(error);
                });

        },
        created(){
            console.log(this.list)
        },
        data() {
            return {
                list:[],
                blogCover:'/images/thumb_1.jpg'
            }
        },
        components: {
            titleBar
        }
    }
</script>
