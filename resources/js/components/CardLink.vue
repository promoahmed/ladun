<template>
    <div id="card"
       class="animate__animated animate__backInUp cursor-pointer w-[90%] mx-auto card-link-slot flex flex-col ml-auto items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 pt-1 leading-normal ">
            <p class="mb-7"><slot name="date"/></p>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><slot name="head"/></h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify"><slot name="text"/></p>
        </div>
        <slot></slot>



    </div>
</template>

<script>
export default {
    name: "CardLink",


}
</script>

<style scoped lang="scss" >




</style>
