<template>
    <div class="specify-font relative z-50 w-full px-6 py-2 shadow-lg bg-cyan-100 shadow-black flex flex-row justify-between place-items-center">
        <div class="flex place-self-center">
            <Link :href="route('wall')"><img class="w-16" src="../images/Logos/textlogo2small.png" alt=""></Link>
        </div>
        <div class="flex place-items-center gap-2">
            <Link class=" border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150  hover:border-cyan-300 rounded-md" :href="route('wall')">Úvod</Link>
            <Link class=" border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150  hover:border-cyan-300 rounded-md"  :href="route('instruction')">Ako na to</Link>
            <Link class=" border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150  hover:border-cyan-300 rounded-md"  href="">Galéria</Link>
            <Link class="py-1 px-3 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-b-0 hover:bg-[#f9675f] duration-100" href="">Vytvoriť poštu</Link>
        </div>
        <div class="flex place-items-center gap-2">
            <Link class=" border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150  hover:border-cyan-300 rounded-md"  :href="route('login')">Prihlásenie</Link>
            <Link class="py-1 px-3 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-b-0 hover:bg-[#f9675f] duration-100" :href="route('register')">Registrácia</Link>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import route from 'ziggy-js';

</script>

<style scoped>

</style>
