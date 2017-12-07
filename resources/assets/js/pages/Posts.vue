<template>
    <div class="posts">
        <div class="post-header">
            <a href="/" class="logo"><img src="/images/header_logo.png" alt="SeekingDawn Logo"></a>
        </div>
        <div class="blog-banner">
            <div class="container">
                <title-bar msg='THE DEVELOPERS BLOG' came='default'></title-bar>
                <P class="des">We will continue to update the blog, welcome enthusiasts and we interact</P>
            </div>
        </div>
        <div class="blog-area">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12" v-for="post in items">
                    <div class="blog">
                        <div class="cover"><a :href="'/posts/' + post.id"><img src="//cdn.multiverseinc.com/images/dev_default_cover.jpg" alt="dev_cover" v-if="post.thumb==null||post.thumb==''"><img :src="post.thumb" alt="dev_cover" v-else></a></div>
                        <div class="title"><p>{{ post.title }}</p></div>
                        <div class="create_at"><p>{{ post.enDate }}</p></div>
                    </div>
                    <div class="schema">
                        <div class="des"><p>{{ post.description }}</p></div>
                        <a :href="'/posts/' + post.id" class="link-href">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <footer-bar></footer-bar>
    </div>
</template>

<script>
    import navBar from '../components/NavBar'
    import banner from '../components/Banner'
    import intro from '../components/Intro'
    import art from '../components/Art'
    import press from '../components/Press'
    import screenShot from '../components/Screenshot'
    import devBlog from '../components/Devblog'
    import subscribe from '../components/Subscribe'
    import footerBar from '../components/FooterBar'
    import popPage from '../components/PopPage'
    import titleBar from "../components/title"
    export default {
        mounted() {
            console.log('Posts page mounted.')
            console.log(this.posts)
        },
        created() {

/*            var self = this;
            console.log('hello');
            axios.post('http://www.multiverseinc.com/posts', {
                from: 'seekingdawnvr',
                param: '192.168.1.1',
                cate:'2',
            })
            .then(function (response) {
                console.log(response);
                self.posts = response.data
                console.log(self.posts)
            })
            .catch(function (error) {
                console.log(error);
            });*/
        },
        components: {
            navBar, footerBar,titleBar
        },
        props:['posts'],
        data(){
            return {
                items: eval('('+this.posts+')'),
                number: '1',
            }
        },
        methods:{

        }
    }
</script>
