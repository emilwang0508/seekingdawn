<template>
    <div class="dev-blog container-fluid">
        <title-bar msg='THE DEVELOPERS BLOG' came='default'></title-bar>
        <div class="subtitle">
            <p>Every week we plan to release a new developer blog highlighting that weeks development for Seeking Dawn!</p>
            <p>We encourage you to follow our journey through these blogs and let us know your thoughts. </p>
        </div>
        <ul class="blog-list container">
            <li v-for="(item, index) in blogData">
                <div class="top">
                    <img v-lazy="item.thumb" :alt="item.thumb_title" class="thumb">
                    <p class="title">{{item.title}}</p>
                    <p class="update-at">{{item.update_at}}</p>
                </div>
                <div class="bottom">
                    <p class="summary">
                        {{item.description}}
                    </p>
                    <a :href="item.link" class="more_link_btn">More</a>
                </div>
            </li>
        </ul>
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
    import titleBar from "./title"
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                blogData:[
                    { id:'1',title:'Seeking Dawn  Early Access  The Boss Update 0.4 Now Live!',description:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean',thumb:'images/thumb_1.jpg',link:'#',update_at:'December 7, 2016',thumb_title:'1'},
                    { id:'2',title:'Seeking Dawn  Early Access  The Boss Update 0.4 Now Live!',description:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean',thumb:'images/thumb_1.jpg',link:'#',update_at:'December 7, 2016',thumb_title:'2'},
                    { id:'3',title:'Seeking Dawn  Early Access  The Boss Update 0.4 Now Live!',description:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. AeneanLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean',thumb:'images/thumb_1.jpg',link:'#',update_at:'December 7, 2016',thumb_title:'3'},
                ],
            }
        },
        components: {
            titleBar
        }
    }
</script>
