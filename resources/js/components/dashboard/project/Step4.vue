<template>
  <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
    <UploadeFile @uploaded="uploaded" label="Cover" name="file" path="/upload_file" :allowed="allowedImages"/>
    <hr class="my-[20px]"/>
    <UploadeFile @uploaded="uploaded" label="Front view" name="file" path="/upload_file" :allowed="allowedImages"/>
    <hr class="my-[20px]"/>
    <UploadeFile @uploaded="uploaded" label="Back view" name="file" path="/upload_file" :allowed="allowedImages"/>
    <hr class="my-[20px]"/>
    <UploadeFile @uploaded="uploaded" label="Right view" name="file" path="/upload_file" :allowed="allowedImages"/>
    <hr class="my-[20px]"/>
    <UploadeFile @uploaded="uploaded" label="Left view" name="file" path="/upload_file" :allowed="allowedImages"/>
    <hr class="my-[20px]"/>
    <UploadMultipleFiles label="label" name="files" path="/upload_multiple_file" :allowed="allowed"/>
    <FormNavigator @nav="nav"/>
  </div>
</template>

<script>
import FormNavigator from '../FormNavigator.vue';
import { mapMutations,mapState } from 'vuex';
import { apiBack } from '../../../axios';
import UploadeFile from '../UploadeFile.vue';
import UploadMultipleFiles from '../UploadMultipleFiles.vue';
export default {
    components:{FormNavigator,UploadeFile,UploadMultipleFiles },
    data(){
        return {
            allowedImages : ['jpg','jpeg','png','svg'],
            allowedFiles : ['jpg','jpeg','png','svg','pdf']
        }
    },
    methods:{

        uploaded(file){
            console.log(file)
        },

        nav(val){
            this.addToState();
            if(val == 'next'){
                this.setNav({
                    title: 'submit',
                    current: 'submit',
                    prev: 'step3',
                    next: null
                 })
            }
            else{
                // this.addToState();
                this.setNav({
                    title: 'Add project - step 3 | Available units |',
                    current: 'step3',
                    prev: 'step2',
                    next: 'step4'
                 })
            }
        }
    }
}
</script>

<style>

</style>
