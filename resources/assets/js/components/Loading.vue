<template>
    <div class="loading container-fluid">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 14 32 18" width="500px" height="10px" fill="#f20" preserveAspectRatio="none" class="loading-animate">
            <path opacity="0.8" transform="translate(0 0)" d="M2 14 V18 H6 V14z">
                <animateTransform attributeName="transform" type="translate" values="0 0; 24 0; 0 0" dur="2s" begin="0" repeatCount="indefinite" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline" />
            </path>
            <path opacity="0.5" transform="translate(0 0)" d="M0 14 V18 H8 V14z">
                <animateTransform attributeName="transform" type="translate" values="0 0; 24 0; 0 0" dur="2s" begin="0.1s" repeatCount="indefinite" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline" />
            </path>
            <path opacity="0.25" transform="translate(0 0)" d="M0 14 V18 H8 V14z">
                <animateTransform attributeName="transform" type="translate" values="0 0; 24 0; 0 0" dur="2s" begin="0.2s" repeatCount="indefinite" keySplines="0.2 0.2 0.4 0.8;0.2 0.2 0.4 0.8" calcMode="spline" />
            </path>
        </svg>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Loading Component mounted.')
        }
    }
</script>
<style  scoped>
    .loading{
        position: fixed;
        width: 100%;
        height: 100%;
        background: #212121;
        z-index: 10;
        display: table;
    }
    .loading-animate{
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -250px;
        display: table-cell;
        vertical-align: middle;
    }
</style>