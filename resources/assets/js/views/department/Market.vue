<template>
    <div class="market">
        <h2 class="text-center">市场部</h2>
        <div class="center-block content">

        </div>
        <div>
            <div class="market-icon"><img :src="imgSrc[0].check" alt="icon">一年总结</div>
            <div class="market-icon"><img :src="imgSrc[0].check" alt="icon">部门展望</div>
            <div class="market-icon"><img :src="imgSrc[0].check" alt="icon">未来展望</div>
            <div class="market-icon"><img :src="imgSrc[0].check" alt="icon">招新需求</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Market",
        data () {
          return {
            imgSrc: [
                {
                    check:'/imgs/market/summary_dim.png',
                    checked:'/imgs/market/summary.png',
                },
                {
                    check:'/imgs/market/summary_dim.png',
                    checked:'/imgs/market/summary.png',
                },
                {
                    check:'/imgs/market/summary_dim.png',
                    checked:'/imgs/market/summary.png',
                },
                {
                    check:'/imgs/market/summary_dim.png',
                    checked:'/imgs/market/summary.png',
                },
            ]
          }
        },
        methods:{

        }
    }
</script>

<style scoped>
    .market{
        height: 100%;
        background-color: #ec971f;
        margin-top: -22px;
        background-image: url("/imgs/market/market.png");
        background-size: 160vw auto;
        background-repeat: no-repeat;
        background-position:center bottom;
    }
    .market>h2{
        padding-top: 1em;
        color: #fff;
    }
    .content{
        width: 90%;
        height: 12em;
        margin-top: 2em;
        background:rgba(255, 255, 255, 0.65) none repeat scroll 0 0 !important;
        border-radius: 4px;
    }
    .market-icon{
        float: left;
        background-color: #0d3625;
    }
</style>
