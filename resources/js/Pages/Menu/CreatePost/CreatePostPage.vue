<template>
    <Head title="Vytvoriť poštu"/>
    <AppLayout>
        <div class="mx-auto flex flex-col gap-2 py-16">
            <div>
                <h1 class="uppercase text-3xl font-heading text-center">Vytvorenie personalizovanej pošty</h1>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 bg-[#f9e2be]/50 w-full my-10 border shadow-sm text-center">
                <h2 class="border-b-2 lg:border-b-0 lg:border-r-2 bg-[#f9e2be] font-bold px-4 py-2">1. Výber papiera a obálky</h2>
                <h2 class="border-b-2 lg:border-b-0 lg:border-r-2 px-4 py-2">2. Výber dizajnu, sloganu a podpisu</h2>
                <h2 class="border-b-2 sm:border-b-0 lg:border-r-2 px-4 py-2">3. Výber darčekov a doplnkov</h2>
                <h2 class="px-4 py-2">4. Súhrn</h2>
            </div>

            <main class="max-w-7xl mx-auto py-2 w-full flex flex-col">
                <StepOne/>
            </main>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import StepOne from "./Components/StepOne.vue"
</script>

<style scoped>

</style>