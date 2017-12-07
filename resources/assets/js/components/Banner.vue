<template>
    <div class="banner container-fluid"  v-lazy:background-image="bannerBg">
        <!--<img v-lazy="monsterSrc" alt="monster" class="monster">


          -->
        <img v-lazy="logoSrc" alt="seeking dawn" class="banner_logo">
        <div class="seekingdawn_des">
            Seeking Dawn is a large scale survival-exploration FPS/RPG VR game from Multiverse.
            It puts the player into an immersive alien "death world" full of interesting creatures,
            unknown dangers and wonderful delights, complete with an epic story and characters with vivid personality.
            The game will feature more than 10 hours of content for the average player on the first play-through. Harder challenges and
            the lure of better loot ensure subsequent play-throughs remain fun and attractive.
        </div>
        <div class="btn_group">
            <div style="float: left;font-size: 33px"><i class="play_btn" v-on:click="playVideo()"></i>
            <span class="btn_content">{{ $t("banner.playName") }}</span></div>
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
                bannerBg: '/images/banner_bg.jpg',
                logoSrc: '/images/banner_logo.png',
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
