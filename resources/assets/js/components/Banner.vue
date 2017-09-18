<template>
    <div class="banner container-fluid"  v-lazy:background-image="bannerBg">
        <img v-lazy="logoSrc" alt="seeking dawn" class="banner_logo">
        <div class="play_btn" v-on:click="playVideo()">

        </div>
        <div class="mask"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                bannerBg: 'images/index_banner.jpg',
                logoSrc: 'images/seekingdawn_logo.png',
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
