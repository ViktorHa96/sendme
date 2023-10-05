<template>
<Head title="Galéria"/>
<AppLayout>
    <div class="w-auto flex flex-col mx-10 mb-10">
        <h2 class="specify-font uppercase text-2xl mt-16 mb-8 font-bold text-center" >Z nášho sveta</h2>
        <div class="relative w-full flex flex-col md:flex-row mb-10 gap-6 px-10 place-items-end">
                    <div class="flex gap-4 text-2xl font-bold place-items-center">
                        <label class="text-base specify-font" for="type">Typ:</label>
                        <select class="rounded-lg  bg-sky-50 text-black font-bold shadow-md" name="type" id="">
                            <option value="recenz">Recenzie</option>
                            <option value="actual">Novinky</option>
                            <option value="article">Články</option>
                            <option value="tips">Typy a triky</option>
                            <option value="prepare">Pripravujeme</option>
                        </select>
                    </div>
                    <div class="flex gap-4 text-2xl font-bold place-items-center">
                        <label class="text-base specify-font" for="sort">Zoradenie:</label>
                        <select class="rounded-lg  bg-sky-50 text-black font-bold shadow-md" name="sort" id="">
                            <option value="newest">Najnovšie</option>
                            <option value="popular">Popolárne</option>
                            <option value="favourites">Obľúbené</option>
                        </select>
                    </div>
                </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <Link href="/" class="flex flex-col text-sm lg:text-base gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article1.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>

            <Link href="/" class="flex flex-col gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article3.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>

            <Link href="/" class="flex flex-col gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article3.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>

            <Link href="/" class="flex flex-col text-sm lg:text-base gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article1.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>

            <Link href="/" class="flex flex-col text-sm lg:text-base gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article1.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>

            <Link href="/" class="flex flex-col gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article3.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>
        </div>
    </div>
</AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '../../../Layouts/AppLayout.vue'

</script>

<style scoped>

</style>
