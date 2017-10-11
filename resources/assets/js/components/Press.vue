<template>
    <div class="press container-fluid">
        <title-bar msg='PRESS' came='default'></title-bar>
        <img src="/images/upload.png" alt="">
        <div class="content">
            <p>Seeking Dawn looks like a hugely ambitious VR shooter</p>
            <p>Plenty of news came out of Unity's Vision Summit keynote talk yesterday,</p>
            <p>including a look at a hugely ambitious new first-person-shooter for virtual reality called 'Seeking Dawn'...</p>
        </div>
        <a href="https://uploadvr.com/seeking-dawn-looks-like-hugely-ambitious-vr-shooter/" class="readMore" target="_blank">Read</a>
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
        }
    }
</script>
