<template>
    <div class="m-index">
        <nav-bar></nav-bar>
        <banner></banner>
        <intro></intro>
        <art></art>
        <press></press>
        <screen-shot></screen-shot>
        <dev-blog></dev-blog>
        <subscribe v-if="isShow"></subscribe>
        <footer-bar></footer-bar>
        <pop-page v-if="isShowPopPage"></pop-page>
    </div>
</template>

<script>
    import navBar from '../../components/NavBar'
    import banner from '../../components/mobile/Banner'
    import intro from '../../components/Intro'
    import art from '../../components/mobile/Art'
    import press from '../../components/Press'
    import screenShot from '../../components/mobile/Screenshot'
    import devBlog from '../../components/Devblog'
    import subscribe from '../../components/mobile/Subscribe'
    import footerBar from '../../components/mobile/FooterBar'
    import popPage from '../../components/PopPage'
    export default {
        mounted() {
            console.log('Index page mounted.')
            let lang = window.localStorage.getItem('LANGUAGE')
            if (lang=='zh_cn'){
                this.isShow = false
            }
        },
        components: {
            navBar, banner, intro, art, press, screenShot, devBlog, footerBar, popPage, subscribe
        },
        data(){
            return {
                isShowPopPage: false,
                isShow: 'true'
            }
        },
        methods:{
            /*popPage(){
                this.isShowPopPage = true
            }*/
        }
    }
</script>
