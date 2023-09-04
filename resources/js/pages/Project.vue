<template>
    <Navbar class=" fixed z-50 w-full" :class="{ 'bg-black': !top}"/>
    <div class="relative img-banner-slot h-[50vh] md:h-auto">
        <div class=" overlay absolute top-0 right-0 w-full h-full bg-background-overlay z-20"></div>
        <img class="h-[50vh] md:h-auto w-[100%]" src="../../img/real-state-management-banner.png">

        <div class="z-40 text-white absolute top-[100%] -translate-y-[100%] right-[3%] -translate-x-[100%] text-justify">

                <img class="animate__animated animate__backInDown max-w-[170px] "
                     id="logo-project"
                     v-if="project.logo"
                     :src="project.logo.original_url">

        </div>

    </div>
    <section class="  bg-background-section" id="project">

        <div class="container mx-auto">

            <div class="lg:w-[90%]">

                <div class=" h-full flex justify-between py-4  "
                >
                    <div class="  mx-auto px-4" style="border-right: 2px solid #AF9751;">
                        <p class="text-2xl font-bold truncate">التطوير العقاري</p>
                        <h1 class=" text-3xl text-[#AF9751] truncate" v-if="project.title">
                            {{ project.title[$i18n.locale] }}</h1>
                            <p class="text-lg">معتمد برقم</p>
                    </div>
                    <p class=" w-[90%] mb-12 text-sm px-2  text-right " v-if="project.text" v-html="project.text[$i18n.locale]"></p>

                </div>



            </div>
        </div>


    </section>


    <section class=" text-sm m-auto ">
        <div class="container mx-auto pb-4">
            <div class=" w-full m-auto lg:w-[66%]">
                <div
                    class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-7 mx-auto items-center ">
                    <div class="mx-auto mb-3 md:mb-0 ">
                        <a class="   relative inline-block after:content-[''] after:absolute after:w-full after:h-[1.5px]  font-normal leading-6 after:rounded-lg after:bg-black after:-bottom-2 after:left-0 after:origin-bottom-right after:scale-x-0 after:transition after:ease-linear after:duration-200 hover:after:origin-bottom-left hover:after:scale-x-100"
                           href="#" v-scroll-to="{
                            el: '#project',
                            offset: -128
                        }">
                            {{ $t('project') }}
                        </a>
                    </div>
                    <!-- project phases -->
                    <div class="mx-auto mb-3 md:mb-0 ">
                        <a class="   relative inline-block after:content-[''] after:absolute after:w-full after:h-[1.5px]  font-normal leading-6 after:rounded-lg after:bg-black after:-bottom-2 after:left-0 after:origin-bottom-right after:scale-x-0 after:transition after:ease-linear after:duration-200 hover:after:origin-bottom-left hover:after:scale-x-100"
                           href="#" v-scroll-to="{
                            el: '#project_phases',
                            offset: -128
                        }">
                            {{ $t('projectPhases') }}
                        </a>
                    </div>

                    <div class="mx-auto mb-3 md:mb-0 ">
                        <a class="relative inline-block after:content-[''] after:absolute after:w-full after:h-[1.5px]  font-normal leading-6 after:rounded-lg after:bg-black after:-bottom-2 after:left-0 after:origin-bottom-right after:scale-x-0 after:transition after:ease-linear after:duration-200 hover:after:origin-bottom-left hover:after:scale-x-100"
                           href="#" v-scroll-to="{
                            el: '#utilities',
                            offset: -128
                        }">
                            {{ $t('utilities') }}
                        </a>
                    </div>

                    <div class="mx-auto mb-3 md:mb-0">
                        <a class="relative inline-block after:content-[''] after:absolute after:w-full after:h-[1.5px]  font-normal leading-6 after:rounded-lg after:bg-black after:-bottom-2 after:left-0 after:origin-bottom-right after:scale-x-0 after:transition after:ease-linear after:duration-200 hover:after:origin-bottom-left hover:after:scale-x-100"
                           href="#" v-scroll-to="{
                            el: '#downloads',
                            offset: -128
                        }">
                            {{ $t('downloads') }}
                        </a>
                    </div>

                    <div class="mx-auto mb-3 md:mb-0">
                        <a class="relative inline-block after:content-[''] after:absolute after:w-full after:h-[1.5px]  font-normal leading-6 after:rounded-lg after:bg-black after:-bottom-2 after:left-0 after:origin-bottom-right after:scale-x-0 after:transition after:ease-linear after:duration-200 hover:after:origin-bottom-left hover:after:scale-x-100"
                           href="#" v-scroll-to="{
                            el: '#project_models',
                            offset: -128
                        }">
                            {{ $t('projectModels') }}
                        </a>
                    </div>



                    <div class="mx-auto mb-3 md:mb-0">
                        <a class="relative inline-block after:content-[''] after:absolute after:w-full after:h-[1.5px]  font-normal leading-6 after:rounded-lg after:bg-black after:-bottom-2 after:left-0 after:origin-bottom-right after:scale-x-0 after:transition after:ease-linear after:duration-200 hover:after:origin-bottom-left hover:after:scale-x-100"
                           href="#" v-scroll-to="{
                            el: '#location',
                            offset: -128
                        }">
                            {{ $t('location') }}
                        </a>
                    </div>

                    <a
                        class="mx-auto button bg-light-brown text-white rounded-2xl w-full text-center py-2 hover:bg-dark-brown hover:shadow"
                        href="#" v-scroll-to="{
                            el: '#ask_us',
                            offset: -128
                        }">
                        {{ $t('askUs') }}
                    </a>


                </div>
            </div>

        </div>

    </section>


    <section class="genaral-info bg-white lg:p-[5%]" >
        <div class="container mx-auto ">
            <div class="grid grid-cols-1  gap-12 md:grid-cols-2 md:gap-20  lg:grid-cols-4 lg:gap-16 text-white p-3">

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown ">
                    <!-- <img class="w-[24%] mx-auto" src="../../img/icon-area.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[24%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-area.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black ">{{ $t('areaOfLand') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.land_area }} m2</p>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/area-svgrepo-com.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[24%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-area-net.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black text-center ">{{ $t('Building_Area') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.building_area }} m2</p>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/buildings-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[20%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-commercials1.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black ">{{ $t('Floors_Number') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.units_number }}</p>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[35%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-resendial.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black ">{{ $t('Units_Number') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.models_number }}</p>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[35%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-services.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black  ">{{ $t('facilities') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.facilities }}</p>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[35%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-mall.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black  ">{{ $t('commercial') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.commercial }}</p>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[35%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-commercials.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black ">{{ $t('investment') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.investment }}</p>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[35%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-goverment.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black text-center">{{ $t('government') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.government }}</p>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <diV class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[35%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-learning.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black text-center">{{ $t('educational') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.educational }}</p>
                        </div>
                    </diV>
                </div>

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[24%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-gardens.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black ">{{ $t('gardens') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.gardens }}</p>
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-2 md:gap-1 w-56 mx-auto  utility-group animate__animated animate__backInDown">
                    <!-- <img class="w-[20%] mx-auto" src="../../img/pyramid-icon.png"> -->
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <img class="w-[24%] md:w-[50%] m-auto"
                             src="https://sauditharwa.com/wp-content/uploads/2016/09/p-icons-c-mosques.png">
                        <div class="my-auto mx-auto text-[14px]">
                            <p class="text-black  ">{{ $t('mosque') }}</p>
                            <p class="font-bold text-center text-lg text-black">{{ project.mosque }}</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>
    </section>


    <!-- navigation -->


    <!-- project section -->
       <!-- project phases section -->
    <section id="project_phases " class="py-16 bg-[white]" v-if="project.phases.length">
        <h1 class="container font-bold text-light-brown mb-6 mx-auto">{{ $t('projectPhases') }}</h1>
        <div class="grid grid-cols-1 gap-10 md:grid-cols-3 container mx-auto right" v-if="project.phases">

            <div class=" right " v-for="phase in project.phases">


                <div class="  p-5 font-bold ">


                    <!--                        <Progress labelProgress="true" labelPosition="outside" :label="$t('achieve_percentage')" :progress="phase.achieve_percentage"></Progress>-->

                    <CircleProgressBar :value="phase.achieve_percentage" :max="100" percentage colorUnfilled="black"
                                       animationDuration="1s"
                                       rounded></CircleProgressBar>
                    <h5 class="pb-2 text-center mt-4">{{ phase.name[$i18n.locale] }}</h5>


                </div>
            </div>
        </div>
        <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>
    </section>

    <!-- gallery section -->
    <section class="py-12 pb-16 bg-[white]">
        <div class="container mx-auto">
            <div class=" ">
                <div
                    class="lg:w-[50%] flex items-center mb-5 lg:mb-0 text-center lg:text-start w-[100%] justify-center lg:justify-start ">
                    <!--                    <p class="text-dark-brown text-4xl">{{ $t('gallary_project') }}</p>-->
                    <div v-if="$i18n.locale=='en'" class="right">
                        <div class="flex items-center">
                            <p class="text-dark-brown text-2xl ">MEDIA </p>
                            <div class="w-[29px] h-[3px] bg-dark-brown  mx-5"></div>
                        </div>
                        <p class="text-dark-brown text-4xl ml-4"> Project </p>
                        <p class="text-dark-brown text-4xl ml-4">Gallery</p>
                    </div>
                    <p class="text-dark-brown text-4xl right" v-else>
                        الصور
                    </p>
                </div>
                <div class="flex  w-[85%] m-auto " id="carsoul-project">
                    <div class="w-[100%] m-auto">
                        <vue-carousel  :items="getGallery(project.gallery)"/>
                    </div>


                </div>

            </div>

        </div>
        <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>
    </section>

    <!-- utilities section  -->
    <!-- utilities section  will fetch from API-->
    <section class="bg-[white]  py-[3%]">
        <div class="container  mx-auto">
            <h2 class="text-3xl font-bold text-light-brown ">{{$t("high_level_utility")}}</h2>
            <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-20 gap-5 lg:w-[70%] m-auto py-[3%]">
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                    <svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M7.97,2.242l-5,20A1,1,0,0,1,2,23a1.025,1.025,0,0,1-.244-.03,1,1,0,0,1-.727-1.212l5-20a1,1,0,1,1,1.94.484Zm10-.484a1,1,0,1,0-1.94.484l5,20A1,1,0,0,0,22,23a1.017,1.017,0,0,0,.243-.03,1,1,0,0,0,.728-1.212ZM12,1a1,1,0,0,0-1,1V6a1,1,0,0,0,2,0V2A1,1,0,0,0,12,1Zm0,7.912a1,1,0,0,0-1,1v4.176a1,1,0,1,0,2,0V9.912A1,1,0,0,0,12,8.912ZM12,17a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V18A1,1,0,0,0,12,17Z"></path></g></svg>
                    <p class="mx-4 text-2xl">طرق  <br>معبده</p>
                </div>
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                    <svg width="64px" height="64px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="bi bi-signpost-split"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"></path> </g></svg>
                    <p class="mx-4 text-2xl"> ارصفة <br>طرق</p>
                </div>
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                <svg width="64px" height="64px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M810.946385 398.138063V127.312332L763.491287 0H399.541305l-45.158883 127.567467v345.069997h76.54048v115.065854h0.127568v121.444229c19.262687 4.847564 37.75997 13.394584 54.34374 25.896195l28.957815 21.941605v-43.500507h83.811826c42.862669-15.308096 91.338306-10.715667 130.88422 14.032422V587.703318h78.198857v151.550151l5.485401-4.209727c23.089711-17.476743 50.134014-27.427005 77.816155-29.850787v-117.489637h109.197751V398.138063h-188.79985zM453.629911 76.54048h256.79331l19.517823 52.302661H435.005061L453.629911 76.54048z m-22.834576 319.684071V203.980379h303.61057v192.244172H641.664357v-104.73289h-113.79018v104.73289h-97.078842z m214.951181 284.347883h-131.394491v-30.871327h131.394491v30.871327z m0-63.783733h-131.394491v-29.085383h131.394491v29.085383z m277.459239-105.625862H507.463382V474.550976h415.742373v36.611863zM776.375601 1023.984054a112.004236 112.004236 0 0 1-67.865892-22.707009l-37.887537-28.70268c-12.756747-9.695127-30.488625-9.56756-43.117804 0l-37.887538 28.70268c-39.928617 30.23349-95.6756 30.361057-135.604217 0l-37.887537-28.70268c-12.756747-9.695127-30.488625-9.56756-43.117804 0l-37.887537 28.70268c-39.928617 30.23349-95.6756 30.361057-135.604217 0l-37.887538-28.70268c-12.756747-9.56756-30.488625-9.56756-43.117804 0l-49.496177 37.504835a38.244726 38.244726 0 1 1-46.179422-60.977249l49.496177-37.504835c39.928617-30.23349 95.803167-30.23349 135.604216 0l37.887538 28.70268c12.756747 9.56756 30.488625 9.56756 43.117804 0l37.887537-28.70268c39.928617-30.23349 95.6756-30.361057 135.604217 0l37.887538 28.70268c12.756747 9.56756 30.488625 9.56756 43.117804 0l37.887537-28.70268c39.928617-30.23349 95.6756-30.361057 135.604217 0l37.887538 28.70268c12.756747 9.56756 30.488625 9.56756 43.117803 0l37.887538-28.70268c39.928617-30.23349 95.6756-30.361057 135.604217 0l37.887537 28.70268a38.244726 38.244726 0 1 1-46.179422 60.977249l-37.887538-28.70268c-12.756747-9.56756-30.488625-9.56756-43.117804 0l-37.887537 28.70268a112.259371 112.259371 0 0 1-67.865893 22.707009zM776.375601 878.046872a112.004236 112.004236 0 0 1-67.865892-22.707009l-37.887537-28.70268c-12.756747-9.695127-30.488625-9.56756-43.117804 0l-37.887538 28.70268c-39.928617 30.23349-95.6756 30.361057-135.604217 0l-37.887537-28.70268c-12.756747-9.695127-30.488625-9.56756-43.117804 0l-37.887537 28.70268c-39.928617 30.23349-95.6756 30.361057-135.604217 0l-37.887538-28.70268c-12.756747-9.56756-30.488625-9.56756-43.117804 0l-49.496177 37.504835a38.244726 38.244726 0 1 1-46.179422-60.977249l49.496177-37.504835c39.928617-30.23349 95.6756-30.361057 135.604216 0l37.887538 28.70268c12.756747 9.56756 30.488625 9.56756 43.117804 0l37.887537-28.70268c39.928617-30.23349 95.6756-30.361057 135.604217 0l37.887538 28.70268c12.756747 9.56756 30.488625 9.56756 43.117804 0l37.887537-28.70268c39.928617-30.23349 95.6756-30.361057 135.604217 0l37.887538 28.70268c12.756747 9.56756 30.488625 9.56756 43.117803 0l37.887538-28.70268c39.928617-30.23349 95.6756-30.361057 135.604217 0l37.887537 28.70268a38.244726 38.244726 0 1 1-46.179422 60.977249l-37.887538-28.70268c-12.756747-9.56756-30.488625-9.56756-43.117804 0l-37.887537 28.70268a112.259371 112.259371 0 0 1-67.865893 22.707009zM179.870128 741.294548C80.622639 741.294548 0 660.671909 0 561.42442c0-17.221608 0-69.651837 86.10804-210.231185l93.762088-153.208527 93.762088 153.208527c86.10804 140.706916 86.10804 193.137144 86.10804 210.231185 0 99.247489-80.750206 179.870128-179.870128 179.870128z m0-396.607253l-28.447545 46.434557C83.811826 501.467711 76.54048 547.009297 76.54048 561.42442c0 56.89509 46.30699 103.329648 103.329648 103.329648s103.329648-46.30699 103.329648-103.329648c0-14.415124-7.271346-59.956709-74.882103-170.302568l-28.447545-46.434557zM220.436582 592.16818m-28.319977 0a28.319978 28.319978 0 1 0 56.639955 0 28.319978 28.319978 0 1 0-56.639955 0ZM138.538269 563.97577m-28.319978 0a28.319978 28.319978 0 1 0 56.639955 0 28.319978 28.319978 0 1 0-56.639955 0ZM192.116605 494.834203m-28.319978 0a28.319978 28.319978 0 1 0 56.639955 0 28.319978 28.319978 0 1 0-56.639955 0Z"></path></g></svg>
                 <p class="mx-4 text-2xl">صرف  <br>طرق</p>
                </div>
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                    <svg width="64px" height="64px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>network_3_round [#1084]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -3399.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M173,3248 L181,3248 C181.552,3248 182,3248.448 182,3249 C182,3249.552 181.552,3250 181,3250 L173,3250 C172.448,3250 172,3249.552 172,3249 C172,3248.448 172.448,3248 173,3248 L173,3248 Z M173,3255 L181,3255 C181.552,3255 182,3255.448 182,3256 C182,3256.552 181.552,3257 181,3257 L173,3257 C172.448,3257 172,3256.552 172,3256 C172,3255.448 172.448,3255 173,3255 L173,3255 Z M173,3241 L181,3241 C181.552,3241 182,3241.448 182,3242 C182,3242.552 181.552,3243 181,3243 L173,3243 C172.448,3243 172,3242.552 172,3242 C172,3241.448 172.448,3241 173,3241 L173,3241 Z M170,3243 C170,3244.105 170.895,3245 172,3245 L182,3245 C183.105,3245 184,3244.105 184,3243 L184,3241 C184,3239.895 183.105,3239 182,3239 L172,3239 C170.895,3239 170,3239.895 170,3241 L166,3241 L166,3239 L164,3239 L164,3254.999 C164,3256.104 164.896,3257 166.001,3257 L166.219,3257 L170,3257 C170,3258.105 170.895,3259 172,3259 L182,3259 C183.105,3259 184,3258.105 184,3257 L184,3255 C184,3253.895 183.105,3253 182,3253 L172,3253 C170.895,3253 170,3253.895 170,3255 L166.996,3255 C166.446,3255 166,3254.554 166,3254.004 L166,3250 L170,3250 C170,3251.105 170.895,3252 172,3252 L182,3252 C183.105,3252 184,3251.105 184,3250 L184,3248 C184,3246.895 183.105,3246 182,3246 L172,3246 C170.895,3246 170,3246.895 170,3248 L166,3248 L166,3243 L170,3243 Z" id="network_3_round-[#1084]"> </path> </g> </g> </g> </g></svg>
                     <p class="mx-4 text-2xl">شبكة  <br> فايبر</p>
                </div>
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                    <svg fill="#000000" width="64px" height="64px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>battery-negative</title> <path d="M12.563 1c-0.937 0-1.25 0.211-1.25 1.25v0.937h-2.813c-1.847 0-2.187 0.341-2.187 2.187v23.438c0 1.847 0.341 2.187 2.187 2.187h15c1.847 0 2.187-0.341 2.187-2.187v-23.438c0-1.847-0.341-2.187-2.187-2.187h-2.813v-0.937c0-1.038-0.312-1.25-1.25-1.25h-6.875zM8.5 7.563c0-2.5-0.312-2.187 2.187-2.187 1.25 0 9.688 0 10.625 0 2.5 0 2.187-0.312 2.187 2.187 0 1.25 0 17.813 0 19.063 0 2.5 0.312 2.187-2.187 2.187-1.25 0-9.375 0-10.625 0-2.5 0-2.187 0.312-2.187-2.187 0-1.251 0-17.813 0-19.063zM10.687 14.75h10.625c0.345 0 0.625 0.28 0.625 0.625v3.125c0 0.345-0.28 0.625-0.625 0.625h-10.625c-0.345 0-0.625-0.28-0.625-0.625v-3.125c0-0.345 0.28-0.625 0.625-0.625z"></path> </g></svg>
                    <p class="mx-4 text-2xl">شبكه  <br>كهرباء</p>
                </div>
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 10V11.5M12 14H12.01M10 16.584V18.9996C10 20.1042 10.8954 20.9996 12 20.9996C13.1046 20.9996 14 20.1042 14 18.9996L14 16.584M12 3V4M18.3643 5.63574L17.6572 6.34285M5.63574 5.63574L6.34285 6.34285M4 12H3M21 12H20M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <p class="mx-4 text-2xl">شبكه  <br>اناره</p>
                </div>
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 14.7C21 18.1794 19.0438 21 15.5 21C11.9562 21 10 18.1794 10 14.7C10 11.2206 15.5 3 15.5 3C15.5 3 21 11.2206 21 14.7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8 8.2C8 9.7464 7.11083 11 5.5 11C3.88917 11 3 9.7464 3 8.2C3 6.6536 5.5 3 5.5 3C5.5 3 8 6.6536 8 8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <p class="mx-4 text-2xl">شبكة  <br>مياه </p>
                </div>
                <div style="border-bottom:1px solid rgb(76, 73, 73);" class="m-auto flex w-full">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.3278 16C20.3478 15.1745 21 13.9119 21 12.4969C21 10.6503 19.8893 8.94488 18.3 8.25C18.1317 5.32251 15.684 3 12.6893 3C10.3514 3 8.34694 4.48637 7.5 6.5C4.8 6.9375 3 9.20008 3 11.6493C3 13.1613 3.63296 14.5269 4.65065 15.5M8 18V20M8 12V14M12 19V21M16 18V20M16 12V14M12 13V15" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <p class="mx-4 text-2xl">تصريف  <br>الامطار</p>
                </div>

            </div>

        </div>
        <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>

    </section>

    <!-- downloads sections -->


    <!-- project models -->
    <section class="company-info   py-20 pt-16  bg-background-section " id="project_models" v-if="project.project_models.length">

        <div class="container mx-auto">

            <div class="">

                <div class="d-info h-full flex flex-col justify-center right">
                    <h1 class="font-bold text-2xl mb-4 text-center md:text-start">{{ $t('Project_Models') }} </h1>
                    <tabs variant="underline" v-model="activeTab" class="p-5 text-lg">
                        <!-- class appends to content DIV for all tabs -->
                        <tab v-for="model in project.project_models" :name="model.title['en']"
                             :title="model.title[$i18n.locale]"
                             class="text-lg [&>div]:grid [&>div]:grid-cols-1 [&>div]:gap-12 [&>div]:lg:grid-cols-2 [&>div]:lg:gap-2">
                            <div>
                                <div class="text mb-5">
                                    <p class="mb-3">{{ $t('Land_Area') }}: {{ model.Land_area }}</p>
                                    <p class="mb-3">{{ $t('Building_Area') }}: {{ model.building_area }}</p>
                                    <p class="mb-3">{{ $t('Floors_Number') }}: {{ model.floors_number }}</p>
                                    <p>{{ $t('Units_Number') }}: {{ model.units_number }}</p>
                                </div>
                                <div class="flex flex-wrap">
                                    <div
                                        v-if="model.utilities"
                                        v-for="utility in model.utilities"
                                        class=" ltr:mr-14 rtl:ml-14 flex flex-wrap flex-col items-center justify-center w-[96px]">

                                        <div class=" p-7 rounded-full border-2 bg-white z-20 mb-2">
                                            <img v-if="utility.media[0]" :src="utility.media[0].original_url"
                                                 class="w-[35px] h-[35px] z-40">
                                            <!--                                            add dinamic img -->
                                        </div>

                                        <p class="text-sm whitespace-nowrap">{{ utility.title[$i18n.locale] }}</p>

                                    </div>

                                </div>

                            </div>

                            <div class="  left">
                                <Carousel :pictures="getGallery(model.media)"
                                     id="images"     class="about-us-carousel w-full   [&>div<li<img]:w-full [&>div>button]:mx-2 [&>div>button]:w-10 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1  "/>

                            </div>

                        </tab>

                    </tabs>
                </div>


            </div>
        </div>
    </section>
    <!-- Video -->

    <section class="bg-[white]">
        <div class="lg:w-[80%] mx-auto text-4xl text-light-brown"><p> الفديو</p></div>
        <div class="container mx-auto">
            <video class="mx-auto w-[70%] h-[70%] rounded-xl"  crossorigin playsinline controls>
                 <source :src="videoo" type="video/mp4">
            </video>
         </div>
         <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>
    </section>

    <section class="py-[3%] bg-[white]">
        <div class="container mx-auto">
            <video class="mx-auto w-[70%] h-[70%] rounded-xl"  controls>
                 <source :src="videoo" type="video/mp4">
            </video>
         </div>
         <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>
    </section>
       <!-- end Video -->
    <!-- location -->
    <section class="company-info   py-20 bg-[white]" id="location">

        <div class="container mx-auto">

            <div class="">

                <div class="d-info h-full flex flex-col justify-center right">
                   <div class="flex">
                    <svg width="34px" height="34px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>location</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-106.000000, -413.000000)" fill="#AF9751"> <path d="M118,422 C116.343,422 115,423.343 115,425 C115,426.657 116.343,428 118,428 C119.657,428 121,426.657 121,425 C121,423.343 119.657,422 118,422 L118,422 Z M118,430 C115.239,430 113,427.762 113,425 C113,422.238 115.239,420 118,420 C120.761,420 123,422.238 123,425 C123,427.762 120.761,430 118,430 L118,430 Z M118,413 C111.373,413 106,418.373 106,425 C106,430.018 116.005,445.011 118,445 C119.964,445.011 130,429.95 130,425 C130,418.373 124.627,413 118,413 L118,413 Z" id="location" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                    <h1 class="font-bold text-xl mb-4 px-2 text-center md:text-start">{{ $t('Location') }} </h1>
                   </div>
                    <p class="mb-12 text-lg text-dark-brown" v-if="project.location">
                        {{ project.location.city[$i18n.locale] }}

                    </p>
                    <!-- <p class="flex " v-if="project.location.address">
                        <MapPinIcon class="w-6 h-6 text-black"/>
                        {{ project.location.address[$i18n.locale] }}
                    </p> -->

                </div>

                <div class="img-company-info lg:w-[90%] m-auto left">
                    <iframe class="w-full h-[350px]"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8622.087051923865!2d46.67816517503699!3d24.68767766179772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f034b4ad55d0b%3A0x9724c2fb9fb4fce6!2sLadun%20Investment!5e0!3m2!1sen!2seg!4v1679391697436!5m2!1sen!2seg"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--                    map location  langtud and  -->
                </div>


            </div>
        </div>
        <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>

    </section>
    <section class=" company-info  bg-[white]" id="downloads">

        <div class="container mx-auto">
            <div class="flex pb-[5%]">
                <p class="text-2xl my-auto px-2 text-dark-brown">{{$t("Download_Project_Files")}}</p>
                <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 22.0002H16C18.8284 22.0002 20.2426 22.0002 21.1213 21.1215C22 20.2429 22 18.8286 22 16.0002V15.0002C22 12.1718 22 10.7576 21.1213 9.8789C20.3529 9.11051 19.175 9.01406 17 9.00195M7 9.00195C4.82497 9.01406 3.64706 9.11051 2.87868 9.87889C2 10.7576 2 12.1718 2 15.0002L2 16.0002C2 18.8286 2 20.2429 2.87868 21.1215C3.17848 21.4213 3.54062 21.6188 4 21.749" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>
            <div class="lg:w-[60%] grid grid-cols-1 lg:grid-cols-3 m-auto">
                <div class="flex">
                    <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 22.0002H16C18.8284 22.0002 20.2426 22.0002 21.1213 21.1215C22 20.2429 22 18.8286 22 16.0002V15.0002C22 12.1718 22 10.7576 21.1213 9.8789C20.3529 9.11051 19.175 9.01406 17 9.00195M7 9.00195C4.82497 9.01406 3.64706 9.11051 2.87868 9.87889C2 10.7576 2 12.1718 2 15.0002L2 16.0002C2 18.8286 2 20.2429 2.87868 21.1215C3.17848 21.4213 3.54062 21.6188 4 21.749" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <p class="text-2xl p-2 font-bold my-auto">الكتيب الترويجي</p>
                </div>
                <div class="flex">
                    <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 22.0002H16C18.8284 22.0002 20.2426 22.0002 21.1213 21.1215C22 20.2429 22 18.8286 22 16.0002V15.0002C22 12.1718 22 10.7576 21.1213 9.8789C20.3529 9.11051 19.175 9.01406 17 9.00195M7 9.00195C4.82497 9.01406 3.64706 9.11051 2.87868 9.87889C2 10.7576 2 12.1718 2 15.0002L2 16.0002C2 18.8286 2 20.2429 2.87868 21.1215C3.17848 21.4213 3.54062 21.6188 4 21.749" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <p class="text-2xl p-2 font-bold my-auto"> المخطط العام</p>
                </div>
                <div class="flex">
                    <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 22.0002H16C18.8284 22.0002 20.2426 22.0002 21.1213 21.1215C22 20.2429 22 18.8286 22 16.0002V15.0002C22 12.1718 22 10.7576 21.1213 9.8789C20.3529 9.11051 19.175 9.01406 17 9.00195M7 9.00195C4.82497 9.01406 3.64706 9.11051 2.87868 9.87889C2 10.7576 2 12.1718 2 15.0002L2 16.0002C2 18.8286 2 20.2429 2.87868 21.1215C3.17848 21.4213 3.54062 21.6188 4 21.749" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5" stroke="#C4A94C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <p class="text-2xl p-2 font-bold my-auto"> منشور واتساب</p>
                </div>
            </div>

        </div>

        <div class="lg:w-[60%] m-auto py-4" style="border-bottom: 2px solid black;"></div>
    </section>

    <!-- ask_us -->
    <section class="text-center py-28" id="ask_us">
        <div class="container mx-auto">
            <h2 class="mb-5">{{ $t('inquiriesNotes') }}</h2>
            <p>{{ $t('forAllInquiries') }}</p>
            <p>{{ $t('outsideSaudia') }}</p>

            <div
                class="flex justify-between gap-x-14 flex-wrap md:flex-nowrap mx-10 my-5 w-"
            >
                <div class="flex-auto md:w-1/2 right">
                    <div class="bg-black rounded-lg mb-14">
                        <div class="text-dark-brown py-10 px-5 text-sm">
                            {{ $t("pleaseFill") }}
                        </div>
                         <!--                              action="https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"-->
                        <!--                              method="POST"-->
                        <form class="grid gap-y-10 mx-5"

                        >

                        <div class="flex justify-center gap-x-5">
                            <input type=hidden name="oid" value="00D3G0000008knU">
                            <input type=hidden name="retURL" value="https://ladun.visualinnovate.net/">
                            <input id="a013G000001hMGOQA2" maxlength="255" name="a013G000001hMGOQA2" size="20"
                                   type="hidden"/>  <!-- Object Of Interest -->
                            <!-- This field should not appear to the user and shall be filled automatically -->
                            <!-- choose your inquiry -->

                            <input
                                type="text"
                                id="first_name" maxlength="40" name="first_name"
                                aria-describedby="helper-text-explanation"
                                v-model="first_name"
                                class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                :placeholder="$t('FirstName')"
                            />
                            <input
                                type="text"
                                id="last_name" maxlength="80" name="last_name"
                                aria-describedby="helper-text-explanation"
                                v-model="last_name"
                                class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                :placeholder="$t('LastName')"
                            />
                        </div>
                        <div class="flex justify-center gap-x-5">
                            <input
                                type="text"
                                id="mobile" maxlength="40" name="mobile"
                                v-model="mobile"
                                aria-describedby="helper-text-explanation"
                                class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                :placeholder="$t('PhoneNumber')"
                            />
                            <input
                                type="email"
                                id="email" maxlength="80" name="email"
                                aria-describedby="helper-text-explanation"
                                v-model="email"
                                class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                :placeholder="$t('Email')"
                            />
                        </div>
                            <div class="flex justify-center gap-x-5">

                                <select
                                    class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                    v-model="status"
                                >
                                    <option value="Buy"> {{ $t('ownership') }}</option>
                                    <option value="Rent"> {{ $t('rent') }}</option>
                                    <option value="Other"> {{ $t('other') }}</option>


                                </select>

                                <select
                                    class="w-full md:w-1/2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-dark-brown focus:border-dark-brown block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-dark-brown dark:focus:border-dark-brown"
                                    v-model="region"
                                >
                                    <option value="Eastern"> {{ $t('easternRegion') }}</option>
                                    <option value="Middle"> {{ $t('middleRegion') }}</option>
                                    <option value="Northern"> {{ $t('westernRegion') }}</option>
                                    <option value="Western"> {{ $t('northernRegion') }}</option>


                                </select>

                            </div>
                        <button
                            type="submit" @click="submit"
                            class="bg-dark-brown h-10 mb-10 mx-2 text-white"
                        >
                            {{ $t("sendNow") }}
                        </button>
                        </form>
                    </div>
                </div>
            </div>

            <p dir="">
                {{ $t('ifYouFaceAProplem') }}<a href="#" class="text-dark-brown">{{ $t('sendUsNow') }}</a>
            </p>
        </div>

    </section>


    <LightFooter/>
</template>

<script>

import {useRoute} from 'vue-router';

import {Input, Dropdown} from 'flowbite-vue'
import {ArrowDownTrayIcon} from "@heroicons/vue/24/solid";
import {Tabs, Tab} from 'flowbite-vue'
import {Carousel} from 'flowbite-vue'
import {MapPinIcon} from "@heroicons/vue/24/solid";
import Navbar from '../components/Navbar.vue';
import LightFooter from '../components/LightFooter.vue';
import VueCarousel from "@/components/VueCarousel.vue";
import {Progress} from 'flowbite-vue'
import {ref} from "vue";
import {element} from "tw-elements/dist/src/js/util";


import {CircleProgressBar} from 'circle-progress.vue';

export default {
    components: {
        Input,
        Dropdown,
        LightFooter,
        MapPinIcon,
        Navbar,
        VueCarousel,
        Carousel,
        ArrowDownTrayIcon,
        Tabs,
        Tab,
        useRoute,
        Progress,
        CircleProgressBar
    },
    data() {
        return {
            activeTab: '',
            URL: '',
            route: '',
            project: {},
            top: 1,
            first_name:"",
            last_name:"",
            mobile:"",
            email:"",
            region:"Eastern",
            status:"Buy",
            videoo:""



        }
    },
    methods: {
        getGallery(gallery) {
            if (gallery) {
                return Object.values(gallery).map((image) => {
                    return {
                        src: image.original_url,
                        alt: image.name
                    }
                })
            } else {
                return [];
            }

        },
        submit() {
            // alert(this.status)
            axios.post(`https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8`,{
                "first_name":this.first_name,
                "last_name":this.last_name,
                "mobile":this.mobile,
                "email":this.email,
                "oid":"00D3G0000008knU",
                "retURL":"http://google.com",
                "00N3G00000IEQrA":this.status+"-"+this.region+" Region",
                "00N3G00000FV0J9":'',

            })
                .then(res => {
                    // this.project = Vue.util.extend({}, res.data.data)

                })
                .catch((error) => console.log(error))
        }

    },
    computed: {
        locale() {
            return this.$i18n.locale
        }
    },
    beforeMount() {


        axios.get(`/api/projects/${this.$route.params.id}`)
            .then(res => {
                // this.project = Vue.util.extend({}, res.data.data)
                this.project = res.data.data
                this.videoo =this.project.video
                console.log(this.project.video)
                this.activeTab = this.project.project_models[0].title['en']
                console.log(res.data.data)
            })
            .catch((error) => console.log(error))

    }, mounted() {


        window.addEventListener('scroll', function () {
            let utility_project = document.getElementsByClassName('utility-group')
            document.getElementById('logo-project')
            if (window.scrollY == 0) {
                this.top = 1
            } else {
                this.top = 0

            }


            let right = document.getElementsByClassName('right')
            let left = document.getElementsByClassName('left')
            let utility = document.getElementById('utility')


            if (window.scrollY >= utility.offsetTop - 210) {

                if (this.locale == 'en') {
                    utility.classList.add('animate__animated', 'animate__fadeInLeft', 'animate__slow')
                } else {
                    utility.classList.add('animate__animated', 'animate__fadeInRight', 'animate__slow')
                }


            }

            // console.log(left.length)
            for (let i = 0; i < right.length; i++) {
                console.log(right[i].offsetTop)
                if (window.scrollY >= right[i].offsetTop - 710) {
                    if (this.locale == 'en') {
                        right[i].classList.add('animate__animated', 'animate__fadeInLeft', 'animate__slow')
                    } else {
                        right[i].classList.add('animate__animated', 'animate__fadeInRight', 'animate__slow')
                    }


                }
            }
            for (let i = 0; i < left.length; i++) {
                console.log(left[i].offsetTop)
                if (window.scrollY >= left[i].offsetTop - 710) {
                    if (this.locale == 'en') {
                        left[i].classList.add('animate__animated', 'animate__zoomIn', 'animate__slow')
                    } else {
                        left[i].classList.add('animate__animated', 'animate__zoomIn', 'animate__slow')
                    }


                }
            }
        }.bind(this))
    }
}


</script>

<style scoped>

.carousel  img {
    width: 100%;
}
</style>
