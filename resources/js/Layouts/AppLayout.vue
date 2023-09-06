<template>
    <div class="w-full main-element">
    <Navigation/>
        <slot>

        </slot>
    </div>
</template>

<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Navigation from '@/Components/Navigation.vue';

</script>

<style scoped>
.main-element {
    font-family: 'Courier New', Courier, monospace
}

</style>
