<template>
    <div class="join">
        <HomeButton :img="1" color="#37cbc1" text="技术部门"></HomeButton>
        <HomeButton :img="2" color="#5ca6d9" text="信息部门"></HomeButton>
        <HomeButton :img="3" color="#ba869b" text="市场部门"></HomeButton>
    </div>
</template>

<script>
import HomeButton from './Button'
export default {
    name: 'Join',
    components: {
        HomeButton
    }
}
</script>

<style>

</style>
