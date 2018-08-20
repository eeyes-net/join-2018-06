<template>
    <div class="media-part container">
        <h1>新媒体部 <span>招新</span></h1>
        <p class="media-instruc">New Media Department</p>
        <div>
            <p class="text-left">一个有思想的平台</p>
            <p class="text-right">不止于新闻</p>
        </div>
        <div class="media-content center-block">
            <div class="media-box" >
                <h3 class="text-center">简介</h3>
                <hr width=80% size=3 color=#000 style="FILTER: alpha(opacity=100,finishopacity=0,style=3)">
                <div>
                    <p class="text-center">新闻媒体部是e瞳网对外的平台</p>
                    <p class="text-center">也是e瞳网的门面</p>
                    <p class="text-center">我们主要负责公众号的运营</p>
                    <p class="text-center">通过文字、影像多维展示学生生活</p>
                    <p class="text-center">的同时为学生提供丰富的信息</p>
                    <p class="text-center">我们着眼于学生的及时需求</p>
                    <p class="text-center">关注交大校内外时事新闻</p>
                    <p class="text-center">探索学校内鲜为人知建筑与故事</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Media"
    }
</script>

<style scoped lang="scss">
    .media-part{
        height: 100%;
        padding-left: 3em;
        padding-right: 3em;
        background: url("/imgs/media/media.png");
        h1{
            font-size: 4em;
            span{
                font-size: 0.3em;
                -webkit-writing-mode: vertical-rl;
                writing-mode: vertical-rl;
            }
        }
        div>p{
            margin-bottom: 0;
            padding-right:1em;
        }
    }
    .media-instruc{
        font-size: 1.7em;
    }
    .media-content{
        margin-top: 1.2em;
        border: 1px solid #000;
        padding: 12px;
        .media-box{
            border: 1px solid #000;
            div{
                padding-bottom: 2em;
                p{
                    margin-bottom:6px;
                }
            }
        }
    }
</style>
