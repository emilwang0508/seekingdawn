<template>
    <div class="art container-fluid"  v-lazy:background-image="artBg" >
        <title-bar :msg='$t("art.title")' came='white'></title-bar>
        <p class="des white">
            {{$t("art.content")}}
        </p>

        <ul class="art-list container">
            <i class="fa fa-angle-left white fa-2x" @click="leftChangeShowList()"></i>
            <li v-for="(item, index) in artList"  v-show="isActive(index)"><img v-lazy="item.src" :alt="item.alt" ></li>
            <i class="fa fa-angle-right white fa-2x" @click="rightChangeShowList()"></i>
        </ul>

    </div>
</template>

<script>
    import titleBar from "./title"
    export default {
        mounted() {
            console.log('Art Component mounted.')
            let lang = window.localStorage.getItem('LANGUAGE')
            if (lang=='zh_cn'){
                this.msg = '艺术画廊'
                this.content = '在游戏中提供了数十个小时的冒险时间，寻找黎明拥有丰富的故事剧情和痛快战斗的单人、合作模式，以及额外的挑战模式和掠夺。在游戏中你可以去冒险、制造、建设、探索、战斗，当然，最重要的就是找到回到故乡的路。'
            }
        },
        components: {
            titleBar
        },
        data() {
            return {
                artList: [
                    {src:"/images/model/1.jpg",alt:"art", isActive: true},
                    {src:"/images/model/2.jpg",alt:"art", isActive: true},
                    {src:"/images/model/3.jpg",alt:"art", isActive: true},
                    {src:"/images/model/HandheldProject.jpg",alt:"手持能量盾 HandheldProject", isActive: true},
                    {src:"/images/model/PersonalTeleportor.jpg",alt:"传送器 PersonalTeleportor", isActive: true},
                    {src:"/images/model/Cobra.jpg",alt:"酸液枪Cobra", isActive: false},
                    {src:"/images/model/PortalGun.jpg",alt:"传送门枪PortalGun", isActive: false},
                    {src:"/images/model/zdbq_X-15 Harpy.jpg",alt:"自动步枪X-15 Harpy", isActive: false},
                    {src:"/images/model/X-15 Harpy.jpg",alt:"冲锋枪 X-15 Harpy", isActive: false},
                    {src:"/images/model/LaserSword.jpg",alt:"激光剑 LaserSword",isActive: false},
                    {src:"/images/model/Assegai.jpg",alt:"激光弩Assegai",isActive: false},
                    {src:"/images/model/FistGun.jpg",alt:"拳头枪 FistGun",isActive: false},
                    {src:"/images/model/13.jpg",alt:"激光弩Assegai",isActive: false},
                    {src:"/images/model/ShotGun.jpg",alt:"霰弹枪ShotGun",isActive: false},
                    {src:"/images/model/19.jpg",alt:"激光弩Assegai",isActive: false},
                    {src:"/images/model/FrisbeeGun.jpg",alt:"飞盘枪FrisbeeGun",isActive: false},
                ],
                artBg: '/images/art_bg.png',
                showList: [0,1,2,3,4],
                msg:'ART GALLERY',
                content:'An extensive sci-fi adventure offering dozens of hours of gameplay, Seeking Dawn combines rich storytelling with gritty combat in both solo and cooperative modes, as well as additional challenge modes for even better loot. Scavenge, craft, build, explore, fight, and most importantly, find a way home.'
            }
        },
        methods: {
            leftChangeShowList(){
                if(this.showList.indexOf(4)===4){
                    return this.showList
                }else {
                    let e = Array.from(this.showList, x=>{
                        return x = x - 1
                    })
                    this.showList = e
                }
            },
            rightChangeShowList(){
                const _length = this.artList.length
                let e = Array.from(this.showList, (x,index)=> {
                    if( x>=_length-1){
                        return false;
                    }else{
                        return x= x + 1
                    }
                })
                if (e.indexOf(false)>0){
                    e = [_length-5,_length-4,_length-3,_length-2,_length-1]
                }
                this.showList = e
            },
            isActive(index){
                let res= this.showList.indexOf(index)
                if(res<0){
                    return false
                }else{
                    return true
                }
            }
        }
    }
</script>
