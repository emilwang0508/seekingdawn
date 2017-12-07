<template>
    <div class="press container-fluid">
        <title-bar :msg='title' came='default' style="margin-top: 240px;"></title-bar>
        <div class="container">
        <div v-for="list in $t('presslist')" class="col-xs-12 col-sm-12 col-md-6 col-lg-4 press-content">
            <div><img :src="list.thumb" alt=""></div>
            <div class="content ">
                <p>{{list.des}}</p>
            </div>
            <a :href="list.href" class="readMore" target="_blank">{{btn_name}}</a>
        </div>
      </div>

    </div>
</template>

<script>
    import titleBar from "./title"
    export default {
        mounted() {
            console.log('Press Component mounted.')
        },
        components: {
            titleBar
        },
        data(){
            return {
                title:'PRESS',
                btn_name:'MORE',
                lists: [
                    {id:'1',thumb:'/images/upload.png',des:"Seeking Dawn Looks Like A Hugely Ambitious VR Shooter",href:'https://uploadvr.com/seeking-dawn-looks-like-hugely-ambitious-vr-shooter/'},
                    {id:'2',thumb:'/images/upload.png',des:"One Of The Largest VR Action Survival Games: Seeking Dawn",href:"https://www.vrfocus.com/2017/06/one-of-the-largest-vr-action-survival-games-seeking-dawn/"},
                    {id:'3',thumb:'/images/upload.png',des:"E3 2017: Hands-On With Ambitious Sci-Fi Shooter Seeking Dawn",href:'https://uploadvr.com/e3-2017-hands-sci-fi-shooter-seeking-dawn/'},
                ]
            }
        }
    }
</script>
