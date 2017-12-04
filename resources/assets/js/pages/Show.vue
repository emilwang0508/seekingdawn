<template>
    <div class="show">
        <div class="post-header">
            <a href="/" class="logo"><img src="/images/header_logo.png" alt="SeekingDawn Logo"></a>
        </div>
        <div class="container-full content">
            <div class="container post-area">
                <h1 class="title text-center ">{{ item.title }}</h1>
                <p class="create_at text-center container">{{ item.enDate }}</p>
              <!--  <div class="cover-area" v-if="item.thumb == null || item.thumb == ''">
                    <div class="cover"><img src="//cdn.multiverseinc.com/images/detail_cover.jpg" alt="cover"></div>
                </div>
                <div class="cover-area" v-else>
                    <div class="cover"><img :src="item.thumb" alt="cover"></div>
                </div>-->
                <div class="details" v-html="item.content">

                </div>
                <comment :index="index"></comment>
            </div>
            <footer-bar></footer-bar>
        </div>

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
    import comment from '../components/Comment'
    export default {
        mounted() {

            console.log('Show page mounted.')
            console.log(this.post)
            console.log(this.index)
        },
        created() {
        },
        components: {
            footerBar,comment
        },
        props:['post','index'],
        data(){
            return {
                item: eval('('+ this.post+')'),
            }
        },
        methods:{

        }
    }
</script>
<div id="fb-root"></div>
<!--
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page">
    <div class="fb-comments" data-href="#" data-width="900px" data-numposts="5"></div>
</div>-->
