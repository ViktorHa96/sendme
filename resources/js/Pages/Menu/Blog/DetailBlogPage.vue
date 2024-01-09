<template>
  <Head title="Blog" />
  <AppLayout>
    <div
      class="max-w-7xl mx-auto flex flex-col gap-6 justify-center py-16"
    >
      <div class="mx-auto w-full h-auto">
        <img class="max-w-lg mx-auto h-auto" src="@/images/Blog/article1.jpeg" alt="" />
      </div>

      <div class="text-3xl font-bold justify-start">
        <h1>Prvy post</h1>
      </div>

      <div class="mt-4 text-base leading-7">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
        Ipsum has been the industrys standard dummy text ever since the 1500s, when an
        unknown printer took a galley of type and scrambled it to make a type specimen
        book. It has survived not only five centuries, but also the leap into electronic
        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
        with desktop publishing software like Aldus PageMaker including versions of Lorem
        Ipsum.
      </div>
    </div>
  </AppLayout>
</template>

<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>
