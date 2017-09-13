<template>
    <div class="pop-page" v-if="isShow">
        <i class="fa fa-close fa-2x" @click="hidePopPage()"></i>
        <iframe id="video-frame" class="video" src="https://www.youtube.com/embed/MgEUGNsFIPA" frameborder="0" allowfullscreen></iframe>
    </div>
</template>

<script>
    export default {
        created(){
          console.log(this.$parent.isShowPopPage)
        },
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                isShow: this.$parent.isShowPopPage
            }
        },
        methods: {
            hidePopPage(){
                this.$parent.isShowPopPage = false;
            }
        }
    }
</script>

