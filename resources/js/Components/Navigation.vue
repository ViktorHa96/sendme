<template>
    <div
        class="specify-font relative z-50 w-full px-6 py-2 shadow-lg bg-[#005C96] text-gray-100 shadow-black flex flex-row justify-between place-items-center"
    >
        <div class="flex place-self-center">
            <Link :href="route('wall')"
                ><img
                    class="w-16"
                    src="../images/Logos/textlogo2small.png"
                    alt=""
            /></Link>
        </div>
        <div
            @click="toggleMenu"
            class="flex justify-end lg:hidden cursor-pointer"
        >
            <MenuIcon />
        </div>
        <div class="hidden lg:flex flex-row justify-between place-items-center">
            <div class="flex place-items-center gap-2 pr-8">
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-[#034067] duration-150 hover:border-[#012942] rounded-md"
                    :href="route('wall')"
                    >Úvod</Link
                >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-[#034067] duration-150 hover:border-[#012942] rounded-md"
                    :href="route('gallery')"
                    >Galéria</Link
                >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-[#034067] duration-150 hover:border-[#012942] rounded-md"
                    :href="route('blog')"
                    >Blog</Link
                >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-[#034067] duration-150 hover:border-[#012942] rounded-md"
                    :href="route('gift')"
                    >Darčeky</Link
                >
                <Link
                    class="py-1 px-3 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-b-0 hover:bg-[#f9675f] duration-100"
                    href=""
                    >Vytvoriť poštu</Link
                >
            </div>
            <div
                class="flex place-items-center gap-2 pl-4 border-l-2 border-black/20"
            >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-[#034067] duration-150 hover:border-[#012942] rounded-md"
                    :href="route('login')"
                    >Prihlásenie</Link
                >
                <Link
                    class="py-1 px-3 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-b-0 hover:bg-[#f9675f] duration-100"
                    :href="route('register')"
                    >Registrácia</Link
                >
            </div>
        </div>
        <div
            v-if="showMenu"
            class="absolute top-16 bg-cyan-100 right-0 flex flex-col px-2 py-4 shadow-lg shadow-black"
        >
            <div class="flex flex-col place-items-center pb-4 gap-2">
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150 hover:border-cyan-300 rounded-md"
                    :href="route('wall')"
                    >Úvod</Link
                >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150 hover:border-cyan-300 rounded-md"
                    :href="route('gallery')"
                    >Galéria</Link
                >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150 hover:border-cyan-300 rounded-md"
                    :href="route('blog')"
                    >Blog</Link
                >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150 hover:border-cyan-300 rounded-md"
                    :href="route('gift')"
                    >Darčeky</Link
                >
                <Link
                    class="py-1 px-3 bg-[#ff948f] rounded-md text-white hover:bg-[#f9675f] duration-100"
                    href=""
                    >Vytvoriť poštu</Link
                >
            </div>
            <div
                class="flex flex-col place-items-center gap-2 pt-2 border-t-2 border-black/20"
            >
                <Link
                    class="border-2 border-transparent px-3 py-1 hover:bg-cyan-200 duration-150 hover:border-cyan-300 rounded-md"
                    :href="route('login')"
                    >Prihlásenie</Link
                >
                <Link
                    class="py-1 px-3 bg-[#ff948f] rounded-md text-white hover:bg-[#f9675f] duration-100"
                    :href="route('register')"
                    >Registrácia</Link
                >
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import route from "ziggy-js";
import MenuIcon from "../Components/Icons/MenuIcon.vue";
import { ref } from "vue";

const showMenu = ref(false);

const toggleMenu = () => {
    showMenu.value = !showMenu.value;
};
</script>

<style scoped></style>
