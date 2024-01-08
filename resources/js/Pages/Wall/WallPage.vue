<template>
    <Head title="Úvod" />
    <div class="fixed z-10 w-full h-full top-0 left-0 flex flex-row">
        <img
            class="w-full object-cover"
            src="../../images/Blog/city-bg.jpg"
            alt=""
        />
    </div>

    <AppLayout>
        <div
            class="relative z-20 main-background flex flex-col gap-10 lg:gap-0 lg:flex-row w-full text-white justify-center p-6"
        >
            <div
                class="w-full lg:w-1/2 mx-auto text-center flex lg:flex-col justify-center lg:items-center"
            >
                <img
                    class="w-1/2 lg:w-full lg:mx-auto lg:mt-0"
                    src="../../images/Pigeons/morePigeons4.png"
                    alt=""
                />
            </div>
            <div
                class="w-full lg:w-1/2 mx-auto h-full text-center flex lg:flex-col justify-center lg:justify-between lg:items-center"
            >
                <div class="flex flex-col justify-between gap-10">
                    <NewsCarousel/>
                    <h1 class="text-xl lg:text-2xl font-heading">
                        Emócie v liste nesené na krídlach holuba.
                    </h1>
                    <img
                        class="w-40 mx-auto"
                        src="../../images/Logos/envelope2medium.png"
                        alt=""
                    />
                    <Link
                        class="flex place-self-center text-xl py-3 px-5 mt-10 bg-gray-100 rounded-sm text-black hover:border-transparent hover:bg-[#f9e2be] duration-100"
                        href=""
                        >Vytvoriť poštu</Link
                    >
                </div>
            </div>
        </div>
        <HowToSection />
        <CategorySection />
        <Newsletter/>
        <BlogSection />
        <GiftSection />
        <WriteUs/>
    </AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "../../Layouts/AppLayout.vue";
import HowToSection from "./Components/HowToSection.vue";
import CategorySection from "./Components/CategorySection.vue";
import BlogSection from "./Components/BlogSection.vue";
import GiftSection from "./Components/GiftSection.vue";
import NewsSection from "./Components/NewsSection.vue";
import NewsCarousel from "@/Pages/Wall/Components/Components/NewsCarousel.vue";
import WriteUs from "./Components/WriteUs.vue";
import Newsletter from "./Components/Newsletter.vue";
</script>

<style scoped>
.main-background {
    background:  rgba(0, 0, 0, 0.8);
    width: 100%;
    min-height: 100vh;
}
</style>
