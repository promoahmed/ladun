<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <div class="pt-[73px]"></div>


    <section class="media-center py-28 bg-background-section">
        <div class="container mx-auto">
            <h1 class="text-4xl text-center  mb-10">المركز الاعلامي</h1>
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-8">
                <template v-if="media.length">
                    <card-link v-for="item in media" :key="item.id" >
                        <!--                    <template #date>{{item.creted_at}}</template>-->
                        <template #head>{{ item.title[$i18n.locale].slice(0, 20) + '...' }}</template>
                        <template #text>
                            <div v-html="item.content[$i18n.locale].slice(0,100)+'...'"></div>
                            <div class="rtl:text-end ltr:text-end"> <button @click="details(item.id)" class="p-2 my-2 text-xs rounded-lg text-white bg-dark-brown text-right">{{ $t('readMore') }}</button></div>
                        </template>
                        <img
                            class="md:h-full object-cover img-media-center
                         lg:rtl:rounded-l-lg lg:ltr:rounded-r-lg  w-full md:w-48 rounded-b-lg md:rounded-b-none rtl:pl-2 ltr:pr-2"
                            :src="getpic(item)" alt="">
                    </card-link>

                </template>


            </div>
        </div>
    </section>

    <LightFooter/>
</template>

<script setup>
import CardLink from "@/components/CardLink.vue";
import {Carousel} from "flowbite-vue";
import Navbar from "../components/Navbar.vue"
import LightFooter from '../components/LightFooter.vue';
import {ref, onBeforeMount, onMounted, computed} from "vue";
import {useRouter} from 'vue-router'

import axios from "axios";

const router = useRouter()
const media = ref({})
const projects_2 = new URL('../../img/real-state-management-banner.png', import.meta.url).href
const pic = ref('')
const pictures = [

    {
        src: projects_2,
        alt: 'Picture 2',
    },
]


const details = (id) => {
    router.push({
        name: "Media Center Details",
        params: {
            id: id
        }
    })
}
const getpic = (media) => {
    return media.media[0].collection_name=='attachments'?media.media[0].original_url:media.media[1].original_url
}



onBeforeMount(() => {
    axios.get("/api/media-center").then(res => {
        media.value = res.data.mediaCenter

        // console.log(res.data.mediaCenter[0].media[0])


    })
})


</script>

<style>


</style>
