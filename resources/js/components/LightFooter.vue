<template>
    <div class="bg-light-footer text-grey ">

        <div class="grid grid-cols-1 md:grid-cols-8  px-11 py-12">
            <div class="flex flex-col mx-auto ">
                <img :src="DarkLogo" alt="Logo_darK" class=" mb-5" />
                <div class="inline-flex justify-between">
                    <template v-for="icon in icons">
                        <a :href="icon.href" target="_blank" >
                            <img :src="`${icon.image}`" :alt="`${icon.image}`" class="w-4 h-6" />
                        </a>
                    </template>
                </div>
            </div>
            <div></div>
            <div class="flex flex-col justify-between h-32 pt-8">
                <router-link :to="{ name: 'About Us' }">
                    <small>{{ $t('aboutLadun') }}</small>
                </router-link>
                <router-link :to="{ name: 'About Us' }">
                    <small>{{ $t('whoWeAre') }}</small>
                </router-link>
                <router-link :to="{ name: 'About Us' }">
                    <small>{{ $t('aboutOurCompany') }}</small>
                </router-link>
            </div>
            <div class="flex flex-col justify-between h-32 pt-8">
                <router-link :to="{ name: 'Projects' }">

                    <small>{{ $t('projects') }}</small>
                </router-link>
                <router-link :to="{ name: 'Projects' }">

                    <small>{{ $t('realEstateManagement') }}</small>
                </router-link>
                <router-link :to="{ name: 'Projects' }">

                    <small>{{ $t('realEstateAssetManagement') }}</small>
                </router-link>
            </div>
            <div class="flex flex-col justify-between md:h-32 pt-8">
                <router-link :to="{ name: 'Investors Ads' }">
                    <small>{{ $t('investorsRelations') }}</small>
                </router-link>
            </div>
            <div class="flex flex-col justify-between md:h-32 pt-8">
                <router-link :to="{ name: 'Media Center' }">
                    <small>{{ $t('mediaCenter') }}</small>
                </router-link>
            </div>
            <div class="flex flex-col justify-between md:h-32 pt-8">
                <router-link :to="{ name: 'Join Us' }">
                    <small>{{ $t('joinUs') }}</small>
                </router-link>
            </div>
            <div class="flex flex-col justify-between md:h-32 pt-8">
                <router-link :to="{ name: 'Contact Us' }">
                    <small>{{ $t('contactUs') }}</small>
                </router-link>
            </div>
            <div class="flex flex-col-reverse justify-between md:h-17 mt-4 text-center pt-2">
                <div class="flex items-center justify-center">

                    <a class="flex" href="https://wa.me/920011560" target="_blank">
                        <p>920011560</p>
                        <img :src="`${whatsappIcon}`" :alt="`${whatsappIcon}`" class="w-4 h-6 mx-2" />
                    </a>
                </div>
            </div>

        </div>
        <hr class="border-gray-300 mx-11"/>
        <div class="mx-11 py-5 flex justify-center">
            <small class="ltr:mr-2 rtl:ml-2 flex text-center after:content-['']  after:w-[1.5px] after:h-5   after:bg-dark-brown after:rounded rtl:after:mr-2 ltr:after:ml-2 after:my-auto">
                    {{ $t('termsConditions') }}
                </small>

                <small class="ltr:mr-2 rtl:ml-2 flex text-center after:content-['']  after:w-[1.5px] after:h-5   after:bg-dark-brown after:rounded rtl:after:mr-2 ltr:after:ml-2 after:my-auto">
                    {{ $t('privacyPolicy') }}
                </small>
                <small class="ltr:mr-2 rtl:ml-2">
                    {{ $t('copyRights') }}
                </small>
        </div>
    </div>

</template>

<script setup>
import DarkLogo from "../../img/ladun_logo_dark.png";
import facebookIcon from "../../img/light_footer_facebook.svg";
import twitterIcon from "../../img/light_footer_twitter.svg";
import instagramIcon from "../../img/light_footer_instagram.svg";
import linkedinIcon from "../../img/light_footer_linkedin.svg";
import youtubeIcon from "../../img/light_footer_youtube.svg";
import whatsappIcon from "../../img/light_footer_whatsapp.svg";

const icons = [
    {
        image:facebookIcon ,
        href: 'https://www.facebook.com/Ladun.KSA',
    },
    {
        image:instagramIcon ,
        href: 'https://www.instagram.com/ladun_sa/',
    },
    {
        image:twitterIcon ,
        href: 'https://twitter.com/Ladun_sa',
    },
    {
        image:youtubeIcon ,
        href: 'https://www.youtube.com/channel/UCNZqi9-p_HGDp_v7YtKsybg',
    },
    {
        image:linkedinIcon ,
        href: 'https://www.linkedin.com/company/ladun',
    },

];
</script>

<style scoped>
a:hover{
    text-decoration: underline;
}
</style>
