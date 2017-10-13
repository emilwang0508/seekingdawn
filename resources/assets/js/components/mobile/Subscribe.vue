<template>
    <div class="subscribe-area container-fluid">
        <div class="container">
            <div class="social-link">
                <title-bar msg='JOIN OUR COMMUNITY' came='default'></title-bar>
                <p class="text-center"><a href="https://www.facebook.com/groups/seekingdawnna/" class="">
                    <img v-lazy='fbImg' alt="facebook"></a>
                <a href="https://discord.gg/3ECGtyR" class="">
                    <img v-lazy='discordImg' alt="facebook">
                </a></p>
            </div>
            <!--<div class="fl">
                <p class="text-center">Consider joining our newsletter for exclusive sneak peeks, updates, and more!</p>
                <div class="input-group input">
                    <label for="email"></label>
                    <input type="text" placeholder="your email" name="email" class="email" id="email" v-model="email" v-validate="'required|email'">
                    <button type="submit" class="subscribe" v-on:click="formData()" value="Subscribe">Subscribe</button>
                </div>
            </div>-->
        </div>
        <div class="clear-fix"></div>
    </div>
</template>

<script>
    import titleBar from "../title"
    export default {
        mounted() {
            console.log('Subscribe Component mounted.')
        },
        data(){
            return{
                email: '',
                discordImg: '/images/discord.png',
                fbImg:'/images/facebook.png'
            }
        },
        methods: {
            formData(){
                axios.get('https://www.multiverseinc.com/subscribe',{
                    email: this.email
                }).then(function(response){
                    console.log(response);
                }).catch(function(error){
                    console.log(error);
                })
            }
        },
        components: {
            titleBar
        }
    }
</script>
