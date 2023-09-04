<template>
    <Navbar class="bg-black fixed z-50 w-full" />
    <div class="bg-light-beige-background mb-4 pt-32 [&>div>div>ul>li>.border-blue-600]:border-black [&>div>div>ul>li>.text-blue-600]:text-black ">
    <tabs variant="underline" v-model="activeTab" > <!-- class appends to content DIV for all tabs -->
      <tab v-for="department in fetchedData" :name="department.title['en']" :title="department.title[$i18n.locale]" class="[&>div>div>div>ul]:justify-center [&>div>div>div>ul>li>.text-blue-600]:text-dark-brown [&>div>div>div>ul>li>.border-blue-600]:border-dark-brown">
        <div class="relative">
            <div class="absolute w-full h-full top-0 left-0 bg-background-overlay z-20 "></div>
            <img :src="department.mainImage.src" :alt="department.mainImage.alt" />
        </div>
          <!-- regions -->
          <tabs variant="underline" v-model="regionActiveTab" class="justify-center py-10 " >
            <tab v-for="region in department.regions" :name="region.title['en']" :title="region.title[$i18n.locale]">
              <div class="grid grid-cols-1 gap-10 md:grid-cols-3 pt-2 container mx-auto   [&>div]:h-[532px]" >
                <div v-for="project in region.projects" class="rounded-xl border-2 border-gray-border-light bg-white relative mx-2 ">
                      <img class="w-20 h-20 rounded-full mx-auto my-3 mb-0" :src="project.logo.original_url" :alt="project.logo.name">
                      <div class="flex flex-col items-center">
                          <h3 class="flex-initial p-2 font-bold">{{ project.title[$i18n.locale] }}</h3>
                          <h4 class="flex-initial flex p-2 text-dark-brown">
                            <img src="../../img/projects/locationIcon.svg" alt="locationIcon" class="rtl:ml-2 ltr:mr-2" />
                            {{ region.title[$i18n.locale] }}
                          </h4>
                          <small class="flex-initial mb-2 text-dark-brown">{{ department.title[$i18n.locale]}}</small>
                      </div>

                      <div class="grid grid-cols-4 mb-4 ">
                        <p class="px-2 text-grey text-xs col-start-1 col-end-4 " v-html="project.text[$i18n.locale].slice(0, 110)+' ...'">
                        </p>
                      <div class="flex flex-col justify-end col-start-4 col-end-4">
                        <router-link class="bg-dark-brown text-white rounded-md h-6 max-w-20 text-xs text-center flex flex-col justify-center mx-2" :to="{name: 'Project', params: { id: project.id }}">{{ $t('readMore') }}</router-link>
                      </div>
                      </div>
                      <div class="absolute bottom-0 w-full">
                        <Carousel :pictures="getGallery(project.gallery)" class="[&>div>div>img]:h-full [&>div:first-child]:h-[243px] [&>div>button]:mx-2 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1 "/>
                      </div>
                </div>
              </div>
            </tab>
          </tabs>
      </tab>
  </tabs>
    </div>
    <DarkFooter />
</template>

<script setup>
import { ref, onBeforeMount } from "vue";
import Navbar from "../components/Navbar.vue";
import DarkFooter from "../components/DarkFooter.vue";
import { Tabs, Tab, Carousel } from 'flowbite-vue'
import axios from 'axios'

const getGallery = (gallery) => {
    return Object.values(gallery).map((image)=>{
      return {
        src: image.original_url ,
        alt: image.name
      }
  })


};


const activeTab = ref('')
const regionActiveTab = ref('')

const fetchedData = ref([]);
// const data = ref([
//   {
//     mainImage: {
//       src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//       alt: 'realEstateManagement'
//     },
//     title: 'realEstateAssetManagement',
//     regions: [
//       {
//         title: 'easternRegion',
//         projects: [
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of first project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of second project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of third project in first region
//         ],// end of projects
//       }, // end of first region in relaEstateAssetManagement
//       {
//         title: 'middleRegion',
//         projects: [
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of first project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of second project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of third project in first region
//         ],// end of projects
//       }, // end of second region in relaEstateAssetManagement
//       {
//         title: 'westernRegion',
//         projects: [
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of first project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of second project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of third project in first region
//         ],// end of projects
//       }, // end of third region in relaEstateAssetManagement
//     ],// end of regions
//   },// end of realEstateAssetManagement
//   {
//     mainImage: {
//       src: new URL('../../img/projects/realEstateManagement.png', import.meta.url).href,
//       alt: 'realEstateManagement'
//     },
//     title: 'realEstateManagement',
//     regions: [
//       {
//         title: 'easternRegion',
//         projects: [
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of first project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of second project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of third project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of forth project in first region
//         ],// end of projects
//       }, // end of first region in relaEstateAssetManagement
//       {
//         title: 'middleRegion',
//         projects: [
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of first project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of second project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of third project in first region
//         ],// end of projects
//       }, // end of second region in relaEstateAssetManagement
//       {
//         title: 'westernRegion',
//         projects: [
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of first project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of second project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of third project in first region
//         ],// end of projects
//       }, // end of third region in realEstateManagement
//       {
//         title: 'northernRegion',
//         projects: [
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of first project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of second project in first region
//           {
//             logo: {
//               src: new URL('../../img/projects/realEstateAssetManagement.png', import.meta.url).href,
//               alt: 'project_logo'
//             },
//             title: 'acquaCompound',
//             text: 'acquaCompoundText',
//             gallery: [
//               {
//                 src: new URL('../../img/projects_1.png', import.meta.url).href,
//                 alt: 'project_1'
//               },
//               {
//                 src: new URL('../../img/projects_2.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//               {
//                 src: new URL('../../img/projects_3.png', import.meta.url).href,
//                 alt: 'project_2'
//               },
//             ], // end of gallery
//           }, // end of third project in first region
//         ],// end of projects
//       }, // end of second region in relaEstateAssetManagement
//     ],// end of regions
//   },// end of realEstateManagement
// ])

onBeforeMount(async () => {
  const response = await axios.get('/api/departments')

  fetchedData.value = response.data.data

  activeTab.value = fetchedData.value[0].title['en']
  regionActiveTab.value = fetchedData.value[0].regions[0].title['en']

  console.log(activeTab.value, '----', regionActiveTab.value)
  
})
</script>
