<template>
    <div
        class="relative z-20 gallery-background flex flex-col text-white text-center place-items-center"
    >
        <div>
            <h2 class="text-4xl mt-10 font-heading">Kategórie</h2>
        </div>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 my-10 h-full place-items-center gap-8"
        >
        <div class="flex flex-col place items-center gap-2 group">
            <div class="mx-10 flex flex-col place-items-center gap-4 overflow-hidden border-2 border-gray-100">
                    <img
                    class="max-h-80 w-full rounded-lg group-hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/birthday3.jpeg"
                    alt=""
                />
            </div>
            <h2 class="uppercase px-3 pt-1 pb-0.5 border-b-2 border-transparent group-hover:border-[#f39c12] duration-100">Narodeniny</h2>
        </div>
            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/birthday4.jpeg"
                    alt=""
                />
                <h2>Meniny</h2>
            </div>
            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/birthday7.jpeg"
                    alt=""
                />
                <h2>Halloween</h2>
            </div>
            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/valentines2.jpeg"
                    alt=""
                />
                <h2>Valentín</h2>
            </div>
            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/valentines2.jpeg"
                    alt=""
                />
                <h2>Vianoce</h2>
            </div>

            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-72 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/valentines2.jpeg"
                    alt=""
                />
                <h2>Nový rok</h2>
            </div>

            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/valentines2.jpeg"
                    alt=""
                />
                <h2>Veľká noc</h2>
            </div>

            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/valentines2.jpeg"
                    alt=""
                />
                <h2>Dušíčky</h2>
            </div>

            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/valentines2.jpeg"
                    alt=""
                />
                <h2>1. Apríl</h2>
            </div>

            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/valentines2.jpeg"
                    alt=""
                />
                <h2>Silvester</h2>
            </div>
        </div>
        <div class="flex place-items-center mb-10">
            <Link
                class="flex place-self-center text-xl py-3 px-5 mb-10 bg-[#f39c12] rounded-sm hover:bg-[#feba4d] duration-75"
                :href="route('gallery')"
                >Pozrieť všetky</Link
            >
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<style scoped>
.gallery-background {
    background:  rgba(64, 91, 118, 0.9);
    width: 100%;
    height: auto;
}
</style>
