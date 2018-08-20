<template>
    <div class="home">
        <v-touch class="page"
            :class="{ 'page-turned': pageTurned }"
            @swipeup="swipeup"
            @swipedown="swipedown">
            <section class="page-home">
                <!-- 第一个页面 -->
                <video src="videos/home_eeyes_intro.mp4" controls="controls"></video>
                <div class="down">
                    <img src="imgs/home_arrow.png" alt="上滑进入报名">
                </div>
            </section>
            <section class="page-join">
                <!-- 第二个页面 -->
                <div class="container">
                    <div class="cabinet-container">
                        <router-link to="/market">市场部</router-link>
                        <img class="join-cabinet" src="imgs/home_cabinet.png" alt="部门选择">
                        <div class="join-line"></div>
                        <a href="javascript:;" @click="submit()">
                            <img class="join-tag" src="imgs/home_tag.png" alt="戳此报名">
                        </a>
                        <a href="javascript:;" @click="handleClick1()">
                            <img src="imgs/home_u10.png" alt="信息部门" class="cabinet-img cabinet-1">
                        </a>
                        <a href="javascript:;" @click="handleClick2()">
                            <img src="imgs/home_u11.png" alt="市场部门" class="cabinet-img cabinet-2">
                        </a>
                        <a href="javascript:;" @click="handleClick3()">
                            <img src="imgs/home_u12.png" alt="技术部门" class="cabinet-img cabinet-3">
                        </a>
                    </div>
                </div>
            </section>
        </v-touch>
        <footer class="footer" :class="{ 'footer-hidden': !pageTurned }">
            <p>Copyright&copy;2002-2018 eeYes.net All Rights Reserved 版权所有 陕ICP备030061号</p>
        </footer>
    </div>
</template>

<script>
export default {
    name: 'Home',
    data() {
        return {
            pageTurned: true
        }
    },
    methods: {
        swipeup() {
            this.pageTurned = true
        },
        swipedown() {
            this.pageTurned = false
        },
        submit() {
            console.log('submit')
        }
    }
}
</script>

<style>
.home {
    width: 100%;
    height: 100%;
}
.page {
    width: 100%;
    height: 200%;
}
.page {
    transition: 1s;
    position: relative;
}
.page-turned {
    transform: translateY(-50%);
}
.page-home {
    position: relative;
    width: 100%;
    height: 50%;
}
.page-join {
    width: 100%;
    height: 50%;
}
/* 页脚 */
.footer {
    position: fixed;
    width: 100%;
    bottom: 0;
    opacity: 1;
    transition: 1s;
}
.footer p {
    text-align: center;
    font-size: .6em;
}
.footer-hidden {
    opacity: 0;
}
/* 第一个页面 */
.page-home {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.down {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 20px 0 ;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
/* 第二个页面 */
.page-join .container {
    display: flex;
    height: 100%;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.cabinet-container {
    position: relative;
    width: 65vw;
    height: 97.67vw;
}
.join-cabinet {
    position: absolute;
    width: 100%;
    height: 100%;
}
.join-line {
    position: absolute;
    width: 1vw;
    height: 15%;
    top: 7.5%;
    left: 5%;
    background: #cd1700;
}
.join-tag {
    position: absolute;
    top: 10%;
    width: 10%;
    cursor: pointer;
    animation: pull 1.6s linear infinite alternate;
}
@keyframes pull {
    from { transform: translateY(0); }
    to { transform: translateY(30px); }
}
/* 三个柜子 */
.cabinet-img {
    position: absolute;
}
.cabinet-1 {
    top: 11%;
    left: 18%;
    width: 72%;
    height: auto;
}
.cabinet-2 {
    top: 36%;
    left: 15%;
    width: 74%;
    height: auto;
    transform: rotate(2deg);
}
.cabinet-3 {
    top: 64%;
    left: 14%;
    width: 76%;
    height: auto;
    transform: rotate(4deg);
}
</style>
