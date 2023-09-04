<template>
    <Navbar class="bg-black fixed z-50 w-full"/>
    <div class="container mx-auto">

        <h1 class="pt-36 mx-6 mb-5 font-bold">
            {{ $t("joinUs") }}
        </h1>


        <div
            class="flex justify-between gap-x-14 flex-wrap md:flex-nowrap mx-10 my-5"
        >
            <div class="flex-auto md:w-1/2 ">
                <div class="bg-black rounded-lg mb-14">
                    <div class="text-dark-brown py-10 roun px-5 text-sm">
                        {{ $t('pleaseFill') }}
                    </div>
                    <div v-if="success!='' " class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        {{success}}
                    </div>
                    <form class="grid gap-y-10 mx-5" @submit.prevent="submit"  :class="($i18n.locale=='en' )  ? 'animate__animated animate__fadeInLeft' : 'animate__animated animate__fadeInRight'">
                        <div class="flex justify-center gap-x-5">

                            <input type="text" id="" aria-describedby="helper-text-explanation"
                                   v-model="joinUs.name"
                                   class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                   :placeholder="$t('fullName')">
                            <div class="text-red-500 " v-if="error.name">{{error.name[0]}}</div>
                            <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                                   v-model="joinUs.email"
                                   class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                   :placeholder="$t('email')">
                            <div class="text-red-500 " v-if="error.email">{{error.email[0]}}</div>

                        </div>
                        <div class="flex justify-center gap-x-5">
                            <input type="text" aria-describedby="helper-text-explanation"
                                   v-model="joinUs.phone"
                                   class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                   :placeholder="$t('mobile')">
                            <div class="text-red-500 " v-if="error.phone">{{error.phone[0]}}</div>

                            <select id="countries"  v-model="joinUs.gender"
                                    class="bg-dark-brown text-white [&>option]:bg-white [&>option]:text-black   border border-dark-brown  text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="choosen">{{ $t('gender') }}</option>
                                <option value="Male">{{ $t('male') }}</option>
                                <option value="Female">{{ $t('female') }}</option>
                            </select>
                            <div class="text-red-500 " v-if="error.gender">{{error.gender[0]}}</div>




                        </div>
                        <div class="flex justify-center gap-x-5">
                            <input type="text" aria-describedby="helper-text-explanation"
                                   v-model="joinUs.qualification"
                                   class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                   :placeholder="$t('academicCertification')">
                            <div class="text-red-500 " v-if="error.email">{{error.email[0]}}</div>

                            <input type="text" aria-describedby="helper-text-explanation"
                                   v-model="joinUs.specialization"
                                   class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                   :placeholder="$t('specialization')">
                            <div class="text-red-500 " v-if="error.specialization">{{error.specialization[0]}}</div>

                        </div>
                        <div class="flex justify-center gap-x-5">
                            <input type="text" aria-describedby="helper-text-explanation"
                                   v-model="joinUs.jop"
                                   class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                   :placeholder="$t('position')">
                            <div class="text-red-500 " v-if="error.jop">{{error.jop[0]}}</div>

                            <input type="file" id="file" aria-describedby="helper-text-explanation"
                                   @change="handleFile" ref="file"
                                   class=" w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                   :placeholder="$t('uploadCV')">
                            <div class="text-red-500 " v-if="error.cv">{{error.cv[0]}}</div>

                        </div>

                        <button type="submit" class="bg-dark-brown rounded-3xl h-10 mb-10 mx-2 text-white ">{{
                                $t('sendNow')
                            }}
                        </button>
                    </form>
                </div>


            </div>
            <div class="w-full md:w-1/2 mb-5 bg-about-us-page-image bg-no-repeat bg-cover bg-center h-[555px] rounded-lg">
            </div>


        </div>

    </div>

    <LightFooter/>
</template>

<script>
import Navbar from "../components/Navbar.vue";
import LightFooter from "../components/LightFooter.vue";
import {Input, Dropdown, ListGroup, ListGroupItem} from 'flowbite-vue'


export default {
    components: {
        Navbar, LightFooter, Input, Dropdown, ListGroup, ListGroupItem
    },
    data() {
        return {
            joinUs: {
                'name': '',
                'email': '',
                'phone': '',
                'gender': 'choosen',
                'qualification': '',
                'specialization': '',
                'jop': '',
                'cv': null,
            },
            error:{},
            success:''
        }
    },
    methods: {
        submit() {
            let formData = new FormData()
            formData.append('name', this.joinUs.name)
            formData.append('email', this.joinUs.email)
            formData.append('phone', this.joinUs.phone)
            formData.append('gender', this.joinUs.gender)
            formData.append('qualification', this.joinUs.qualification)
            formData.append('specialization', this.joinUs.specialization)
            formData.append('jop', this.joinUs.jop)
            formData.append('cv', this.joinUs.cv)
            console.log(formData)
            axios.post('/api/join-us', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then((response) => {
                    console.log(response.data)
                    this.error={}
                    this.success=this.$t('submitted')
                })
                .catch((e) => {

                    this.error=e.response.data.errors

                })
        },
        handleFile() {  //this fun set file in join us properity
            this.joinUs.cv = this.$refs.file.files[0]
            console.log(this.joinUs.cv)
        }
    }
}
</script>
