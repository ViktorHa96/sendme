<template>
    <div
        class="w-full specify-font relative z-20 gift-background flex flex-col text-center place-items-center pb-10"
    >
        <div>
            <h2
                class="flex w-fit mx-auto specify-font uppercase text-2xl font-bold text-center px-8 py-2 bg-cyan-100 rounded-full border-2 border-black my-10"
            >
                Darčeky a doplnky
            </h2>
        </div>
        <Carousel
            :wrap-around="true"
            snap-align="start"
            :breakpoints="breakpoints"
        >
            <Slide v-for="item in items" :key="item.id" class="px-16">
                <div class="carousel__item">
                    <Link
                        :href="route('gift.category', item.title)"
                        class="flex flex-col place-items-center gap-4 group"
                    >
                        <div
                            class="relative rounded-full overflow-hidden border-4 border-black/60"
                        >
                            <div
                                class="hidden bg-black/60 rounded-md absolute z-20 top-0 left-0 w-full h-full group-hover:flex justify-center"
                            ></div>
                            <img
                                class="rounded-full group-hover:scale-105 duration-150"
                                :src="item.image"
                                alt=""
                            />
                            <h2
                                class="hidden center-div z-30 top-0 left-0 text-white text-2xl font-bold group-hover:flex justify-center place-items-center"
                            >
                                Zobraziť
                            </h2>
                        </div>

                        <h2
                            class="uppercase rounded-full px-3 pt-1 pb-0.5 group-hover:bg-cyan-100 group-hover:shadow-md group-hover:shadow-slate-300"
                        >
                            {{ item.title }}
                        </h2>
                    </Link>
                </div>
            </Slide>

            <template #addons>
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

        <div>
            <button></button>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import image1 from "../../../images/Gifts/cupon.jpeg";
import image2 from "../../../images/Gifts/seeds.jpeg";
import image3 from "../../../images/Gifts/tea1.jpeg";
import image4 from "../../../images/Gifts/sweets.jpeg";
import image5 from "../../../images/Gifts/necklaces.jpeg";
import image6 from "../../../images/Gifts/tea2.jpeg";
import PrevIcon from "@/Components/Icons/PrevIcon.vue";
import NextIcon from "@/Components/Icons/NextIcon.vue";

const breakpoints = {
    // 768px and up
    768: {
        itemsToShow: 2,
    },
    // 1280 and up
    1280: {
        itemsToShow: 4,
    },
};

const items = ref([
    {
        id: 1,
        image: image1,
        title: "Zľavové kupóny",
    },
    {
        id: 2,
        image: image2,
        title: "Magické Semienka",
    },
    {
        id: 3,
        image: image3,
        title: "Čaje z rôznych častí sveta",
    },
    {
        id: 4,
        image: image4,
        title: "Mini sladkosti",
    },
    {
        id: 5,
        image: image5,
        title: "Náramky a náhrdelníky",
    },
    {
        id: 6,
        image: image6,
        title: "Osobné magnetky",
    },
    {
        id: 7,
        image: image6,
        title: "Vlastné QR kódy",
    },
    {
        id: 8,
        image: image6,
        title: "Parfúm na papier",
    },
    {
        id: 9,
        image: image6,
        title: "Zvukový modul",
    },
]);
</script>

<style scoped>
.gift-background {
    background: rgb(255, 255, 255);
    background: linear-gradient(
        180deg,
        rgb(62, 181, 255) 4%,
        rgb(146, 207, 245) 49%,
        rgb(62, 181, 255) 100%
    );
    width: 100%;
    height: auto;
}

.carousel__prev,
.carousel__next {
    height: 40px;
    width: 40px;
    margin: 0 16px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
