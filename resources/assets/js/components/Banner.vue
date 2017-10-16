<template>
    <div class="banner container-fluid"  v-lazy:background-image="bannerBg">
        <img v-lazy="monsterSrc" alt="monster" class="monster">


            <img v-lazy="logoSrc" alt="seeking dawn" class="banner_logo">

        <div class="btn_group">
            <div style="float: left;font-size: 33px"><i class="play_btn" v-on:click="playVideo()"></i>
            <span style="padding-left: 70px;">{{ $t("banner.playName") }}</span></div>
            <a href="http://user.multiverseinc.com/ambassador" v-if="isShow">
                <img v-lazy="socialSrc" alt="" class="social">
                <span>Ambassador</span>
            </a>
            <a href="/presskit" target="_blank">
                <img v-lazy="downloadSrc" alt="" class="social"><span>{{ $t("banner.pressName") }}</span>
            </a>
        </div>
        <div class="mask" style="opacity: 0.2;"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Banner Component mounted.')
            let lang = window.localStorage.getItem('LANGUAGE')
            if (lang=='zh_cn'){
                this.isShow = false
                this.playName = '预告片播放'
                this.pressName = '新闻资料袋'
            }
        },
        data() {
            return {
                bannerBg: '/images/desert.png',
                logoSrc: '/images/seekingdawn_banner_logo.png',
                monsterSrc: '/images/monster.png',
                socialSrc: '/images/social_icon.png',
                downloadSrc: '/images/download_icon.png',
                animate: true,
                isShow:true,
                ambassdor_btn:'ambassador',
                playName: '',
                pressName: 'PressKit Download'
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
