<template>
    <Navbar class="bg-black fixed z-50 w-full" />
    <div class="pt-[5rem]"></div>
    <img-banner>
    <div >
        <img  src="../../img/investors-page.png">
    </div>
        <template #text>{{$t('investor_banner')}}  </template>
    </img-banner>


        <div class="container mx-auto py-10">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-10">
                <div class="flex justify-center md:justify-end">
                    <div class="img-company-info border-[1px] border-dark-brown rounded-xl w-[15rem] h-[15rem] md:w-[25rem] md:h-[25rem] flex flex-col justify-center"
                        :class="($i18n.locale=='en' )  ? 'animate__animated animate__fadeInLeft' : 'animate__animated animate__fadeInRight'">
                        <img
                            :src="DarkLogo" alt="Logo_darK"
                            class="w-[8rem] md:w-[16rem] mx-auto"
                        />
                    </div>
                </div>
                <div class="d-info h-full flex flex-col justify-center"
                    :class="($i18n.locale=='en' )  ?  'animate__animated animate__fadeInRight':'animate__animated animate__fadeInLeft'">
                    <h1

                        class="font-bold text-3xl mb-4 text-center md:text-start text-dark-brown"
                    >
                        {{ $t('contactUs') }}
                    </h1>

                    <div class="flex flex-col">
                        <div class="flex flex-col md:flex md:flex-row my-auto gap-x-2">
                            <p class="font-bold inline">{{ $t('phone') }}</p> <a class="underline" target="_blank" href="https://wa.me/920011560">: {{settings[0].phone}} </a>


                            <p class="font-bold inline">{{ $t('ext') }}</p><a class="underline" :href="settings[0].convert" target="_blank"> : {{settings[0].convert}}</a>
                        </div>
                        <div class="my-auto">
                            <p class="font-bold inline">{{ $t('fax') }}</p><a class="underline" :href="settings[0].fax" target="_blank"> : {{settings[0].fax}}</a>
                        </div>
                        <div class="my-auto">
                            <p class="font-bold inline">{{ $t('email') }}</p><a class="underline" target="_blank" :href="settings[0].email"> : {{settings[0].email}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <LightFooter />

</template>

<script setup>
import Navbar from "@/components/Navbar.vue";
import ImgBanner from "@/components/ImgBanner.vue";
import LightFooter from "../components/LightFooter.vue";
import DarkLogo from "../../img/ladun_logo_dark.png";

import { ref, onBeforeMount } from "vue";
import axios from "axios";
const settings= ref('')

onBeforeMount(async () => {

    const response = await axios.get(`/api/settings`);
    settings.value = response.data.settings;

    console.log(settings.value)

});

</script>
