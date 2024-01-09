<template>
    <div class="w-full font-primary flex flex-col min-h-screen">
        <Navigation />

        <main class="flex-grow">
            <slot />
        </main>

       
        <div class="footer-wrapper">
        <Footer />
        </div>
    </div>
</template>

<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import Navigation from "@/Components/Navigation.vue";
import Footer from "@/Components/Footer.vue";
</script>

<style scoped>
.flex-layout {
  display: flex;
  flex-direction: column;
}

main {
  flex-grow: 1;
}

.footer-wrapper {
  flex-shrink: 0;
}
</style>
