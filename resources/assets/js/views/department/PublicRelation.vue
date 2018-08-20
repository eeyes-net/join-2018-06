<template>
    <div class="public-relation">
        <h2 class="title">2018公关部招新<br>新闻发布会</h2>
        <div class="intro-container container">
            <div class="intro-card">
                <h4 class="intro-title">简介</h4>
                <p>公共关系部主要负责与学校其它社团、组织进行对接并对它们的线上宣传需求给予支持，促进e瞳网与这些社团组织的关系良好发展。目前，公关部还协助教务处对国际交流项目的线上推广。</p>
            </div>
        </div>
        <div class="stage">
            <img class="micro micro-left" src="/imgs/publicrelation/micro_left.png">
            <img class="micro micro-mid" src="/imgs/publicrelation/micro_mid.png">
            <img class="micro micro-right" src="/imgs/publicrelation/micro_right.png">
        </div>
    </div>
</template>

<script>
export default {
    name: 'PublicRelation'
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
        margin: 5px auto;
        max-width: 400px;
        padding: 5px 12px;
        border-radius: 10px;
        box-sizing: border-box;
        box-shadow: 0 0 16px #666;
        background: rgba(#fff, .65);
        color: #000;
    }
    .intro-title {
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
}
</style>
