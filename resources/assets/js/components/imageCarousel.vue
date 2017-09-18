<template>
    <div class="image-carousel" v-if="isShow">
        <i class="fa fa-close fa-2x" @click="closeBtn()"></i>
        <i class="fa fa-chevron-left fa-2x white" @click="preBtn()"></i>
        <div class="images">
            <img :src='imgSrc' alt="">
        </div>
        <div class="carousel-mask"></div>
        <i class="fa fa-chevron-right fa-2x white" @click="nextBtn()"></i>
    </div>
</template>

<script>
    export default {
        mounted() {
            let i = this.index
            i >=0 ? this.imgSrc = this.list[i].bigSrc : this.imgSrc = this.list[0].bigSrc

            console.log(i)
        },
        data(){
            return {
                imgSrc: '',
                imgIndex: 0,
                isShow: this.$parent.isShowBigPic
            }
        },
        props:['list','index'],
        methods:{
            disable_scroll() {
                if (window.addEventListener) {
                    window.addEventListener('DOMMouseScroll', wheel, false);
                }
                window.onmousewheel = document.onmousewheel = wheel;
                document.onkeydown = keydown;
            },
            enable_scroll() {
                if (window.removeEventListener) {
                    window.removeEventListener('DOMMouseScroll', wheel, false);
                }
                window.onmousewheel = document.onmousewheel = document.onkeydown = null;
            },
            preBtn(){
                let e = this.imgIndex
                e===0 ? e=0 : e--
                this.imgSrc = this.list[e].bigSrc
                this.imgIndex = e
            },
            nextBtn(){
                let e = this.imgIndex
                e===e.length-1 ? e=e.length-1 : e++
                this.imgSrc = this.list[e].bigSrc
                this.imgIndex = e
            },
            closeBtn(){
                this.$parent.isShowBigPic = false
            }
        }
    }
</script>
