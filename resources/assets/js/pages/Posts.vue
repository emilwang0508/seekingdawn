<template>
    <div class="posts">
        <div class="post-header">
            <a href="/" class="logo"><img src="/images/header_logo.png" alt="SeekingDawn Logo"></a>
        </div>
        <div class="blog-banner">
            <div class="container">
                <p class="title">THE DEVELOPERS BLOG</p>
                <P class="des">We will continue to update the blog, welcome enthusiasts and we interact</P>
            </div>
        </div>
        <div class="blog-area">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                    <div class="blog">
                        <div class="cover"><img src="//cdn.multiverseinc.com/images/dev_default_cover.jpg" alt="dev_cover"></div>
                        <div class="title"><p>title</p></div>
                        <div class="create_at"><p>2017.08.01</p></div>
                    </div>
                    <div class="schema">
                        <div class="des"><p>dessadsadsasdasadsa</p></div>
                        <a href="/1" class="link-href">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                    <div class="blog">
                        <div class="cover"><img src="//cdn.multiverseinc.com/images/dev_default_cover.jpg" alt="dev_cover"></div>
                        <div class="title"><p>title</p></div>
                        <div class="create_at"><p>2017.08.01</p></div>
                    </div>
                    <div class="schema">
                        <div class="des"><p>des</p></div>
                        <a href="/1" class="link-href">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                    <div class="blog">
                        <div class="cover"><img src="//cdn.multiverseinc.com/images/dev_default_cover.jpg" alt="dev_cover"></div>
                        <div class="title"><p>title</p></div>
                        <div class="create_at"><p>2017.08.01</p></div>
                    </div>
                    <div class="schema">
                        <div class="des"><p>des</p></div>
                        <a href="/1" class="link-href">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                    <div class="blog">
                        <div class="cover"><img src="//cdn.multiverseinc.com/images/dev_default_cover.jpg" alt="dev_cover"></div>
                        <div class="title"><p>title</p></div>
                        <div class="create_at"><p>2017.08.01</p></div>
                    </div>
                    <div class="schema">
                        <div class="des"><p>des</p></div>
                        <a href="" class="link-href">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4 col-sm-12">
                    <div class="blog">
                        <div class="cover"><img src="//cdn.multiverseinc.com/images/dev_default_cover.jpg" alt="dev_cover"></div>
                        <div class="title"><p>title</p></div>
                        <div class="create_at"><p>2017.08.01</p></div>
                    </div>
                    <div class="schema">
                        <div class="des"><p>des</p></div>
                        <a href="/1" class="link-href">Read More</a>
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
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            navBar, footerBar
        },
        data(){
            return {
            }
        },
        methods:{

        }
    }
</script>
