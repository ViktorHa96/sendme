<template>
    <div
        class="specify-font relative z-20 gallery-background flex flex-col text-center place-items-center"
    >
        <div>
            <h2 class="text-4xl mt-10">Kategórie</h2>
        </div>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 my-10 h-full place-items-center gap-8"
        >
            <div class="mx-10 flex flex-col place-items-center gap-4">
                <img
                    class="max-h-80 w-full rounded-lg hover:scale-105 duration-150 shadow-lg"
                    src="../../../images/Posters/birthday3.jpeg"
                    alt=""
                />
                <h2>Narodeniny</h2>
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
                class="flex place-self-center text-xl py-2 px-4 mb-10 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-transparent hover:bg-[#f9675f] duration-100"
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
    background: rgb(255, 255, 255);
    background: linear-gradient(
        180deg,
        rgb(62, 181, 255) 4%,
        rgb(146, 207, 245) 49%,
        rgb(62, 181, 255) 100%
    );
    width: 100%;
    height: auto;
}
</style>
