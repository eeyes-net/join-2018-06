<template>
    <div class="join">
        <HomeButton class="department-button" :img="1" color="#37cbc1" text="技术部门"></HomeButton>
        <HomeButton class="department-button" :img="2" color="#5ca6d9" text="信息部门"></HomeButton>
        <HomeButton class="department-button" :img="3" color="#ba869b" text="市场部门"></HomeButton>
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
.join {
    display: flex;
    flex-direction: column;;
    justify-content: center;
    align-items: center;
}
.join .department-button {
    margin: 2vh 0;
}
</style>
