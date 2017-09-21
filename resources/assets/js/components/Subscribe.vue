<template>
    <div class="subscribe-area container-fluid">
        <div class="container">
            <div class="social-link fl">
                <p>Join our community !</p>
                <a href="https://www.facebook.com/groups/seekingdawnna/" class="iconfont icon-facebook1"></a>
                <a href="https://discord.gg/3ECGtyR" class="iconfont icon-discord"></a>
            </div>
            <div class="fl">
                <p class="text-center">Consider joining our newsletter for exclusive sneak peeks, updates, and more!</p>
                <div class="input-group input">
                    <label for="email"></label>
                    <input type="text" placeholder="your email" name="email" class="email" id="email" v-model="email" v-validate="'required|email'">
                    <button type="submit" class="subscribe" v-on:click="formData()" value="Subscribe">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                email: ''
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
        }
    }
</script>
