<template>
    <div class="press container-fluid">
        <title-bar msg='PRESS' came='default'></title-bar>
        <img src="/images/upload.png" alt="">
        <div class="content">
            <p>Seeking Dawn looks like a hugely ambitious VR Shooter</p>
            <p>Plenty of news came out of Unity’s  Vision Summit keynote talk yesterday, including a look at a hugely </p>
            <p>ambitious new first-person shooter (FPS) for VR headsets, Seeking Dawn......</p>
        </div>

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
        }
    }
</script>
