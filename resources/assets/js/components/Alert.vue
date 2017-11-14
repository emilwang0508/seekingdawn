<template>
    <div class="alert-message" :class="aligin">
        {{msg}}
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Alert-message Component mounted.')
        },
        props:[
            'aligin','msg'
        ],
        data() {
            return {
            }
        },
        methods: {

        }
    }
</script>
<style scoped="scoped">
    .alert-message{
        z-index: 999;
        position: fixed;
        top: 50%;
        left: 50%;
        background-color: rgba(0,0,0,0.5);
        color: #fff;
        padding: 10px;
        display: block;
        border-radius: 5px;
    }
</style>