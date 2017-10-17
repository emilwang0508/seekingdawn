<template>
    <div class="subscribe-area container-fluid" v-if="$t('nav.isShow')=='true'">
        <div class="container">
            <div class="social-link">
                <title-bar msg='JOIN OUR COMMUNITY' came='default'></title-bar>
                <p class="text-center"><a href="https://www.facebook.com/groups/seekingdawnna/" class="">
                    <img v-lazy='fbImg' alt="facebook"></a>
                <a href="https://discord.gg/3ECGtyR" class="">
                    <img v-lazy='discordImg' alt="facebook">
                </a></p>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</template>

<script>
    import titleBar from "./title"
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
