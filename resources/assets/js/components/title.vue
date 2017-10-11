<template>
    <p class="title" v-bind:class="came">{{ msg }}</p>

</template>

<script>

    export default {
        mounted() {
            console.log('TitleComponent mounted.')
        },
        props: ['msg','came'],
        created() {
            this.class = this.came
        }
    }
</script>
