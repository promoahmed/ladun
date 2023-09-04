<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <div class="pt-[73px]"></div>


    <section class="media-center py-28 bg-background-section">
        <div class="container mx-auto">
            <h1 class="text-4xl text-center  mb-10" v-if="media.length" >{{$t('mediaCenter')}}</h1>
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-8">
                <template v-if="media.length">
                    <card-link v-for="item in media" :key="item.id" >
                        <!--                    <template #date>{{item.creted_at}}</template>-->
                        <template #head>{{ item.title[$i18n.locale].slice(0, 20) + '...' }}</template>
                        <template #text>
                            <div v-html="item.content[$i18n.locale].slice(0,100)+'...'"></div>
                            <div class="rtl:text-end ltr:text-end"> <button @click="details(item.id)" class="p-2 my-2 text-xs rounded-lg text-white bg-dark-brown text-right">{{ $t('readMore') }} ...</button></div>
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
    <section>
        <h1 class="text-4xl text-center  mb-10">{{$t('projects')}}</h1>

        <div class="grid grid-cols-1 gap-10 md:grid-cols-3 pt-2 container mx-auto   [&>div]:lg:h-[574px]  [&>div]:md:h-[635px] [&>div]:h-[560px]">

            <div v-for="project in projects"
                 class=" rounded-xl  bg-[#fff8f8]  mx-2 "
                 :class="($i18n.locale=='en' )  ? 'animate__animated animate__fadeInLeft' : 'animate__animated animate__fadeInRight'">
                <div class="w-full relative z-10">
                    <Carousel navigationEnabled="false" :pictures="getGallery(project.gallery)"
                              class="[&>div>div>img]:h-full [&>div:first-child]:lg:h-[243px]  [&>div>button]:mx-2 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1 "/>
                </div>
                <img class="w-20 h-20 z-20 absolute top-[10%] mx-auto my-3 mb-0" :src="project.logo?.original_url"
                     :alt="project.logo?.name">
                <div class="flex flex-col items-center">
                    <h3 class="flex-initial p-2 font-bold">{{ project.title[$i18n.locale] }}</h3>
                    <h4 class="flex-initial flex p-2 text-dark-brown">
                        <img src="../../img/projects/locationIcon.svg" alt="locationIcon"
                             class="rtl:ml-2 ltr:mr-2"/>
                    </h4>
           </div>

                <div class="grid grid-cols-4 mb-4 ">
                    <p class="px-2 text-grey text-sm col-start-1 col-end-4 "
                       v-html="project.text[$i18n.locale].slice(0, 110)+' ...'">
                    </p>

                </div>
                <div class="flex flex-row-reverse">
                    <router-link
                        class="w-[100px] bg-dark-brown text-white rounded-md h-6 max-w-20 text-xs text-center flex flex-col justify-center mx-2"
                        :to="{name: 'Project', params: { id: project.id }}">{{ $t('readMore') }}
                    </router-link>
                </div>
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
import {useRouter , useRoute} from 'vue-router'

import axios from "axios";
import i18n from "@/plugins/i18n";

const router = useRouter()
const route = useRoute()
const projects = ref({})
const media = ref({})
const projects_2 = new URL('../../img/real-state-management-banner.png', import.meta.url).href
const pic = ref('')
const pictures = [

    {
        src: projects_2,
        alt: 'Picture 2',
    },
]

const getGallery = (gallery) => {
    console.log(gallery)
    return Object.values(gallery).map((image) => {
        return {
            src: image.original_url,
            alt: image.name
        }
    })
};
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
    console.log(route.params.local)
    axios.post("/api/search", {
        'q': route.params.q,
        'local': route.params.local,
    }).then(res => {
        // media.value = res.data.mediaCenter

        media.value= res.data.mediaCenter
        projects.value= res.data.projects

    })
})


</script>

<style>


</style>
