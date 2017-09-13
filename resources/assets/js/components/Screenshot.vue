<template>
    <div class="screenshot container-fluid"  v-lazy:background-image="screenshotBg">
        <title-bar came="white" msg="SCREENSHOTS"></title-bar>
        <ul class="screenshot-list"  v-on:mouseenter="showShadow()" v-bind:class="{active:isActive}" v-on:mouseleave="hideShadow()">
            <li v-for="(item,index) in screenLists" v-bind:class="{ active: item.isActive }" v-on:mouseenter="showPic(index)"  v-on:mouseleave="hidePic(index)">
                <img v-lazy='item.src' :alt="item.alt" v-bind:class="{ active: item.isActive }">
            </li>
            <div class="shadow"></div>
        </ul>


        <div class="clear-fix"></div>
    </div>
</template>

<script>
    import titleBar from "./title"
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            titleBar
        },
        data() {
            return {
                screenLists:[
                    {src:'/images/screenshot/thumb_2.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_3.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_5.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_6.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_7.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_12.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_14.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_15.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_16.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_17.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_18.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_20.jpg',alt:"ss_s",isActive:false},
                    {src:'/images/screenshot/thumb_21.jpg',alt:"ss_s",isActive:false},
                ],
                isActive: false,
                screenshotBg: 'images/screenshot_bg.jpg'
            }

        },
        methods:{
            showPic(index){
                this.screenLists[index].isActive = true
                this.screenLists[index].isActive = true
            },
            hidePic(index){
                this.screenLists[index].isActive = false
            },
            showShadow(){
                this.isActive = true
            },
            hideShadow(){
                this.isActive = false
            }
        }
    }
</script>
