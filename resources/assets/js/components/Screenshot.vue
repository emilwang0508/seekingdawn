<template>
    <div class="screenshot container-fluid"  v-lazy:background-image="screenshotBg">
        <title-bar came="white" msg="SCREENSHOTS"></title-bar>
        <ul class="screenshot-list"  v-on:mouseenter="showShadow()" v-bind:class="{active:isActive}" v-on:mouseleave="hideShadow()">
            <li v-for="(item,index) in screenLists" v-bind:class="{ active: item.isActive }" v-on:mouseenter="showPic(index)"  v-on:mouseleave="hidePic(index)">
                <img v-lazy='item.src' :alt="item.alt">
            </li>
            <!--<div class="shadow"></div>-->
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
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                    {src:'/images/ss_s.png',alt:"ss_s",isActive:false},
                ],
                isActive: false,
                screenshotBg: 'images/screenshot_bg.jpg'
            }

        },
        methods:{
            showPic(index){
                console.log(index)
                this.screenLists[index].isActive = true
                this.screenLists[index].isActive = true

            },
            hidePic(index){
                console.log(index)
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
