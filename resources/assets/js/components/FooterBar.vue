<template>
    <div class="footer container-fluid " v-lazy:background-image="footerBg">
        <div class="media-link">
            <a href="#"><i class="fa fa-facebook "></i></a>
            <a href="#"><i class="fa fa-twitter "></i></a>
            <a href="#"><i class="fa fa-linkedin "></i></a>
            <a href="#"><i class="fa fa-instagram "></i></a>
        </div>
        <p class="copyright">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Copyright © Multiverse Enterta</a>
        </p>
        <div class="partner">
            <a href="#">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-htc"></use>
                </svg>
            </a>
            <a href="#">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-oculus"></use>
                </svg>
            </a>
            <a href="#">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-steam"></use>
                </svg>
            </a>
            <a href="#">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-playstation"></use>
                </svg>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                footerBg: 'images/sd_footer_bg.png'
            }
        }
    }
</script>
