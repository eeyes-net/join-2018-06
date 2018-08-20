<template>
    <div class="video-part">
        <div class="video-content">
            <p class="time text-center"><span class="red-dot"></span> <span v-if="minute<10">0</span>{{ minute }}&nbsp;:&nbsp;<span v-if="second<10">0</span>{{ second }}</p>
            <div class="video-body">
                <h1 class="text-center">影视部</h1>
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

            </div>
        </div>
        <div class="video-footer">
            <div class="pull-left"></div>
            <img src="/imgs/video/stop.png" class="img-stop" alt="stop">
            <img src="/imgs/video/pause.png" class="pull-right img-right" alt="pause">
        </div>
    </div>
</template>

<script>
    export default {
        name: "Video",
        data () {
          return {
              minute: 0,
              second: 0
          }
        },
        beforeMount () {
            let that = this
            setInterval(function () {
                if(that.second == 59){
                    that.minute+=1
                    that.second = 0
                }else{
                    that.second += 1
                }
            },1000)
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
        background-size: cover;
        .red-dot{
            display: inline-block;
            background-color: #FF0000;
            border-radius: 50%;
            width: 6px;
            height: 6px;
        }
        .time{
            color: #000;
            font-size: 1.5em;
        }
        .video-body{
            padding-top: 1em;
            p{
                padding-left: 20vw;
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
        .img-right{

        }
    }
    @media screen and (max-width: 345px) {
        .video-content{
            .video-body{
                padding-top: 1em;
                p{
                    padding-left: 20vw;
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
    </style>
