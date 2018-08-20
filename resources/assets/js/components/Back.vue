<template>
    <a href="javascript:;" @click="$router.go(-1)" class="home-back">返回</a>
</template>

<script>
export default {
    name: 'Back'
}
</script>

<style>
.home-back {
    position: fixed;
    top: 10px;
    left: 10px;
    font-size: 12px;
    color: #fff;
    text-shadow: 1px 1px 1px #ccc;
}
</style>
