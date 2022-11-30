<template>
  <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
    <UploadeFile @uploaded="uploaded" name="file" path="/upload_file" :allowed="allowed"/>
    <hr/>
    <UploadMultipleFiles name="files" path="/upload_multiple_file" :allowed="allowed"/>
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
    components:{FormNavigator,UploadeFile,UploadMultipleFiles},
    data(){
        return {
            allowed : ['jpg','jpeg','png','svg'],
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
                    title: 'Add project - step 2 | select area |',
                    current: 'step2',
                    prev: 'step1',
                    next: 'step3'
                 })
            }
        }
    }
}
</script>

<style>

</style>
