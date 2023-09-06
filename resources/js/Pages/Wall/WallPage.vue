<template>
    <Head title="Úvod"/>
    <AppLayout>
        <div class="main-background">

        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AppLayout from '../../Layouts/AppLayout.vue'

</script>

<style scoped>
.main-background {
background: rgb(255,0,0);
background: linear-gradient(90deg, rgb(255, 98, 98) 0%, rgba(255, 175, 175, 0.723) 45%, rgba(248,196,203,0.6560749299719888) 100%);
widows: 100%;
height: 100vb;
}

</style>
