<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <section class="company-manager py-36 bg-background-section">
        <h1 class="text-center font-bold mb-12 text-3xl">{{ $t('boradOfDirectors') }}</h1>
        <div class="container mx-auto flex justify-center">
            <div
                class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-10 lg:grid-cols-3 lg:gap-20" id="header-strucre"

            >
                <template v-for="employee in structure">
                    <div
                        class="max-w-sm  rounded-xl p-2 strucre animate__animated animate__fadeInUp"
                    >
                        <div
                            class="bg-white border border-light-brown rounded-xl shadow dark:bg-gray-800 dark:border-gray-700 pb-12 pt-7 h-full"
                        >
                            <div class="flex justify-center px-4 pt-4">
                                <div class="flex flex-col items-center pb-10">
                                    <img
                                        class="w-[120px] h-[120px] mb-3 rounded-full border-2 border-light-brown p-1 shadow-lg"
                                        :src="`/storage/${employee.image}`"
                                        :alt="`/storage/${employee.image}`"

                                    />
                                    <h5
                                        class="mb-1 text-xl text-gray-900 dark:text-white font-bold"
                                    >
                                        {{ employee.name[$i18n.locale] }}
                                    </h5>
                                    <span
                                        class="text-sm text-gray-500 dark:text-gray-400 "
                                    >{{ employee.position[$i18n.locale] }}</span
                                    >
                                    <div class="flex text-justify mt-2"
                                         v-html="employee.qualification[$i18n.locale]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
        </div>
    </section>
    <LightFooter />
</template>

<script>
import axios from "axios";
import Navbar from "../components/Navbar.vue";
import LightFooter from "../components/LightFooter.vue"
export default {
    name: "highboard",
    data(){
        return{
            structure:{}
        }
    },
    components:{
        Navbar,LightFooter
    },
    mounted() {


        axios.get("/api/structure").then(res => {
            this.structure = res.data.structure
        })

    }
}
</script>

<style scoped>

</style>
