<template>
    <div id="nav-bar" class="nav-bar"
         v-bind:class="{ active: isActive,'transparent':isTransparent}"
         v-on:click="Menu()"
         v-on:mouseenter="showMenu()"
         v-on:mouseleave="hideMenu()"
         :style="style">
        <div class="menu-btn" >
            <img src="/images/multiverse.png" alt="MULTIVERSE" style="width: 100%">
            <img src="/images/seekingdawn_logo_white.png" alt="Seeking Dawn VR" style="width: 100%;margin-top: 25px;">
        </div>
        <div class="nav-link">
            <a href="/posts/" class="" v-if="$t('nav.isShow')=='true'">Dev Blog</a>
            <a href="http://user.multiverseinc.com/ambassador" class="" v-if="$t('nav.isShow')=='true'">Ambassador</a>
            <a href="/presskit" class="" v-if="$t('nav.isShow')=='true'">Presskit</a>
            <a href="/presskit?lang=zh_CN" class="" v-if="$t('nav.isShow')=='false'">Presskit</a>
            <a href="https://www.multiverseinc.com" class="">Multiverse</a>
            <div  v-on:mouseenter="showLang()" style="position: fixed;bottom: 100px;width: 136px"  v-on:mouseleave="hideLang()">
                LANGUAGE <span class="triangle"></span>
                <div class="languageArea" v-show="isChangeLang" >
                    <a v-on:click="switchLang('en-US')" class="">EN</a>
                    <a v-on:click="switchLang('zh-CN')" class="">中文</a>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('NavBar Component mounted.')
            console.log(this.$i18n.locale)
            let height = screen.availHeight
            this.height = height
            this.style = 'height: '+this.height+'px;'
            window.addEventListener('scroll', this.handleScroll);
        },
        data() {
            return {
                isActive: true,
                height:'135',
                lang: 'en-US',
                isChangeLang: false,
                isTransparent:false,
                style:''
            }
        },
        computed:{

        },
        methods:{
            showMenu(){
                this.isActive = true;
                this.style = 'height: '+this.height+'px;'
            },
            hideMenu(){
                this.isActive = false;
                this.style = ''
            },
            Menu(){
                if(this.isActive){
                    this.style = 'height: 0px;'
                    this.isActive = false
                } else{
                    this.style = 'height: '+this.height+'px;'
                    this.isActive = true;

                }
            },
            switchLang(e){
                let lang = this.$parent.locale
                if (e ==='en-US'){
                    this.$parent.locale = this.$i18n.locale = 'en-US'
                    this.lang = 'en-US'
                    localStorage.setItem('language', 'en-US')
                }
                if(e === 'zh-CN'){
                    this.$parent.locale = this.$i18n.locale = 'zh-CN'
                    localStorage.setItem('language', 'zh-CN')
                    this.lang = 'zh-CN'
                }
            },
            showLang(){
                 console.log(this.isChangeLang )
                this.isChangeLang = true
            },
            hideLang(){
                this.isChangeLang = false
            },
            handleScroll(){
                if(this.isScrollTop()===true){
                    this.isTransparent = false
                }else {
                    this.isTransparent = true
                }
            },
            isScrollTop(){
                let a = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                let b = document.documentElement.scrollTop==0? document.body.scrollTop : document.documentElement.scrollTop;
                let c = document.documentElement.scrollTop==0? document.body.scrollHeight : document.documentElement.scrollHeight;
                if(document.body.scrollTop==0&&document.documentElement.scrollTop==0){
                    return true
                }else {
                    return false
                }
            }
        }
    }

</script>
