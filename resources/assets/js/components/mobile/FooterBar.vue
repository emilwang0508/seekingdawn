<template>
    <div class="footer container-fluid " v-lazy:background-image="footerBg">
        <div class="container" style="z-index: 9">
            <p class="text-center" style="font-size: 16px;color: #000;margin: 0 4px;">
                {{title}}
            </p>
            <form method="post" v-on:submit.prevent="formData()">
                <div class="input-group input">
                    <label class="label" for="email"></label>
                    <p :class="{ 'control': true }">
                        <input v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }" name="email" type="text" placeholder="Email" v-model="email">
                        <button type="submit" class="subscribe" v-on:click="formData()" value="Subscribe">{{btn_name}}</button>
                    </p>
                    <p v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</p>

                </div>
            </form>
            <div class="media-link">
                <a href="https://www.facebook.com/MultiverseVR"><i class="fa fa-facebook "></i></a>
                <a href="https://twitter.com/VRmultiverse"><i class="fa fa-twitter "></i></a>
                <a href="https://www.linkedin.com/company-beta/10691400"><i class="fa fa-linkedin "></i></a>
                <a href="https://www.instagram.com/vrmultiverse/"><i class="fa fa-instagram "></i></a>
            </div>
            <div class="copyright">
                <p><a href="https://www.multiverseinc.com/legal/tos">Terms of Service</a> |
                <a href="https://www.multiverseinc.com/legal/privacy">Privacy Policy</a></p>
                <p><a href="https://www.multiverseinc.com">Copyright © Multiverse Entertainment LLC</a>
                </p>
            </div>

                <div class="partner">
                    <a href="#">
                        <svg class="icon" aria-hidden="true">
                            <use xlink:href="#icon-btn_game_vive"></use>
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
                            <use xlink:href="#icon-xbox"></use>
                        </svg>
                    </a>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('FooterBar Component mounted.')
            let lang = window.localStorage.getItem('LANGUAGE')
            if (lang=='zh_cn'){
                this.title = '留下您的邮箱，独家获取我们最新的咨询与消息'
                this.btn_name = "订阅"
            }
        },
        data() {
            return {
                footerBg: '/images/mobile/footer_bg.png',
                email: '',
                title: 'Consider joining our newsletter for exclusive sneak peeks, updates, and more!',
                btn_name: 'subscribe'
            }
        },
        methods: {
            formData(){
                axios.post('http://www.multiverseinc.com/subscribe',{
                    email: this.email
                }).then(function(response){
                    console.log(response);
                }).catch(function(error){
                    console.log(error);
                })
            }
        },
        filter: {
            progressive (listener, options) {
                const isCDN = /qiniudn.com/
                if (isCDN.test(listener.src)) {
                    listener.el.setAttribute('lazy-progressive', 'true')
                    listener.loading = listener.src + '?imageView2/1/w/10/h/10'
                }
            },
            webp (listener, options) {
                if (!options.supportWebp) return
                const isCDN = /qiniudn.com/
                if (isCDN.test(listener.src)) {
                    listener.src += '?imageView2/2/format/webp'
                }
            }
        }
    }
</script>