<template>
    <div
        class="relative z-50 w-full px-6 shadow-lg bg-[#2c3e50] text-gray-100 shadow-black flex flex-row justify-between place-items-center"
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
                    class="py-4 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('wall')"
                    >Úvod</Link
                >
                <Link
                    class="py-4 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('gallery')"
                    >Galéria</Link
                >
                <Link
                    class="py-4 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('blog')"
                    >Blog</Link
                >
                <Link
                    class="py-4 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('gift')"
                    >Darčeky</Link
                >
                <Link
                    class="py-1 px-3 bg-[#f39c12] rounded-md text-white border-b-4 border-[#a37935] hover:border-b-0 hover:bg-[#feba4d] duration-75"
                    :href="route('create.post')"
                    >Vytvoriť poštu</Link
                >
            </div>
            <div
                class="flex place-items-center gap-2 pl-4 border-l-2 border-black/20"
            >
                <Link
                    class="py-4 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('login')"
                    >Prihlásenie</Link
                >
                <Link
                    class="py-1 px-3 bg-[#f39c12] rounded-md text-white border-b-4 border-[#a37935] hover:border-b-0 hover:bg-[#feba4d] duration-75"
                    :href="route('register')"
                    >Registrácia</Link
                >
            </div>
        </div>
        <div
            v-if="showMenu"
            class="absolute top-12 bg-[#2c3e50] text-gray-100 right-0 flex flex-col px-2 py-4 shadow-lg shadow-black"
        >
            <div class="flex flex-col place-items-center pb-4 gap-3">
                <Link
                    class="py-2 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('wall')"
                    >Úvod</Link
                >
                <Link
                    class="py-2 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('gallery')"
                    >Galéria</Link
                >
                <Link
                    class="py-2 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('blog')"
                    >Blog</Link
                >
                <Link
                    class="py-2 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('gift')"
                    >Darčeky</Link
                >
                <Link
                    class="py-1 px-3 bg-[#f39c12] rounded-md text-white hover:bg-[#feba4d] duration-100"
                    href=""
                    >Vytvoriť poštu</Link
                >
            </div>
            <div
                class="flex flex-col place-items-center gap-3 pt-2 border-t-2 border-black/20"
            >
                <Link
                    class="py-2 px-3 border-b-2 border-transparent hover:border-[#f39c12] duration-150"
                    :href="route('login')"
                    >Prihlásenie</Link
                >
                <Link
                    class="py-1 px-3 bg-[#f39c12] rounded-md text-white hover:bg-[#feba4d] duration-100"
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
