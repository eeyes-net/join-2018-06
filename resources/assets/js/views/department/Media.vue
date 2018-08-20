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
                <h3>简介</h3>
                <hr class="media-box-hr">
                <div>
                    <p>新闻媒体部是e瞳网对外的平台</p>
                    <p>也是e瞳网的门面</p>
                    <p>我们主要负责公众号的运营</p>
                    <p>通过文字、影像多维展示学生生活</p>
                    <p>的同时为学生提供丰富的信息</p>
                    <p>我们着眼于学生的及时需求</p>
                    <p>关注交大校内外时事新闻</p>
                    <p>探索学校内鲜为人知建筑与故事</p>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            <p>二零一八年八月</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Media"
    }
</script>

<style scoped lang="scss">
    $small: 345px;

    .media-part {
        height: 100%;
        padding-left: 3em;
        padding-right: 3em;
        background: url("/imgs/media/bg.jpg") 100px 100px;
        color: #000;
        h1 {
            font-size: 4em;
            @media screen and (max-width: $small) {
                font-size: 3.5em;
            }
            span {
                font-size: 0.3em;
                -webkit-writing-mode: vertical-rl;
                writing-mode: vertical-rl;
            }
        }
        div > p {
            margin-bottom: 0;
            padding-right: 1em;
        }
    }
    .media-instruc {
        font-size: 1.6em;
        @media screen and (max-width: $small) {
            font-size: 1.4em;
        }
    }
    .media-content {
        margin-top: 1.2em;
        border: 1px solid #000;
        padding: 12px;
        .media-box {
            border: 1px solid #000;
            text-align: center;
            div {
                @media screen and (max-width: $small) {
                    padding-bottom: 1.2em;
                }
                padding-bottom: 2em;
                p {
                    margin-bottom: 6px;
                    @media screen and (max-width: $small) {
                        font-size: .9em;
                    }
                }
            }
        }
        .media-box-hr {
            width: 80%;
            border-top: 1px solid #000;
            @media screen and (max-width: $small) {
                margin: 12px auto;
            }
        }
    }
    .footer {
        margin: 20px 0 0;
    }
</style>
