<template>
<Head title="Galéria"/>
<AppLayout>
    <div class="w-full flex flex-col">
        <h2 class="specify-font uppercase text-2xl mt-16 mb-20 font-bold text-center" >galéria dizajnov a sloganov pre Vaše pohľadnice</h2>
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/4 text-center h-full flex flex-col gap-8 text-xl rounded-3xl">
                <h2 class="text-lg font-bold my-6 ">Kategórie</h2>
                <div>
                    <p>Narodeniny</p>
                </div>
                <div>
                    <p>Meniny</p>
                </div>
                <div>
                    <p>Valentín</p>
                </div>
                <div>
                    <p>Veľká noc</p>
                </div>
                <div>
                    <p>Pre potešenie</p>
                </div>
                <div>
                    <p>Zo žartu</p>
                </div>
                <div>
                    <p>Nábožemský sviatok</p>
                </div>
                <div>
                    <p>Výročie</p>
                </div>
            </div>
            <div class="w-full lg:w-3/4 mb-10 h-full flex flex-col">
                <div class="relative w-full flex flex-row mb-10 gap-4 px-10 justify-center">
                    <div class="flex gap-4 text-2xl font-bold justify-center">
                        <button class="px-3 py-1 rounded-lg shadow-md border-2 border-black/30 bg-[#f9675f] text-white hover:bg-[#ff948f] hover:text-white">
                            Dizajny
                        </button>
                        <button class="px-3 py-1 rounded-lg shadow-md border-2 border-black/30 bg-[#99e4ff]  hover:bg-[#ff948f] hover:text-white">
                            Slogany
                        </button>
                    </div>
                    <div class="ml-6 flex absolute top-0 right-10">
                        <select class="rounded-lg  bg-sky-50 text-black font-bold shadow-md" name="" id="">
                            <option value="newest">Najnovšie</option>
                            <option value="popular">Popolárne</option>
                            <option value="favourites">Obľúbené</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 place-items-center gap-8 px-6">
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday2.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday3.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday4.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday40.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday5.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday6.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/birthday7.jpeg" alt="">
                        <p class="text-2xl font-bold">Narodeniny</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/valentines2.jpeg" alt="">
                        <p class="text-2xl font-bold">Valentín</p>
                    </div>
                    <div class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150">
                        <img class="rounded-3xl" src="../../../images/Posters/valentines3.jpeg" alt="">
                        <p class="text-2xl font-bold">Valentín</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

</script>

<style scoped>

</style>
