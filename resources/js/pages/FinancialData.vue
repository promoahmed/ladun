<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <img-banner>
        <img src="../../img/finncial-banner.png">
        <template #text>{{ $t('finncial_banner') }}</template>

    </img-banner>

    <section class="media-center py-28 bg-background-section pt-32">
        <div class="container mx-auto">
            <!--            {{financials}}-->
            <div v-for="f  in financials" :key="index" class="mb-12">
                <div v-for="(financial,index ) in f">

                    <header class="flex flex-wrap justify-between items-center mb-5  "
                            :class="($i18n.locale=='en' )  ? 'animate__animated animate__fadeInLeft' : 'animate__animated animate__fadeInRight'">
                        <div
                            class="ltr:bg-subtraction-ltr-png rtl:bg-subtraction-png h-16 w-[80%] flex items-center rtl:pr-8  ltr:pl-8 text-xl">
                            {{ $t('header_finncial') }}
                        </div>
                        <div class="year flex items-center text-[50px] font-bold " dir="rtl">
                            <span class="text-dark-brown">{{ index[2] }}{{ index[3] }}</span><span>{{
                                index[0]
                            }}{{ index[1] }}</span>
                        </div>
                    </header>

                    <div class="card w-[80%] flex">

                        <a v-for="item in financial"
                           :href="'storage/'+item.financial_file"

                           class="animate__animated animate__bounceIn mx-4 w-60 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-10">
                            <div class="flex flex-col items-center ">
                                <div
                                    class=" w-24 h-24 mb-3 rounded-full p-5 shadow-lg flex justify-center items-center">
                                    <img class=" w-12 h-12 " src="../../img/financial-logo.png"
                                         alt="Bonnie image"/>
                                </div>
                                <h5 class="mb-1 text-center text-xl font-medium text-gray-900 dark:text-white">
                                    {{ $t('list_money') }}
                                </h5>
                                <span
                                    class="text-sm text-gray-500 dark:text-gray-400">{{ item.title[$i18n.locale] }}</span>
                                <div class="flex  space-x-3 text-dark-brown font-bold">
                                    {{ index }}
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>


    </section>

    <LightFooter/>

</template>

<script>

import Navbar from "@/components/Navbar.vue";
import ImgBanner from "@/components/ImgBanner.vue";
import i18n from "../plugins/i18n";
import LightFooter from '../components/LightFooter.vue';


export default {
    computed: {
        i18n() {
            return i18n
        }
    },
    components: {
        Navbar, ImgBanner, LightFooter
    },
    data() {
        return {
            financials: []
        }
    },
    methods: {
        getAllFincials() {
            axios.get("/api/financials").then(res => {
                // this.financials=res.data.financials
                const reverseBaseonValues = Object.values(res.data.financials).reverse();
                var reverseBaseonKeys = Object.keys(res.data.financials).reverse();
                // console.log(reverseBaseonKeys)
                var i = 0;

                reverseBaseonValues.forEach((elem) => {
                        let obj = {}
                        obj[reverseBaseonKeys[i]] = elem
                        this.financials.push(obj);
                        i += 1
                    }
                )

                console.log(this.financials)

            })
        }
    },
    mounted() {
        this.getAllFincials()

    }
}


</script>
