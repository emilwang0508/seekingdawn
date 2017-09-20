<template>
    <div class="art container-fluid"  v-lazy:background-image="artBg" >
        <title-bar msg='ART GALLERY' came='white'></title-bar>
        <p class="des white">
            An extensive sci-fi adventure offering dozens of hours of gameplay, Seeking Dawn combines rich storytelling with gritty combat in both solo and cooperative modes, as well as additional challenge modes for even better loot. Scavenge, craft, build, explore, fight, and most importantly, find a way home.
        </p>
        <i class="fa fa-angle-left white fa-2x" @click="leftChangeShowList()"></i>
        <ul class="art-list container">
            <li v-for="(item, index) in artList"  v-show="isActive(index)"><img v-lazy="item.src" :alt="item.alt" ></li>
        </ul>
        <i class="fa fa-angle-right white fa-2x" @click="rightChangeShowList()"></i>
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
                artList: [
                    {src:"/images/model/1.jpg",alt:"art", isActive: true},
                    {src:"/images/model/2.jpg",alt:"art", isActive: true},
                    {src:"/images/model/3.jpg",alt:"art", isActive: true},
                    {src:"/images/model/手持能量盾 HandheldProject.jpg",alt:"手持能量盾 HandheldProject", isActive: true},
                    {src:"/images/model/传送器 PersonalTeleportor.jpg",alt:"传送器 PersonalTeleportor", isActive: true},
                    {src:"/images/model/酸液枪Cobra.jpg",alt:"酸液枪Cobra", isActive: false},
                    {src:"/images/model/传送门枪PortalGun.jpg",alt:"传送门枪PortalGun", isActive: false},
                    {src:"/images/model/自动步枪X-15 Harpy.jpg",alt:"自动步枪X-15 Harpy", isActive: false},
                    {src:"/images/model/冲锋枪 X-15 Harpy.jpg",alt:"冲锋枪 X-15 Harpy", isActive: false},
                    {src:"/images/model/激光剑 LaserSword.jpg",alt:"激光剑 LaserSword",isActive: false},
                    {src:"/images/model/激光弩Assegai.jpg",alt:"激光弩Assegai",isActive: false},
                    {src:"/images/model/拳头枪 FistGun.jpg",alt:"拳头枪 FistGun",isActive: false},
                    {src:"/images/model/13.jpg",alt:"激光弩Assegai",isActive: false},
                    {src:"/images/model/霰弹枪ShotGun.jpg",alt:"霰弹枪ShotGun",isActive: false},
                    {src:"/images/model/19.jpg",alt:"激光弩Assegai",isActive: false},
                    {src:"/images/model/飞盘枪FrisbeeGun.jpg",alt:"飞盘枪FrisbeeGun",isActive: false},
                ],
                artBg: 'images/art_bg.png',
                showList: [0,1,2,3,4]
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
