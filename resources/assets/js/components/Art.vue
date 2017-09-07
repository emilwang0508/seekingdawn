<template>
    <div class="art container-fluid"  v-lazy:background-image="artBg">
        <title-bar msg='3D MODEL' came='white'></title-bar>
        <ul class="art-list container">
            <li v-for="(item, index) in artList"><img v-lazy="item.src" :alt="item.alt"></li>
        </ul>
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
//                    {src:"/images/model/1.jpg",alt:"art"},
//                    {src:"/images/model/2.jpg",alt:"art"},
//                    {src:"/images/model/3.jpg",alt:"art"},
//                    {src:"/images/model/4.jpg",alt:"art"},
//                    {src:"/images/model/传送器 PersonalTeleportor.jpg",alt:"传送器 PersonalTeleportor"},
//                    {src:"/images/model/手持能量盾 HandheldProject.jpg",alt:"手持能量盾 HandheldProject"},
//                    {src:"/images/model/传送门枪PortalGun.jpg",alt:"传送门枪PortalGun"},
//                    {src:"/images/model/自动步枪X-15 Harpy.jpg",alt:"自动步枪X-15 Harpy"},
//                    {src:"/images/model/冲锋枪 X-15 Harpy.jpg",alt:"冲锋枪 X-15 Harpy"},
//                    {src:"/images/model/激光剑 LaserSword.jpg",alt:"激光剑 LaserSword"},
                    {src:"/images/model/激光弩Assegai.jpg",alt:"激光弩Assegai"},
                    {src:"/images/model/拳头枪 FistGun.jpg",alt:"拳头枪 FistGun"},
                    {src:"/images/model/酸液枪Cobra.jpg",alt:"酸液枪Cobra"},
                    {src:"/images/model/霰弹枪ShotGun.jpg",alt:"霰弹枪ShotGun"},
                    {src:"/images/model/飞盘枪FrisbeeGun.jpg",alt:"飞盘枪FrisbeeGun"},
                ],
                artBg: 'images/art_bg.png'
            }
        }
    }
</script>
