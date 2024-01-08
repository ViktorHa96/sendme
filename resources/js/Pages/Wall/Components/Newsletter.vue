<template>
    <section class="relative z-10 w-full py-10 px-6 newsletter-background">
        <div class="max-w-xl m-auto text-center">
            <h2 class="font-heading text-3xl mb-6">
                Získajte 10% zľavu na prvú objednávku!
            </h2>
            <p class="text-secondary mb-7 leading-6 text-sm">Prihláste sa do nášho newslettra a dostávajte tie najvýhodnejšie ponuky a
                informácie o zľavách na váš e-mail. Navyše získate zľavu 10% z vášho prvého nákupu!</p>
            <form>
                <fieldset class="flex flex-col sm:flex-row w-4/5 m-auto">
                    <input
                        type="email"
                        class="form-input p-3 text-sm rounded-sm focus:ring-0 focus:border-[#0b397e] placeholder-gray-400 flex-grow"
                        placeholder="Zadajte vašu e-mailovú adresu"
                        aria-label="Zadajte vašu e-mailovú adresu"
                        name="email"
                        aria-required="true"
                    />
                   <button class="text-white font-bold bg-[#f39c12] px-3 hover:bg-[#feba4d] duration-100"> ODOSLAŤ</button>
                </fieldset>
            </form>
        </div>
    </section>
</template>

<script setup lang="ts">
import {useForm} from "@inertiajs/vue3";
</script>

<style scoped>
.newsletter-background {
    background-color: rgba(255, 255, 255, 0.928);
    width: 100%;
    height: auto;
}
</style>