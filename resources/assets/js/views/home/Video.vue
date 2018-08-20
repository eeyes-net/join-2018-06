<template>
    <div class="video">
        <div class="player">
            <videoPlayer :options="playerOptions"></videoPlayer>
        </div>
        <div class="entrance-container">
            <img src="/imgs/home/logo.png" alt="e瞳网logo">
            <HomeButton :img="0" color="#da6f3a" text="报名入口" @click="submit"></HomeButton>
        </div>
    </div>
</template>

<script>
// require styles
import 'video.js/dist/video-js.css'

import { videoPlayer } from 'vue-video-player'
import HomeButton from './Button'

export default {
    name: 'Video',
    components: {
        videoPlayer,
        HomeButton
    },
    data () {
        return {
            playerOptions: {
                muted: true,
                language: 'zh',
                playbackRates: [],
                sources: [
                    {
                        type: 'video/mp4',
                        src: '/videos/home_eeyes_intro.webm'
                    },
                ],
                notSupportedMessage: '您的设备不支持播放该视频'
            },
        }
    },
    methods: {
        submit () {
            location.href = '/applicant/create'
        }
    }
}
</script>

<style lang="scss">
.video-js {
    width: 300px;
    height: 195px;
    box-shadow: -.6em .6em 0 rgba(#000, .15);
}
@media screen and (min-width: 400px) and (min-height: 500px) {
    .video-js {
        width: 400px;
        height: 260px;
    }
}
@media screen and (min-width: 500px) and (min-height: 600px) {
    .video-js {
        width: 500px;
        height: 325px;
    }
}
@media screen and (min-width: 600px) and (min-height: 700px) {
    .video-js {
        width: 600px;
        height: 390px;
    }
}
@media screen and (min-width: 700px) and (min-height: 768px) {
    .video-js {
        width: 700px;
        height: 455px;
    }
}
</style>

<style lang="scss" scoped>
.video {
    display: flex;
    flex-direction: column;;
    justify-content: center;
    align-items: center;
    background: url('/imgs/home/video_bg.png');
    background-repeat: repeat-x;
    background-position: center bottom;
}
.player {
    flex-grow: 1;
    padding-top: 30px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.entrance-container {
    margin-bottom: 76px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    * {
        margin: 10px 0 30px;
        @media screen and (max-height: 650px) {
            margin-bottom: 10px;
        }
    }
}
</style>

<style lang="scss">
.video {
    transition: background-position-y 1s;
}
.entrance-container {
    transition: transform 1s;
}
.slided {
    .video {
        background-position-y: 85vh;
    }
    .entrance-container {
        transform: translateY(-10vh);
    }
}
</style>
