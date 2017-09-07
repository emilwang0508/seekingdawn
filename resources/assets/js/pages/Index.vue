<template>
    <div class="index">
        <nav-bar></nav-bar>
        <banner></banner>
        <intro></intro>
        <art></art>
        <press></press>
        <screen-shot></screen-shot>
        <dev-blog></dev-blog>
        <subscribe></subscribe>
        <footer-bar></footer-bar>
        <pop-page v-if="isShowPopPage"></pop-page>
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
            navBar, banner, intro, art, press, screenShot, devBlog, footerBar, popPage, subscribe
        },
        data(){
            return {
                isShowPopPage: false,
            }
        },
        methods:{
            /*popPage(){
                this.isShowPopPage = true
            }*/
        }
    }
</script>
