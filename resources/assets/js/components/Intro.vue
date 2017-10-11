<template>
    <div class="intro container-fluid">
        <title-bar msg='SEEKING DAWN' came='default'></title-bar>
        <p class="content">
            Seeking Dawn is an expansive VR game of action and survival set on a sprawling planet of dangerous creatures and alien mysteries. Stranded with limited resources, you must venture out to scavenge for supplies, craft weapons and equipment for protection, and decipher strange discoveries as you traverse the planet.
        </p>
    </div>
</template>

<script>
    import titleBar from "./title"
    export default {
        mounted() {
            console.log('Intro Component mounted.')
        },
        components: {
            titleBar
        }
    }
</script>
