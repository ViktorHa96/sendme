<template>
    <div class="w-full">
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

</style>
