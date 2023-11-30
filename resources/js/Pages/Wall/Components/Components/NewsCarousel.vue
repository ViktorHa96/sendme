<template>
    <div
        class="relative z-20 w-full flex  place-self-start justify-center"
    >
        <div
            class="banner-background py-3 px-2 flex-col gap-3 rounded-lg shadow-lg shadow-black"
        >
            <Carousel :autoplay="10000" :wrap-around="true">
                <Slide v-for="item in items" :key="item.id">
                    <div class="carousel__item">
                        <h2 class="text-lg xl:text-xl my-2">
                            {{ item.title }}
                        </h2>
                        <p class="text-sm xl:text-base py-2 px-6 line-clamp-6 leading-7">
                            {{ item.description }}
                        </p>
                    </div>
                </Slide>

                <template #addons>
                    <Pagination />
                </template>
            </Carousel>
        </div>
    </div>
</template>

<script setup lang="ts">

import NextIcon from "@/Components/Icons/NextIcon.vue";
import {Carousel, Navigation, Pagination, Slide} from "vue3-carousel";
import PrevIcon from "@/Components/Icons/PrevIcon.vue";
import {ref} from "vue";

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
.banner-background {
    background: rgb(63, 94, 251);
    background: radial-gradient(
        circle,
        rgba(47, 130, 255, 0.9) 0%,
        rgba(252, 206, 70, 0.9) 100%
    );
}

.carousel__prev,
.carousel__next {
    height: 40px;
    width: 40px;
    margin: 0 2px;
    display: flex;
}
</style>
