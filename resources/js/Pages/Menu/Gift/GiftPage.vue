<template>
    <Head title="Darčeky"/>
    <AppLayout>
        <div class="w-full flex flex-col mb-10 px-10">
            <h2 class="specify-font uppercase text-2xl mt-16 mb-20 font-bold text-center" >pridajte darčeky a doplnky k vaším blahoželaniam</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 text-lg font-bold specify-font">
                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/cupon.jpeg" alt="">
                        <h2 class="uppercase">Zľavové Kupóny</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/seeds.jpeg" alt="">
                        <h2 class="uppercase">Magické Semienka</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/tea1.jpeg" alt="">
                        <h2 class="uppercase">Čaje z rôznych častí sveta</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/sweets.jpeg" alt="">
                        <h2 class="uppercase">Mini sladkosti</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/necklaces.jpeg" alt="">
                        <h2 class="uppercase">Náramky a náhrdelníky</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/tea1.jpeg" alt="">
                        <h2 class="uppercase">Osobné magnetky</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/tea1.jpeg" alt="">
                        <h2 class="uppercase">Vlastné QR kódy</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/tea1.jpeg" alt="">
                        <h2 class="uppercase">Parfúm na papier</h2>
                    </div>
                </div>

                <div>
                    <div class="mx-10 flex flex-col place-items-center gap-4">
                        <img class="rounded-full hover:scale-105 duration-150 border-4 border-black/60" src="../../../images/Gifts/tea1.jpeg" alt="">
                        <h2 class="uppercase">Zvukový modul</h2>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '../../../Layouts/AppLayout.vue'

</script>

<style scoped>

</style>
