<template>
    <div
        class="relative z-20 w-full text-center specify-font blog-background py-14"
    >
        <h2
            class="flex w-fit mx-auto text-white font-heading uppercase text-2xl font-bold text-center"
        >
            Z nášho blogu
        </h2>
        <div class="max-w-4xl mx-auto flex place-items-center justify-center">
            <Carousel :items-to-show="1" :wrapAround="true">
                <Slide v-for="item in items" :key="item.id">
                    <div class="carousel__item w-[80%] md:w-3/4 my-4 group px-6">
                        <Link
                            href="/"
                            class="flex flex-col text-sm lg:text-base w-full gap-4 py-2 px-2 bg-slate-100 rounded-md shadow-lg shadow-black"
                        >
                            <div class="relative rounded-lg overflow-hidden">
                                <div
                                    class="hidden bg-black/50 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"
                                ></div>
                                <img
                                    class="rounded-lg group-hover:scale-105 duration-100"
                                    :src="item.image"
                                    alt=""
                                />
                                <h2
                                    class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center"
                                >
                                    Prečítať
                                </h2>
                            </div>
                            <p class="line-clamp-3 text-sm">
                                {{ item.title }}
                            </p>
                        </Link>
                    </div>
                </Slide>

                <template #addons>
                    <navigation>
                        <template #next>
                            <div id="carousel-buttons" class="carousel__next">
                                <NextIcon
                                    class="text-white hover:text-gray-200 hover:translate-x-0.5 duration-100"
                                />
                            </div>
                        </template>
                        <template #prev>
                            <div id="carousel-buttons" class="carousel__prev">
                                <PrevIcon
                                    class="text-white hover:text-gray-200 hover:-translate-x-0.5 duration-100"
                                />
                            </div>
                        </template>
                    </navigation>
                </template>
            </Carousel>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import { ref } from "vue";
import image1 from "../../../images/Blog/article1.jpeg";
import image2 from "../../../images/Blog/article2.jpeg";
import image3 from "../../../images/Blog/article3.jpeg";
import image4 from "../../../images/Blog/sectionBg.jpeg";
import image5 from "../../../images/Blog/sectionBg2.jpeg";
import PrevIcon from "@/Components/Icons/PrevIcon.vue";
import NextIcon from "@/Components/Icons/NextIcon.vue";

const items = ref([
    {
        id: 1,
        image: image1,
        title: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        id: 2,
        image: image2,
        title: "an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        id: 3,
        image: image3,
        title: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        id: 4,
        image: image4,
        title: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
    {
        id: 5,
        image: image5,
        title: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
    },
]);
</script>

<style scoped>
.blog-background {
    width: 100%;
    height: auto;
}

.carousel__prev,
.carousel__next {
    margin: 0;
    padding: 0;
    height: 32px;
    width: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
}

#carousel-buttons {
    margin: 0;
}

button {
    margin: 0;
}
</style>
