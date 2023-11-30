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
            class="specify-font relative z-20 main-background flex flex-col gap-10 lg:gap-0 lg:flex-row w-full justify-center p-6"
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
                    <h1 class="text-xl lg:text-2xl">
                        Emócie v liste nesené na krídlach holuba.
                    </h1>
                    <img
                        class="w-40 mx-auto"
                        src="../../images/Logos/envelope2medium.png"
                        alt=""
                    />
                    <Link
                        class="flex place-self-center text-xl py-2 px-4 mt-10 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-transparent hover:bg-[#f9675f] duration-100"
                        href=""
                        >Vytvoriť poštu</Link
                    >
                </div>
            </div>
        </div>
        <HowToSection />
        <GallerySection />
        <BlogSection />
        <GiftSection />
    </AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "../../Layouts/AppLayout.vue";
import HowToSection from "./Components/HowToSection.vue";
import GallerySection from "./Components/GallerySection.vue";
import BlogSection from "./Components/BlogSection.vue";
import GiftSection from "./Components/GiftSection.vue";
import NewsSection from "./Components/NewsSection.vue";
import NewsCarousel from "@/Pages/Wall/Components/Components/NewsCarousel.vue";
</script>

<style scoped>
.main-background {
    background: rgb(236,236,236);
    background: linear-gradient(90deg, rgba(236,236,236,1) 0%, rgba(0,125,203,1) 80%, rgba(0,102,165,1) 100%);
    width: 100%;
    min-height: 100vh;
}
</style>
