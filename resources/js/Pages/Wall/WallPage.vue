<template>
    <Head title="Úvod"/>
    <AppLayout>
        <div class="main-background">
            <img class="h-full" src="../../images/Pigeons/morePigeons4.png" alt="">
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/AppLayout.vue'

</script>

<style scoped>
.main-background {
    background: rgb(255,255,255);
    background: linear-gradient(180deg, rgba(255,255,255,1) 4%, rgba(195,232,255,1) 49%, rgba(112,201,255,1) 100%);
    width: 100%;
    height: 100vh;
}

</style>
