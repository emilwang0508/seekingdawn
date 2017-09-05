<template>
    <div class="intro container-fluid">
        <title-bar msg='SEEKING DAWN' came='default'></title-bar>
        <p class="content">
            Seeking Dawn is a large scale survival-exploration FPS/RPG VR game from Multiverse. It puts the player into an immersive alien "death world" full of interesting creatures, unknown dangers and wonderful delights, complete with an epic story and characters with vivid personality. The game will feature more than 10 hours of content for the average player on the first play-through. Harder challenges and the lure of better loot ensure subsequent play-throughs remain fun and attractive.
        </p>
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
