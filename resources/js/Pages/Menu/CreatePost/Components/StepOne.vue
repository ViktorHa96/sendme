<template>
    <div class="flex flex-col gap-4 w-[90%] lg:w-1/2 mx-auto">
        <h1 class="font-heading font-bold text-3xl text-center">1. Výber papiera a obálky</h1>
        <form class="flex flex-col gap-6 w-full py-8" action="">
            <div class="w-full flex flex-col gap-2">
                <label class="text-sm" for="paper">Typ papiera</label>
                <select class="w-full text-black/70" name="paper" id="paper">
                    <option value="leský">Lesklý</option>
                    <option value="leský">Tmavý</option>
                    <option value="leský">Drevenný</option>
                </select>
            </div>
            
            <div class="w-full flex flex-col gap-2">
                <label class="text-sm" for="size">Veľkosť pošty</label>
                <select class="w-full text-black/70" name="size" id="size">
                    <option value="stredný">10 x 15cm</option>
                    <option value="veľký">15 x 30cm</option>
                    <option value="malý">5 x 10 cm</option>
                </select>
            </div>

            <div class="w-full flex flex-col gap-2">
                <label class="text-sm" for="envelope">Farba obálky</label>
                <select class="w-full text-black/70" name="envelope" id="envelope">
                    <option value="white">Biela</option>
                    <option value="pink">Ružová</option>
                    <option value="blue">Modrá</option>
                    <option value="blue">Zelená</option>
                </select>
            </div>
        </form>
        <div class="flex flex-row justify-between">
            <button class="py-2 px-4 flex self-end border rounded-sm text-black font-bold bg-gray-100 shadow-md hover:bg-[#f9e2be] duration-100" disabled type="">Predošlí krok</button>

            <button class="py-2 px-4 flex self-end border rounded-sm text-white font-bold bg-[#f39c12] shadow-md hover:bg-[#feba4d] duration-100" type="">Další krok</button>
        </div>
    </div>
</template>

<script setup lang="ts">

</script>

<style scoped>

</style>