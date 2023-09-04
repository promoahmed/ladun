<template>
    <Navbar class="bg-black fixed z-50 w-full" />
    <section class="company-info py-24 bg-background-section pt-40">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-10">
                <div class="img-company-info flex justify-center  "    :class="($i18n.locale=='en' )  ? 'animate__animated animate__fadeInLeft' : 'animate__animated animate__fadeInRight'">
                    <img
                        v-if="page.media"
                        :src="page.media[0].original_url"
                        class="about-us-carousel h-[450px] w-[90%] [&>div:first-child]:h-[450px] [&>div>div>img]:h-[450px] [&>div>button]:mx-2 [&>div>button]:w-10 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1"
                    />
                </div>
                <div class="d-info h-full flex flex-col justify-center"  :class="($i18n.locale=='en' )  ?  'animate__animated animate__fadeInRight':'animate__animated animate__fadeInLeft'">
                    <h1

                        class="font-bold text-3xl mb-4 text-center md:text-start"
                        v-if="page.title"
                    >
                        {{ page.title[$i18n.locale] }}
                    </h1>
                    <p class="mb-4 text-xl   text-justify lg:rtl:pl-16 lg:ltr:pr-16 leading-7	"  v-if="page.content" v-html="page.content[$i18n.locale]">

                    </p>

                </div>
            </div>
        </div>
    </section>
    <LightFooter />
</template>

<script setup>
import Navbar from "../components/Navbar.vue";
import LightFooter from "../components/LightFooter.vue";
import { ref, onBeforeMount } from "vue";
import { useRoute } from "vue-router";

import axios from "axios";

const page = ref({});

const route = useRoute();

onBeforeMount(async () => {

    const response = await axios.get(`/api/pages/${route.params.slug}`);
    page.value = response.data.page;

    console.log(page.value)

});

</script>
