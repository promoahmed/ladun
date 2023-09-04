<template>
    <div  class="[&>div>div>ul]:justify-center [&>div>div>ul>li]:text-dark-brown [&>div>div>ul>li>.border-blue-600]:border-black [&>div>div>ul>li>.text-blue-600]:text-black ">
        <tabs variant="underline" v-model="activeTab">
            <!-- class appends to content DIV for all tabs -->
            <tab
                v-for="department in fetchedData"
                :name="department.title['en']"
                :title="department.title[$i18n.locale]"
                
            >
            <div class="grid grid-cols-1 gap-5 md:gap-10 md:grid-cols-3 lg:grid-cols-4 mx-auto container px-5" >
                <div v-for="project in department.latest" class="rounded-lg border-2 border-gray-border-light bg-white">
                        <img class="w-full rounded-lg" v-if="project.attachment" :src="project.attachment" alt="Project Photo">
                        <div class="flex items-center">
                            <h3 class="flex-initial p-2">{{ project.title[$i18n.locale] }}</h3>
                            <span class="flex-initial mx-2 text-light-brown">
                                <MapPinIcon class="inline-block h-4 w-4 "/>
                                <small class="font-bold" v-if="project.location">{{ project.location.city }}</small>
                            </span>
                        </div>
                        <p class="px-2 text-grey text-xs" v-html="project.text[$i18n.locale].slice(0, 200)+' ...'"></p>
                        <div class="flex justify-end my-4 mx-2">
                            <button class="bg-dark-brown text-white rounded-2xl w-36 h-8" @click.prevent="$router.push({ name: 'Project', params:{ id:project.id } })">
                                <small>
                                    <MagnifyingGlassIcon class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 justify-end" />{{ $t('exploreProject') }}
                                </small>
                            </button>
                        </div>
    
                        <div class="flex flex-wrap m-2">
                            <div>
                                <Bars3Icon class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 text-light-brown"/>
                                <small class="whitespace-nowrap text-gray-500">{{ $t('residentialLandPlots') }}</small>
                            </div>
                            <div>
                                <BuildingOffice2Icon class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 text-light-brown"/>
                                <small class="whitespace-nowrap text-gray-500">{{ project.Land_area }}  {{ $t('areaUnit') }}</small>
                            </div>
                            <div>
                                <BuildingOffice2Icon class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 text-light-brown"/>
                                <small class="whitespace-nowrap text-gray-500">{{ project.units_number }} {{ $t('unit') }}</small>
                            </div>
                        </div>
    
                </div>
            </div>

            </tab>
        </tabs>
    </div>

</template>
<script setup>
import { ref, onBeforeMount } from "vue";
import { Tabs, Tab, Carousel } from "flowbite-vue";
import {MagnifyingGlassIcon, ChevronDownIcon, BuildingOffice2Icon, Bars3Icon } from "@heroicons/vue/24/outline";
import { MapPinIcon } from "@heroicons/vue/24/solid";
const activeTab = ref("");
const fetchedData = ref([]);

const getGallery = (gallery) => {
    return Object.values(gallery).map((image) => {
        return {
            src: image.original_url,
            alt: image.name,
        };
    });
};

onBeforeMount(async () => {
    const response = await axios.get("/api/departments/latest/projects");
    fetchedData.value = response.data.data;

    activeTab.value = fetchedData.value[0].title["en"];
});
</script>
