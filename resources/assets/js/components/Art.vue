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
                    {src:"/images/art_1.jpg",alt:"art"},
                    {src:"/images/art_1.jpg",alt:"art"},
                    {src:"/images/art_1.jpg",alt:"art"},
                    {src:"/images/art_1.jpg",alt:"art"},
                    {src:"/images/art_1.jpg",alt:"art"},
                ],
                artBg: 'images/art_bg.png'
            }
        }
    }
</script>
