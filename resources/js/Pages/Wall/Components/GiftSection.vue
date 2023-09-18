<template>
   <div class="specify-font gift-background flex flex-col text-center place-items-center">
    <div>
        <h2 class="text-4xl mt-10 text-white">Darčeky a doplnky</h2>
    </div>
    <div class="flex flex-row h-full place-items-center gap-8">
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-full hover:scale-105 duration-150 border-4" src="../../../images/Gifts/cupon.jpeg" alt="">
            <h2>Kupóny</h2>
        </div>
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-full hover:scale-105 duration-150 border-4" src="../../../images/Gifts/seeds.jpeg" alt="">
            <h2>Semienka</h2>
        </div>
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-full hover:scale-105 duration-150 border-4" src="../../../images/Gifts/tea1.jpeg" alt="">
            <h2>Exotické čaje</h2>
        </div>
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-full hover:scale-105 duration-150 border-4" src="../../../images/Gifts/tea2.jpeg" alt="">
            <h2>Čaje z bilín</h2>
        </div>
    </div>
    <div class="flex place-items-center mb-12">
        <Link class="flex place-self-center text-xl py-2 px-4 mb-10 bg-[#3eb5ff] rounded-md text-white border-b-4 border-[#3a80ca] hover:border-transparent hover:bg-[#3a80ca] duration-100" :href="route('instruction')">Pozrieť viac</Link>
    </div>
   </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>
.gift-background {
    background: rgb(255,255,255);
    background: linear-gradient(180deg, rgb(247, 58, 58) 4%, rgb(255, 183, 183) 49%, rgb(247, 58, 58) 100%);
    width: 100%;
    height: 60vh;
   border-radius: 6rem;
}

</style>
