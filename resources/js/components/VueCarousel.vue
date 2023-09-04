<template>
    <carousel :items-to-show="1" >
        <slide v-for="(item,index) in items" :key="index" >
            <img :src="item.src " :alt="item.alt" class="h-[350px] w-[550px]" />
        </slide>

        <template #addons>
            <navigation />
            <pagination />
        </template>
    </carousel>
</template>

<script setup>

import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import {array} from "tw-elements/dist/src/js/util";

const props = defineProps({
    items:{
        type: Object
    },
    msg: {
        type: String,
    }
})



</script>

<style scoped>

</style>
