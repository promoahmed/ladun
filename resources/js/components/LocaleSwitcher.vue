<script setup>

import {computed, onBeforeMount} from 'vue'
import i18n from '../plugins/i18n';
import {Dropdown, ListGroup, ListGroupItem, Input} from 'flowbite-vue'
const router = useRouter()

import {ref} from "vue";

const value = ref("")
const show = ref(false)
import {useAppLangStore} from '../stores/AppLang';
import axios from "axios";
import {useRouter} from "vue-router";

const isShowModal = ref(false)

function closeModal() {
    isShowModal.value = false
}

function showModal() {
    isShowModal.value = true
}

function showtext() {
    console.log(show)
    return show.value = !(show.value)


}

function searchvalue() {
    console.log(value.value)
    axios.post("/api/search", {
        'q': value.value,
        'local': i18n.global.locale.value,
    }).then(res => {
        // media.value = res.data.mediaCenter
        router.push({
            name: "search",
            params: {
                'q': value.value,
                'local': i18n.global.locale.value,
            }
        })
        console.log(res.data.projects)
        // console.log(res.data.mediaCenter[0].media[0])


    })
    return value.value
}

const appLang = useAppLangStore()

const currentLang = ref("English")

const localeBtn = computed({
    get() {
        if (i18n.global.locale.value == 'en') return 'English'
        else return 'العربية'
    },
    set(val) {
        appLang.appLang = val
    }
})
const secondLang = computed({
    get() {
        if (i18n.global.locale.value == 'en') return 'العربية'
        else return 'English'
    },
    set(val) {
        appLang.appLang = val
    }
})

const changeLocale = () => {
    if (i18n.global.locale.value == 'ar') {

        executeArCode()
    } else {

        executeEnCode()
    }


}

const executeArCode = () => {
    i18n.global.locale.value = 'en'
    appLang.setAppLang(i18n.global.locale.value)
    appLang.setAppRtl(false)

}

const executeEnCode = () => {
    i18n.global.locale.value = 'ar'
    appLang.setAppLang(i18n.global.locale.value)
    appLang.setAppRtl(true)

}
</script>

<template>
    <div class="mx-12  flex">

        <div v-if="show" class="relative animate__animated animate__backInDown">

            <svg @click="searchvalue()" class="absolute z-30 cursor-pointer top-[8%] left-1 w-[24px] h-[24px] "
                 xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 24 24"
                 style="fill:#1A1A1A;">
                <path
                    d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
            </svg>
            <Input :placeholder='$t("click_search")' class="text-center text-base w-48 h-10 focus:ring-0"
                   v-model="value">
                <template #prefix>
                </template>

            </Input>
        </div>
        <div class="m-auto px-2" @click="showtext()">
            <svg class="cursor-pointer" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg" transform="rotate(90)">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
        </div>
        <div class="m-auto">
            <dropdown
                class="[&>div:nth-child(2n)>ul]:bg-[#51586B] [&>div:nth-child(2n)>ul]:w-100 px-2 [&>div:nth-child(2n)>ul]:p-2 [&>div:nth-child(2n)>ul]:box-border [&>div:nth-child(2n)]:bg-[#51586B] hover:[&>div:nth-child(2n)>ul>li]:bg-black [&>div:nth-child(2n)>ul>li]:text-[#D9D9D9] [&>div:nth-child(2n)>ul>li]:inline-block [&>div:nth-child(2n)>ul>li]:mx-0 [&>div:nth-child(2n)>ul>li]:text-start [&>div:nth-child(2n)>ul>li]:border-none [&>div:nth-child(2n)]:rounded-lg hover:cursor-pointer focus:outline-none  font-normal leading-6 text-white relative inline-block after:content-[''] after:absolute after:w-full after:h-[1px] after:rounded-lg after:bg-white after:-bottom-1 after:left-0 after:origin-bottom-right after:scale-x-0 after:transition after:ease-linear after:duration-200 hover:after:origin-bottom-left hover:after:scale-x-100">
                <template #trigger class="w-full">
                    <div class="flex items-center text-white">
                        <div @click="changeLocale" class="text-lg"> {{ secondLang }}</div>
                    </div>
                </template>

            </dropdown>
        </div>
    </div>


</template>

<style scoped>

</style>
