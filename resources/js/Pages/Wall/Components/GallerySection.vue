<template>
   <div class="specify-font relative z-20 gallery-background flex flex-col text-center place-items-center">
    <div>
        <h2 class="text-4xl mt-10">Naša galéria</h2>
    </div>
    <div class="flex flex-row h-full place-items-center gap-8">
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-3xl hover:scale-105 duration-150 border-4" src="../../../images/Posters/birthday3.jpeg" alt="">
            <h2>Narodeniny</h2>
        </div>
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-3xl hover:scale-105 duration-150 border-4" src="../../../images/Posters/birthday4.jpeg" alt="">
            <h2>Narodeniny</h2>
        </div>
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-3xl hover:scale-105 duration-150 border-4" src="../../../images/Posters/birthday7.jpeg" alt="">
            <h2>Narodeniny</h2>
        </div>
        <div class="w-1/4 mx-10 flex flex-col place-items-center gap-4">
            <img class="rounded-3xl hover:scale-105 duration-150 border-4" src="../../../images/Posters/valentines2.jpeg" alt="">
            <h2>Valentín</h2>
        </div>
    </div>
    <div class="flex place-items-center mb-12">
        <Link class="flex place-self-center text-xl py-2 px-4 mb-10 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-transparent hover:bg-[#f9675f] duration-100" :href="route('instruction')">Pozrieť viac</Link>
    </div>
   </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>
.gallery-background {
    background: rgb(255,255,255);
    background: linear-gradient(180deg, rgb(62, 181, 255) 4%, rgb(146, 207, 245) 49%, rgb(62, 181, 255) 100%);
    width: 100%;
    height: 100vh;
    border-bottom-left-radius: 6rem;
    border-bottom-right-radius: 6rem;
}

</style>
