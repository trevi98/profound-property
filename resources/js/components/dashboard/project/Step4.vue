<template>
  <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px] mt-[40px]">
    <UploadeFile @uploaded="uploaded($event,'cover')" label="Cover" name="file" path="/upload_file" :allowed="allowedImages" :added="project.cover != null ? true : false"/>
    <hr>
    <UploadeFile @uploaded="uploaded($event,'front')" label="Front view" name="file" path="/upload_file" :allowed="allowedImages" :added="project.front != null ? true : false"/>
    <hr>
    <UploadeFile @uploaded="uploaded($event,'back')" label="Back view" name="file" path="/upload_file" :allowed="allowedImages" :added="project.back != null ? true : false"/>
    <hr>
    <UploadeFile @uploaded="uploaded($event,'right')" label="Right view" name="file" path="/upload_file" :allowed="allowedImages" :added="project.right != null ? true : false"/>
    <hr>
    <UploadeFile @uploaded="uploaded($event,'left')" label="Left view" name="file" path="/upload_file" :allowed="allowedImages" :added="project.left != null ? true : false"/>
    <hr class="my-[20px]"/>
    <UploadMultipleFiles  @uploaded="uploaded($event,'images')" label="Additional images" name="files" path="/upload_multiple_file" :allowed="allowedImages" :added="project.images.length > 0 ? true : false"/>
    <div class="flex flex-col">
        <label for="video">Video link:</label>
        <input type="text" name="video" v-model="formData.video" class="border-[1px] border-[#a09999d8] h-[40px] bg-[#fff] border-solid w-[80%] mx-auto p-[10px]">
    </div>
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
            allowedFiles : ['jpg','jpeg','png','svg','pdf'],
            formData:{
                video:null
            }
        }
    },
    methods:{
        ...mapMutations(['setNav','setStep4']),

        uploaded(file,feild){
            console.log(file)
            this.formData[feild] = file;
        },

        initiate(){
            this.formData.video = this.project.video;
            if(this.project.cover){
                this.formData.cover = this.project.cover;
            }
            if(this.project.right){
                this.formData.right = this.project.right;
            }
            if(this.project.left){
                this.formData.left = this.project.left;
            }
            if(this.project.back){
                this.formData.back = this.project.back;
            }
            if(this.project.front){
                this.formData.front = this.project.front;
            }
            if(this.project.images.length>0){
                this.formData.images = this.project.images;
            }
            else{
                this.formData.images = []
            }
        },

        addToState(){
            // console.log('d')
            if(this.formData.images == null){
                this.formData.images = []
            }
           this.setStep4(this.formData)
        },


        nav(val){
            this.addToState();
            if(val == 'next'){
                this.setNav({
                    title: 'Step 5 | Add payment planes |',
                    current: 'step5',
                    prev: 'step4',
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
    },
    computed:{
        ...mapState(['project'])
    },
    mounted(){
        this.initiate()
    }
}
</script>

<style>

</style>
