<template>
    <section class="relative z-20 writeus-background text-white w-full py-10 px-6">
        <div class="max-w-7xl m-auto flex flex-col md:flex-row justify-center gap-10">
            <div class="md:w-1/2">
                <h2 class="font-heading text-center text-3xl xl:text-4xl mb-6">Sme tu pre vás</h2>
                <p class="mb-6 leading-relaxed tracking-wide">V prípade otázok o dostupnosti produktov, informácií
                    o produktoch, ako aj podmienok nákupu, nás neváhajte kontaktovať. ZDRAVEA je tu pre všetkých!
                </p>
                <Link
                    class="flex justify-center bg-gray-100 text-black items-center font-semibold text-sm uppercase px-6 py-4 min-w-1/3 hover:bg-[#f9e2be] duration-100"
                    href="">NAPÍŠTE NÁM
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>
.writeus-background {
    background-color: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: auto;
}
</style>
