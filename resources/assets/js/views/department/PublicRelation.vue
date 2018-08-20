<template>
    <div class="public-relation">
        <h2 class="title">2018公关部招新<br>新闻发布会</h2>
        <div class="intro-container container">
            <div class="intro-card">
                <div class="intro-content"
                    :class="{'intro-hidden': introHidden }">
                    <h4 class="intro-title">{{ textItem.title }}</h4>
                    <p class="intro-text"
                        v-html="textItem.text"></p>
                </div>
            </div>
        </div>
        <div class="stage" :class="{
                'left-active': page == 2,
                'mid-active': page == 3,
                'right-active': page == 4
            }">
            <a href="javascript:;" @click="change(2)">
                <img class="micro micro-left" src="/imgs/publicrelation/micro_left.png">
            </a>
            <a href="javascript:;" @click="change(3)">
                <img class="micro micro-mid" src="/imgs/publicrelation/micro_mid.png">
            </a>
            <a href="javascript:;" @click="change(4)">
                <img class="micro micro-right" src="/imgs/publicrelation/micro_right.png">
            </a>
        </div>
    </div>
</template>

<script>
import { texts } from '../data/publicrelation'

function sleep(time) {
    return new Promise(resolve => {
        setTimeout(resolve, time)
    })
}

export default {
    name: 'PublicRelation',
    data () {
        return {
            page: 1,
            changing: false,
            introHidden: false,
            textItem: null
        }
    },
    beforeMount () {
        this.textItem = texts.find(item => item.page == this.page)
    },
    mounted () {
        window.debug = () => {
            this.change(2)
        }
    },
    methods: {
        async change (page) {
            // 保证函数单入
            if (this.changing) {
                return;
            }
            // 切换效果
            this.changing = true
            this.introHidden = true
            this.page = page
            await sleep(1000)
            this.textItem = texts.find(item => item.page == page)
            this.introHidden = false
            await sleep(1000)
            this.changing = false
        }
    }
}
</script>

<style lang="scss">
.public-relation {
    // 背景占满屏幕
    width: 100%;
    height: 100%;
    background: url('/imgs/publicrelation/bg.jpg');
    background-size: 100% 100%;
    // 纵向flex布局，以便让stage贴近页面底端
    display: flex;
    flex-direction: column;
    align-items: center;
    .title {
        color: #fff;
        text-align: center;
    }
    // 外部加一层容器放背景地图
    .intro-container {
        background: url('/imgs/publicrelation/map.png');
        background-size: auto 100%;
    }
    // 里面用来显示内容
    .intro-card {
        position: relative;
        margin: 5px auto;
        min-width: 300px;
        max-width: 400px;
        height: 220px;
        padding: 5px 12px;
        border-radius: 10px;
        box-sizing: border-box;
        box-shadow: 0 0 16px #666;
        background: rgba(#fff, .65);
        color: #000;
    }
    .intro-content {
        height: 100%;
        padding-top: 10px;
        overflow: scroll;
        transition: opacity 1s;
        opacity: 1;
    }
    .intro-hidden {
        opacity: 0;
    }
    .intro-title {
        margin: 0;
        text-align: center;
    }
    // 舞台，以演讲台为背景
    .stage {
        position: relative;
        top: 25px;
        flex-grow: 1;
        min-width: 300px;
        max-width: 400px;
        background: url('/imgs/publicrelation/podium.png') no-repeat;
        background-position: center bottom;
    }
    // 3个麦克风
    .micro {
        position: absolute;
        bottom: 0;
        transition: transform 1s;
    }
    .micro-left {
        left: -60px;
        z-index: 11;
    }
    .micro-mid {
        left: 50px;
        z-index: 10;
    }
    .micro-right {
        left: 200px;
        z-index: 12;
    }
    // 3个话筒点击以后的效果
    .left-active {
        .micro-left {
            transform: translateX(90px) translateY(-30px);
        }
        .micro-mid {
            transform: translateX(70px);
        }
        .micro-right {
            transform: translateX(50px) translateY(10px);
        }
    }
    .mid-active {
        .micro-left {
            transform: translateX(10px);
        }
        .micro-mid {
            transform: translateY(-40px);
        }
        .micro-right {
            transform: translateX(-10px);
        }
    }
    .right-active {
        .micro-left {
            transform: translateX(-40px);
        }
        .micro-mid {
            transform: translateX(-50px) translateY(-10px);
        }
        .micro-right {
            transform: translateX(-80px) translateY(-30px);
        }
    }
}
</style>
