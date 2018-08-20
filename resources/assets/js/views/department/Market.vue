<template>
    <div class="market">
        <h2 class="text-center">市场部</h2>
        <div class="center-block content">

        </div>
        <div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "Market",
        data () {
          return {

          }
        },
        methods:{

        }
    }
</script>

<style scoped>
    .market{
        height: 100%;
        background: #ec971f;
    }
    .market>h2{
        padding-top: 1em;
        color: #fff;
    }
    .content{
        width: 90%;
        height: 12em;
        margin-top: 2em;
        background:rgba(255, 255, 255, 0.8) none repeat scroll 0 0 !important;
        border-radius: 4px;
    }
</style>
