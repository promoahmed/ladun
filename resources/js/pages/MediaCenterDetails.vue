<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <Carsoul />
    <section class="py-28">
        <div class="container mx-auto">
            <div class=" flex flex-wrap flex-col lg:flex-row  ">
                <div class= " lg:w-[30%] w-[100%] mb-10 lg:mb-0">
                    <img v-if="media[0]"
                         class="rounded-xl w-full"
                         :src="getpic(media[0])?.original_url" alt="">
                </div>


                <div class="lg:w-[70%] w-[100%] ltr:pl-12 rtl:pr-12">
                    <h1 v-if="media[0]" class="font-bold text-dark-brown mb-5">{{ media[0].title[$i18n.locale] }}</h1>
                    <p v-if="media[0]" v-html="media[0].content[$i18n.locale]" class="text-justify text-lg"></p>
                    <div class="company-button ">
                        <div class="flex flex-wrap justify-between" v-if="media[0]">

                                <a :href="`${getFile(media[0])?.original_url}`" target="_blank"
                                   class="hover:bg-green-400 hover:cursor-pointer special-button text-xl button bg-dark-brown  rounded-lg flex items-center text-white px-2 py-2 my-5 mb-14 ml-4 rtl:mr-4">
                                    <ArrowDownTrayIcon class="text-white w-6 h-6 rtl:ml-6 ltr:mr-6"/>
                                    {{ getFile(media[0])?.name}}
                                </a>



                        </div>


                    </div>

                </div>

            </div>



        </div>

    </section>

    <LightFooter/>

</template>

<script>
import Navbar from "../components/Navbar.vue"
import LightFooter from '../components/LightFooter.vue';
import Carsoul from '../components/CarsoulWithPadding.vue';
import axios from "axios";


export default {
    components: {
        Navbar, LightFooter, Carsoul
    },
    data() {
        return {
            media: [],
            computedData:{}
        }

    },
    methods: {
        getData() {
            axios.post(`/api/media-center/${this.$route.params.id}`).then(res => {
                this.media = res.data.mediaCenter
                console.log(this.media)
            })
        },
         getpic(media) {
            return media.media[0].collection_name=='attachments'?media.media[0]:media.media[1]
        },getFile(media) {
            return media.media[0].collection_name=='attachments'?media.media[1]:media.media[0]
        }

    },
    created() {
        this.getData()
    },
    // computed:{
    //     comp(){
    //       return   this.media[0]
    //     }
    // },

}


</script>

<style scoped>

</style>
