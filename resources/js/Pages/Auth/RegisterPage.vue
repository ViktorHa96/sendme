<template>
    <AppLayout>
        <div class="login-background flex place-items-center py-20">
            <div class="w-[90%] md:w-2/3 xl:w-2/5 mx-auto border border-cyan-500 shadow-lg rounded-lg py-4 px-6">
                <h2 class="specify-font font-bold text-lg mt-3 mb-6 text-center">Registrácia</h2>
                <form class="flex flex-col gap-3 justify-center mx-auto place-items-center" action="">
                    <div  class="relative w-[90%] md:w-2/3 xl:w-1/2">
                            <label class="font-bold" for="username">Používateľké meno</label>
                            <input class="w-full border border-cyan-400 rounded-sm shadow-md focus:outline-none focus:ring-0 focus:border-double focus:border-cyan-600" type="email">
                        </div>
                        <div  class="relative w-[90%] md:w-2/3 xl:w-1/2">
                            <label class="font-bold" for="email">E-mail</label>
                            <input class="w-full border border-cyan-400 rounded-sm shadow-md focus:outline-none focus:ring-0 focus:border-double focus:border-cyan-600" type="email">
                        </div>
                        <div  class="relative w-[90%] md:w-2/3 xl:w-1/2">
                            <label class="font-bold" for="password">Heslo</label>
                            <input class="w-full border border-cyan-400 rounded-sm shadow-md focus:outline-none focus:ring-0 focus:border-double focus:border-cyan-600" type="password">
                        </div>
                        <div  class="relative w-[90%] md:w-2/3 xl:w-1/2">
                            <label class="font-bold" for="password">Potvrdenie hesla</label>
                            <input class="w-full border border-cyan-400 rounded-sm shadow-md focus:outline-none focus:ring-0 focus:border-double focus:border-cyan-600" type="password">
                        </div>
                </form>
                <button class="px-3 py-1 bg-[#ff948f] text-white rounded-lg shadow-md border-2 border-red-800/30 font-bold specify-font flex mx-auto mt-6 mb-3 hover:bg-[#f9675f] hover:border-red-400 duration-100">Registrovať sa</button>
                <div class="flex justify-center mt-6">
                    <p>Máš účet? <Link :href="route('login')" class="font-bold py-1 px-2 bg-cyan-500/70 text-white rounded-md hover:bg-cyan-600/70 duration-100">Prihlásenie</Link></p>
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
.register-background {
    background: rgb(255,255,255);
    background: linear-gradient(180deg, rgb(227, 236, 241) 4%, rgb(255, 255, 255) 49%, rgb(227, 236, 241) 100%);
    width: 100%;
}
</style>
