<template>
    <div class="page-second container" :style="{ backgroundColor: part.color, color: '#fff' }">
        <h1 class="text-center">{{ part.name }}</h1>
        <div class="row title"   :style="{ backgroundImage: `url(${part.imgSrc})`,backgroundRepeat: 'no-repeat', backgroundPosition: 'center center' }">
            <div class="part"><router-link :to="part.src1">{{ part.part1 }}</router-link></div>
            <div class="part"><router-link :to="part.src2">{{ part.part2 }}</router-link></div>
        </div>
        <div class="content-part">{{ part.info }}</div>
    </div>
</template>

<script>
    export default {
        name: "Page",
        props:{
            part: Object
        }
    }
</script>

<style scoped>
    .page-second{
        width: 100%;
        height: 100%;
    }
    .title{
        display: flex;
        margin-top: 2em;
        justify-content: space-between;
        height: 13em;
    }
    .part{
        font-size: 2.8em;
        -webkit-writing-mode: vertical-rl;
        writing-mode: vertical-rl;
    }
    .part>a{
        color: #000;
    }
    .content-part{
        padding: 1.6em;
        font-size: 1em;
        color: #fff;
    }
    @media screen and (min-width: 335px) {
        .content-part{
            padding: 2em;
            font-size: 1.1em;
        }
    }
</style>
