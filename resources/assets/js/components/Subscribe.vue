<template>
    <div class="subscribe-area container-fluid">
        <!--<form method="post" class="subscribe-area">-->
            <p class="text-center">consider joining our newsletter to get updates, sneek peaks & more!</p>
            <div class="input-group input">
                <label for="email"></label>
                <input type="text" placeholder="your email" name="email" class="email" id="email" v-model="email" v-validate="'required|email'">
            </div>
            <div class="input-group input">
                <button type="submit" class="subscribe" v-on:click="formData()" value="Subscribe">Subscribe</button>
            </div>
        <!--</form>-->
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
