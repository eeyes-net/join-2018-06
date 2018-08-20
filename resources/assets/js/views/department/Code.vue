<template>
    <div class="nocode-part">
        <h1 class="text-center">代码部</h1>
        <div class="center-block content">
            <p><strong>我们的工作</strong>代码组包括前端，后端，app。前端呈现网页设计，是web艺术家。后端负责数据库，服务器的程序编写与管理。app则是ios与Android的程序编写与移动端游戏。我们是技术人员。</p>
            <p><strong>人员需求</strong>我们需求各种对网络技术感兴趣的人才。我们是西交最大的技术团队，不管你之前是否接触过，不管你是萌新还是大佬，你总能在这里找到你感兴趣的方向与合适的位置。</p>
        </div>
        <back></back>
    </div>
</template>

<script>
    export default {
        name: "Code"
    }
</script>

<style scoped lang="scss">
    .nocode-part{
        width: 100%;
        height: 100%;
        background-image: url("/imgs/technologyBack.png");
        background-repeat: repeat-x;
        margin-top:-22px;
        background-position-x: 0px;
        h1{
            margin-top: 1.6em;
            color: #fff;
        }
        overflow: hidden;
    }
    .content{
        width: 90%;
        height: 30vh;
        background-color: rgba(255,255,255,0.9);
        border-radius: 6px;
        overflow: auto;
        font-size: 1.4em;
        padding: 12px;
    }
</style>
