<template>
    <div class="m-index">
        <nav-bar></nav-bar>
        <banner></banner>
        <intro></intro>
        <art></art>
        <press></press>
        <screen-shot></screen-shot>
        <dev-blog></dev-blog>
        <subscribe v-if="$t('nav.isShow')=='true'"></subscribe>
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
        created() {
            console.log('index created')
            this.locale = localStorage.getItem('language') // 从 localStorage 中获取语言状态
            this.$i18n.locale = localStorage.getItem('language')
        },
        data(){
            return {
                locale: window.localStorage.getItem('language'),
                isShowPopPage: false,
            }
        },
        components: {
            navBar, banner, intro, art, press, screenShot, devBlog, footerBar, popPage, subscribe
        },
        methods:{

        }
    }
</script>
