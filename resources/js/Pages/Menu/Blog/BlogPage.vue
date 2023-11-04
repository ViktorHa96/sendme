<template>
    <Head title="Galéria" />
    <AppLayout>
        <div class="w-auto flex flex-col mx-10 mb-10">
            <h2
                class="specify-font uppercase text-2xl mt-16 mb-8 font-bold text-center"
            >
                Z nášho sveta
            </h2>
            <div
                class="relative w-full flex flex-col md:flex-row mb-10 gap-6 px-10 place-items-end"
            >
                <div class="flex gap-4 text-2xl font-bold place-items-center">
                    <label class="text-base specify-font" for="type"
                        >Typ:</label
                    >
                    <select
                        class="rounded-lg bg-sky-50 text-black font-bold shadow-md focus:ring-0 focus:border-indigo-700"
                        name="type"
                        id=""
                    >
                        <option value="recenz">Recenzie</option>
                        <option value="actual">Novinky</option>
                        <option value="article">Články</option>
                        <option value="tips">Typy a triky</option>
                        <option value="prepare">Pripravujeme</option>
                    </select>
                </div>
                <div class="flex gap-4 text-2xl font-bold place-items-center">
                    <label class="text-base specify-font" for="sort"
                        >Zoradenie:</label
                    >
                    <select
                        class="rounded-lg bg-sky-50 text-black font-bold shadow-md focus:ring-0 focus:border-indigo-700"
                        name="sort"
                        id=""
                    >
                        <option value="newest">Najnovšie</option>
                        <option value="popular">Popolárne</option>
                        <option value="favourites">Obľúbené</option>
                    </select>
                </div>
            </div>
            <masonry-wall
                :items="items"
                :ssr-columns="1"
                :column-width="500"
                :gap="16"
            >
                <template
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10"
                    #default="{ item, index }"
                >
                    <Link
                        href="/"
                        class="relative flex flex-col text-sm lg:text-base gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black group hover:bg-blue-50 duration-100"
                    >
                        <div
                            class="relative w-full h-auto overflow-hidden rounded-lg"
                        >
                            <div
                                class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"
                            ></div>
                            <img
                                class="rounded-lg relatvie z-10 group-hover:scale-105 duration-100"
                                src="../../../images/Blog/article1.jpeg"
                                alt=""
                            />
                            <h2
                                class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold specify-font group-hover:flex justify-center place-items-center"
                            >
                                Zobraziť viac
                            </h2>
                        </div>
                        <p class="text-lg font-bold text-center">
                            {{ item.title }}
                        </p>
                        <p>{{ item.description }}</p>
                    </Link>
                </template>
            </masonry-wall>
        </div>
    </AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "../../../Layouts/AppLayout.vue";
import MasonryWall from "@yeger/vue-masonry-wall";
import { ref } from "vue";

const items = ref([
    {
        title: "Prvy post",
        description:
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        title: "Druhy post Druhy post Druhy postDruhy post",
        description:
            "when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        title: "Treti post jajaaja",
        description:
            "hen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap  hen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        title: "štvrty post",
        description:
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        title: "gfasgsagasfewvy post Druhy post Druhy postDruhy post",
        description:
            "when an unknown printer took a galley of type and scrambled it to make a type specimen book. t to make a type specimen book. It has sur t to make a type specimen book. It has sur t to make a type specimen book. It has sur It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        title: "Treti pgsdgsdgost jajaaja",
        description:
            "hen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the",
    },
]);
</script>

<style scoped></style>
