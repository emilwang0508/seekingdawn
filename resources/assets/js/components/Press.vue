<template>
    <div class="press container-fluid">
        <title-bar :msg='title' came='default'></title-bar>
        <div class="container">
        <div v-for="list in lists" class="col-xs-12 col-sm-12 col-md-6 col-lg-4 press-content">
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
            let lang = window.localStorage.getItem('LANGUAGE')
            if (lang=='zh_cn'){
                this.title = '新闻'
                this.btn_name = '更多'
                this.lists = [
                    {id:'1',thumb:'/images/yxvr.png',des:'《寻找黎明》像是在我的世界里玩FPS—17173VR',href:'http://news.17173.com/content/06202017/111525712.shtml'},
                    {id:'2',thumb:'/images/17173.png',des:'2016年VR游戏最佳视觉奖——HTV&腾讯GAD',href:'http://www.ali213.net/news/html/2017-3/282757.html'},
                    {id:'3',thumb:'/images/yxvr.png',des:'《寻找黎明》能够逆袭UE4，它的画面毋庸置疑——游侠VR',href:'http://www.ali213.net/news/html/2017-3/283801.html'},
                ]
            }
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
