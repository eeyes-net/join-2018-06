<template>
    <div class="video-part">
        <div class="video-content">
            <p class="time text-center">
                <span class="red-dot"></span>
                <span>{{ time }}</span>
            </p>
            <div class="video-body">
                <h1 class="text-center">影视部</h1>
                <section class="video-intro">
                    <p>如果你热爱影视</p>
                    <p>如果你愿意尝试</p>
                    <p>如果你想要收获</p>
                    <p>那就来最最可爱的影视部吧！</p>
                    <p>在这里</p>
                    <p>你可以感受到影视制作的乐趣</p>
                    <p>你可以学到炒鸡实用的</p>
                    <p>生存（高大上）技术</p>
                    <p>你可以认识到更多新的朋友</p>
                    <p>不仅仅是萌新们哦！</p>
                </section>
            </div>
        </div>
        <div class="video-footer">
            <div class="pull-left"></div>
            <img src="/imgs/video/stop.png" class="img-stop" alt="stop">
            <img src="/imgs/video/pause.png" class="pull-right img-right" alt="pause">
        </div>
        <back></back>
    </div>
</template>

<script>
function fixZero(num) {
    return `${num < 10 ? '0' : ''}${num}`
}

export default {
    name: "Video",
    data () {
        return {
            minute: 0,
            second: 0
        }
    },
    beforeMount () {
        setInterval(() => {
            if (this.second == 59){
                this.minute += 1
                this.second = 0
            } else {
                this.second += 1
            }
        }, 1000)
    },
    computed: {
        time () {
            return `${fixZero(this.minute)} : ${fixZero(this.second)}`
        }
    }
}
</script>

<style scoped lang="scss">
    .video-part{
        width: 100%;
        height: 100%;
        overflow: hidden;
        margin-top: -3px;
    }
    .video-content{
        width: 100%;
        height: 90vh;
        color: #fff;
        padding-top: 1em;
        background-color: #fff;
        background-image: url('/imgs/video/background.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto 100%;
        .red-dot{
            display: inline-block;
            background-color: #FF0000;
            border-radius: 50%;
            transform: translateY(-5px);
            width: 6px;
            height: 6px;
            animation: flash 2s step-end 0s infinite;
        }
        .time{
            color: #000;
            font-size: 1.5em;
            font-family: Arial, Helvetica, sans-serif;
        }
        .video-body{
            padding-top: 1em;
            .video-intro {
                margin: 0 auto;
                width: 16em;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
            p {
                font-size: 1.2em;
            }
        }
    }
    .video-footer{
        padding: 8vw;
        height: 10vh;
        background-color: #000;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items:center;
        div{
            width: 15vw;
            height: 6vh;
            marigin-top: 2vh;
            background-color: #fff;

        }
    }
    @media screen and (max-width: 345px) {
        .video-content{
            .video-body{
                padding-top: 1em;
                p{
                    font-size: 1em;
                }
            }
        }
        .img-stop{
            width: 3em;
        }
        .img-right{
            width: 2.8em;
        }
    }
    @keyframes flash {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
    }
</style>
