<template>
    <div class="banner container-fluid"  v-lazy:background-image="bannerBg">
        <!--<img v-lazy="logoSrc" alt="seeking dawn" class="banner_logo" src="/images/mobile/header_logo.png">-->
        <div style="margin-top: 60px;"><img alt="seeking dawn" class="banner_logo" src="/images/mobile/header_logo.png"></div>
        <div class="btn_group">
            <i class="play_btn fl" v-on:click="playVideo()"></i>
            <a href="http://user.multiverseinc.com/ambassador" class="fl"  style="float: left;display: inline-block;">
                <img v-lazy="socialSrc" alt="" class="social">
                <span>Ambassador</span>
            </a>
            <a href="/presskit" target="_blank " class="fl">
                <img v-lazy="downloadSrc" alt="" class="social"><span>PressKit Download</span>
            </a>
        </div>
        <img v-lazy="monsterSrc" alt="monster" class="monster">
        <!--<img v-lazy="monsterSrc" alt="monster" class="monster">


            <img v-lazy="logoSrc" alt="seeking dawn" class="banner_logo">

        <div class="btn_group">
            <div style="float: left;font-size: 33px"><i class="play_btn" v-on:click="playVideo()"></i>
            <span style="padding-left: 70px;">Play Trailer</span></div>
            <a href="http://user.multiverseinc.com/ambassador">
                <img v-lazy="socialSrc" alt="" class="social">
                <span>Ambassador</span>
            </a>
            <a href="/presskit" target="_blank">
                <img v-lazy="downloadSrc" alt="" class="social"><span>PressKit Download</span>
            </a>
        </div>-->
        <div class="mask" style="opacity: 0.2;"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Mobile Banner Component mounted.')
        },
        data() {
            return {
                bannerBg: '/images/mobile/banner_bg.png',
                logoSrc: '/images/mobile/header_logo.png',
                monsterSrc: '/images/mobile/monster.png',
                socialSrc: '/images/social_icon.png',
                downloadSrc: '/images/download_icon.png',
                animate: true
            }
        },
        methods:{
            playVideo(){
                this.$parent.isShowPopPage = true;
                console.log(this.$parent.isShowPopPage)
            }
        }
    }
</script>
