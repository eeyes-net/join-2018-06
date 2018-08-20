<template>
    <div class="nocode-part">
        <h1 class="text-center">非代码部</h1>
        <div class="center-block content">
            <p><strong>我们的工作</strong>非代码组包括产品和设计，主要是交互设计与视觉设计两个方面，由我们去组织一个项目并给出该产品的原型。换句简单的话说，我们既是设计师，也是项目负责人。</p>
            <p><strong>人员需求</strong>我们是创造互联网产品的逐梦之人，我们并不执着于技术的高低，而是看重热情，创意，责任与团队精神。我们不需要员工，我们需要一同奋斗的同伴。</p>
        </div>
        <back></back>
    </div>
</template>

<script>
    export default {
        name: "NoCode"
    }
</script>

<style scoped lang="scss">
    .nocode-part{
        width: 100%;
        height: 100%;
        background-image: url("/imgs/technologyBack.png");
        background-repeat: repeat-x;
        margin-top:-22px;
        background-position-x: -360px;
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
