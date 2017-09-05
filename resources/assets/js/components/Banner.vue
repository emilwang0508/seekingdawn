<template>
    <div class="banner container-fluid"  v-lazy:background-image="bannerBg">
        <!--<object type="image/svg+xml" data="/js/play_btn.svg" class="play_btn">-->
            <!--Warning for older browsers, or alternative content-->
        <!--</object>-->
        <img v-lazy="logoSrc" alt="seeking dawn" class="banner_logo">
        <div class="play_btn" v-on:click=""></div>
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
            }
        },
        methods:{

        }
    }
</script>
