<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <div class="pt-[4rem]">
        <div class="relative img-banner-slot">
            <div class=" overlay absolute top-0 right-0 w-full h-full bg-background-overlay z-20"></div>
            <img class="w-full" src="../../img/companies-banner.png">

            <div class="z-40 text-white text-3xl absolute top-1/2 right-1/2 translate-x-1/2 -translate-y-1/2">
                <img class="w-[30%] md:w-[45%] lg:w-[53%] mx-auto md:mb-3 " src="../../img/ladun-logo-banner.png">
            </div>

        </div>
    </div>
<div class="container mx-auto py-10" >
    <div v-for="(unit , key) in units">
        <h2 class="mb-5">{{ unit[0].type[$i18n.locale]}}</h2>
        <carousel :items-to-show="4">
            <slide v-for="item in unit" :key="unit.id">
                <div
                    class="rounded-lg border-2 border-gray-border-light bg-white latest_project">
                    <img class="w-full rounded-lg"  src="../../img/projects_3.png"
                         alt="Project Photo">
                    <div class="flex flex-col p-2">
                        <h3 class="ltr:text-start rtl:text-end mb-1">{{item.name[$i18n.locale]}}</h3>
                        <div class="text-dark-brown flex rtl:flex-row-reverse">
                            <small > {{ item.price}}</small> <span class="mx-1">
                        {{ $t('SR')}}
                    </span>

                        </div>
                    </div>

                    <div class="flex flex-wrap m-2 justify-between rtl:flex-row-reverse">
                        <div>
                            <BuildingOffice2Icon
                                class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 text-light-brown"/>
                            <small class="whitespace-nowrap text-gray-500">{{ item.area }}
                                {{ $t('areaUnit') }}</small>
                        </div>
                        <div class="">
                            <MapPinIcon
                                class="inline-block h-4 w-4 ltr:mr-2 rtl:ml-2 text-light-brown"/>
                            <small class="whitespace-nowrap text-gray-500">{{ item.location_in_project }}</small>
                        </div>
                        <button class="bg-dark-brown text-white rounded-lg px-4 py-[5px] text-[11px]">{{$t('book')}}</button>
                    </div>

                </div>
            </slide>
            <template #addons>
                <navigation/>
                <pagination/>
            </template>
        </carousel>
    </div>

</div>


</template>

<script>

import 'vue3-carousel/dist/carousel.css'
import {Carousel, Slide, Pagination, Navigation} from 'vue3-carousel'
import Navbar from "../components/Navbar.vue"
import {MagnifyingGlassIcon, ChevronDownIcon, BuildingOffice2Icon, Bars3Icon} from "@heroicons/vue/24/outline";
import {MapPinIcon} from "@heroicons/vue/24/solid";
export default {
    name: "utilities",
    data(){
      return{
          units:{}
      }
    },
    components: {
        Carousel, Slide, Pagination, Navigation,Navbar,BuildingOffice2Icon,MapPinIcon
    },
    beforeMount() {
        axios.get(`/api/units/${this.$route.params.id}`).then(res =>{
            this.units=res.data.units
            console.log(this.units)
        })
    }
}
</script>

<style scoped>

</style>
