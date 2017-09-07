<template>
    <div class="subscribe-area container-fluid">
        <form action="#" method="post" class="subscribe-area">
            <p class="text-center">consider joining our newsletter to get updates, sneek peaks & more!</p>
            <div class="input-group input">
                <label for="email"></label>
                <input type="email" placeholder="your email" name="email" class="email" id="email">
            </div>
            <div class="input-group input">
                <button type="submit" class="subscribe">Subscribe</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
