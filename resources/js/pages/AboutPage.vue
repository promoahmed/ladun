<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <section class="company-info py-24 bg-background-section pt-40">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-10">
                <div class="img-company-info flex justify-center  "
                     :class="($i18n.locale=='en' )  ? 'animate__animated animate__fadeInLeft' : 'animate__animated animate__fadeInRight'"
                     v-if="gallery">

                    <Carousel
                        :pictures="gallery"
                        class="about-us-carousel rounded-3xl h-[450px] w-[90%] [&>div:first-child]:h-[450px] [&>div>div>img]:h-[450px] [&>div>div>img]:rounded-3xl [&>div>button]:mx-2 [&>div>button]:w-10 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1"
                    />
                </div>
                <div class="d-info h-full flex flex-col justify-center"
                     :class="($i18n.locale=='en' )  ?  'animate__animated animate__fadeInRight':'animate__animated animate__fadeInLeft'">
                    <h1

                        class="font-bold text-3xl mb-4 text-center md:text-start"
                        v-if="about.title"
                    >
                        {{ about.title[$i18n.locale] }}
                    </h1>
                    <p class="mb-4 text-xl   text-justify lg:rtl:pl-16 lg:ltr:pr-16 leading-7	" v-if="about.content"
                       v-html="about.content[$i18n.locale]">

                    </p>
                    <div
                        class="company-button flex items-center flex-wrap w-full justify-center md:justify-start">
                        <a class="flex items-center special-button text-2xl button rounded-3xl bg-dark-brown hover:bg-[#5d5a2e] cursor-pointer text-white px-11 py-2 my-5 rtl:ml-6 ltr:mr-6 rtl:md:ml-28 ltr:md:mr-28 ml-4 rtl:mr-4 w-[200px] ">
                            <PhoneIcon
                                class="h-6 w-6 rtl:ml-2 ltr:mr-2 text-white "/>
                            <span>{{ $t('call_us') }}</span>
                        </a>

                        <a v-if="about.video" :href="about.video" target="_blank" class="flex text-dark-brown items-center hover:text-[#5d5a2e] cursor-pointer">
                            <!--                            <PlayCircleIcon class="h-16 w-16 rtl:ml-2 ltr:mr-2   "/>-->
                            <img
                                src="../../img/play-button.png"
                                class="rtl:ml-2 ltr:mr-2 h-[60px] w-[60px]"
                            />
                            <span class="font-bold text-3xl">{{ $t('video') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- direcotrs board -->
    <!-- removed directors board-->
    <LightFooter />
</template>

<script setup>
import Navbar from "../components/Navbar.vue";
import LightFooter from "../components/LightFooter.vue"
import {Carousel} from "flowbite-vue";
import {PhoneIcon} from "@heroicons/vue/24/solid";
import {ref, onBeforeMount} from "vue";
import axios from "axios";

const gallery = ref([]);

const about = ref({});

const structure = ref({})

const getAbouUs = async () => {
    await axios.get("/api/about-us").then((res) => {
        about.value = res.data.aboutUs;
        if (res.data.aboutUs[0].media.length)
            res.data.aboutUs[0].media.forEach((el) => {
                gallery.value.push({src: el.original_url, alt: el.name});
            });
        else gallery.value[0] = {src: "/storage/brief.png", alt: "brief"};
        console.log(gallery.value);
    });
};

const getGallery = (gallery) => {
    if (gallery) {
        return Object.values(gallery).map((image) => {
            return {
                src: image.original_url,
                alt: image.name,
            };
        });
    } else {
        return [];
    }
};

onBeforeMount(async () => {
    // await getAbouUs()
    window.addEventListener('scroll', function () {
        // animate__animated animate__fadeInUp
        let strucre = document.getElementsByClassName('strucre')
        let header_strucre = document.getElementById('header-strucre')
        console.log(strucre.length)
        for (let i = 0; i < strucre.length; i++) {
            if (window.scrollY >= header_strucre.offsetTop - 700) {

                    strucre[i].classList.add('animate__animated', 'animate__fadeInLeft')

            } else {
                    strucre[i].classList.remove('animate__animated', 'animate__fadeInLeft')

            }
        }

    })
    const response = await axios.get("/api/about");
    about.value = response.data[0];
    gallery.value = getGallery(about.value.media);

    if (!response.data[0].media.length) {
        gallery.value.push({src: "/storage/image_placeholder.jpg", alt: "brief"}); // aboutUs[0] for about us
    }
    console.log(gallery.value)

    const structureResponse = await axios.get('/api/structure')

    structure.value = structureResponse.data.structure


});
</script>
