<template>
    <div class="specify-font blog-background flex flex-col md:flex-row py-20">
        <div class="w-full md:w-1/2 relative z-20 float-left flex flex-col gap-8 justify-center place-items-center mx-auto">
            <h2 class="text-3xl mb-4">Z nášho blogu</h2>
            <Link href="/" class="flex flex-col text-sm lg:text-base w-[90%] md:w-2/3 gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article1.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>

            <Link href="/" class="flex flex-col w-[90%] md:w-2/3 gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:translate-y-0.5 duration-150">
                <img class="rounded-lg" src="../../../images/Blog/article3.jpeg" alt="">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="text-[#fd837c] text-center">Čítaj viac</p>
            </Link>
        </div>
        <div class="w-full md:w-1/2 relative z-20 float-right flex flex-col gap-8 mx-auto">
            <h2 class="text-3xl mt-10 mb-4 text-center">Recenzie od našich zákazníkov</h2>
            <div class="flex flex-col w-[90%] md:w-2/3 gap-4 py-2 px-2 mx-auto bg-slate-100 rounded-lg shadow-lg shadow-black">
                <div class="flex flex-row gap-2 place-items-center text-black/50">
                    <h2 class="text-sm text-[#fd837c]">Janka</h2>
                    <em>12. 1. 2024</em>
                </div>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                </p>
            </div>

            <div class="flex flex-col w-[90%] md:w-2/3 gap-4 py-2 px-2 mx-auto bg-slate-100 rounded-lg shadow-lg shadow-black">
                <div class="flex flex-row gap-2 place-items-center text-black/50">
                    <h2 class="text-sm text-[#fd837c]">Janka</h2>
                    <em>12. 1. 2024</em>
                </div>
                <p>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
            </div>

            <div class="flex flex-col w-[90%] md:w-2/3 gap-4 py-2 px-2 mx-auto bg-slate-100 rounded-lg shadow-lg shadow-black">
                <div class="flex flex-row gap-2 place-items-center text-black/50">
                    <h2 class="text-sm text-[#fd837c]">Janka</h2>
                    <em>12. 1. 2024</em>
                </div>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
                </p>
            </div>

            <div class="flex flex-col w-[90%] md:w-2/3 gap-4 py-2 px-2 mx-auto bg-slate-100 rounded-lg shadow-lg shadow-black">
                <div class="flex flex-row gap-2 place-items-center text-black/50">
                    <h2 class="text-sm text-[#fd837c]">Janka</h2>
                    <em>12. 1. 2024</em>
                </div>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                </p>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>
.blog-background {
    width: 100%;
    height: auto;
}
</style>
