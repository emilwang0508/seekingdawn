<template>
    <div class="intro container-fluid">
        <title-bar :msg="msg" came='default'></title-bar>
        <p class="content">
            {{ content}}
        </p>
    </div>
</template>

<script>
    import titleBar from "./title"
    export default {
        mounted() {

        },
        created(){
            let lang = window.localStorage.getItem('LANGUAGE')
            if (lang=='zh_cn'){
                this.msg = '寻找黎明'
                this.content = 'Seeking Dawn是由Multiverse制作的大型科幻RPG类VR游戏，游戏具有丰富的合成玩法和生存元素，带你进入身临其境的外星人“死亡世界”。如何利用好各种各样的道具和建筑在游戏中生存下去，并且一步步去探索揭开这个神秘星球的真面目。'
            }
            console.log('Intro Component mounted.')
        },
        components: {
            titleBar
        },
        data(){
            return{
                msg: 'SEEKING DAWN',
                content: 'Seeking Dawn is an expansive VR game of action and survival set on a sprawling planet of dangerous creatures and alien mysteries. Stranded with limited resources, you must venture out to scavenge for supplies, craft weapons and equipment for protection, and decipher strange discoveries as you traverse the planet.',
            }
        }
    }
</script>
