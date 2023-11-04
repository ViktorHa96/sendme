<template>
    <div
        class="relative specify-font news-background flex flex-col gap-4 text-center place-items-center py-10"
    >
        <div>
            <h2
                class="flex w-fit mx-auto specify-font uppercase text-2xl font-bold text-center px-8 py-2 bg-cyan-100 rounded-full border-2 border-black"
            >
                Novinky
            </h2>
        </div>
        <img
            class="newsImgLeft hidden md:block w-1/5 h-auto"
            src="../../../images/Pigeons/holub6.png"
            alt=""
        />
        <img
            class="newsImgRight hidden md:block w-1/5 h-auto"
            src="../../../images/Pigeons/holub7other.png"
            alt=""
        />
        <div
            class="relative z-20 w-[90%] md:w-3/5 h-auto place-items-center justify-center"
        >
            <div
                class="banner-background py-3 px-8 flex-col gap-3 rounded-3xl shadow-lg shadow-black"
            >
                <Carousel :autoplay="10000" :wrap-around="true">
                    <Slide v-for="item in items" :key="item.id">
                        <div class="carousel__item">
                            <h2 class="text-2xl my-4">
                                {{ item.title }}
                            </h2>
                            <p class="py-4 px-14">
                                {{ item.description }}
                            </p>
                        </div>
                    </Slide>

                    <template #addons>
                        <Pagination />
                        <navigation>
                            <template #next>
                                <div class="carousel__next">
                                    <NextIcon
                                        class="text-black hover:text-gray-700 hover:translate-x-0.5 duration-100"
                                    />
                                </div>
                            </template>
                            <template #prev>
                                <div class="carousel__prev">
                                    <PrevIcon
                                        class="text-black hover:text-gray-700 hover:-translate-x-0.5 duration-100"
                                    />
                                </div>
                            </template>
                        </navigation>
                    </template>
                </Carousel>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from "vue";
import { Carousel, Pagination, Slide, Navigation } from "vue3-carousel";
import NextIcon from "@/Components/Icons/NextIcon.vue";
import PrevIcon from "@/Components/Icons/PrevIcon.vue";

import "vue3-carousel/dist/carousel.css";

const items = ref([
    {
        id: 1,
        title: "Pripravujeme používanie Umelej inteligencie",
        description:
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
    },
    {
        id: 2,
        title: "K blahoželaniu vlastný zvukový modul",
        description:
            "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose",
    },
    {
        id: 3,
        title: "Nové čaje z ďalekých krajín",
        description:
            'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum',
    },
]);
</script>

<style scoped>
.news-background {
    background-color: rgba(255, 255, 255, 0.928);
    width: 100%;
    height: auto;
    position: relative;
    z-index: 20;
}

.banner-background {
    background: rgb(63, 94, 251);
    background: radial-gradient(
        circle,
        rgba(47, 130, 255, 0.9) 0%,
        rgba(252, 206, 70, 0.9) 100%
    );
}

.newsImgLeft {
    position: absolute;
    margin-top: 2rem;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}
.newsImgRight {
    position: absolute;
    margin-top: 2rem;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}

.carousel__prev,
.carousel__next {
    height: 40px;
    width: 40px;
    margin: 0 2px;
    display: flex;
}
</style>
