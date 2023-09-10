<template>
    <Head title="Ako na to" />
   <AppLayout>
    <div class="specify-font howto-background flex flex-col text-center ">
    <div class="flex flex-col h-full gap-8">
        <div class="w-1/5 flex flex-col place-items-center">
            <div class="w-14 h-14 rounded-full bg-cyan-400"></div>
            <h1>Klikni na vytvoriť poštu</h1>
        </div>
        <div class="w-1/5 flex flex-col place-items-center">
            <div class="w-14 h-14 rounded-full bg-cyan-400"></div>
            <h1>Vyber si z našej galérie</h1>
        </div>
        <div class="w-1/5 flex flex-col place-items-center">
            <div class="w-14 h-14 rounded-full bg-cyan-400"></div>
            <h1>Vytvor text alebo si vyber z návrhov</h1>
        </div>
        <div class="w-1/5 flex flex-col place-items-center">
            <div class="w-14 h-14 rounded-full bg-cyan-400"></div>
            <h1>Vyber si doplnky ku pošte</h1>
        </div>
        <div class="w-1/5 flex flex-col place-items-center">
            <div class="w-14 h-14 rounded-full bg-cyan-400"></div>
            <h1>Zaplať a odošli</h1>
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
