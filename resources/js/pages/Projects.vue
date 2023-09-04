<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <div
        class=" mb-4 pt-32 [&>div>div>ul>li>.border-blue-600]:border-black [&>div>div]:border-0 [&>div>div>ul>li>.text-blue-600]:text-black">
        <tabs variant="underline" v-model="activeTab"> <!-- class appends to content DIV for all tabs -->
            <tab v-for="department in fetchedData" :name="department.title['en']"
                 :title="department.title[$i18n.locale]"
                 class="[&>div>div>div>ul]:justify-center [&>div>div>div]:border-0 [&>div>div>div>ul>li>.text-blue-600]:text-dark-brown [&>div>div>div>ul>li>.border-blue-600]:border-dark-brown">
                <!-- regions -->
                <tabs variant="underline" v-model="regionActiveTab" class="justify-center py-10 ">
                    <tab v-for="region in department.regions" :name="region.title['en']"
                         :title="region.title[$i18n.locale]">
                        <div class="grid grid-cols-1 gap-10 md:grid-cols-3 pt-2 container mx-auto   [&>div]:lg:h-[574px]  [&>div]:md:h-[635px] [&>div]:h-[560px]">

                            <div v-for="project in region.projects"
                                 class=" rounded-xl  bg-[#fff8f8]  mx-2 "
                                 :class="($i18n.locale=='en' )  ? 'animate__animated animate__fadeInLeft' : 'animate__animated animate__fadeInRight'">
                                 <div class="w-full relative z-10">
                                    
                                    <Carousel :autoplay="false" :pictures="getGallery(project.gallery)"
                                              class="[&>div>div>img]:h-full [&>div:first-child]:lg:h-[243px] [&>button>span]:hidden [&>div>button]:hidden  [&>div>button]:mx-2 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1 "/>
                                </div>
                                <img class="w-20 h-20 z-20 absolute top-[10%] mx-auto my-3 mb-0" :src="project.logo?.original_url"
                                     :alt="project.logo?.name">
                                <div class="flex flex-col items-center">
                                    <h3 class="flex-initial p-2 font-bold">{{ project.title[$i18n.locale] }}</h3>
                                    <h4 class="flex-initial flex p-2 text-dark-brown">
                                        <img src="../../img/projects/locationIcon.svg" alt="locationIcon"
                                             class="rtl:ml-2 ltr:mr-2"/>
                                        {{ region.title[$i18n.locale] }}
                                    </h4>
                                    <small
                                        class="flex-initial mb-2 text-dark-brown">{{ department.title[$i18n.locale] }}</small>
                                </div>

                                <div class="grid grid-cols-4 mb-4 ">
                                    <p class="px-2 h-32 text-grey text-sm col-start-1 col-end-4 "
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
                    </tab>
                </tabs>
            </tab>
        </tabs>
    </div>
    <LightFooter/>
</template>

<script setup>
import {ref, onBeforeMount} from "vue";
import Navbar from "../components/Navbar.vue";
import LightFooter from "../components/LightFooter.vue";
import {Tabs, Tab, Carousel} from 'flowbite-vue'
import axios from 'axios'

const getGallery = (gallery) => {
    return Object.values(gallery).map((image) => {
        return {
            src: image.original_url,
            alt: image.name
        }
    })
};


const activeTab = ref('')
const regionActiveTab = ref('')

const fetchedData = ref([]);

onBeforeMount(async () => {
    const response = await axios.get('/api/departments')
console.log(response)
    fetchedData.value = response.data.data

    activeTab.value = fetchedData.value[0].title['en']
    regionActiveTab.value = fetchedData.value[0].regions[0].title['en']

    console.log(activeTab.value, '----', regionActiveTab.value)

})
</script>
