<template>
    <div class="index">
        <nav-bar></nav-bar>
        <banner></banner>
        <!--<dev-blog v-if="list.length==3"></dev-blog>-->
        <dev-blog></dev-blog>
        <art></art>
        <press></press>
        <screen-shot></screen-shot>
        <subscribe v-if="isShow"></subscribe>
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

        },
        created() {
            this.locale = localStorage.getItem('language') // 从 localStorage 中获取语言状态
            this.$i18n.locale = localStorage.getItem('language')
        },
        components: {
            navBar, banner, intro, art, press, screenShot, devBlog, footerBar, popPage, subscribe
        },
        data(){
            return {
                isShowPopPage: false,
                isShow: true,
                list:''
            }
        },
        methods:{
            /*popPage(){
                this.isShowPopPage = true
            }*/
        }
    }
</script>
