<template>
    <div class="screenshot container-fluid"  v-lazy:background-image="screenshotBg">
        <title-bar came="white" :msg="msg"></title-bar>
        <ul class="m-screenshot-list"  v-on:mouseenter="showShadow()" v-bind:class="{active:isActive}" v-on:mouseleave="hideShadow()">
            <li v-for="(item,index) in screenLists"
                class="col-xs-6 col-md-6 col-sm-6"
                v-bind:class="{ active: item.isActive }"
                v-on:mouseenter="showPic(index)"
                v-on:mouseleave="hidePic(index)" @click="showBigPic(index)">
                <img v-lazy='item.src' :alt="item.alt" v-bind:class="{ active: item.isActive }" >
            </li>
            <div class="shadow"></div>
        </ul>
        <carousel :list="screenLists" :index="showBigPicIndex" v-if="isShowBigPic"></carousel>
        <div class="clear-fix"></div>
    </div>
</template>

<script>
    import titleBar from "../title"
    import carousel from "../imageCarousel"
    export default {
        mounted() {
            console.log('Screenshot Component mounted.')
            let lang = window.localStorage.getItem('LANGUAGE')
            if (lang=='zh_cn'){
                this.msg = '场景'
            }
        },
        components: {
            titleBar, carousel
        },
        data() {
            return {
                screenLists:[
                    {src:'/images/screenshot/thumb_2.png',bigSrc:'/images/screenshot/thumb_big_2.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_3.png',bigSrc:'/images/screenshot/thumb_big_3.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_5.png',bigSrc:'/images/screenshot/thumb_big_5.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_6.png',bigSrc:'/images/screenshot/thumb_big_6.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_7.png',bigSrc:'/images/screenshot/thumb_big_7.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_12.png',bigSrc:'/images/screenshot/thumb_big_12.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_14.png',bigSrc:'/images/screenshot/thumb_big_14.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_15.png',bigSrc:'/images/screenshot/thumb_big_15.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_16.png',bigSrc:'/images/screenshot/thumb_big_16.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_17.png',bigSrc:'/images/screenshot/thumb_big_17.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_18.png',bigSrc:'/images/screenshot/thumb_big_18.png',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_20.png',bigSrc:'/images/screenshot/thumb_big_20.png',alt:"ss_s",isActive:false},
//                    {src:'/images/screenshot/thumb_21.png',bigSrc:'/images/screenshot/thumb_big_20g_21.png',alt:"ss_s",isActive:false},
                ],
                isActive: false,
                screenshotBg: '/images/screenshot_bg.jpg',
                showBigPicIndex:'',
                isShowBigPic: false,
                msg: "SCREENSHOT",
            }

        },
        methods:{
            showPic(index){
//                this.screenLists[index].isActive = true
            },
            hidePic(index){
//                this.screenLists[index].isActive = false
            },
            showShadow(){
//                this.isActive = true
            },
            hideShadow(){
//                this.isActive = false
            },
            showBigPic(index){
                this.showBigPicIndex = index
                this.isShowBigPic = true
                console.log(this.showBigPicIndex)
            }
        }
    }
</script>
