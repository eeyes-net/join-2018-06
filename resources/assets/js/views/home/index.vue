<template>
    <div class="home">
        <v-touch class="whole-pages"
            :class="{ 'slided': slided }"
            @swipeup="swipeup"
            @swipedown="swipedown">
            <Video class="page page-video"></Video>
            <Join class="page page-join"></Join>
        </v-touch>
    </div>
</template>

<script>
import Video from './Video'
import Join from './Join'

export default {
    name: 'Home',
    components: {
        Video,
        Join
    },
    data () {
        return {
            slided: false
        }
    },
    mounted () {
        document.addEventListener('mousewheel', this.handleWhell, { passive: true });
    },
    methods: {
        handleWhell(e) {
            if (e.deltaY > 0) {
                this.slided = true;
            } else if (e.deltaY < 0) {
                this.slided = false;
            }
        },
        swipeup() {
            this.slided = true
        },
        swipedown() {
            this.slided = false
        },
    }
}
</script>

<style lang="scss" scoped>
.home {
    width: 100%;
    height: 100vh;
    overflow: hidden;
}
.whole-pages {
    width: 100%;
    height: 170vh;
    color: #fff;
    background: #394244;
    text-shadow: 0 1px 3px rgba(0,0,0,.5);
    transition: 1s;
}
.slided {
    transform: translateY(-70vh);
}
.page {
    width: 100%;
}
.page-video {
    height: 100vh;
}
.page-join {
    height: 70vh;
}
</style>
