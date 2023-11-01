<template>
    <AppLayout>
        <div class="login-background flex place-items-center py-20">
            <div class="w-[90%] md:w-2/3 xl:w-2/5 mx-auto border border-cyan-500 shadow-lg rounded-lg py-4 px-6">
                <h2 class="specify-font font-bold text-lg mt-3 mb-6 text-center">Prihlásenie</h2>
                <form class="flex flex-col gap-3 justify-center mx-auto place-items-center" action="">
                        <div  class="relative w-[90%] md:w-2/3 xl:w-1/2">
                            <label class="font-bold" for="email">E-mail</label>
                            <input class="w-full border border-cyan-400 rounded-sm shadow-md focus:outline-none focus:ring-0 focus:border-double focus:border-cyan-600" type="email">
                        </div>
                        <div  class="relative w-[90%] md:w-2/3 xl:w-1/2">
                            <label class="font-bold" for="password">Heslo</label>
                            <input class="w-full border border-cyan-400 rounded-sm shadow-md focus:outline-none focus:ring-0 focus:border-double focus:border-cyan-600" type="password">
                        </div>
                </form>
                <button class="px-3 py-1 bg-cyan-200 rounded-lg shadow-md border-2 border-cyan-800/30 font-bold specify-font flex mx-auto mt-6 mb-3 hover:bg-cyan-600 hover:text-white hover:border-cyan-600 duration-100">Prihlásiť sa</button>
                <div class="flex justify-center mt-6">
                    <p>Nemáš ešte účet? <Link :href="route('register')" class="font-bold py-1 px-2 bg-[#ff948f] rounded-md text-white hover:bg-[#f9675f] duration-100">Registrácia</Link></p>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>
.login-background {
    background: rgb(255,255,255);
    background: linear-gradient(180deg, rgb(227, 236, 241) 4%, rgb(255, 255, 255) 49%, rgb(227, 236, 241) 100%);
    width: 100%;
}
</style>
