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
            <input type="file" id="files" ref="files" multiple @change="handleFilesUpload()" class="text-center w-[100%] h-full opacity-0 cursor-pointer" >
        </div>
          <div class="text-[#a00] " v-if="error">
            {{ error }}
          </div>
          <button @click="submitFiles()" :disabled="disabled" class="bg-[#0b3841] rounded-sm text-[#fff] p-[10px]" :class="buttonClass">Upload</button>
        </div>
    </div>



  </template>

  <script>
  import { apiBack } from '../../axios';
    export default {

        props:['name','path','allowed','label','added'],
      /*
        Defines the data used by the component
      */
    //  props:['label'],
      data(){
        return {
            files: '',
            error:null,
            disabled:false,
            buttonClass: "cursor-pointer",
            borderColor: 'border-[#0b3841]',
            fileStatus: 'Add files'
        }
      },

      methods: {
        /*
          Submits all of the files to the server
        */
        submitFiles(){
          /*
            Initialize the form data
          */
          let formData = new FormData();

          /*
            Iteate over any file sent over appending the files
            to the form data.
          */
          for( var i = 0; i < this.files.length; i++ ){
            let file = this.files[i];

            formData.append(`${this.name}[${i}]`, file);
          }

          /*
            Make the request to the POST /multiple-files URL
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
                console.log(res.data.payload)
                this.borderColor = "border-[#0a0]"
                this.fileStatus = "Files uploaded!"
          })
          .catch(function(){
            console.log('FAILURE!!');
          });
        },

        /*
          Handles a change on the file upload
        */
        handleFilesUpload(){
            this.files = this.$refs.files.files;
        //   this.fileStatus = "Files Ready";
            this.borderColor = "border-[#0b3841]";
            this.fileStatus = "Files ready!";
        }
      },
      mounted(){
        if(this.added == true){
            this.borderColor = "border-[#0a0]"
            this.fileStatus = "Files uploaded!"
        }
      }
    }
  </script>
