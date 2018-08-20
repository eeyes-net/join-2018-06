<template>
    <div class="temp-home">
        <div class="navbar">
            <a class="navbar-brand" href="https://www.eeyes.net/">
                <img class="navbar-brand-img" src="//img.eeyes.net/eeyes_common/images/eeyes_logo.gif" alt="e瞳网logo">
            </a>
        </div>
        <section class="main">
            <div class="main-container">
                <h1 class="title">加入我们</h1>
                <div class="video-box">
                    <videoPlayer :options="playerOptions"></videoPlayer>
                </div>
                <p class="products-title">我们的产品</p>
                <div class="products">
                    <a href="//xjtu.eeyes.net/">
                        <img src="/imgs/home_xjtu.png" alt="起航交大">
                    </a>
                    <a href="//eux.eeyes.net/">
                        <img src="/imgs/home_eux.png" alt="前端视觉体验中心">
                    </a>
                    <a href="//down.eeyes.net/">
                        <img src="/imgs/home_down.png" alt="e快下">
                    </a>
                </div>
                <div class="join">
                    <a href="/applicant/create">戳我报名</a>
                </div>
                <div class="more">
                    <p class="text">更多内容敬请期待</p>
                </div>
            </div>
        </section>
        <footer class="footer" :class="{ 'footer-hidden': !pageTurned }">
            <p>Copyright&copy;2002-2018 eeYes.net All Rights Reserved 版权所有 陕ICP备030061号</p>
        </footer>
    </div>
</template>

<script>
// require styles
import 'video.js/dist/video-js.css'

import { videoPlayer } from 'vue-video-player'

export default {
    name: 'TempHome',
    components: {
        videoPlayer
    },
    data() {
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

            },
            pageTurned: true,
        }
    }
}
</script>

<style>
.temp-home {
    width: 100%;
    height: 100%;
}
body {
    background-color: #00549e;
    color: #fff;
    text-shadow: 0 1px 3px rgba(0,0,0,.5);
}
.title {
    margin: 0;
    text-align: center;
}
.video-box {
    margin-top: 30px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.navbar {
    background: #fff;
    margin-bottom: 0;
}
.navbar-brand {
    display: inline-block;
    height: 5em;
    padding: 1em;
    box-sizing: border-box;
}
.navbar-brand-img {
    height: 3em;
}
.main {

    padding-top: 40px;
    background: url('/imgs/home_bg.png') no-repeat;
    background-position-x: 50%;
    background-size: 200% auto;
}
.main-container {
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 400px;
}
.products-title {
    margin: 8px 0 0;
    width: 95%;
    text-align: center;
    border-bottom: 1px solid #fff;
}
.products {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
/* 产品列表 */
.products img {
    width: 100%;
    height: auto;
}
.products a {
    margin: 10px 10px;
}
/* 更多 */
.more .text {
    font-size: 1.4em;
}
.join {
    margin: 16px;
}
.join a {
    padding: .35em .7em;
    font-size: 2.5em;
    color: #008aff;
    background: #fff;
    border-radius: .25em;
    text-shadow: none;
    box-shadow: 0 2px 6px #ddd;
}
/* 页脚 */
.footer {
    position: fixed;
    width: 100%;
    bottom: 0;
    opacity: 1;
    transition: 1s;
}
.footer p {
    text-align: center;
    font-size: .6em;
}
.vjs_video_3-dimensions{
        width: 320px;
        height: 180px;
    }
</style>
