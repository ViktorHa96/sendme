<template>
    <div class="relative specify-font news-background flex flex-col gap-4 text-center place-items-center my-20">
        <div>
            <h2 class="text-4xl">Novinky</h2>
        </div>
        <img class="newsImgLeft" src="../../../images/Pigeons/holub6.png" alt="">
        <img class="newsImgRight" src="../../../images/Pigeons/holub7other.png" alt="">
        <div class="relative z-20 w-3/5 h-auto place-items-center justify-center">
            <div class="banner-background py-3 px-8 flex-col gap-3 rounded-3xl shadow-lg shadow-black">
                <h2 class="text-2xl my-4">Pripravujeme používanie Umelej inteligencie</h2>
                <p class="py-4">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">

</script>

<style scoped>
.news-background {
    width: 100%;
    height: auto;
}

.banner-background {
    background: rgb(63,94,251);
    background: radial-gradient(circle, rgba(47, 130, 255, 0.9) 0%, rgba(252, 206, 70, 0.9) 100%);
}

.newsImgLeft {
    position: absolute;
    height: 60%;
    margin-top: 2rem;
    margin-left: 1.5rem;
    left:0;
    top: 50%;
    transform: translateY(-50%)
}
.newsImgRight {
    position: absolute;
    height: 60%;
    margin-top: 2rem;
    margin-right: 1.5rem;
    right:0;
    top: 50%;
    transform: translateY(-50%)

}

</style>
