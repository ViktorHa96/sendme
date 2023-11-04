<template>
    <Head title="Úvod" />
    <div class="fixed z-10 w-full h-full top-0 left-0 flex flex-row">
        <img
            class="w-full object-cover"
            src="../../images/Blog/sectionBg9-transformed.jpeg"
            alt=""
        />
    </div>

    <AppLayout>
        <div
            class="specify-font relative z-20 main-background flex flex-col gap-10 lg:gap-0 lg:flex-row w-full place-items-center justify-center p-6"
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
                class="w-full lg:w-1/2 mx-auto text-center flex lg:flex-col justify-center lg:items-center"
            >
                <div class="flex flex-col">
                    <h1 class="text-2xl lg:text-4xl">
                        Emócie v liste nesené na krídlach holuba.
                    </h1>
                    <img
                        class="w-40 mx-auto mt-6"
                        src="../../images/Logos/envelope2medium.png"
                        alt=""
                    />
                    <Link
                        class="flex place-self-center text-xl py-2 px-4 mt-10 lg:mt-28 bg-[#ff948f] rounded-md text-white border-b-4 border-red-500 hover:border-transparent hover:bg-[#f9675f] duration-100"
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
        <NewsSection />
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
</script>

<style scoped>
.main-background {
    background: rgb(255, 255, 255);
    background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 1) 4%,
        rgba(195, 232, 255, 1) 49%,
        rgba(112, 201, 255, 1) 100%
    );
    width: 100%;
    min-height: 100vh;
}
</style>
