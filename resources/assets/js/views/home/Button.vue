<template>
    <a class="home-button" href="javascript:;" @click="handleClick">
        <div class="home-button-circle" :style="{ 'background-color': color }">
            <div class="img" :style="{ 'background-position-x': `${img * -30}px` }"></div>
        </div>
        <p class="home-button-text">{{ text }}</p>
    </a>
</template>

<script>
export default {
    name: 'Button',
    props: {
        img: Number,
        color: String,
        text: String
    },
    methods: {
        handleClick () {
            this.$emit('click')
        }
    }
}
</script>

<style lang="scss">
$r: 23px;
.home-button {
    height: 2 * $r;
    width: 160px;
    border-radius: $r;
    background: #d9d9d9;

    display: flex;
    flex-direction: row;
    &:hover {
        text-decoration: none;
    }
}
.home-button-circle {
    width: 2 * $r;
    height: 2 * $r;
    border-radius: $r;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;

    .img {
        width: 30px;
        height: 30px;
        background: url('/imgs/home/icons.png');
        background-size: 120px 30px;
        background-position-y: 0;
    }
}
.home-button-text {
    margin: 0;
    margin-left: -$r;
    height: 2 * $r;
    line-height: 2 * $r;
    flex-grow: 1;
    text-align: center;
    color: #fff;
    text-shadow: none;
    outline: none;
    text-decoration: none;
}
</style>
