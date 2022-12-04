<template>
    <div class="w-[80%] mx-auto">
        <div class="w-[100%] flex flex-col items-center justify-center gap-[20px]">
          <label  class="text-2xl">{{ label }}
        </label>
        <div class="relative flex justify-center text-center w-[200px] h-[200px] border-[5px] border-solid rounded-md  cursor-pointer" :class="borderColor">
            <div class="w-[100%] h-full absolute flex justify-center items-center cursor-pointer">
                <div class="text-[#000] text-xl">
                    {{ fileStatus }}
                </div>
            </div>
            <input type="file" id="file" ref="file" @change="handleFileUpload()" class="text-center w-[100%] h-full opacity-0 cursor-pointer" >
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
    props:['name','path','allowed','label','added'],
    data(){
        return {
            file: '',
            error:null,
            disabled:false,
            buttonClass: "cursor-pointer",
            borderColor: 'border-[#0b3841]',
            fileStatus:'Add file'
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
    //    alert(this.path)
            apiBack.post( this.path,
                formData,
                {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
              }
            ).then((res)=>{
                this.$emit('uploaded',res.data.payload)
                this.borderColor = "border-[#0a0]"
                this.fileStatus = "File uploaded!"
            })
            .catch((err)=>{
                // alert(res)
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
        this.borderColor = "border-[#0b3841]";
        this.fileStatus = "File ready!";
        if(!this.allowed.includes(this.file.name.substr(this.file.name.lastIndexOf('.')+1))){
            // console.log(this.file.name.substr(this.file.name.lastIndexOf('.')+1),this.allowed)
            this.disabled = true;
            this.fileStatus = "Add file"
            this.buttonClass = "cursor-not-allowed opacity-[0.5]"
            this.borderColor="border-[#a00]";
            this.error = 'File type is not allowed | allowed types are (';
            this.allowed.forEach(element => {
                this.error+=`${element}, `
            });
            this.error += ') |'

        }

        console.log(this.file)
      },
    },
    mounted(){
        if (this.added == true){
            this.borderColor = 'border-[#0a0]';
            this.fileStatus = "File uploaded"
            // alert('dd')
        }
    }
}
</script>

<style>

</style>



