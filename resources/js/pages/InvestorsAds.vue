<template>
    <Navbar class="bg-black fixed z-50 w-full" />
    <div class="pt-22">
        <img-banner>
            <img class="p-2"  src="../../img/investors-page.png">
            <template #text>{{$t('investor_banner')}}  </template>
        </img-banner>
    </div>

    <section class="media-center py-28 bg-background-section">
        <div class="container mx-auto">

            <div class="grid grid-cols-1 gap-12  lg:grid-cols-2 lg:gap-10">

                <card-link v-for="investor in investors" :key="investor.id" >
<!--                    <template #date>الخميس 15 مايو 2022</template>-->
                    <template #head>{{investor.title[$i18n.locale]}}</template>
                    <!--  -->
                    <template #text>
                        <div class="text-sm mb-2">{{investor.created_at}}</div>
                        <div v-html="investor.content[$i18n.locale].slice(0,100)+'...'"></div>
                        <div class="rtl:text-end ltr:text-end"> <button @click.prevent="$router.push({ name: 'Investors Relation' , params: { id: investor.id } })" class="p-2 my-2 text-xs rounded-lg text-white bg-dark-brown">{{$t('readMore')}}</button></div>
                    </template>
                    <img
                        class="object-cover img-media-center rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg rtl:pl-2 ltr:pr-2"
                        :src="investor.media[0].original_url" alt="">

                </card-link>



            </div>
        </div>

    </section>
    <LightFooter />

</template>

<script>
import Navbar from "@/components/Navbar.vue";
import ImgBanner from "@/components/ImgBanner.vue";
import CardLink from "@/components/CardLink.vue";
import LightFooter from "../components/LightFooter.vue";

export default {
    data() {
      return {
          investors:[]
      }
    },
    components:{
        Navbar,ImgBanner,CardLink,LightFooter
    },
    methods:{
        getAllInvestors(){
            axios.get("/api/investors").then(res =>{
                this.investors=res.data.investors
                console.log(this.investors)

            })
        }
    },
    mounted() {
        this.getAllInvestors()

    }
}

</script>
