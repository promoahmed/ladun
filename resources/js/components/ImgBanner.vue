<template>
    <div class="relative img-banner-slot" >
            <div class=" overlay absolute top-0 right-0 w-full h-full bg-background-overlay z-20"></div>
                <slot />

        <p class="z-40 text-white text-3xl absolute top-1/2 right-1/2 translate-x-1/2 -translate-y-1/2">
            <slot name="text"/>
        </p>

    </div>


</template>

<script>
export default {
    name: "ImgBanner",
    data(){
        return {}
    }
}
</script>

<style  scoped lang="scss">
.img-banner-slot{
    :slotted(img){
        width: 100%;
    }


}

</style>
