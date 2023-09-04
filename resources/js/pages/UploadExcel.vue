<template>
    <div class="container mx-auto git mt-10">
        <div v-if="success!='' " class="  p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{success}}
        </div>
        <div class="flex flex-col items-center">
            <label class="font-bold"> upload file project </label>
            <input @change="handleFile" type="file" placeholder="upload file project" ref="file" class=" m-5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >
            <div class="text-red-500 " v-if="error.file">{{error.cv[0]}}</div>
            <button type="submit" class="text-white bg-dark-brown p-3 rounded-lg" @click="submit">
                submit
            </button>
        </div>

    </div>

</template>

<script>
export default {
    name: "UploadExcel",
    data(){
        return{
            project:null,
            error:{},
            success:''
        }
    },
    methods:{
        submit() {
            let formData = new FormData()

            formData.append('file', this.project)
            console.log(formData)
            axios.post('/api/uploadCsv', formData, {
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
            this.project = this.$refs.file.files[0]
        }
    }
}
</script>

<style scoped>

</style>
