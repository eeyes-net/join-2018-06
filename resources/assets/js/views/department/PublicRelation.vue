<template>
    <div class="public-relation">
        <h2 class="title">2018公关部招新<br>新闻发布会</h2>
        <div class="intro-container container">
            <div class="intro-card">
                <h4>简介</h4>
                <p>公共关系部主要负责与学校其它社团、组织进行对接并对它们的线上宣传需求给予支持，促进e瞳网与这些社团组织的关系良好发展。目前，公关部还协助教务处对国际交流项目的线上推广。</p>
            </div>
        </div>
        <div class="stage">
            <div class="micro micro-left"></div>
            <div class="micro micro-mid"></div>
            <div class="micro micro-right"></div>
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
    background: url('/imgs/publicrelation_bg.jpg');
    background-size: 100% 100%;
    // 纵向flex布局，以便让stage贴近页面底端
    display: flex;
    flex-direction: column;
    align-items: center;
    // 外部加一层容器放背景地图
    .intro-container {
        background: url('/imgs/publicrelation_map.png');
        background-size: auto 100%;
    }
    // 里面用来显示内容
    .intro-card {
        margin: 5px auto;
        max-width: 400px;
        padding: 5px 12px;
        border-radius: 10px;
        box-sizing: border-box;
        box-shadow: 0 0 16px #333;
    }
    // 舞台，以演讲台为背景
    .stage {
        position: relative;
        flex-grow: 1;
        max-width: 400px;
        background: url('/imgs/publicrelation_podium.png');
        background-position: center bottom;
    }
    // 3个麦克风
    .micro {
        position: absolute;
        background-position-y: bottom;
    }
    .micro-left {
        background: url('/imgs/publicrelation_micro_left.png');
        background-position-x: 0;
    }
    .micro-mid {
        background: url('/imgs/publicrelation_micro_mid.png');
        background-position-x: 200px;
    }
    .micro-right {
        background: url('/imgs/publicrelation_micro_right.png');
        background-position-x: 400px;
    }
}
</style>
