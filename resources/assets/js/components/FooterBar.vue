<template>
    <div class="footer container-fluid " v-lazy:background-image="footerBg">
        <div class="media-link">
            <a href="https://www.facebook.com/MultiverseVR"><i class="fa fa-facebook "></i></a>
            <a href="https://twitter.com/VRmultiverse"><i class="fa fa-twitter "></i></a>
            <a href="https://www.linkedin.com/company-beta/10691400"><i class="fa fa-linkedin "></i></a>
            <a href="https://www.instagram.com/vrmultiverse/"><i class="fa fa-instagram "></i></a>
        </div>
        <p class="copyright">
            <a href="https://www.multiverseinc.com/legal/tos">Terms of Service</a> |
            <a href="https://www.multiverseinc.com/legal/privacy">Privacy Policy</a>
            <a href="https://www.multiverseinc.com">Copyright © Multiverse Entertainment LLC</a>
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