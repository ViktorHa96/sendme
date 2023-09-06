<template>
    <div class="px-6 py-2 shadow-lg shadow-black flex flex-row justify-between">
        <div class="flex place-self-start">
            <Link href="/">Pošli holuba</Link>
        </div>
        <div class="flex place-self-center gap-4">
            <Link href="">Úvod</Link>
            <Link href="">Ako na to</Link>
            <Link href="">Galéria</Link>
            <Link href="">Vytvoriť poslaníčko</Link>
        </div>
        <div class="flex place-self-end gap-4">
            <Link href="">Prihlásenie</Link>
            <Link href="">Registrácia</Link>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>

</style>
