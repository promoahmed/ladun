<template>
    <div class="pt-[73px]"></div>

    <Carousel :pictures="pictures" class="h-[360px] md:h-[500px] [&>div:first-child]:h-[360px] [&>div>div>img]:h-[360px] [&>div:first-child]:md:h-[500px] [&>div>div>img]:md:h-[500px] [&>div>button]:mx-2 [&>div>button]:w-10 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1"></Carousel>
</template>

<script setup>
import {Carousel} from "flowbite-vue";

const projects_1 = new URL('../../img/banner-mediaCenter.png', import.meta.url).href
const projects_2 = new URL('../../img/real-state-management-banner.png', import.meta.url).href
const projects_3 = new URL('../../img/banner-mediaCenter.png', import.meta.url).href
const projects_4 = new URL('../../img/real-managent-utility-section.png', import.meta.url).href
const pictures = [
    {
        src: projects_1,
        alt: 'Picture 1',
    },
    {
        src: projects_4,
        alt: 'Picture 4',
    },
    {
        src: projects_2,
        alt: 'Picture 2',
    },
    {
        src: projects_3,
        alt: 'Picture 3',
    },]

</script>

<style scoped>

</style>
