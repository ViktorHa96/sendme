<template>
    <Head title="Darčeky" />
    <AppLayout>
        <div class="w-full flex flex-col mb-10 px-10">
            <h2
                class="flex w-fit mx-auto specify-font uppercase text-2xl mt-10 mb-10 font-bold text-center px-8 py-2 bg-cyan-100 rounded-full border-2 border-black"
            >
                pridajte darčeky a doplnky k vaším blahoželaniam
            </h2>
            <h2 class="uppercase text-2xl font-bold mb-6 underline text-center">
                {{ category }}
            </h2>
            <div class="flex flex-col lg:flex-row">
                <div
                    class="w-full lg:w-1/4 text-center h-full flex flex-col gap-8 text-xl rounded-3xl"
                >
                    <h2 class="text-lg font-bold my-6">Kategórie</h2>
                    <div>
                        <p>Všetky</p>
                    </div>
                    <div>
                        <p>Kozmetika</p>
                    </div>
                    <div>
                        <p>Elektronika</p>
                    </div>
                    <div>
                        <p>Oblečenie</p>
                    </div>
                    <div>
                        <p>E-shopy</p>
                    </div>
                </div>
                <div class="w-full lg:w-3/4 mb-10 h-full flex flex-col">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 place-items-center gap-8 px-6"
                    >
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday2.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday3.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday4.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday40.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday5.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday6.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/birthday7.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Narodeniny</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/valentines2.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Valentín</p>
                        </div>
                        <div
                            class="flex flex-col gap-4 place-items-center px-2 py-2 border-2 rounded-3xl shadow-lg hover:scale-105 duration-150"
                        >
                            <img
                                class="rounded-3xl"
                                src="../../../images/Posters/valentines3.jpeg"
                                alt=""
                            />
                            <p class="text-2xl font-bold">Valentín</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps<{
    category: string;
}>();
</script>

<style scoped></style>
