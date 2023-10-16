<template>
    <Head title="Darčeky"/>
    <AppLayout>
        <div class="w-full flex flex-col mb-10 px-10">
            <h2 class="flex w-fit mx-auto specify-font uppercase text-2xl mt-10 mb-10 font-bold text-center px-8 py-2 bg-cyan-100 rounded-full border-2 border-black" >pridajte darčeky a doplnky k vaším blahoželaniam</h2>
            <h2 class="uppercase text-2xl font-bold mb-6 underline text-center" >Vyberte kategóriu</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-10 text-sm font-bold specify-font text-center">
                <div>
                    <Link :href="route('gift.category', 'Zľavové kupóny')" class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/cupon.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Zľavové Kupóny</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', 'Magické semienka')"  class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/seeds.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Magické Semienka</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', 'Čaje z rôznych častí sveta')" class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/tea1.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Čaje z rôznych častí sveta</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', 'Mini sladkosti')"  class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/sweets.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Mini sladkosti</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', ' Náramky a náhrdelníky')" class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/necklaces.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Náramky a náhrdelníky</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', 'Osobné magnetky')" class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/tea2.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Osobné magnetky</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', 'Vlastné QR kódy')" class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/tea2.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Vlastné QR kódy</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', 'Parfúm na papier')" class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/60">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/tea2.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Parfúm na papier</h2>
                    </Link>
                </div>

                <div>
                    <Link :href="route('gift.category', 'Zvukový model')" class="mx-10 flex flex-col place-items-center gap-4 group">
                        <div class="relative rounded-full overflow-hidden border-4 border-black/50">
                            <div class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"></div>
                            <img class="rounded-full group-hover:scale-105 duration-150" src="../../../images/Gifts/tea2.jpeg" alt="">
                            <h2 class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center">Zobraziť</h2>
                        </div>
                        <h2 class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300">Zvukový modul</h2>
                    </Link>
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
