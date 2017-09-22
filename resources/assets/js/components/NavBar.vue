<template>
    <div class="nav-bar" v-bind:class="{ active: isActive}" v-on:mouseenter="showMenu()" v-on:mouseleave="hideMenu()" v-on:click="Menu()">
    <!--<div class="nav-bar" v-bind:class="{ active: isActive}" v-on:mouseenter="showMenu()"  v-on:click="Menu()">-->
    <!--<div class="nav-bar active">-->
        <div class="menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="27px" height="25px"  v-show="!isActive" class="nav-icon">
                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                      d="M-0.000,9.152 L26.357,9.152 L26.357,12.949 L-0.000,12.949 L-0.000,9.152 ZM-0.000,0.291 L26.357,0.291 L26.357,4.088 L-0.000,4.088 L-0.000,0.291 ZM16.071,21.810 L-0.000,21.810 L-0.000,18.013 L16.071,18.013 L16.071,21.810 ZM20.086,24.334 L19.925,15.477 L26.359,19.720 L20.086,24.334 Z"/>
            </svg>
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="27px" height="25px" v-show="isActive" class="nav-icon">
                <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                      d="M-0.000,9.152 L26.357,9.152 L26.357,12.949 L-0.000,12.949 L-0.000,9.152 ZM-0.000,0.291 L26.357,0.291 L26.357,4.088 L-0.000,4.088 L-0.000,0.291 ZM16.071,21.810 L-0.000,21.810 L-0.000,18.013 L16.071,18.013 L16.071,21.810 ZM22.689,23.014 L18.010,17.139 L26.992,16.989 L22.689,23.014 Z"/>
            </svg>
        </div>
        <div class="nav-link">
            <a href="http://user.multiverseinc.com/ambassador" class="">Ambassador</a>
            <a href="https://1drv.ms/f/s!App17wPCu9sFni5qj1FG8EYqh88l" class="">Presskit Download</a>
            <a href="https://www.multiverseinc.com" class="">Multiverse</a>
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
                isActive: false
            }
        },
        methods:{
            showMenu(){
                this.isActive = true;
            },
            hideMenu(){
                this.isActive = false;
            },
            Menu(){
                this.isActive ? this.isActive = false : this.isActive=true;
            }
        }
    }
</script>
