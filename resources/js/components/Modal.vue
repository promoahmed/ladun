<template>
    <dropdown
        class="hover:cursor-pointer [&>div]:w-full w-1/2 h-10 bottom-0 origin-top rtl:-translate-x-1/2 ltr:translate-x-1/2 -translate-y-10 rounded-full hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-50  dark:bg-brown-600 dark:hover:bg-brown-700 dark:focus:ring-dark-brown-800  bg-dark-brown ">
        <template #trigger>
                    <span class="w-full inline-flex justify-between px-4 text-white">
                        <span>{{ $t('choose') }}</span>
                        <svg class="my-auto w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path></svg>
                    </span>
        </template>
        <list-group class="w-full">

            <div class="mx-11 font-bold">{{ $t('ownership') }}</div>

            <list-group-item class="mx-24" @click="showModal('Buy-Eastern Region')">{{ $t('easternRegion') }}</list-group-item>
            <list-group-item class="mx-24" @click="showModal('Buy-Middle Region')">{{ $t('middleRegion') }}</list-group-item>
            <list-group-item class="mx-24" @click="showModal('Buy-Western Region')">{{ $t('westernRegion') }}</list-group-item>
            <list-group-item class="mx-24" @click="showModal('Buy-Northern Region')">{{ $t('northernRegion') }}</list-group-item>

            <div class="mx-11 font-bold">{{ $t('rent') }}</div>
            <list-group-item class="mx-24" @click="showModal('Buy-Eastern Region')">{{ $t('easternRegion') }}</list-group-item>
            <list-group-item class="mx-24" @click="showModal('Rent-Middle Region')">{{ $t('middleRegion') }}</list-group-item>
            <list-group-item class="mx-24" @click="showModal('Rent-Western Region')">{{ $t('westernRegion') }}</list-group-item>
            <list-group-item class="mx-24" @click="showModal('Rent-Northern Region')">{{ $t('northernRegion') }}</list-group-item>


        </list-group>
    </dropdown>
    <Modal :size="size" v-if="isShowModal" @close="closeModal">
        <template #header>
            <div class="flex items-center space-x-4 text-lg">
                {{$t('shareYourInterests')}}
            </div>
        </template>
            <template #body>
                <form class=" space-y-4" action="https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

                    <input type=hidden name="oid" value="00D3G0000008knU">
                    <input type=hidden name="retURL" value="http://google.com">
                    <input type=hidden name="00N3G00000IEQrA" :value="data">
                    <input type=hidden name="00N3G00000FV0J9" value="">
                    <Input size="md" maxlength="40" name="first_name" :placeholder="$t('FirstName')" :label="$t('FirstName')"/>
                    <Input size="md"  maxlength="80" name="last_name" :placeholder="$t('LastName')" :label="$t('LastName')"/>

                    <Input size="md" maxlength="40" name="mobile" :placeholder="$t('PhoneNumber')" :label="$t('PhoneNumber')"/>
                    <Input size="md" maxlength="80" name="email" :placeholder="$t('Email')" :label="$t('Email')"/>

                    <input type="submit" class="text-white bg-[#AF9744] hover:bg-[#764522] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" :value="$t('submit')">
                </form>


            </template>
            <template #footer>
                <div class="flex justify-between">


                </div>
            </template>
    </Modal>
</template>

<script>
import {Modal} from 'flowbite-vue'
import {Dropdown, ListGroup, ListGroupItem} from 'flowbite-vue'
import {Input} from 'flowbite-vue'


export default {
    data() {
        return {
            isShowModal: false,
            data:''
        }
    },
    props: ['formShow'],
    components: {
        Modal, Dropdown, ListGroupItem, ListGroup, Input
    },
    methods: {
        closeModal() {
            this.isShowModal = false
        },
        showModal(data) {
            this.isShowModal = true
            console.log(this.data)

            this.data=data
        }
    },
    mounted() {
        console.log(this.formShow)
    },
    watch: {
        formShow: {
            // the callback will be called immediately after the start of the observation
            immediate: true,
            handler(val, oldVal) {
                this.isShowModal = val
            }
        }
    }
}


</script>

<style scoped>

</style>
