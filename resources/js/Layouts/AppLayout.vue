<template>
    <div class="w-full font-primary">
        <Navigation />
        <slot> </slot>
        <Footer />
    </div>
</template>

<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import Navigation from "@/Components/Navigation.vue";
import Footer from "@/Components/Footer.vue";
</script>