<template>
    <div class="market">
        <h2 class="text-center">市场部</h2>
        <div class="center-block content">

        </div>
        <div class="market-features-container">
            <div class="market-features">
                <a class="market-feature" href="javascript:;" @click="change(1)">
                    <div class="market-icon" :class="{ 'market-icon-active': currentFeature == 1 }"></div>
                    <span class="market-feature-text">一年<br>总结</span>
                </a>
                <a class="market-feature" href="javascript:;" @click="change(2)">
                    <div class="market-icon" :class="{ 'market-icon-active': currentFeature == 2 }"></div>
                    <span class="market-feature-text">部门<br>特色</span>
                </a>
                <a class="market-feature" href="javascript:;" @click="change(3)">
                    <div class="market-icon" :class="{ 'market-icon-active': currentFeature == 3 }"></div>
                    <span class="market-feature-text">未来<br>展望</span>
                </a>
                <a class="market-feature" href="javascript:;" @click="change(4)">
                    <div class="market-icon" :class="{ 'market-icon-active': currentFeature == 4 }"></div>
                    <span class="market-feature-text">招新<br>需求</span>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Market',
        data () {
          return {
            currentFeature: 1
          }
        },
        methods: {
            change (feature) {
                this.currentFeature = feature
            }
        }
    }
</script>

<style lang="scss" scoped>
    a {
        text-decoration: none;
    }
    .market {
        height: 100%;
        background-color: #ec971f;
        margin-top: -22px;
        background-image: url('/imgs/market/market.png');
        background-size: auto 70vh;
        background-repeat: no-repeat;
        background-position:center bottom;
        h2 {
            padding-top: 1em;
            color: #fff;
        }
    }
    .content {
        width: 90%;
        max-width: 70vh;
        height: 12em;
        margin-top: 2em;
        background:rgba(255, 255, 255, 0.65) none repeat scroll 0 0 !important;
        border-radius: 4px;
    }
    .market-features-container {
        position: absolute;
        width: 100%;
        height: 22.5vh;
        bottom: 29.5vh;
    }
    .market-features {
        margin: 0 auto;
        width: 36.28vh;
        height: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .market-feature {
        width: 50%;
        height: 50%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .market-icon {
        width: 50px;
        height: 50px;
        background: url('/imgs/market/icons.png');
        background-size: 200px 100px;
    }
    .market-feature:nth-child(1) > .market-icon {
        background-position: 0 0;
    }
    .market-feature:nth-child(2) > .market-icon {
        background-position: -50px 0;
    }
    .market-feature:nth-child(3) > .market-icon {
        background-position: -100px 0;
    }
    .market-feature:nth-child(4) > .market-icon {
        background-position: -150px 0;
    }
    .market-feature:nth-child(1) > .market-icon-active {
        background-position: 0 50px;
    }
    .market-feature:nth-child(2) > .market-icon-active {
        background-position: -50px 50px;
    }
    .market-feature:nth-child(3) > .market-icon-active {
        background-position: -100px 50px;
    }
    .market-feature:nth-child(4) > .market-icon-active {
        background-position: -150px 50px;
    }
    .market-icon + .market-feature-text {
        color: rgba(#fff, .6);
    }
    .market-icon-active + .market-feature-text {
        color: #fff;
    }
</style>
