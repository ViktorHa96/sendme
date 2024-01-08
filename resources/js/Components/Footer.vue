<template>
    <div class="relative z-20 bg-[#2c3e50] text-gray-100 flex flex-row">
        <div class="container mx-auto py-20 px-6 flex flex-col xl:flex-row">
            <section class="xl:w-1/2">
                <h3 class="uppercase font-bold mb-4">Kontaktuje nás</h3>
                <div class="text-sm mb-4">
                    25, Lorem Lis Street, Orange <br />
                    California, US<br />
                    Telefón: 800 123 3456<br />
                    E-mail:
                    <a class="text-[#f39c12] hover:text-[#feba4d]" href="mailto:info@seeds.com"
                        >info@seeds.com</a
                    >
                    <br />
                    Skype: <a class="text-[#f39c12] hover:text-[#feba4d]" href="#">seeds</a>
                </div>
            </section>
            <section class="xl:w-1/2 mt-4 xl:mt-0">
                <ul class="flex flex-col mt-4 xl:flex-row xl:space-x-2 md:mt-0">
                    <li>
                        <a
                            aria-current="page"
                            href="/"
                            class="block py-2 pr-4 text-tertiary uppercase hover:text-secondary font-bold"
                            >Doručenie</a
                        >
                    </li>
                    <li>
                        <a
                            aria-current="page"
                            href="/"
                            class="block py-2 pr-4 text-tertiary uppercase hover:text-secondary font-bold"
                            >O nás</a
                        >
                    </li>
                    <li>
                        <a
                            aria-current="page"
                            href="/articles"
                            class="block py-2 pr-4 text-tertiary uppercase hover:text-secondary font-bold"
                            >Novinky</a
                        >
                    </li>
                </ul>
                <div class="text-sm">
                    <section class="mt-8 mb-4 font-bold">
                        <a
                            href="/privacy-policy"
                            class="block hover:text-secondary"
                            >Zásady ochrany osobných údajov</a
                        >
                        <a
                            href="/terms-conditions"
                            class="block hover:text-secondary"
                            >Obchodné podmienky</a
                        >
                    </section>
                    <section class="my-6 text-sm">
                        <span class="text-lg">©</span> 2023 PosliHoluba.
                    </section>
                </div>
            </section>
        </div>
    </div>
</template>

<script setup lang="ts"></script>

<style scoped>
.gift-background {
    width: 100%;
    height: auto;
}
</style>
