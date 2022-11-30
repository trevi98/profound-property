<template>
    <div class="w-[80%] mx-auto">
        <div class="w-[100%] flex flex-col items-center justify-center gap-[20px]">
          <label :class="textColor" class="text-2xl">File
        </label>
        <div class="flex justify-center text-center">

            <input type="file" id="file" ref="file" @change="handleFileUpload()" class="text-center">
        </div>
          <div class="text-[#a00] " v-if="error">
            {{ error }}
          </div>
          <button @click="submitFile()" :disabled="disabled" class="bg-[#0b3841] rounded-sm text-[#fff] p-[10px]" :class="buttonClass">Upload</button>
        </div>
      </div>

</template>

<script>
import { apiBack } from '../../axios';
export default {
    props:['name','path','allowed'],
    data(){
        return {
            file: '',
            error:null,
            disabled:false,
            buttonClass: "cursor-pointer",
            textColor: 'text-[#000]'
        }
    },
    methods:{


        submitFile(){
        /*
                Initialize the form data
            */
            let formData = new FormData();

            /*
                Add the form data we need to submit
            */
            formData.append(this.name, this.file);

        /*
          Make the request to the POST /single-file URL
        */
            apiBack.post( this.path,
                formData,
                {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
              }
            ).then((res)=>{
                this.$emit('uploaded',res.data.payload)
                this.textColor = "text-[#0a0]"
            })
            .catch((err)=>{
            console.log(err);
            });
      },

      /*
        Handles a change on the file upload
      */
      handleFileUpload(){
        this.file = this.$refs.file.files[0];
        this.disabled = false;
        this.error = null;
        this.buttonClass = "cursor-pointer";
        this.textColor = "text-[#000]"
        if(!this.allowed.includes(this.file.name.substr(this.file.name.lastIndexOf('.')+1))){
            // console.log(this.file.name.substr(this.file.name.lastIndexOf('.')+1),this.allowed)
            this.disabled = true;
            this.buttonClass = "cursor-not-allowed opacity-[0.5]"
            this.textColor="text-[#a00]";
            this.error = 'File type is not allowed | allowed types are (';
            this.allowed.forEach(element => {
                this.error+=`${element}, `
            });
            this.error += ') |'

        }

        console.log(this.file)
      },
    }
}
</script>

<style>

</style>



