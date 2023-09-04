<template>
    <div class="text-white flex flex-col flex-wrap md:flex-nowrap py-10 px-10 rounded-t-2xl w-full bg-blend-multiply bg-dark-footer-image bg-black bg-no-repeat bg-cover bg-fixed">
        <div
            class="flex justify-between gap-x-36 flex-wrap md:flex-nowrap"
        >
        <div class="flex-auto md:max-w-[15rem] py-5 md:py-10">
            <div v-for=" button in buttons ">
               <router-link :to="button.href"><button class=" w-full border-white border-2 mb-5"><small>{{ button.name }}</small></button></router-link>
            </div>
            <div class="flex justify-between">
                <template v-for="icon in icons">
                        <a :href="icon.href" target="_blank" >
                            <img :src="`${icon.image}`" :alt="`${icon.image}`" class="w-10 h-10" />
                        </a>
                    </template>
            </div>
        </div>
        <div class="flex-auto md:w-64">
            <div class="flex py-5 md:py-0 gap-3" >
                <img :src="darkFooterLogo" alrt="darkFooterLogo" /> <h3 class="self-center md:px-5">{{ $t('darkFooterTitle') }}</h3>
            </div>
            <p class="text-dark-footer-text-color py-5 md:py-10 text-justify" >{{ $t('darkFooterText') }}</p>
            <h class="py-2">{{ $t('darkFooterPhone') }}: 920011560 </h>
            <h3 class="py-2">{{ $t('darkFooterEmail') }}: investor@ladun.sa</h3>
        </div>

        </div>
        <div class="text-center text-dark-footer-text-color pt-4">{{ $t('copyRights') }}</div>
    </div>
</template>

<script setup>
import { useI18n } from 'vue-i18n'
import darkFooterLogo from '../../img/dark_footer/logo/dark_footer_logo.svg'
import linkedinIcon from "../../img/dark_footer/icons/dark_footer_linkedin.svg";
import twitterIcon from "../../img/dark_footer/icons/dark_footer_twitter.svg";
import whatsappIcon from "../../img/dark_footer/icons/dark_footer_whatsapp.svg";
import facebookIcon from "../../img/dark_footer/icons/dark_footer_facebook.svg";
const { t } = useI18n();
const buttons = [
    {
        name:t('mostImportantProjects'),
        href:{ name: 'Projects' },
    },
    {
        name:t('companies'),
        href:{ name: 'Companies' },
    },
    {
        name:t('contactUs'),
        href:{ name: 'Contact Us' },
    },
    {
        name:t('licenses'),
        href:{ name: 'Page', params: { slug: 'license-and-agreement' } },
    },
]

const icons = [
    {
        image:linkedinIcon ,
        href: 'https://www.linkedin.com/company/ladun',
    },
    {
        image:twitterIcon ,
        href: 'https://twitter.com/Ladun_sa',
    },
    {
        image:whatsappIcon ,
        href: 'https://wa.me/920011560',
    },
    {
        image:facebookIcon ,
        href: 'https://www.facebook.com/Ladun.KSA',
    },

];

</script>
